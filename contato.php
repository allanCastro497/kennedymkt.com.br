<?
$h1         = 'Contato';
$title      = 'Contato';
$desc       = 'Contato';
$key        = 'uuuuuuuuuu, jjjjjjjjjjjj, lllllllllll';
$var        = 'Contato';
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
                        <form name="contatoenvia" action="sendmail.php">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Nome:</label>
                                    <input type="email" name="text" class="form-control" placeholder="Insira seu Nome" required>
                                    <small class="form-text text-muted">Nunca iremos compartilhar seu e-mail com mais ninguém</small>
                                </div>
                                <div class="form-group">
                                    <label>Email:</label>
                                    <input type="email" name="email" class="form-control" placeholder="Insira seu Email" required>
                                    <small class="form-text text-muted">Nunca iremos compartilhar seu e-mail com mais ninguém</small>
                                </div>
                                <div class="form-group">
                                    <label>Telefone:</label>
                                    <input type="tel" name="telefone" class="form-control" placeholder="Insira seu Telefone">
                                    <small class="form-text text-muted">Nunca iremos compartilhar seu e-mail com mais ninguém</small>
                                </div>
                                <div class="form-group">
                                    <label>Assunto:</label>
                                    <input type="text" name="assunto" class="form-control" placeholder="Informe aqui o assunto" required>
                                    <small class="form-text text-muted">Nunca iremos compartilhar seu e-mail com mais ninguém</small>
                                </div>
                                <div class="form-group">
                                    <label>Mensagem:</label>
                                    <textarea class="message-contact form-control" placeholder="Insira sua mensagem" name="mensagemcontato" required></textarea>
                                </div>
                            </div>
                            <br>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <input type="submit" class="btn btn-success" value="Enviar">
                            </div>
                            <div class="clearfix"></div>
                        </form>
                    </article>
                </div>
            </section>
        </div>
    </main>
</div>
<? include('inc/footer.php');?>
</body>
</html>