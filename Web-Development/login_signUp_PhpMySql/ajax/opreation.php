<?php
	
	if(isset($_REQUEST['opreation'])) $opreation = $_REQUEST['opreation'];
	else exit();
	include_once('../dbcon.php');
	session_start();

	if($opreation=='signup'){
		$name = $_REQUEST['name'];
		$email = $_REQUEST['email'];
		$email = strtolower($email);
		$pass = $_REQUEST['password'];

		$q = "SELECT * FROM users WHERE Email='$email'";
		$result = mysqli_query($con,$q);
		if(mysqli_num_rows($result)>0){
			echo '<small class="text-warning bg-light">Email Already Exist, Please Login with this Email.</small>';
			exit();
		}
		$q = "INSERT INTO users(Name,Email,Password) VALUES ('$name','$email','".md5($pass)."')";
		mysqli_query($con,$q);
		if($e = mysqli_error($con)) echo $e;
		else echo '<small class="text-success">Successfully Register, Redirecting...</small>';
		$_SESSION['Name'] = $name;
	}

	if($opreation=='login'){
		$email = $_REQUEST['email'];
		$email = strtolower($email);
		$pass = md5($_REQUEST['password']);
		$remember = $_REQUEST['remember'];
		$q = "SELECT * FROM users WHERE Email='$email' && Password='$pass'";
		$result = mysqli_query($con,$q);
		if(mysqli_num_rows($result)==1){
			$row = mysqli_fetch_array($result);
			$_SESSION['Name'] = $row['Name'];
			if(strlen($remember)==4) setcookie("login_session", $row['Name'],time()+(86400*30),'/');
			echo '<small class="text-success">login Successfully, Redirecting...</small>';
		}
		else echo '<small class="text-danger">Username Or Password Was wrong.</small>';
	}

	if($opreation=='logout'){
		setcookie("login_session", $_SESSION['Name'], time()-360,'/');
		session_destroy();
	}

	mysqli_close($con);

?>