<!-- Essential javascripts for application to work-->
    <script src="<?php echo base_url();?>assets/admin/js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo base_url();?>assets/admin/js/popper.min.js"></script>
    <script src="<?php echo base_url();?>assets/admin/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/admin/js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="<?php echo base_url();?>assets/admin/js/plugins/pace.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/plugins/sweetalert.min.js"></script>
    <script type="text/javascript">
      /*$('.notif').click(function(){
          alert('test');
      });*/

      $(document).ready(function(){

          getNotif();

        function getNotif(){
                $.ajax({
                    type  : 'ajax',
                    url   : '<?php echo base_url()?>admin/getNotif',
                    async : false,
                    dataType : 'json',
                    success : function(data){
                        var html = '';
                        var i;
                        for(i=0; i<data.length; i++){
                            html += '<li>'+
                                        '<a class="app-notification__item notif" href="javascript:;">'+
                                            '<span class="app-notification__icon">'+
                                              '<span class="fa-stack fa-lg" style="padding-top:10px">'+
                                                '<i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-user fa-stack-1x fa-inverse"></i>'+
                                              '</span>'+
                                            '</span>'+
                                              '<div>'+
                                                '<p class="app-notification__message">Registration Number : <b>'+data[i].no_register+'</b></p>'+
                                                '<p class="app-notification__meta">a few minutes ago</p>'+
                                              '</div>'+
                                          '</a>'+
                                    '</li>';
                        }
                        $('#detailNotif').html(html);
                    }
     
                });
            }

      });
    </script>
    <?php
      $hal = $this->uri->segment(1);
      if ($hal == 'pmb') {?>
       <!-- Data table plugin-->
    <script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/plugins/dataTables.bootstrap.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            getRegister(); 
             
            $('#sampleTable').DataTable({
              "ordering": false
            });
            
            function getRegister(){
                $.ajax({
                    type  : 'ajax',
                    url   : '<?php echo base_url()?>pmb/getData',
                    async : false,
                    dataType : 'json',
                    success : function(data){
                        var html = '';
                        var i;
                        var j = 1;
                        var status;
                        var payment;

                        for(i=0; i<data.length; i++){
                            if (data[i].status_id == '2') {
                                status = '<span class="badge badge-danger">'+data[i].status_name+'</span>';
                                payment = '<a href="#"><i class="fa fa-envelope btnSend" data-toggle="tooltip" data-placement="top" title="" data-original-title="Send Confirmed" style="margin-right:12px; color:#dc3545" data="'+data[i].no_register+'"></i></a>';
                            } else{
                                status = '<span class="badge badge-success">'+data[i].status_name+'</span>';
                                payment = '<a href="#"><i class="fa fa-envelope" style="margin-right:12px; opacity: 0.4; cursor: not-allowed; color:#6c757d;"></i></a>';
                            }
                            html += '<tr>'+
                                    '<td>'+j+'</td>'+
                                    '<td>'+data[i].no_register+'</td>'+
                                    '<td>'+data[i].name+'</td>'+
                                    '<td>'+status+'</td>'+
                                    '<td>'+data[i].start_dtm+'</td>'+
                                    '<td align="center"><a href="#"><i class="fa fa-id-card-o btnDetail" style="margin-right:10px; color: #7F2DD8" data="'+data[i].no_register+'" ></i></a><a href="#"><i class="fa fa-pencil btnEdit" style="margin-right:10px;color: #17a2b8" data="'+data[i].no_register+'" ></i></a>'+payment+'</td>'+
                                    '</tr>';
                          j++;
                        }
                        $('#showPMB').html(html);
                    }
     
                });
            }

            //Detail Register
            $(document).delegate('.btnDetail', 'click', function(){
                var id = $(this).attr('data');
                alert(id);
            })

            //Edit Register
           $(document).delegate('.btnEdit', 'click', function(){
                var id = $(this).attr('data');
                alert(id);
            })

             //Send Mail Confirmed Payment
            $(document).delegate('.btnSend', 'click', function(){
              var id = $(this).attr('data');              
                $.ajax({
                    type  : 'post',
                    url   : '<?php echo base_url()?>pmb/sendConfirm/',
                    async : false,
                    data: {id: id},
                    //dataType : 'json',
                    success: function(data){
                        sendMail(id);
                        
                    }
                })
                //alert(id);
            })
            function sendMail(id){
             /*swal("Terima Kasih !!", "Nomor Registrasi "+id+" Sudah dibayar.", "success");*/
             swal({
              title: "Are you sure?",
              text: "Send payment confirmation details with the registration number : "+id+"",
              type: "warning",
              showCancelButton: true,
              confirmButtonColor: "#DD6B55",
              confirmButtonText: "Yes, send it!",
              cancelButtonText: "No, cancel it!",
              closeOnConfirm: false,
              closeOnCancel: false
              },
              function (isConfirm) {
                  if (isConfirm) {
                     swal({
                        title: "Thank You !!",
                        text: "Registration Number "+id+" already Paid. Payment Confirmation detail sent via email",
                        type: "success",
                     },function(){
                        location.reload();
                     });
                  }
                  else {
                      swal.close();
                  }
              });
           }


        });
     
    </script>
    <?php 
      }else if ($hal == 'admin') {?>
      <!-- Page specific javascripts-->
    <script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/plugins/chart.js"></script>
    <script type="text/javascript">
      /*var data = {
        labels: ["January", "February", "March", "April", "May"],
        datasets: [
          {
            label: "My First dataset",
            fillColor: "rgba(220,220,220,0.2)",
            strokeColor: "rgba(220,220,220,1)",
            pointColor: "rgba(220,220,220,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(220,220,220,1)",
            data: [65, 59, 80, 81, 56]
          },
          {
            label: "My Second dataset",
            fillColor: "rgba(151,187,205,0.2)",
            strokeColor: "rgba(151,187,205,1)",
            pointColor: "rgba(151,187,205,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(151,187,205,1)",
            data: [28, 48, 40, 19, 86]
          }
        ]
      };*/
      var pdata = [
        {
          value: <?php echo $paid;?>,
          color: "#46BFBD",
          highlight: "#5AD3D1",
          label: "Paid"
        },
        {
          value: <?php echo $unpaid;?>,
          color:"#F7464A",
          highlight: "#FF5A5E",
          label: "Unpaid"
        }
      ]
      
     /* var ctxl = $("#lineChartDemo").get(0).getContext("2d");
      var lineChart = new Chart(ctxl).Line(data);*/
      
      var ctxp = $("#pieChartDemo").get(0).getContext("2d");
      var pieChart = new Chart(ctxp).Pie(pdata);
    </script>
    <?php
      }
    ?>
    <script type="text/javascript">
      //change password setting
      $('#btnUpdate').click(function(){
        var data = $('#formPassword').serialize();
        $.ajax({
          type: 'post',
          url: '<?php echo site_url();?>setting/updatePassword',
          dataType: 'json',
          data:data,
          success:function(result){
            alert("Selamat, resgistari sukses");
          }
        });
      });

      function notifSuccess(){
        swal("Deleted!", "Your imaginary file has been deleted.", "success");
      }
    </script>
  <!-- Google analytics script-->
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-72504830-1', 'auto');
        ga('send', 'pageview');
      }
    </script>
   