<?
$h1         = 'Desenvolva plus';
$title      = 'Home';
$desc       = 'Desenvolva plus, aqui nossos foco não é postar mensagens de motivação, até por quê a motivação vem de dentro de cada um, apenas mostraremos algumas verdades.';
$key        = 'uuuuuuuuuu, jjjjjjjjjjjj, lllllllllll';
$var        = 'Desenvolva plus';
include('inc/head.php');
?>
</head>
<body>
<? include('inc/topo.php'); ?>
<div class="bg-home">
	<div class="bg-darken">
		<div class="flex-home">
			<h2 class="white align-text-center">Cadastre-se para receber conteúdos exclusivos</h2>
			<?php include('inc/newsletter.php'); ?>
		</div>
	</div>
</div>
<main>
	<section>
		<article>
			<div class="bg-gray">
				<div class="container">
					<h1 class="align-text-center"><?=$nomeSite." - ".$slogan?></h1>
					<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-6 border-custom">
							<div class="thumbs">
								<img src="<?=$url?>imagens/principais-assuntos/thumbs/produtividade.jpg" alt="Aqui aprenderemos aumentar nossa capacidade de produção e de entrega de resultados, para que sobre mais tempo para sermos livres" title="Aqui aprenderemos aumentar nossa capacidade de produção e de entrega de resultados, para que sobre mais tempo para sermos livres">
								<div class="card-description">
									<h2>Produtividade</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia libero dolore sequi, eaque ad vel facere facilis amet asperiores quae unde provident vitae atque recusandae autem aspernatur ullam tempora ex.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 border-custom">
							<div class="thumbs">
								<img src="<?=$url?>imagens/principais-assuntos/thumbs/empreendedorismo.jpg" alt="Você sempre sonhou em ser um empreendedor não é? Aqui você terá dicas práticas para que seu negócio funcione" title="Você sempre sonhou em ser um empreendedor não é? Aqui você terá dicas práticas para que seu negócio funcione">
								<div class="card-description">
									<h2>Empreendedorismo</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima laborum, voluptate, repellendus amet impedit inventore. Optio nisi quibusdam nemo, laudantium ad nobis beatae eum rem cum, doloribus error. Fugiat, harum?</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 border-custom">
							<div class="thumbs">
								<img src="<?=$url?>imagens/principais-assuntos/thumbs/qualidade-vida.jpg" alt="Nesse link você verá como aumentar sua qualidade de vida" title="Nesse link você verá como aumentar sua qualidade de vida">
								<div class="card-description">
									<h2>Qualidade de vida</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi deserunt quisquam soluta id minima at adipisci facilis commodi nesciunt earum, vel nobis, corporis nisi maxime, ipsa magnam tempora. Saepe, nisi.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="bg-crescimento">
				<div class="bg-orange">
					<h2 class="align-text-center">Invista em você!</h2>
					<p class="align-text-center">Só existe uma forma de sucesso - Poder viver a vida do seu jeito.</p>
					<cite class="align-text-center">Christopher Morley</cite>
				</div>
			</div>
			<div class="bg-gray">
				<div class="container">
					<h2 class="align-text-center">Com os nossos Ebooks você aprenderá:</h2>
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-12 list-center">
							<ul class="items-ebook">
								<li>Autoconhecimento</li>
								<li>Realização pessoal e profissional</li>
								<li>Planejamento pessoal</li>
								<li>Administração do tempo</li>
								<li>Comunicação interpessoal</li>
								<li>Relacionamento humano</li>
								<li>Qualidade de vida</li>
							</ul>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 list-center">
							<ul class="items-ebook">
								<li>Empreendedorismo</li>
								<li>Poder mental</li>
								<li>Liderança</li>
								<li>Motivação</li>
								<li>Produtividade</li>
								<li>Educação financeira</li>
								<li>Marketing pessoal</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</article>
	</section>
</main>
<? include('inc/footer.php'); ?>
</body>
</html>