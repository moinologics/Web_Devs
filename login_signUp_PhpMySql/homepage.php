<?php
	
	session_start();
	if(!isset($_SESSION['Name']) && !isset($_COOKIE['login_session'])) header('Location:index.php');
	elseif (isset($_COOKIE['login_session'])) {
		$_SESSION['Name'] = $_COOKIE['login_session'];
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Homepage</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="row container m-auto">
		<div class="d-inline-block text-center mx-auto mt-5">
		    <h2>You Are Currently Loged in as <span class="text-success"><?php echo $_SESSION['Name']; ?></span></h2><br>
		    <button class="btn btn-danger" onclick="logout();">Log Out</button>
	  	</div>
	  	<?php
     		if(isset($_COOKIE['login_session'])) echo 'Cookie: '.$_COOKIE['login_session'];
	    ?>
	</div>
</body>
</html>
<script type="text/javascript">
	function logout(){
		$.ajax({
			url: 'ajax/opreation.php', type: 'POST', data: {opreation: 'logout'},async:false,
			success:function(result){
				$('body').append('<br><br>Logging out...');
				window.location.href = 'index.php';
			}
		});
	}
</script>