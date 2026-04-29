<?php 

function calcular ($n1, $n2, $operador) {
    if ($operador == "+" )
    return $n1 + $n2;

    else if ($operador == "-") {
        return $n1 - $n2;
    }

    else if ($operador == "*") {
        return $n1 * $n2;
    }

    else if ($operador == "/") {
        return $n1 / $n2;
    }
}

$n1 = 5;
$n2 = 10;
$operador = "*";
echo "Resultado " . calcular($n1,$n2, $operador) ."";

?>