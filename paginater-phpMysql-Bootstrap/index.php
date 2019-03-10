<?php
	
	$limit_per_page = 10;

	$con = mysqli_connect('localhost','root','','paginator');
	
	if(!isset($_REQUEST['page'])) $page = 1;
	else $page = $_REQUEST['page'];

	$start = ($page-1)*$limit_per_page;

	$q = "SELECT * FROM data LIMIT $start, $limit_per_page";
	$r = mysqli_query($con,$q);

	$total_rows = mysqli_num_rows(mysqli_query($con,"SELECT * FROM data"));
	$total_pages = intval($total_rows/($limit_per_page)) + 1;

	$pagenator_links = '';
	$active = '';

	if($page==1) $dis_prev = 'disabled';
	elseif($page>=$total_pages)	$dis_next = 'disabled';

	if($page>=3){
		$start_page = $page - 2;
		$end_page = $page + 2;
		if($end_page>=$total_pages) $end_page = $total_pages;
	}else{
		$start_page = 1;
		$end_page = 5;
	}

	for($i=$start_page;$i<=$end_page;$i++){
		
		if($page==$i) $active = 'active';
		$pagenator_links .= '<li class="page-item '.$active.'"><a href="./?page='.$i.'" class="page-link">'.$i.'</a></li>';
		$active = '';

	}
		

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Paginator PHP MYSQL</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body><br><br><br>
	<div class="container">
		<h1 class="text-center">Paginator PHP MYSQL</h1><br>
		<table class="table table-hover table-sm table-striped">
			<thead class="bg-warning">
				<tr>
					<th>id</th>
					<th>Name</th>
					<th>Email</th>
					<th>Phone</th>
				</tr>
			</thead>
			<tbody>
				<tr class="bg-info"><td></td><td></td><td></td><td></td></tr>
				<?php
				while ($row = mysqli_fetch_array($r)) {
					echo "<tr>
						<td>".$row['id']."</td>
						<td>".$row['name']."</td>
						<td>".$row['email']."</td>
						<td>".$row['phone']."</td>
					</tr>";
				}
				?>
			</tbody>
		</table>
		<div class="container">
			<ul class="pagination">
				<li class="page-item <?= $dis_prev ?>"> <a href="./?page=<?= ($page-1) ?>" class="page-link"> Previous</a></li>
				<?= $pagenator_links ?>
				<li class="page-item <?= $dis_next ?>"> <a href="./?page=<?= ($page+1) ?>" class="page-link"> Next</a></li>
			</ul>
		</div>
	</div>
</body>
</html>
















<?php


	/*$name = fopen("name.txt", "r");
	$phone = fopen("phone.txt", "r");

	$con = mysqli_connect('localhost','root','','paginator');

	for($i=0;$i<52;$i++){

		$n = fgets($name);
		$p = fgets($phone);
		$e = $n.rand(90,99).'@gmail.com';
		mysqli_query($con,"INSERT INTO data(name,email,phone) VALUES ('$n','$e','$p')");

	}*/
?>