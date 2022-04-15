<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preclinic.dreamguystech.com/template/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Apr 2022 05:41:53 GMT -->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
<title>Admin</title>
<link rel="stylesheet" type="text/css" href="home/assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="home/assets/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="home/assets/css/style.css">
<!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
<div class="main-wrapper account-wrapper">
<div class="account-page">
<div class="account-center">
<div class="account-box">
 <tr>
		<td colspan="2"><?php echo @$error; ?></td>
	</tr>

<form method="post" >
<div class="account-logo">
<a href="index.html"><img src="home/assets/img/logoo.png" alt=""></a>
</div>
<div class="form-group">
<label>Username or Email</label>
<input type="text" autofocus="" class="form-control" name="email_id">
</div>
<div class="form-group">
<label>Password</label>
<input type="password" class="form-control" name="pass">
</div>
<div class="form-group text-right">
<a href="forgot-password.html">Forgot your password?</a>
</div>

<div class="form-group text-center">
<button type="submit" name="login" value="Login" class="btn btn-primary account-btn">Login</button>
</div>
</form>
</div>
</div>
</div>
</div>
<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/app.js"></script>
</body>

<!-- Mirrored from preclinic.dreamguystech.com/template/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Apr 2022 05:41:53 GMT -->
</html>