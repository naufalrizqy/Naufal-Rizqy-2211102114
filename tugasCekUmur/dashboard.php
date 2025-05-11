<?php include "auth.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Selamat datang, <?= $_SESSION['user']; ?>!</h2>
    <p>Ini adalah halaman setelah login.</p>
    <a href="logout.php">Logout</a>
</body>
</html>