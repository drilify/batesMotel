<!DOCTYPE html>
<html>
<head>
	<title>B A T E S</title>
	<link rel="icon" href="img/Favicon.ico" type="image/ico"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
<?php include 'includes/menu_include.php'; ?>
<section class="banner">
	<div class="titulo">
		<h1>B A S E A D O <br>
		<i>no livro original</i><br>
		"PSYCHO"
		</h1>
	</div>
	
</section>
<section class="conteudo">
	<h3>Bates Motel</h3>
	<em>Um prelúdio da obra clássica Psicose de Alfred Hitchcock</em>
	<p class="txt">
		A série centra-se numa mãe e num filho que chegam a uma nova cidade para poderem recomeçar a vida deles e montar um novo negócio, mas muitos incidentes misteriosos acontecem, incluindo os atos horríveis e inexplicados do filho.

		A trama contará como Norman Bates desenvolveu seu lado sombrio e psicótico entre a infância e a adolescência, explicando como o amor de sua mãe ajudou a moldar um dos mais conhecidos maníacos da história do cinema.
	</p>
</section>
<?php include 'includes/footer_include.php'; ?>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script type="text/javascript">
	 $(window).scroll(function(){
     $("h1").css("opacity", 1 - $(window).scrollTop() / 250);
  });
</script>
</body>
</html>