<!-- Essential javascripts for application to work-->
    <script src="<?php echo base_url();?>assets/admin/js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo base_url();?>assets/admin/js/popper.min.js"></script>
    <script src="<?php echo base_url();?>assets/admin/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/admin/js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="<?php echo base_url();?>assets/admin/js/plugins/pace.min.js"></script>
    <?php
      $hal = $this->uri->segment(1);
      if ($hal == 'pmb') {?>
       <!-- Data table plugin-->
    <script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/plugins/dataTables.bootstrap.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            getRegister();   //pemanggilan fungsi tampil barang.
             
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
                        for(i=0; i<data.length; i++){
                            html += '<tr>'+
                                    '<td>'+j+'</td>'+
                                    '<td>'+data[i].no_register+'</td>'+
                                    '<td>'+data[i].name+'</td>'+
                                    '<td>'+data[i].email+'</td>'+
                                    '<td>'+data[i].start_dtm+'</td>'+
                                    '<td align="center"><a href="#"><i class="fa fa-id-card-o" data-toggle="tooltip" data-placement="top" title="" data-original-title="Detail"></i></a> &nbsp; <a href="#"><i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"></i></a></td>'+
                                    '</tr>';
                          j++;
                        }
                        $('#showPMB').html(html);
                    }
     
                });
            }
            $('[data-toggle="tooltip"]').tooltip();
     
        });
     
    </script>
    <?php 
      }else if ($hal == 'admin') {?>
      <!-- Page specific javascripts-->
    <script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/plugins/chart.js"></script>
    <script type="text/javascript">
      var data = {
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
      };
      var pdata = [
        {
          value: 300,
          color: "#46BFBD",
          highlight: "#5AD3D1",
          label: "Complete"
        },
        {
          value: 50,
          color:"#F7464A",
          highlight: "#FF5A5E",
          label: "In-Progress"
        }
      ]
      
      var ctxl = $("#lineChartDemo").get(0).getContext("2d");
      var lineChart = new Chart(ctxl).Line(data);
      
      var ctxp = $("#pieChartDemo").get(0).getContext("2d");
      var pieChart = new Chart(ctxp).Pie(pdata);
    </script>
    <?php
      }
    ?>
    <script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/plugins/sweetalert.min.js"></script>
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
   