<!DOCTYPE html>
<html>
<head>
	<title>login page</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/libs/bootstrap.min.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/custom.css') ?>">
	
</head>
<body class="text-white">
	<?php include_once('header.php'); ?><br><br>
	<div class="container bg-dark rounded"><br>
		<div class="col-6 mx-auto">
			<form class="form-horizontal" action="login_signup/login_validate" method="post">
			  <fieldset>
			    <h3 class="text-center">Admin Login</h3><br>
			    <div class="form-group input-group">
		            <div class="input-group-prepend">
		                <span class="input-group-text">Email<!-- <i class="fas fa-phone"></i> --></span>
		            </div>
		            <input type="text" class="form-control" id="Email" placeholder="Email" name="email">
		        </div><br>
			    <div class="form-group input-group">
		            <div class="input-group-prepend">
		                <span class="input-group-text">Password</span>
		            </div>
		            <input type="password" class="form-control" id="password" placeholder="Password" name="password">
		        </div>
			    <br>
			    <h6 class="text-center"><input type="checkbox" name="remember">&nbsp; Remember me </h6>
			    <div class="form-group text-center"><br>
			        <button type="reset" class="btn btn-danger">Cancel</button>
			        <button type="submit" class="btn btn-primary">Submit</button>
			    </div>
			  </fieldset>
			</form>
		</div><br>
	</div>
</body>
</html>