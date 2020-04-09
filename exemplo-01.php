<?php 
//Classe abstrata (classe mae generica) é um modelo de classe que contém informações genéricas para a classe que a for herdar

//Um objeto nunca vai instanciar a classe abstrata

//A diferenca e que definmos metodos e como eles serao implementados na classe filha que extende da classe abstrata

//Outra diferenca e que uma classe herda só de uma classe abstrata, mas uma classe pode implementar várias interfaces

//Outra diferenca e que a interface so declara o que voce precisa colocar na sua classe

//Outra diferenca e que ao herdar da classe abstrata HERDAMOS as propriedes, permitindo herdalas conforme foram DEFINIDAS

interface Veiculo
{
	public function acelerar($velocidade);

	public function frenar($velocidade);

	public function trocarMarcha($marcha);
}


abstract class Automovel implements Veiculo
{
	public function acelerar($velocidade)
	{

		echo "o veículo aceleoru até " . $velocidade . " km/h";

	}

	public function frenar($velocidade)
	{

		echo "o veículo frenou até " . $velocidade . " km/h";

	}

	public function trocarMarcha($marcha)
	{

		echo "O veículo engatou a marcha " . $marcha;

	}	

}


class Celta extends Automovel
{

	public function empurrar()
	{

	}

}

$carro = new Celta();
$carro->acelerar(200);

 ?>