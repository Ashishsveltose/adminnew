<!DOCTYPE html>
<html lang="en">


<!-- add-patient24:06-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/m_logo.png">
    <title>Admin</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="home/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="home/assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="home/assets/css/style.css">
    <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="main-wrapper">

        <?php
include('header.php');
?>

        <?php
include('sidebar.php');

?>
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h4 class="page-title">Add Notification</h4>
                 <?php 

            if(isset($success) && !empty($success))

            {
              echo '<div class="alert alert-success alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-close"></i></button><h4><i class="fa fa-spinner fa-spin"></i>'.$success.'</h4></div>';
            echo '<meta http-equiv="refresh" content="2;url='.base_url('admin/welcome/notificationlist').'">';
              ?>

              <!-- <div class="alert alert-success" align="center"> -->

              <!-- <strong><?php //echo $success; ?></strong> -->

              <!-- </div> -->
            <?php   
            }
            if(isset($error) && !empty($error)){
            ?>
              <div class="alert alert-danger" align="center">
                <strong><?php echo $error; ?></strong>
                </div>
            <?php } ?>
         
                        <form method="post">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>User Type<span class="text-danger">*</span></label>
                                        <select class="form-control" name="user_type">
                                            <option>-- Select --</option>
                                            <option>doctor</option>
                                            <option>dietician</option>
                                            </select>
                                
                                     </div>
                                                                   </div>
                                
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Username <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name="username" placeholder="">
                                </div>
                             </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input class="form-control" type="text" name="title">
                                    </div>
                                </div>
                                
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Message<span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name="message">
                                    </div>
                                </div>
                              <!--  <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input class="form-control" type="password" name="password">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Confirm Password</label>
                                        <input class="form-control" type="password" name="cpassword">
                                    </div>
                                </div>
								<div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Date of Birth</label>
                                        <div class="cal-icon">
                                            <input type="text" class="form-control datetimepicker" name="dob">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
									<div class="form-group gender-select">
										<label class="gen-label">Gender:</label>
										<div class="form-check-inline">
											<label class="form-check-label">
												<input type="radio" name="gender" class="form-check-input">Male
											</label>
										</div>
										<div class="form-check-inline">
											<label class="form-check-label">
												<input type="radio" name="gender" class="form-check-input">Female
											</label>
										</div>
									</div>
                                </div>
								<div class="col-sm-12">
									<div class="row">
										<div class="col-sm-12">
											<div class="form-group">
												<label>Address</label>
												<input type="text" class="form-control " name="address">
											</div>
										</div>-->
									<!--	<div class="col-sm-6 col-md-6 col-lg-3">
											<div class="form-group">
												<label>Country</label>
												<select class="form-control select">
													<option>USA</option>
													<option>United Kingdom</option>
												</select>
											</div>
										</div>
										<div class="col-sm-6 col-md-6 col-lg-3">
											<div class="form-group">
												<label>City</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-sm-6 col-md-6 col-lg-3">
											<div class="form-group">
												<label>State/Province</label>
												<select class="form-control select">
													<option>California</option>
													<option>Alaska</option>
													<option>Alabama</option>
												</select>
											</div>
										</div>
										<div class="col-sm-6 col-md-6 col-lg-3">
											<div class="form-group">
												<label>Postal Code</label>
												<input type="text" class="form-control">
											</div>
										</div>
									</div>
								</div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Phone </label>
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
									<div class="form-group">
										<label>Avatar</label>
										<div class="profile-upload">
											<div class="upload-img">
												<img alt="" src="assets/img/user.jpg">
											</div>
											<div class="upload-input">
												<input type="file" class="form-control">
											</div>
										</div>
									</div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="display-block">Status</label>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="status" id="patient_active" value="option1" checked>
									<label class="form-check-label" for="patient_active">
									Active
									</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="status" id="patient_inactive" value="option2">
									<label class="form-check-label" for="patient_inactive">
									Inactive
									</label>
								</div>-->
                            </div>
                            <div class="m-t-20 text-center">
     
               <button type="submit" name="submit"  class="btn btn-primary">Save</button>
              
                             <!--   <button class="btn btn-primary submit-btn">Create Notification</button>-->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="<?php echo base_url();?>home/assets/js/jquery-3.2.1.min.js"></script>
	<script src="<?php echo base_url();?>home/assets/js/popper.min.js"></script>
    <script src="<?php echo base_url();?>home/assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>home/assets/js/jquery.slimscroll.js"></script>
    <script src="<?php echo base_url();?>home/assets/js/select2.min.js"></script>
	<script src="<?php echo base_url();?>home/assets/js/moment.min.js"></script>
	<script src="<?php echo base_url();?>home/assets/js/bootstrap-datetimepicker.min.js"></script>
    <script src="<?php echo base_url();?>home/assets/js/app.js"></script>
    <script src="<?php echo base_url();?>home/assets/js/notify.js"></script>

</body>

<script>
	$(document).on("click", ".contact", function() {
    	//   console.log("inside";   <-- here it is
        // alert("inside");
        $(".contact").attr('disabled', true);
        $(".contact").addClass('buttonload'); 
        $(".contact").html('<i class="fa fa-spinner fa-spin"></i>Loading');
       
        var ename = $("#ename").val();
        var eemail = $("#eemail").val();
        var enumber = $("#enumber").val();
        var emessage = $("#emessage").val();
        // if(ename && eemail){

	        $.ajax({
	            type: 'POST',
	            url:"<?php echo base_url()?>home/contactinfo",
	            data:{name:ename,email:eemail,number:enumber,message:emessage},
	            dataType: 'json',
	            success : function(data)
	            {
	            	// alert(data); 
	              if(data.status==1){
	                // notify('success',data.msg,'Success');
	                $(".contact").notify(data.msg,'success');
	                $(".contact").removeAttr('disabled');
                    $(".contact").removeClass('buttonload');
                    $(".contact").html('Submit');

                 	$("#ename").val('');
			      	$("#eemail").val('');
			       	$("#enumber").val('');
			        $("#emessage").val('');
	                // $("#contactform").reset();
	                // $("#msg").html(data.msg);
	                // window.location.href = "<?php echo base_url()?>contactus";
	                // setTimeout(function(){ window.location.reload(); },1000);    
	              }
	              if(data.status==0){
	              	$(".contact").removeAttr('disabled');
                    $(".contact").removeClass('buttonload');
                    $(".contact").html('Submit');
	                 //$("#emsg").html(data.msg);
	                 // notify('error',data.msg,'Success');
	                 $(".contact").notify(data.msg,'error');
	                 $.notify({
                        icon: 'ti-gift',
                        message: data.msg
                    	},{type: 'success',timer: 1000});
	              } //   console.log("inside";
	                // alert(data); 
	            },
	            error: function(data) 
	            {
	            	$(".contact").removeAttr('disabled');
                    $(".contact").removeClass('buttonload');
                    $(".contact").html('Submit');
	            },
	        });

<!-- add-patient24:07-->
</html>
