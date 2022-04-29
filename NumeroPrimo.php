<?php
/**
 * Crie uma função que receba como parâmetro 2 números  inteiros (inicial e final)  
 * e retorne um array com os números primos estão compreendidos entre o valor inicial e o final,
 * desprezando o número inicial e final recebidos como parâmetro. 
 */


class NumeroPrimo
{
    public int $inicio;
    public int $final;

    public function ePrimo($numero)
    {
        if ($numero == 1) return false;
        if ($numero == 2) return true;

        $x = floor(sqrt($numero));
        for ($i = 2; $i <= $x; $i++) {
            if($numero % $i == 0) break;
        }

        if ($x == $i -1) {
            return true;
        } else {
            return false;
        }
    }

    public function mostrarNumerosPrimos()
    {
        for ($i = $this->inicio; $i < $this->final; $i++) {
            if ($this->ePrimo($i) == true) echo $i . ", ";   
        }
    }
}

//Abaixo seguindo o exemplo de teste para demonstração
$obj = new NumeroPrimo;
$obj->inicio = 10;
$obj->final  = 29;
echo "Os numeros primos entre " . $obj->inicio . " e " . $obj->final . " são: \n";
$obj->mostrarNumerosPrimos();
