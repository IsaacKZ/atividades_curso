<?php
require_once "conexao.php";

$id = $_GET['id'];

$sql = "SELECT * FROM tb_cliente WHERE id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$id]);

$cliente = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<h2>Editar Cliente</h2>

<form action="salvar-edicao-cliente.php" method="POST">

    <input type="hidden" name="id" value="<?= $cliente['id'] ?>">

    Nome:<br>
    <input type="text" name="nm_nome"
           value="<?= $cliente['nm_nome'] ?>" required>
    <br><br>

    Endereço:<br>
    <input type="text" name="ds_endereco"
           value="<?= $cliente['ds_endereco'] ?>" required>
    <br><br>

    Telefone:<br>
    <input type="tel" name="nr_telefone"
           value="<?= $cliente['nr_telefone'] ?>" required>
    <br><br>

    Email:<br>
    <input type="email" name="ds_email"
           value="<?= $cliente['ds_email'] ?>" required>
    <br><br>

    <div>
        <input type="checkbox" id="estado_civil" name="ds_estcivil"
               <?= $cliente['ds_estcivil'] ? "checked" : "" ?>>
        <label for="estado_civil">Casado(a)?</label>
    </div>
    <br>

    <button type="submit">Salvar Alterações</button>

</form>