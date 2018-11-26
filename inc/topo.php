<header>
	<div class="container">
		<div class="logo">
			<img src="<?=$url?>imagens/logo.png" alt="Logo do site" title="Logo do site">
		</div>
		<div class="barra-topo red float-right">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-4 col-sm-6 col-xs-12"></div>
					<div class="col-lg-4 col-sm-6 col-xs-12">
						<i class="fa fa-envelope"></i> <span class="font-sm">E-mail: <b><?=$emailContato?></b></span> 
					</div>
					<div class="col-lg-4 col-sm-6 col-xs-12">
						<div class="redes-sociais">
							<?php include ('inc/redes-sociais.php'); ?>
						</div> 
					</div>
				</div>
			</div>
			<div class="topofixo">
				<?php include('inc/menu-top.php'); ?>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</header>