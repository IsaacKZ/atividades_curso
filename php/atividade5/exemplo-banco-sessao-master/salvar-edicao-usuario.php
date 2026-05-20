<?php
require_once "conexao.php";

$id       = $_POST['id'];
$nome     = $_POST['nm_nome'];
$endereco = $_POST['ds_endereco'];
$telefone = $_POST['nr_telefone'];
$email    = $_POST['ds_email'];
$estcivil = isset($_POST['ds_estcivil']) ? 1 : 0;

$sql = "UPDATE tb_cliente
        SET nm_nome     = :nome,
            ds_endereco = :endereco,
            nr_telefone = :telefone,
            ds_email    = :email,
            ds_estcivil = :estcivil
        WHERE id = :id";

$stmt = $pdo->prepare($sql);
$stmt->bindParam(':nome',     $nome,     PDO::PARAM_STR);
$stmt->bindParam(':endereco', $endereco, PDO::PARAM_STR);
$stmt->bindParam(':telefone', $telefone, PDO::PARAM_STR);
$stmt->bindParam(':email',    $email,    PDO::PARAM_STR);
$stmt->bindParam(':estcivil', $estcivil, PDO::PARAM_INT);
$stmt->bindParam(':id',       $id,       PDO::PARAM_INT);

$stmt->execute();

header("Location: listar-clientes.php");