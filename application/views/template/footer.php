<!-- Essential javascripts for application to work-->
    <script src="<?php echo base_url();?>assets/admin/js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo base_url();?>assets/admin/js/popper.min.js"></script>
    <script src="<?php echo base_url();?>assets/admin/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/admin/js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="<?php echo base_url();?>assets/admin/js/plugins/pace.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/plugins/sweetalert.min.js"></script>
    <script type="text/javascript">

      $(document).ready(function(){
          getNotif();

          // Notif Detail Register
          $(document).delegate('.notif','click',function(e){
              var id = $(this).attr('data');
              $('.modal-title').text('New Data Register');
              $.ajax({
                   type: 'POST',
                   url: '<?php echo base_url()?>admin/getNotifDetail',
                   data: { id: id },
                   success: function(response) { 
                      $('#notifDetail').html(response);
                   }
              });        
              $('#exampleModal').modal('show');
              $("#exampleModal").appendTo("body");
              $("#exampleModal").on("hide.bs.modal", function () {
                  location.reload();
              });
          });

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
                                        '<a class="app-notification__item notif" href="javascript:;" data="'+data[i].no_register+'">'+
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


            // Detail Register
            $(document).delegate('.btnDetail','click',function(e){
              var id = $(this).attr('data');
              $('#exampleModal').modal('show');
              $('.modal-title').text('Detail Register');
              $("#exampleModal").appendTo("body");
              $.ajax({
                   type: 'POST',
                   url: '<?php echo base_url()?>admin/getNotifDetail',
                   data: { id: id },
                   success: function(response) { 
                      $('#notifDetail').html(response);
                   }
              });        

          });

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.bundle.min.js"></script>
    <script type="text/javascript">
      var pData = {
        labels: ["Unpaid", "Paid"],
        datasets: [{
          backgroundColor: ["#F7464A", "#46BFBD"],
          data: [ <?php echo $unpaid.",".$paid?> ]
        }]
      };
      var dData = {
        labels: ["Teknik Informatika","Teknik Elekto","DKV","Sastra Jepang", "Sastra Inggris","Matematika"],
        datasets: [{
          backgroundColor: ["#3b7eed", "#dded53", "#F7464A", "#46BFBD", "#6c757d", "#842282"],
          data: [<?php echo $ti.",".$te.",".$dkv.",".$sj.",".$si.",".$mtk; ?>]
        }]
      };


      var options =  {
          legend: {
            display: 'true',
            position: 'bottom',
            labels: {
                padding: 20
            }
          },
          responsive: true,
          maintainAspectRatio: false
      }

      var payment = new Chart(document.getElementById("paymentStatus"), {
            type: 'pie',
            data: pData,
            options: options
        });

      var department = new Chart(document.getElementById("departmentChoosen"), {
            type: 'pie',
            data: dData,
            options: options
        });

    </script>
    <?php
      }
    ?>
    <script type="text/javascript">
      //change password setting
      $('#btnUpdate').click(function(){
        /*var data = $('#formPassword').serialize();*/
        var np = $('#newPass').val();
        var cp = $('#confirmPass').val();

        if (np == cp) {
            $.ajax({
            type: 'post',
            url: '<?php echo site_url();?>setting/updatePassword',
            dataType: 'json',
            data:{np: np, cp:cp},
            success:function(result){
              swal("Success !!", "Password has been changed", "success");//
              swal({
                title: "Success !!",
                text: "Password has been changed",
                type: "success",
             },function(){
                location.reload();
             });
            }
          });
          }else{
              alert('password tidak sama');
          }
        
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
   