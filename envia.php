<?php
// 1) pegar os dados obtidos pelo formulário e guardar em variáveis
$conecta=new PDO ("mysql:host=localhost;dbname=id1631134_bates;","id1631134_bates","12345");
$nome 	 = $_POST['nome'];
$email 	 = trim($_POST['email']);
$msg  = $_POST['msg'];

$sql='insert into cadastro (id,nome,email,msg) values (null,"'.$nome.'","'.$email.'","'.$msg.'")';

$insere = $conecta->prepare($sql);
$insere->execute();

echo("Cadastro efetuado!");
?>