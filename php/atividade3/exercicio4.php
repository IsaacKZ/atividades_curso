<?php
    
    if (!empty($_POST["cep"])) {

        $cep = $_POST['cep'];
        $url = "https://viacep.com.br/ws/" . $cep . "/json/";
        $json = file_get_contents($url);
        $dados = json_decode($json, true);

        echo "Rua: " . $dados["logradouro"] . "<br>";
        echo "Bairro: " . $dados["bairro"] . "<br>";
        echo "Cidade: " . $dados["localidade"] . "<br>";
        echo "Estado: " . $dados["uf"] . "<br>";
    }

    ?>

<form method="POST">
    <input type="text" name="cep" placeholder="CEP">
    <button type="submit">Confirmar</button>
</form>