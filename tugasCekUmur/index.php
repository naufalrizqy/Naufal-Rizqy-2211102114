<!DOCTYPE html>
<html>
<head>
    <title>Form Umur</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Form Input Nama dan Umur</h2>
    <form method="POST">
        Nama: <input type="text" name="nama" required><br><br>
        Umur: <input type="number" name="umur" required><br><br>
        <input type="submit" name="submit" value="Cek Status">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $nama = htmlspecialchars($_POST['nama']);
        $umur = (int)$_POST['umur'];

        echo "<h3>Halo, $nama</h3>";
        if ($umur >= 18) {
            echo "<p>Status: <strong>Dewasa</strong></p>";
        } else {
            echo "<p>Status: <strong>Belum Dewasa</strong></p>";
        }
    }
    ?>
    <br>
    <a href="login.php">Login ke Sistem</a>
</body>
</html>