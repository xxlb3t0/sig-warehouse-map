<?php
session_start();

// Bloquear acesso direto
if (!isset($_SESSION['login']) || $_SESSION['login'] !== true) {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>SIG Warehouse</title>
</head>
<body>

    <h1>Bem-vindo ao SIG Warehouse</h1>
    <p>Login efetuado com sucesso.</p>

</body>
</html>
