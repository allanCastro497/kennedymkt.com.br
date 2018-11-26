<header>
	<div class="container">
		<div class="logo">
			<img src="<?=$url?>imagens/logo.png" alt="Logo do site" title="Logo do site">
		</div>
		<div class="barra-topo red float-right">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-4 col-sm-6"></div>
					<div class="col-lg-4 col-sm-6">
						<i class="fa fa-envelope"></i> <span class="font-sm">E-mail: <b><?=$emailContato?></b></span> 
					</div>
					<div class="col-lg-4 col-sm-6">
						<div class="redes-sociais">
							<?php include ('inc/redes-sociais.php'); ?>
						</div> 
					</div>
				</div>
			</div>
			<?php include('inc/menu-top.php'); ?>
		</div>
		<div class="clearfix"></div>
	</div>
</header>