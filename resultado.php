<?php

$para= "contato.joaolfc@hotmail.com";
$assunto= "Contato pelo Site";

$nome = $_POST ['name'];
$email = $_POST ['email'];
$tel = $_POST ['tel'];
$whats = $_POST ['whats'];
$text = $_POST ['text'];
$comentario = $_POST ['comentario'];


	$corpo= "<strong> Mensagem de Contato</strong> <br><br>";
	$corpo .="<strong> Nome: </strong> $nome ";
	$corpo .="<br><strong> Email: </strong> $email ";
	$corpo .="<br><strong> Telefone: </strong> $tel ";
	$corpo .="<br><strong> Whats: </strong> $whats ";
	$corpo .="<br><strong> Assunto: </strong> $text ";
	$corpo .="<br><strong> Comentario: </strong> $comentario ";

	$header= "Content-Type: text/html; charset= utf-8\n";
	$header.="From: $email Reply-to: $email\n";
	
	@mail($para,$assunto,$corpo,$header);
	

	header("location:index.html?msm=enviado");


?>