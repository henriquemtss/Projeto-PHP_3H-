<?php 

class Carros {

	var $cor;
	var $ano;
	var $numPortas;
	var $peso;

	function Acelerar(){
		echo "Acelerando <br>";
	}

	function InformarCor(){
		print 'Cor carro: ' .$this->cor . "<br>";
		print 'Ano carro: ' .$this->ano . "<br>";
		print 'Portas do carro: ' .$this->numPortas . "<br>";
		print 'Peso do carro: ' .$this->peso . "<br>";
	}
}
 ?>
