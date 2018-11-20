<div class="row">
    <div class="col-md-12">
      <div class="bs-component">
        <div class="alert alert-dismissible alert-info">
          <h4>Welcome Back, Admin !</h4>
          <!-- <p>Best check yo self, you're not looking too good. Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus magna, <a class="alert-link" href="#">vel scelerisque nisl consectetur et</a>.</p> -->
          <p>This page is used to view all registration data, confirmation data, payment status, and number of registrants based on faculty</p>
        </div>
      </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6 col-lg-3">
      <div class="widget-small primary coloured-icon"><i class="icon fa fa-users fa-3x"></i>
        <div class="info">
          <h6>Register</h6>
          <p><b><?php echo $pmb;?></b></p>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-3">
      <div class="widget-small info coloured-icon"><i class="icon fa fa-check-square-o fa-3x"></i>
        <div class="info">
          <h6>Confirm</h6>
          <p><b>25</b></p>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-3">
      <div class="widget-small warning coloured-icon"><i class="icon fa fa-graduation-cap fa-3x"></i>
        <div class="info">
          <h6>Faculty of Technology</h6>
          <p><b><?php echo $ft;?></b></p>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-3">
      <div class="widget-small danger coloured-icon"><i class="icon fa fa-graduation-cap fa-3x"></i>
        <div class="info">
          <h6>Faculty of Education</h6>
          <p><b><?php echo $fe;?></b></p>
        </div>
      </div>
    </div>
  </div>
<div class="row">
  <div class="col-md-6">
    <div class="tile">
      <h3 class="tile-title" style="text-align: center;">Payment Status</h3>
      <div class="embed-responsive embed-responsive-16by9">
        <canvas class="embed-responsive-item" id="paymentStatus"></canvas>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="tile">
      <h3 class="tile-title" style="text-align: center;">Department</h3>
      <div class="embed-responsive embed-responsive-16by9">
        <canvas class="embed-responsive-item" id="departmentChoosen"></canvas>
      </div>
    </div>
  </div>
</div>