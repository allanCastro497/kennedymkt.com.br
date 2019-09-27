<?
$h1         = 'Erro 404: Página não encontrada';
$title      = 'Página não encontrada';
$desc       = 'Navegue pelo menu do nosso site e encontre o que está procurando, escolha abaixo a página que deseja visualizar.';
$key        = '';
$var        = 'Página não encontrada';
include('inc/head.php');
?>
</head>
<body>
<? include('inc/topo.php');?>
<div class="wrapper">
    <main>
        <?=$breadcrumb ?>
        <div class="container-fluid">
            <section>
                <div class="container">
                    <h1><?=$h1?></h1>
                    <article>
                        <p class="msg-404">Ops! Página não encontrada.<br><br>
                            
                            Navegue pelo site da <?=$nomeSite?> e encontre o que está procurando, escolha abaixo a página que deseja visualizar.
                        </p>
                        
                        <div class="menu-404">
                            <h2>O que deseja fazer?</h2>
                            <br>
                            <a rel="nofollow" title="Voltar a página inicial" href="<?=$url;?>" >Voltar a página inicial</a>
                            <br><br>
                            <a rel="nofollow" title="Ver O Mapa do site" href="<?=$url;?>mapa-site" >Ver O Mapa do site</a>
                            <br><br>
                        </div>
                        
                        <script type="text/javascript">
                        var GOOG_FIXURL_LANG = 'pt-BR';
                        var GOOG_FIXURL_SITE = '<?=$url?>'
                        </script>
                    </article>
                </div>
            </section>
        </div>
    </main>
</div>
<? include('inc/footer.php');?>
</body>
</html>