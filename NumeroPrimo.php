<?php

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

$obj = new NumeroPrimo;
$obj->inicio = 10;
$obj->final  = 29;
echo "Os numeros primos entre " . $obj->inicio . " e " . $obj->final . " são: \n";
$obj->mostrarNumerosPrimos();
