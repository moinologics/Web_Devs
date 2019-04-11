<?php
	header("Pragma: no-cache");
	header("Cache-Control: no-cache");
	header("Expires: 0");

?>

<?php

	if(isset($_REQUEST['a'])) $a = 'For Last Transaction '.$_REQUEST['a']; else $a = '';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Merchant Check Out Page</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<meta name="GENERATOR" content="Evrsoft First Page">
</head>
<body>
	<div class="container"><br><br>
		
		<h1>Merchant Check Out Page</h1>
		<br><h3 class="text-danger"><?php echo $a; ?></h3><br>
		<form method="post" action="pgRedirect.php">
			<table border="1" class="table">
				<tbody>
					<tr>
						<th>S.No</th>
						<th>Label</th>
						<th>Value</th>
					</tr>
					<tr>
						<td>1</td>
						<td><label>ORDER_ID::*</label></td>
						<td><input id="ORDER_ID" tabindex="1" maxlength="20" size="20"
							name="ORDER_ID" autocomplete="off"
							value="<?php echo  "ORDS" . rand(10000,99999999)?>">
						</td>
					</tr>
					<tr>
						<td>2</td>
						<td><label>CUSTID ::*</label></td>
						<td><input id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="CUST001"></td>
					</tr>
					<tr>
						<td>5</td>
						<td><label>txnAmount*</label></td>
						<td><input title="TXN_AMOUNT" tabindex="10"
							type="text" name="TXN_AMOUNT"
							value="1">
						</td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td><input value="CheckOut" type="submit"	onclick=""></td>
					</tr>
				</tbody>
			</table>
			* - Mandatory Fields
		</form>

	</div>
</body>
</html>