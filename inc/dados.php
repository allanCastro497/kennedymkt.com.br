<?php
$nomeSite			= 'Kennedy';
$slogan				= 'Marketing Digital para sua empresa';
$url				= 'http://localhost/kennedymkt.com.br/';
// $url				= 'http://mwww.kennedymkt.com.br/';
$ddd				= '11';
$fone				= '96404-2424';
// $fone2				= '2222-4444';
// $fone3				= '2123-4444';
$emailContato		= 'contato@kennedymkt.com.br';
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
// Gerador de htacces automático
?>