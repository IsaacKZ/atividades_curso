<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>

<?php // se todos os campos estiverem preenchidos, o programa prossegue
    if (!empty($_POST["cliente"]) && !empty($_POST["produto"]) && !empty($_POST["estoque"]) && !empty($_POST["preco"]) && !empty($_POST["qtd_venda"])) {
        $preco = $_POST["preco"];
        $cliente = $_POST["cliente"];
        $estoque = $_POST["estoque"];
        $qtd_venda = $_POST["qtd_venda"];
        $produto = $_POST["produto"];

        if ($qtd_venda > $estoque) {
            echo "A quantidade de compra não pode ser maior que o estoque!";
            exit;
        }

        $preco_final = $preco * $qtd_venda;

        echo "Nome cliente: " . $cliente . "<br>";
        echo "Nome do produto: " . $produto . "<br>";
        echo "Preço: " . $preco . "<br>";
        echo "Estoque: " . $estoque . "<br>";
        echo "Quantidade vendida: " . $qtd_venda . "<br>";
        echo "Preço final: " . $preco_final;

        $dados = [
            'preco' => $preco,
            'cliente' => $cliente,
            'estoque' => $estoque,
            'qtd_venda' => $qtd_venda,
            'produto' => $produto
        ];

        file_put_contents("dados.json", json_encode($dados));
    }

?>

    <form method="POST">
        <input type="text" name="cliente" placeholder="Nome do cliente">
        <input type="text" name="produto" placeholder="Nome do produto">
        <input type="number" name="estoque" placeholder="Quantidade no estoque">
        <input type="number" name="preco" placeholder="Preço por unidade">
        <input type="number" name="qtd_venda" placeholder="Quantidade vendida">
        <input type="checkbox" name="vip" value="1">
        <button type="submit">Salvar em JSON</button>
    </form>

</body>
</html>