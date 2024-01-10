<?php 
require_once(dirname(__FILE__) ."/database.php");
session_start();
$namaSupir = $_SESSION["namaSupir"];
$data = query("SELECT * FROM supir WHERE Nama_Supir = '$namaSupir'")[0];
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
        <a href="indexsupir.html">
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
    

    <div id="profile-container">
      <h2>Profil Saya</h2>
      <form id="profile-form">
        <label for="name">Nama:</label>
        <input type="text" id="name" name="name" value="<?= $data['Nama_Supir']; ?>" readonly />

        <label for="phone">Nomor HP:</label>
        <input type="tel" id="phone" name="nomor_hp" value="<?= $data['NoHP_Supir']; ?>" readonly />

        <label for="plat_nomor">Nomor Kendaraan:</label>
        <input type="text" id="plat_nomor" name="Email_Pengguna" value="<?= $data['Plat_Nomor']; ?>" readonly />


        <button type="button" onclick="editProfile()" class="edit">
          Edit Profil
        </button>
        <button type="button" onclick="saveProfile()">Simpan Profil</button>
      </form>
    </div>

    <script src="script.js"></script>
  </body>
</html>
