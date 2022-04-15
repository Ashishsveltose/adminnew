<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo getWebOptionValue('site_title');?></title>
  <meta name="theme-color" content="#00b0f8" />
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../backend_assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../backend_assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../backend_assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../backend_assets/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../backend_assets/plugins/iCheck/square/blue.css">
  <style type="text/css">
    .bg { 
      /* The image used */
      background-image: url("<?php echo base_url().'uploads/'. getWebOptionValue('backedn_login_background_image');?>");

      /* Full height */
      height: auto; 

      /* Center and scale the image nicely */
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }
    .login-box-body , .register-box-body{
      /*background-color: #00b0f8 !important;*/
      /*opacity: 0.9 !important;*/
    }
    .login-box-body a {
    color: #fff !important;
    text-decoration: underline;

  }

  </style>
  <style type="text/css">
  .form-group.has-success label{
    color: #131a1b;
  }
  .login-box-body{
    color: #fff;
    font-weight: bold;
    font-size: 18px;
  }
  .form-control{
    background: #def1f9;
    /*border-radius: 20px 20px 0px 20px;*/
  }
  .form-group.has-success .form-control{
    /*border-color: #000!important;*/
    background: #def1f9;
  }
  .btn-block{
    background-color: #003e63;
    border-color: #367fa9;
    color: #fff;
    font-weight: bold;
    font-size: 15px;
  }
  .btn-block:hover{
    /*background-color: #00a1ff;*/
    border-color: #367fa9;
  }
  .has-feedback label~.form-control-feedback {
    top: 30px;
    color: #003e63;
}
.login-box-body{
  color: #333;
}
.login-box-body{
  background-color: rgba(255, 255, 255, 0.42);
  border-radius: 0px 50px 0px 50px;
  padding-bottom: 34px;
  box-shadow: 1px 1px 6px 0px #ccc;
  box-shadow: 1px 1px 6px 0px rgba(0, 0, 0, 0.5);
}
</style>
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
	  <!-- jQuery 3 -->
  <script src="../backend_assets/bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="../backend_assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
</head>
<body class="hold-transition bg" >