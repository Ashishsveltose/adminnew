 <style type="text/css">
    .bg { 
      /* The image used */
      background-image: url("<?php echo base_url().'uploads/'. getWebOptionValue('backedn_login_background_image');?>");
      height: auto; 
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }
    .login-box-body a {
    color: #005551 !important;
    text-decoration: underline;
    /*padding-left: 30px;*/
  }
  </style>
  <style type="text/css">
  .form-group.has-success label{
    color: #fff;
  }
  .login-box-body{
    color: #fff;
    font-weight: bold;
    font-size: 18px;
  }
  .form-control{
    /*border-radius: 15px 15px 15px 15px;*/
  }
  .form-group.has-success .form-control{
    background: #def1f9;
  }
  .btn-block{
    background-color: #005551;
    border-color: #367fa9;
    color: #fff;
    font-weight: bold;
    font-size: 15px;
  }
  .btn-block:hover{
    border-color: #367fa9;
  }
  .has-feedback label~.form-control-feedback {
    top: 30px;
    color: #003e63;
}
.login-box-body{
  /*color: #333;*/
}
.login-box-body{
      background-color: rgba(0, 85, 81, 0.45);
  /*background-color: rgba(0, 85, 81, 0.07);*/
  border-radius: 8px 8px 8px 8px;
  padding-bottom: 34px;
  box-shadow: 1px 1px 6px 0px #ccc;
  box-shadow: 1px 1px 6px 0px rgba(0, 0, 0, 0.5);
  border-top:5px solid #005551;
  border-bottom:5px solid #005551;
}
.btn-design{
  border-radius: 20px 20px 20px 20px;
}
.login-logo{
  padding: 7px 0px;
  background-color:#005551;
  border-bottom: 4px solid #5db784;
}
</style>
<div class="login-box">
  <!-- /.login-logo -->
  <div class="login-box-body">
    <!-- <p class="login-box-msg">Sign in to start your session</p> -->
    <div class="login-logo">
      <a href="<?php echo base_url();?>"><img src="<?php echo base_url().'uploads/'. getWebOptionValue('backlogo');?>" alt="<?php echo  getWebOptionValue('site_title');?>"></a>
    </div>
    <form  id="loginform" method="post" style="padding: 15px;">
      <div class="form-group has-feedback">
        <label>Mobile Number</label>
        <input type="text" class="form-control" id="mobile_no" placeholder="Mobile no.">
        <span class="glyphicon glyphicon-phone form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <label>Password</label>
        <input type="password" class="form-control" id="password" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-success btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    <!-- /.social-auth-links -->

  </div>
  <!-- /.login-box-body -->
</div>

