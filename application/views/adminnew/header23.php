<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?php echo getWebOptionValue('site_title');?>| Dashboard</title>
<!-- Tell the browser to be responsive to screen width -->
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<!-- Bootstrap 3.3.7 -->
<link rel="stylesheet" href="<?php echo base_url();?>backend_assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
<!-- Font Awesome -->
<link rel="stylesheet" href="<?php echo base_url();?>backend_assets/bower_components/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/fontawesome.css">
<!-- Ionicons -->
<link rel="stylesheet" href="<?php echo base_url();?>backend_assets/bower_components/Ionicons/css/ionicons.min.css">
<!-- DataTables -->
<link rel="stylesheet" href="<?php echo base_url();?>backend_assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="<?php echo base_url();?>backend_assets/dist/css/AdminLTE.min.css">
<!-- AdminLTE Skins. Choose a skin from the css/skins  
       folder instead of downloading all of them to reduce the load. -->
<link rel="stylesheet" href="<?php echo base_url();?>backend_assets/dist/css/skins/_all-skins.min.css">
<!-- Morris chart -->
<link rel="stylesheet" href="<?php echo base_url();?>backend_assets/bower_components/morris.js/morris.css">
<!-- jvectormap -->
<link rel="stylesheet" href="<?php echo base_url();?>backend_assets/bower_components/jvectormap/jquery-jvectormap.css">
<!-- Date Picker -->
<link rel="stylesheet" href="<?php echo base_url();?>backend_assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
<!-- Daterange picker -->
<link rel="stylesheet" href="<?php echo base_url();?>backend_assets/bower_components/bootstrap-daterangepicker/daterangepicker.css">
<!-- bootstrap wysihtml5 - text editor -->
<link rel="stylesheet" href="<?php echo base_url();?>backend_assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- jQuery 3 -->
<script src="<?php echo base_url();?>backend_assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url();?>backend_assets/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url();?>backend_assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- bootstrap-notify -->
<script src="<?php echo base_url();?>backend_assets/dist/js/bootstrap-notify.js"></script>
<script src="<?php echo base_url();?>backend_assets/dist/js/nicEdit-latest.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
<!-- Google Font -->
<script type="text/javascript">
  var base_url = "<?php echo base_url(); ?>";
</script>
<style type="text/css">
    .skin-blue .main-header .navbar {
      background-color: #840512 !important;
    }
    .skin-blue .main-header .logo {
      background-color: #840512 !important;
    }
    .skin-blue .main-header .navbar .sidebar-toggle:hover {
          background: rgba(0,0,0,0.1);
    }
    .skin-blue .sidebar-menu>li.active>a {
      border-left-color: #840512 !important;
    }
    .p10{
      padding : 10px;
    }
    .badge-red{
      background-color: red;
    }
    .error{
      color: red;
    }
    .fa-toggle-on{
      color: #00a65a;
      font-size: 24px;
    }
    .fa-eye{
      color: #eeaf49;
      font-size: 24px;
    }
    .fa-trash{
      color: red;
      font-size: 24px;
    }
    .fa-pencil-square-o{
      font-size: 24px;
    }
    .fa-toggle-off{
      font-size: 24px;
    }
    /*----------------New Header Style ----------------------*/
    .fitag{
      position: absolute;
      width: auto;
      height: 92%;
    }
    .logo-lg img{
      left: 36px !important;
    position: absolute !important;
    max-height: 48px !important;
    }
    @media only screen and (max-width: 992px) and (min-width: 768px){
      .logo-lg img{
      left: 16px ! important;
         }
    }
    @media only screen and (max-width: 767.9px){
      .fitag{
        width: 34%
      }
      .logo-lg img{
         
      }
    }
    @media only screen and (max-width: 572px){
      .logo-lg img{
        left: 0px !important;
         position: relative;
      }
    }

    /*----------------New Header Style End-------------------*/



</style>
<style type="text/css">
  .pagination{
    width: auto !important;
    float: right !important;
    
  }
  .pagination p a{
  
    padding: 10px;
    
  }
  .current{
    z-index: 3;
    color: #fff;
    cursor: default;
    background-color: #337ab7;
    border-color: #337ab7;
  }


</style>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
<?php  $session_userdata = $this->session->userdata(ADMIN_SESSION); ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<header class="main-header">
  <div><img  class="fitag" src="<?php echo base_url().'front_assets/images/header2.png';?>"></div>
  <!-- Logo -->
  <a href="<?php echo base_url();?>admin" class="logo">
  <!-- mini logo for sidebar mini 50x50 pixels -->
  <span class="logo-mini"><b>ES</b></span>
  <!-- logo for regular state and mobile devices -->
  <span class="logo-lg"><img src="<?php echo base_url().'uploads/'. getWebOptionValue('backlogo');?>" alt="<?php echo  getWebOptionValue('site_title');?>"></span> </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button"> <span class="sr-only">Toggle navigation</span> </a>
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <li class="dropdown user user-menu"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <img src="<?php echo base_url();?>backend_assets/dist/img/user2-160x160.jpg" class="user-image" alt="User Image"> <span class="hidden-xs"><?php echo (isset($session_userdata) && !empty($session_userdata) ? $session_userdata['first_name'] ." ". $session_userdata['last_name'] : '');?></span> </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li> <a href="<?php echo base_url();?>adminnew/manageprofile" class="btn btn-default btn-flat" style="width:100%;"><i class="fa fa-user"></i> My Profile</a> </li>
            <li> <a href="<?php echo base_url();?>adminnew/manageprofile" class="btn btn-default btn-flat" style="width:100%;"><i class="fa fa-key"></i> Password</a> </li>
            <li> <a href="<?php echo base_url();?>adminnew/logout" class="btn btn-default btn-flat" style="width:100%;"><i class="fa fa-sign-out"></i> Sign out</a> </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
  <style type="text/css">
   @media (max-width: 767px){
    .skin-blue .main-header .navbar .dropdown-menu li a{
        color: #000 !important;
    }
  }
  @media (max-width: 991px){
      .navbar-custom-menu>.navbar-nav>li>.dropdown-menu {
      background: #eee !important;
  }
  </style>
</header>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>
      <li class="active"> <a href="<?php echo base_url();?>admin"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a> </li>
      <li> 
        <a href="<?php echo base_url();?>adminnew/Customerslist"><i class="fa fa-user"></i> <span>Customers</span></a> 
      </li>
      
      <li class="treeview">
          <a href="#">
            <i class="fa fa-gear"></i>
            <span>Settings</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li > 
              <a href="<?php echo base_url();?>adminnew/commonsettings"><i class="fa fa-circle-o"></i> <span>Common Setting</span></a> 
            </li>
           <!--  <li><a href="<?php echo base_url();?>adminnew/homebannerslider"><i class="fa fa-circle-o"></i>Home Banners</a></li>
            <li><a href="<?php echo base_url();?>adminnew/homebannerslidersec"><i class="fa fa-circle-o"></i>Home Banners 2</a></li>
            <li><a href="<?php echo base_url();?>adminnew/homebannersliderthird"><i class="fa fa-circle-o"></i>Home Banners 3</a></li>
            <li><a href="<?php echo base_url();?>adminnew/homebannersliderfourth"><i class="fa fa-circle-o"></i>Home Banners 4</a></li>
            <li><a href="<?php echo base_url();?>adminnew/homepopupimage"><i class="fa fa-circle-o"></i>Home Popup Image</a></li>
            <li><a href="<?php echo base_url();?>adminnew/coupons"><i class="fa fa-circle-o"></i>Coupons</a></li>
            <li><a href="<?php echo base_url();?>adminnew/colors"><i class="fa fa-circle-o"></i>Colors</a></li> -->
          </ul>
        </li>
      <li class="treeview">
          <a href="#">
            <i class="fa fa-list-alt"></i>
            <span>Categories</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>adminnew/categories"><i class="fa fa-circle-o"></i> Category</a></li>
            <li><a href="<?php echo base_url();?>adminnew/subcategories"><i class="fa fa-circle-o"></i> Subcategory</a></li>
            <li><a href="<?php echo base_url();?>adminnew/sub_subcategories"><i class="fa fa-circle-o"></i> Sub-Subcategory </a></li>
          </ul>
      </li>
      <li> 
        <a href="<?php echo base_url();?>adminnew/productlist?status=0"><i class="fa fa-shopping-cart"></i><span>Pending Products</span> <span class="badge badge-red pull-right"><?php echo $this->Common_model->getwhrcountbycol('product','product_id',' WHERE status = 0');?></span></a>
      </li>
       <li> 
        <a href="<?php echo base_url();?>adminnew/productlist?status=1"><i class="fa fa-shopping-cart"></i><span>Published Product</span> </a>
      </li>
      <!-- <li> 
        <a href="<?php echo base_url();?>adminnew/areas"><i class="fa fa-map-marker"></i> <span>Area's</span></a>
      </li> -->
      <li> 
        <a href="<?php echo base_url();?>adminnew/shoplist"><img src="<?php echo base_url();?>uploads/store.png"><span style="padding-left: 7px;">Vendors</span></a>
      </li>
      <!-- <li> 
        <a href="<?php echo base_url();?>adminnew/deliveryBoylist"><i class="fa fa-user"></i><span>DeliveryBoys</span></a>
      </li> -->
      <li> 
        <a href="<?php echo base_url();?>adminnew/orderhistory"><i class="fa fa-shopping-cart"></i> <span>Orders</span></a>
      </li>

      <li> 
        <a href="<?php echo base_url();?>adminnew/admincommission"><i class="fa fa-shopping-cart"></i> <span>Admin Commissions</span></a>
      </li>
      <!-- <li> 
        <a href=""><i class="fa fa-comment"></i><span>Support Chat</span></a>
      </li> -->
      <li> 
        <a href="<?php echo base_url();?>adminnew/support_ticket?user_type=customer"><i class="fa fa-comment"></i><span>Customer Support</span></a>
      </li>
      <li> 
        <a href="<?php echo base_url();?>adminnew/support_ticket?user_type=shop"><i class="fa fa-comment"></i><span>Shop Support</span></a>
      </li>
      <!-- <li> 
        <a href="<?php echo base_url();?>adminnew/support_ticket?user_type=deliveryboy"><i class="fa fa-comment"></i><span>Delivery Boys Support</span></a>
      </li> -->
      <li> 
        <a href="<?php echo base_url();?>adminnew/testimonial"><i class="fa fa-quote-left"></i><span>Testimonial</span></a>
      </li>
      <li> 
        <a href="<?php echo base_url();?>adminnew/brand_logo"><i class="fa fa-adjust custom"></i><span>Brand Logo</span></a>
      </li>
      <!-- <li> 
        <a href="<?php echo base_url();?>adminnew/contactus"><i class="fa fa-phone"></i><span>Contact US</span></a>
      </li> -->
      <li> 
        <a href="<?php echo base_url();?>adminnew/seller_agreement"><i class="fa fa-adjust custom"></i><span>Seller Agreement</span></a>
      </li>
      <li> 
        <a href="<?php echo base_url();?>adminnew/user_agreement"><i class="fa fa-adjust custom"></i><span>User Agreement</span></a>
      </li>
      <li> 
        <a href="<?php echo base_url();?>adminnew/aboutus"><i class="fa fa-adjust custom"></i><span>About us</span></a>
      </li>
      <li> 
        <a href="<?php echo base_url();?>adminnew/contactus"><i class="fa fa-comment"></i><span>Contact Enquiries</span></a>
      </li>
      <li> 
        <a href="<?php echo base_url();?>adminnew/faqlist"><i class="fa fa-question-circle"></i><span>FAQ</span></a>
      </li>
      <li> 
        <a href="<?php echo base_url();?>adminnew/memberShiplist"><i class="fa fa-users"></i><span>MemberShip</span></a>
      </li>
      <!-- <li class="treeview">
          <a href="#">
            <i class="fa fa-comment"></i><i class="fad fa-user-friends"></i>
            <span>Customer Support</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>adminnew/support_ticket?user_type=customer"><i class="fa fa-circle-o"></i> User</a></li>
            <li><a href="<?php echo base_url();?>adminnew/support_ticket?user_type=shop"><i class="fa fa-circle-o"></i> Shop</a></li>
            <li><a href="<?php echo base_url();?>adminnew/support_ticket?user_type=deliveryboy"><i class="fa fa-circle-o"></i> Delivery Boy</a></li>
          </ul>
      </li> -->
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
