<?php
session_start();

if (!isset($_SESSION["login"]) && !isset($_SESSION["email"])){
  header("Location: pilih-login.html");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Penumpang | Angkotify</title>
    <link rel="stylesheet" href="style.css" />
    <script src="https://unpkg.com/feather-icons"></script>
  </head>
  <body>
    <header>
      <div class="jumbotron" style="display: flex; justify-content: space-between; align-items: center;">
        <a href="landing-page.php">
          <img src="img/logoAngkotify.png" alt="Angkotify" class="headlogo"/>
        </a>
        <a href="logout.php" style="margin-left: auto;">
         <button style="font-size: 12px;">Keluar</button>
        </a>
     </div>
      <nav>
        <ul>
          <li><a href="landing-page.php">Home</a></li>
          <li><a href="lokasi-angkot.html">Pesan Sekarang</a></li>
          <li><a href="profile.php">Profile</a></li>
          <li><a href="help-page.html">Help</a></li>
        </ul>
      </nav>
    </header>
    <main>
      <div class="card" style="width: fit-content;">
        <div class="textlanding">
          <h1>Selamat datang di ANGKOTIFY</h1>
          <p>
            Angkotify merupakan Website yang menyediakan layanan Transportasi Online
            dengan bentuk Angkot yang memberikan fitur-fitur dan kemudahan lain
            nya seperti pembayaran digital, lokasi sehingga lebih flexibel dalam
            penggunaannya.
          </p>
          <h7>AYO GUNAKAN ANGKOTIFY SEKARANG!</h7>
          <p class="mulailanding">Mulai melihat lokasi angkot</p>
          <a href="lokasi-angkot.html"><button>Lihat</button></a>
        </div>

      </div>
    </main>

    <footer>
      <p>Copyright &copy; Angkotify</p>
    </footer>
  </body>
</html>
