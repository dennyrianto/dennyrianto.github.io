<?php 
session_start();

if (!isset($_SESSION["login"]) && !isset($_SESSION["input-username"])){
  header("Location: pilih-login.html");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin | Angkotify</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="jumbotron">
            <a href="#"><img src="img/logoAngkotify.png" alt="Angkotify" class="headlogo"></a>
        </div>
        <nav>
            <ul>
                <li><a href="admin-page.php">Home</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="card">
            <div>
                <h2>Halaman Admin</h2>
                <p>Akses ke data penumpang dan data pengemudi</p>
                <a href="admin-data-pengguna.php"><button class="bt-datapenumpang">Data Penumpang</button></a>
                <a href="admin-data-supir.php"><button class="bt-datapengemudi">Data Pengemudi</button></a>
            </div>
        </div>
    </main>

    <footer>
        <p>Copyright &copy; Angkotify</p>
    </footer>
</body>
</html>