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
    <title>Supir | Angkotify</title>
    <link rel="stylesheet" href="style.css" />
    <script src="https://unpkg.com/feather-icons"></script>
  </head>
  <body>
    <header>
      <div class="jumbotron" style="display: flex; justify-content: space-between; align-items: center;">
        <a href="indexsupir.php">
          <img src="img/logoAngkotify.png" alt="Angkotify" class="headlogo"/>
        </a>
        <a href="pilih-login.html" style="margin-left: auto;">
         <button style="font-size: 12px;">Keluar</button>
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
    <main>
      <div class="card" style="align-self: center;">
        <h1>Hai Supir Kami</h1>
        <p>
          Selamat Berkerja dan selalu berhati-hati dalam Berkerja, Jaga Aturan Berkendara Dan Tetap Semangat!!
        </p>
       
          
      </div>

      <!-- <div class="card" style="text-align: center; align-self: stretch">
        <p>Mulai melihat lokasi angkot</p>
        <a href="lokasi-angkot.html"><button>Lihat</button></a>
        
      </div> -->

    </main>

    <footer>
      <p>Copyright &copy; Angkotify</p>
    </footer>
  </body>
</html>
