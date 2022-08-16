<?php 
	
	//insere a classe
	include_once 'carros.php';

	//cria objeto
	$valor = new Carros();

	// atribuir valores

	$valor->cor = 'Roxo';

	$valor->ano ='2020';

	$valor->numPortas = '4 portas';

	$valor->peso = '200 Kg';

	//imprime Informações

	$valor->Acelerar();

	$valor->InformarCor();

 ?>