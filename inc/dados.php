<?php
$nomeSite			= 'Desenvolva Plus';
$slogan				= 'Mostramos a você o melhor caminho!';
$url				= 'http://localhost/desenvolvaplus.com.br/';
// $url				= 'http://www.desenvolvaplus.com.br/';
$ddd				= '11';
$fone				= '96404-2424';
// $fone2				= '2222-4444';
// $fone3				= '2123-4444';
$emailContato		= 'contato@desenvolvaplus.com.br';
$rua				= 'Travessa praia da enseada, 65';
$bairro				= 'Casa Grande';
$cidade				= 'Diadema';
$UF					= 'SP';
$cep				= 'CEP: 09963-310';
$latitude			= '-23.7059136';
$longitude			= '-46.5981394';
// Gerador de htacces automático
$urlhtaccess = $url;
$schemaReplace = strpos($urlhtaccess, 'http://www.') === false ? 'http://' : 'http://www.';
$urlhtaccess = str_replace($schemaReplace, '', $urlhtaccess);
$urlhtaccess = rtrim($urlhtaccess,'/');
define('RAIZ', $url);
define('HTACCESS', $urlhtaccess);
include('inc/gerador-htaccess.php');
$breadcrumb			= '
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="'.$url.'">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Data</li>
  </ol>
</nav>
';
?>