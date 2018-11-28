<?php include('dados.php'); ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="pt-br"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<?php include ('inc/jquery.php');?>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<link rel="stylesheet" href="<?=$url?>css/style.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<!-- MENU  MOBILE -->
	<link rel="stylesheet" href="<?=$url?>css/slicknav.css" />
	<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>
	<!-- /MENU  MOBILE -->

	<title><?=$title." - ".$nomeSite?></title>
	<base href="<?=$url?>">
	<meta name="description" content="<?=ucfirst($desc)?>">
	<meta name="keywords" content="<?=str_replace($prepos,', ', $h1).', '.$nomeSite?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="geo.position" content="<?=$latitude.";".$longitude?>">
	<meta name="geo.placename" content="<?=$cidade."-".$UF?>">
	<meta name="geo.region" content="<?=$UF?>-BR">
	<meta name="ICBM" content="<?=$latitude.";".$longitude?>">
	<meta name="robots" content="index,follow">
	<meta name="rating" content="General">
	<meta name="revisit-after" content="7 days">
	
	<link rel="shortcut icon" href="<?=$url?>imagens/favicon.png">
	
	<meta property="og:region" content="Brasil">
	<meta property="og:title" content="<?=$title." - ".$nomeSite?>">
	<meta property="og:type" content="article">
	<?php
	if (file_exists($url.$pasta.$urlPagina."-01.jpg")) {
	?>
	<meta property="og:image" content="<?=$url.$pasta.$urlPagina?>-01.jpg">
	<?php
	}
	?>
	<meta property="og:url" content="<?=$url.$urlPagina?>">
	<meta property="og:description" content="<?=$desc?>">
	<meta property="og:site_name" content="<?=$nomeSite?>">

		<script>
		$(window).bind('scroll', function () {
			if ($(window).scrollTop() > 30) {
			$('.topofixo').addClass('fixed');
			} else {
			$('.topofixo').removeClass('fixed');
			}
		});
		</script>