<?php
    $produto = [
        "nome" => "leite",
        "preco" => 5.99,
        "qtd_estoque" => 192,
    ];

    $valor_estoque = $produto["preco"] * $produto["qtd_estoque"];

    echo "Nome: " . $produto["nome"] . "<br>";
    echo "Preço: " . $produto["preco"] . "<br>";
    echo "Quantidade no estoque: " . $produto["qtd_estoque"] . "<br>";
    echo "Valor total do estoque: " . $valor_estoque;
?>