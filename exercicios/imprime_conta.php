<?php 
 	
 	//insere a classe
	include_once 'contas.php';

	//cria objeto
	$valor = new Contas();

	// atribuir valores
	$valor->numAge = 4151;

	$valor->numConta = '15424-0';

	$valor->nome = 'Henrique Matos';

	$valor->saldo = 'R$ 1000,00';

	//imprime Informações

	$valor->ExibeDados();

 ?>