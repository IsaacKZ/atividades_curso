<?php
require_once "conexao.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    try {

        //  Capturando e limpando dados do formulário
        $nome      = trim($_POST["nm_usuario"] ?? "");
        $login  = trim($_POST["nm_loginn"] ?? "");
        $senha  = trim($_POST["senha"] ?? "");
        $email     = trim($_POST["ds_email"] ?? "");

        //  Validação simples (didática)
        if ($nome == "") {
            die("O nome é obrigatório.");
        }

        $sql = "INSERT INTO tb_usuario
                (nm_usuario, nm_loginn, ds_password, ds_email)
                VALUES
                (:nome, :loginn, :senha, :email)";

        /*
        prepare -> é um método do PHP Data Objects (PDO) que prepara uma consulta SQL para execução, retornando um objeto
        
        O bindParam() no PHP PDO é um método usado para vincular (associar) uma variável PHP a um marcador nomeado (:nome) ou de interrogação (?) em uma consulta SQL preparada
        
        */ 


        $stmt = $pdo->prepare($sql);

        //  Bind dos parâmetros
        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":senha", $senha);
        $stmt->bindParam(":loginn", $login);
        $stmt->bindParam(":email", $email);

        //Executa
        $stmt->execute();

        echo "Usuario cadastrado com sucesso!";
        

    } catch (PDOException $e) {
        echo "Erro ao cadastrar: " . $e->getMessage();
    }

} else {
    echo "Erro no envio do formulário.";
}