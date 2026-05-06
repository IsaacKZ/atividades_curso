<?php

$json = file_get_contents('dados.json');

$dados = json_decode($json, true);

foreach ($dados as $dado) {
    echo $dado;
}

?>