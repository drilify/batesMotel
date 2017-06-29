<!DOCTYPE html>
<html>
<head>
	<title>Contato</title>
	<link rel="icon" href="img/Favicon.ico" type="image/ico"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script type="text/javascript" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
<?php include("includes/menu_include.php");?>

<article class="banner2">
  
</article>

<article class="conteudo4">
<h3>Contato</h3>
<form class="form-horizontal" name="form" action="envia.php" method="POST">
<fieldset>




<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Nome">Nome</label>  
  <div class="col-md-4">
  <input id="Nome" name="nome" type="text" placeholder="digite seu nome" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">E-mail:</label>  
  <div class="col-md-4">
  <input id="email" name="email" type="text" placeholder="email@email.com" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="textarea">Sugestões:</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="textarea" name="msg"></textarea>
  </div>
</div>

<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="filebutton">Enviar arquivo:</label>
  <div class="col-md-4">
    <input id="input-1a" type="file" class="file" data-show-preview="false">
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton">Enviar</label>
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">ENVIAR</button>
  </div>
</div>

</fieldset>
</form>
</article>
</body>
</html>

<?php include("includes/footer_include.php");?>
</body>
</html>