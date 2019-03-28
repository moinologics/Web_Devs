<?php
	
	$dbhost = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'logsign';
	$con=mysqli_connect($dbhost,$username,$password,$dbname);
	if($con)
		{//echo '<script>alert("Connected To Database succesfully");</script>';
	}
	else
		{echo '<script>alert("Error! Not Connected To Database");</script><style type="text/css">*{display:none;}</style>';}
?>

