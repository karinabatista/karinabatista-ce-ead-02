<?php
	
	$nVA1 = $_POST['nVA1'];
	$nVA2 = $_POST['nVA2'];
	$nVA3 = $_POST['nVA3'];
	$nTrab = $_POST['nTrab'];
	$link = $_POST['link'];
	$lado = $_POST['lado'];
	
	//MEDIA DAS NOTAS
	$dVA1 = round($nVA1/15*100);
	$dVA2 = round($nVA2/25*100);
	$dVA3 = round($nVA3/35*100);
	$dTrab = round($nTrab/25*100);
	
	//TOTAL DAS NOTAS
	$soma = $nVA1 + $nVA2 + $nVA3 + $nTrab;

	//VERIFICAÇÃO DO CONCEITO
	$conceito = '';
	if ($soma >= 90) {
		$conceito = 'Excelente';
	} 
	elseif ($soma >= 80) {
		$conceito = 'Ótimo';
	}
	elseif ($soma >= 70) {
		$conceito = 'Bom';
	}
	elseif ($soma >= 60) {
		$conceito = 'Ruim';
	}
	if ($soma < 60) {
		$conceito = 'Péssimo';
	}
	
	//PERIMETRO
	$perimetro = 4*$lado;
	
	//AREA
	$area = $lado*$lado;
?>