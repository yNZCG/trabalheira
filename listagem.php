<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: index.php");
}

include("conexao.php");

$busca = $_GET['busca'] ?? '';
?>

<form method="GET">
    <input type="text" name="busca" placeholder="Buscar">
    <button>Pesquisar</button>
</form>

<table border="1">
<tr>
    <th>ID</th>
    <th>Nome</th>
    <th>Cargo</th>
    <th>Email</th>
    <th>Status</th>
</tr>

<?php
$sql = "SELECT * FROM funcionarios WHERE nome ILIKE '%$busca%'";
$result = pg_query($conn, $sql);

while ($row = pg_fetch_assoc($result)) {
    echo "<tr>
        <td>{$row['id']}</td>
        <td>{$row['nome']}</td>
        <td>{$row['cargo']}</td>
        <td>{$row['email']}</td>
        <td>" . ($row['situacao'] ? 'Ativo' : 'Inativo') . "</td>
    </tr>";
}
?>
</table>

<a href="dashboard.php">Voltar</a>
