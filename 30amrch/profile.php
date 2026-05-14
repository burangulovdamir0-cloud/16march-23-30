<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Профиль</title>
    <style>
        body { font-family: Arial; background: #ada7a7; }
        .profile { background: white; padding: 20px; margin: 50px auto; width: 300px; border-radius: 5px; text-align: center; }
        a { display: inline-block; margin-top: 20px; color: #000000; text-decoration: none; }
        a:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <div class="profile">
        <h2>Добро пожаловать, <?= htmlspecialchars($_SESSION['user']) ?>!</h2>
        <p>Вы успешно авторизовались.</p>
        <a href="logout.php">Выйти</a>
    </div>
</body>
</html>
