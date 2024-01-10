<?php 
require_once(dirname(__FILE__) ."/database.php");
session_start();
$email = $_SESSION["email"];
$data = query("SELECT * FROM pengguna WHERE Email_Pengguna = '$email'")[0];
//var_dump($data);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profil Saya | Angkotify</title>
    <link rel="stylesheet" href="profile.css" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <header>
      <div class="jumbotron" style="display: flex; justify-content: space-between; align-items: center;">
        <a href="landing-page.php">
          <img src="img/logoAngkotify.png" alt="Angkotify" class="headlogo"/>
        </a>
        <a href="pilih-login.html" style="margin-left: auto;">
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
    

    <div id="profile-container">
      <h2>Profil Saya</h2>
      <form id="profile-form">
        <label for="name">Nama:</label>
        <input type="text" id="name" name="name" value="<?= $data['Nama_Pengguna']; ?>" readonly />

        <label for="phone">Nomor HP:</label>
        <input type="tel" id="phone" name="nomor_hp" value="<?= $data['nomor_hp']; ?>" readonly />

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?= $data['Email_Pengguna']; ?>" readonly />

        <label for="location">Domisili:</label>
        <input type="text" id="location" name="Domisili" value="<?= $data['Domisili']; ?>" readonly />

        <button type="button" onclick="editProfile()" class="edit">
          Edit Profil
        </button>
        <button type="button" onclick="saveProfile()">Simpan Profil</button>
      </form>
    </div>

    <script src="script.js"></script>
  </body>
</html>
