<?php
    $cachorro = [
        "nome" => "jorge",
        "idade" => "desconhecida",
        "peso" => "40 kg"
    ]
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exemplo 2 GET</title>
</head>
<body>
    <h1> O nome do seu cachorro é <?=$cachorro['nome']?>, a idade dele é <?=$cachorro['idade']?> e ele tem <?=$cachorro['peso']?></h1>
</body>
</html>