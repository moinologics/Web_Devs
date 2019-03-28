<?php
	
	if(isset($_SESSION['name'])){
		$li = $this->session->userdata('name');
		$a = '<li class="nav-item mx-2 mt-1"><a href="'.base_url('login_signup/logout').'" class="btn btn-sm btn-danger">Log Out</a></li>';
	}
	else{
		$li = 'Admin Login';
		$a = '';
	}

?>


<nav class="navbar navbar-expand-sm navbar-dark navbar-top fixed-top bg-dark" style="box-shadow: 0px 10px 10px #9bc1ff;">
		<div class="container">
			<a href="<?= base_url('/user/') ?>" class="navbar-brand"> CodeIngniter Blog  </a>
			<button class="navbar-toggler bg-success" data-toggle="collapse" data-target="#navid">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navid">
				<ul class="navbar-nav text-center ml-auto">
					<li class="nav-item mx-2">
						<a href="#" class="nav-link active">Home</a>
					</li>
					<li class="nav-item mx-2">
						<a href="<?=base_url('user/about')?>" class="nav-link">About</a>
					</li>	
					<li class="nav-item mx-2">
						<a href="<?=base_url('user/contacts')?>" class="nav-link">Contact</a>
					</li>
					<li class="nav-item mx-2 mt-1">
						<a href="<?=base_url('admin')?>" class="btn btn-sm btn-info"><?= $li ?></a>
					</li>
					<?= $a ?>
				</ul>
			</div>
		</div>
	</nav>