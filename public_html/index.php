<?php
session_start();

// Se já estiver autenticado, vai direto para a app
if (isset($_SESSION['login']) && $_SESSION['login'] === true) {
    header("Location: app.php");
    exit;
}

// Verificar envio do formulário
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    // Credenciais temporárias (só para teste)
    if ($email === 'admin@teste.pt' && $password === '1234') {
        $_SESSION['login'] = true;
        header("Location: app.php");
        exit;
    } else {
        $erro = "Email ou password incorretos.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Login - SIG Warehouse</title>
</head>
<body>

    <h2>Login</h2>

    <?php if (!empty($erro)): ?>
        <p style="color:red;"><?php echo $erro; ?></p>
    <?php endif; ?>

    <form method="post">
        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label>Password:</label><br>
        <input type="password" name="password" required><br><br>

        <button type="submit">Entrar</button>
    </form>

</body>
</html>
