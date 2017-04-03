<?php	
	$nome = $_POST['nome'];
	$nomeD = $_POST['nomeD'];
	$nomeC = $_POST['nomeC'];
	$nomeP = $_POST['nomeP'];
	$nomeCo = $_POST['nomeCo'];
	
	$data = date("d/m/y");
	
	//INICIO DECLARAÇÃO - APROVAÇÃO
	echo "<p><h1>DECLARAÇÃO</h1></p>
		<p>Declaramos para os devidos fins que $nome concluiu satisfatoriamente 
	    as atividades da disciplina $nomeD do curso de $nomeC.</p>  
	    <p>Segue o desempenho de $nome:</p>";
	//INCLUSÃO DA TABELA DE DESEMPENHO			
	include ('desempenho.php'); 
	
	echo "<p>Com este resultado, o conceito de $nome  foi <em>$conceito</em>, já que sua nota total foi <strong>$soma</trong> pontos.</p>
		<p>Belo Horizonte, $data</p>
		<p>__________________________________________________</p>
		<p>$nomeP - Professor</p>
		<p>__________________________________________________</p>
		<p>$nomeCo - Coordenador</p>";	
    //FIM DECLARAÇÃO
?>