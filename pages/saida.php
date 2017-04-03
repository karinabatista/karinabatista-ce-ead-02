<?php 
	include_once('header.php'); 
	include('teste.php');
	echo "<link rel='stylesheet' type='text/css' href='../css/style.css'>";

	//IMAGEM LOGO
	echo "<p><img src='$link'></p>";
	
	//VERIFICAÇÃO DE PÁGINA
	if ($soma < 60) {
		include('reprovado.php');
	} else {
		include('aprovado.php');
	}
	include('footer.php');
?>