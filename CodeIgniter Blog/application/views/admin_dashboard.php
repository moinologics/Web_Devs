<?php //print_r($_SESSION); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Dashboard - Admin</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/libs/bootstrap.min.css') ?>">
	<!-- Custom styles for this template -->
  	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/custom.css') ?>">
  	<style type="text/css">
  		.borderless td, .borderless th {
		    border: none;
		}
  	</style>
</head>
<body class="text-white">
	<?php include_once('header.php'); ?><br>
	<div class="container bg-dark rounded"><br>
		<h1 class="text-center text-success">Admin Dashboard</h1><hr class="bg-white"><br>
		<a href="<?=base_url('admin/add_artical')?>" class="btn btn-sm btn-success mb-3 float-right" > Write Artical </a>
		<br><br><h3 class="text-center">Artical Posted by You</h3><br>
		<table class="table table-striped borderless">
			<thead class="bg-info ">
				<tr>
					<td>Artical Id</td>
					<td>Title</td>
					<td>Date</td>
					<td>Modify</td>
				</tr>
			</thead>
			<tbody>
			<?php foreach ($articals AS $artical): ?>
				<tr>
					<td><?= $artical['artical_id'] ?></td>
					<td><?= $artical['title'] ?></td>
					<td><?= $artical['date'] ?></td>
					<td>
						<a href="<?= base_url('admin/edit_artical?artical=').$artical['artical_id'] ?>" class="btn-sm btn-info">Edit</a>
						<a href="#" onclick="delete_artical('<?= $artical["artical_id"] ?>')" class="btn-sm btn-danger">Delete</a>
					</td>
				</tr>
			<?php endforeach; ?>
			</tbody>
			<script type="text/javascript">
			function delete_artical(artical_id){
				if(confirm("Would you like to Delete this Artical.\nNote: Deleting Artical Destroy all likes of this artical")){
					window.location.href = "<?= base_url('admin/delete_artical?artical=').$artical['artical_id'] ?>";
				}
			}
			</script>
		</table><br>
	</div>
</body>
</html>

