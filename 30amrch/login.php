<?php
session_start();
$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    if ($username === 'admin' && $password === '12345') {
        $_SESSION['user'] = $username;
        header('Location: profile.php');
        exit;
    } else {
        $error = 'Неверный логин или пароль';
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Вход</title>
    <style>
        body { font-family: Arial; background: #969292; }
        .form { background: white; padding: 20px; margin: 50px auto; width: 300px; border-radius: 5px; }
        input { width: 100%; padding: 8px; margin: 10px 0; border: 1px solid #802e2e; }
        button { width: 100%; padding: 10px; background: #000000; color: white; border: none; cursor: pointer; }
        .error { color: red; text-align: center; margin-bottom: 10px; }
    </style>
</head>
<body>
    <div class="form">
        <h2>Вход в систему</h2>
        <?php if ($error): ?><div class="error"><?= $error ?></div><?php endif; ?>
        <form method="POST">
            <input type="text" name="username" placeholder="Логин" required>
            <input type="password" name="password" placeholder="Пароль" required>
            <button type="submit">Войти</button>
        </form>
    </div>
</body>
</html>
