<footer>
	<div class="container">
		<div class="menu-footer">
				<nav>
					<ul>
						<li><a href="<?=$url?>" title="Voltar a página principal" rel="nofollow">Home</a></li>
						<li><a href="<?=$url?>sobre" title="Conheça um pouco sobre nós" rel="nofollow">Sobre</a></li>
						<li><a href="<?=$url?>ajuda" title="Ajuda" rel="nofollow">Ajuda</a></li>
						<li><a href="<?=$url?>material" title="Material" rel="nofollow">Material</a></li>
						<li><a href="<?=$url?>contato" title="Contato" rel="nofollow">Contato</a></li>
						<li><a href="<?=$url?>mapa-site" title="Mapa do site <?=$nomeSite?>">Mapa do site</a></li>
					</ul>
				</nav>
			</div>
	</div>
</footer>
<div class="copyright-footer font-sm">
	<div class="container">
		Copyright © <?=$nomeSite?>. (Lei 9610 de 19/02/1998)
	</div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script  src="<?=$url?>js/jquery.slicknav.js"></script>
<script>
	$(document).ready(function(){
		$('#menu2').slicknav();
		$('#menu2').slicknav({
			label: '',
			duration: 1000,
			easingOpen: "easeOutBounce", //available with jQuery UI
			prependTo:'#demo2'
		});
	});
</script>