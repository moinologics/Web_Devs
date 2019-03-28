<?php //print_r($_SESSION);

	if(isset($artical_id)){	//editing case, $title and $content are also abailble
		$action = 'edit';
		$btn_cap = 'Update';
	}
	else{
		$action = 'add';
		$artical_id = '';
		$title = '';
		$content = '';
		$btn_cap = 'Submit';
	}
	
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Add New Artical - Admin</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/libs/bootstrap.min.css') ?>">
	<!-- Custom styles for this template -->
  	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/custom.css') ?>">
</head>
<body class="text-white">
	<?php include_once('header.php'); ?><br>
	<div class="container bg-dark rounded"><br>
		<h1 class="text-center text-success">Post New Artical</h1><hr><br>
		<div class="col-10 mx-auto">
			<form class="form-horizontal" action="<?=base_url('admin/submit_artical')?>" method="post">
			  <fieldset>
			  	<input type="hidden" value="<?= $action ?>" name="action">
			  	<input type="hidden" value="<?= $artical_id ?>" name="artical">
			    <div class="form-group">
		            <h4 class="text-center">Artical Title</h4>
		            <input type="text" class="form-control text-center" value="<?=$title?>" placeholder="Artical title" name="title">
		        </div><br>
			    <div class="form-group">
		            <h4 class="text-center">Artical Content</h4>
		            <textarea class="form-control text-center" rows="20" placeholder="Write your Artical here" name="content"><?=$content?></textarea>
		        </div><br>
			    <div class="form-group text-center">
			        <button type="submit" class="btn btn-primary"><?=$btn_cap?> your Artical</button>
			    </div>
			  </fieldset>
			</form><br>
		</div>
	</div><br>
</body>
</html>

