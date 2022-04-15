<!DOCTYPE html>
<html lang="en">


<!-- add-patient24:06-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/m_logo.png">
    <title>Admin</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>home/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>home/assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>home/assets/css/style.css">
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
                        <h4 class="page-title">Add Clinician</h4>
                
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
                                        <label>Clinician Name<span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name="clinician_name" placeholder="">
                                </div>
                             </div>
                               <div class="col-sm-6">
                                        <div class="form-group">
                                        <label>Qualification<span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name="qualification" placeholder="">
                                </div>
                             </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Experience <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name="experience" placeholder="">
                                </div>
                             </div>
                             <div class="col-sm-6">
                                        <div class="form-group">
                                        <label>Description<span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name="description" placeholder="">
                                </div>
                             </div>
                               <div class="col-sm-6">
                                        <div class="form-group">
                                        <label>Profile Image<span class="text-danger">*</span></label>
                                        <input class="form-control" type="file" name="pimage" placeholder="">
                                </div>
                             </div>
                              <div class="col-sm-6">
                                        <div class="form-group">
                                        <label>Gender<span class="text-danger">*</span></label>
                                        <select class="form-control" name="gender">
                                            <option>-- Select --</option>
                                            <option>Male</option>
                                            <option>Female</option>
                                            </select>
                                    </div>
                             </div>
                              <div class="col-sm-6">
                                        <div class="form-group">
                                        <label>Password<span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name="password" placeholder="">
                                </div>
                             </div>
                              
                               <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Specializaition</label>
                                        <input class="form-control" type="text" name="specializaition">
                                    </div>
                                </div>
                                
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Phone <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name="phone">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Email Id</label>
                                        <input class="form-control" type="text" name="email_id">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Document Name</label>
                                        <input class="form-control" type="text" name="doucment_name">
                                    </div>
                                </div>
								<div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Document</label>
                                        <div class="cal-icon">
                                            <input type="file" class="form-control datetimepicker" name="doucment">
                                        </div>
                                    </div>
                                </div>
                               </div>
                            <div class="m-t-20 text-center">
                                <button class="btn btn-primary submit-btn">Submit</button>
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
