<?php 
require_once(dirname(__FILE__) . "/database.php");
$data = query("SELECT * FROM transaksi WHERE id_transaksi = '10'")[0];
//var_dump($data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bukti Bayar | Angkotify</title>
    <link rel="stylesheet" href="style.css" />
    <script src="https://unpkg.com/feather-icons"></script>
</head>
<body>
    <header>
        <div class="jumbotron">
            <a href="#">
                <img src="img/logoAngkotify.png" alt="Angkotify" class="headlogo" />
            </a>
        </div>
        <nav>
            <ul>
            <li><a href="indexsupir.php">Home</a></li>
            <li><a href="buktibayar.php">Bukti Pembayaran Penumpang</a></li>
            <li><a href="profilesupir.php">Profile</a></li>
            <li><a href="help-pagesupir.html">Help</a></li>
            </ul>
        </nav>
    </header>

    <div style="text-align: center">
        <h1>Bukti Pembayaran Pelanggan Angkot</h1>
        <p style="font-size: large">Bukti Pembayaran yang ada pada halaman ini, merupakan bukti pelanggan sudah melakukan pembayaran saat sampai ditujuan mereka</p>
    </div>

    <main id="lokasi-angkot">
        <div class="card">
            <div id="content">
                <label for="name">Id_Transaksi:</label>
                <input type="text" id="content" name="id_transaksi" value="<?= $data['id_transaksi']; ?>" readonly />
                <label for="name">Id_Pengguna:</label>
                <input type="text" id="content" name="id_Pengguna" value="<?= $data['id_Pengguna']; ?>" readonly />
                <label for="name">Tanggal Transaksi:</label>
                <input type="text" id="content" name="tanggal" value="<?= $data['tanggal']; ?>" readonly />
                <label for="name">Bukti Screenshoot</label>
                <img src="berkas/<?= $data['img']; ?>" alt="Bukti Screenshoot" />
            </div>
        </div>
        <!-- ... (bagian card dan konten lainnya tetap sama) ... -->
    </main>

    <footer>
        <p>Copyright &copy; Angkotify</p>
    </footer>
</body>
</html>
