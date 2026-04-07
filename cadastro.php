<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: index.php");
}

include("conexao.php");

if ($_POST) {
    $sql = "INSERT INTO funcionarios 
    (nome, cargo, email, telefone, situacao)
    VALUES 
    ('$_POST[nome]', '$_POST[cargo]', '$_POST[email]', '$_POST[telefone]', $_POST[situacao])";

    pg_query($conn, $sql);
    echo "Salvo!";
}
?>

<form method="POST">
    <input type="text" name="nome" placeholder="Nome"><br>
    <input type="text" name="cargo" placeholder="Cargo"><br>
    <input type="email" name="email" placeholder="Email"><br>
    <input type="text" name="telefone" placeholder="Telefone"><br>

    <label><input type="radio" name="situacao" value="1"> Ativo</label>
    <label><input type="radio" name="situacao" value="0"> Inativo</label><br>

    <button>Salvar</button>
</form>
