<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	<meta property="og:title" content="Bamboozled: O jogo!">
	<meta property="og:type" content="game">
	<meta property="og:url" content="https://www.bamboozled.pt/">
	<meta property="og:description" content="Bamboozled é um jogo 2D Top-Down com estilo Pixel Art feito no Unity.">
	<meta property="og:image" content="https://www.bamboozled.pt/images/personagem.png">
	<link rel="stylesheet" type="text/css" href="css.css"/>
	<link rel="shortcut icon" href="https://www.bamboozled.pt/images/icons/favicon.ico"/>
	<title>Bamboozled - Página Inicial</title>
</head>
<body>
	<?PHP include 'functions.php'; 
	navbar();?>
	
	<!--INICIO SECTION START-->
	<div id="inicio">
		<div class="parallax" id="image1">
			<iframe
			src="https://www.youtube.com/embed/LDx5FjZYwSg"
			srcdoc="<style>*{padding:0;margin:0;overflow:hidden}html,body{height:100%}img,span{position:absolute;width:100%;top:0;bottom:0;margin:auto}span{height:1.5em;text-align:center;font:48px/1.5 sans-serif;color:white;text-shadow:0 0 0.5em black}</style><a href=https://www.youtube.com/embed/LDx5FjZYwSg?autoplay=1><img src=https://img.youtube.com/vi/LDx5FjZYwSg/hqdefault.jpg alt='Bamboozled - Teaser Trailer'><span>▶</span></a>"
			frameborder="0"
			allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
			allowfullscreen
			title="Bamboozled - Teaser Trailer"
			></iframe>
		</div>
	</div>
	<!--INICIO SECTION END-->
	
	<!--ACERCA SECTION START-->
	<div id="acerca">
		<p>
		<div class="div_pad">
		Bamboozled é um jogo 2D Top-Down com estilo Pixel Art feito no Unity.
		Neste website podem consultar o blogue de desenvolvimento, fazer o download do jogo e espreitar as pontuações de cada jogador e tentar superá-los!
		</div>
		</p>
		<!--IMAGE GALLERY START-->
		<div class="responsive">
			<div class="gallery">
				<img src="images/personagem.webp" alt="Personagem Principal" class="img">
				<div class="desc">Personagens simples<br>e agradáveis</br></div>
			</div>
		</div>

		<div class="responsive">
			<div class="gallery">
				<img src="images/mapa.webp" alt="Primeiro mapa" class="img">
				<div class="desc">Mapas únicos<br>e charmosos</br></div>
			</div>
		</div>

		<div class="responsive">
			<div class="gallery">
				<img src="images/loja.webp" alt="Loja" class="img">
				<div class="desc">Sistema de loja para ajudar-te na tua jornada</div>
			</div>
		</div>

		<div class="responsive">
			<div class="gallery">
				<img src="images/boss.webp" alt="Primeiro Boss" class="img">
				<div class="desc">Luta com<br>bosses desafiantes</br></div>
			</div>
		</div>
		<!--IMAGE GALLERY END-->
		
		<div class="clearfix"></div>

		<p>
		<div class="div_pad">
		A personagem principal é um panda-vermelho que vive muito calmamente na vila dos pandas. 
		Um grupo de cientistas está a realizar experiências com a flora local e isso está a afetar o ecossistema. 
		O panda é abordado por uma personagem misteriosa que promete salvar a vila, pedindo-lhe para isso que recolha 4 ingredientes para criar uma poção. 
		<br><br>O panda inicia assim a sua jornada... O que irá acontecer a seguir?</br></br>
		</div>
		<h1>Downloads</h1>
		</p>
	</div>
	<!--ACERCA SECTION END-->
	
	<!--DOWNLOAD SECTION START-->
	<div id="download">
		<div class="parallax" id="image2">
			<div class="submit">
				<a href="bamboozled_win.zip" download="Bamboozled_Windows.zip">
					<button type="button" id="button-green">Versão Windows</button>
				</a>
				<div class="ease"></div>
				<br><br><br><br><br>
				<a href="bamboozled_linux.zip" download="Bamboozled_Linux.zip">
					<button type="button" id="button-green">Versão Linux 
						<!--<img src="images/icons/linuuzled.webp" alt="Simbolo Linux">-->
					</button>
				</a>
				<div class="ease"></div>
			</div>
		</div>
	</div>
	<!--DOWNLOAD SECTION END-->
	
	<?PHP 
		mysqli_close($conn);
		footer();
	?>	
	
</body>
</html>