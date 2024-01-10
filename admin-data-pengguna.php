<?php 
require_once(dirname(__FILE__) ."/database.php");
session_start();

$query = "SELECT *
			  FROM pengguna
			  ORDER BY id ASC";
$pengguna = query($query);
$i = 1;
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pembayaran | Angkotify</title>
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
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
        <h2>Data Penumpang</h2>
        <table style="font-size: medium;">
            <thead>
                <tr>
                    <th>No.</th>	
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Password</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ( $pengguna as $row ) : ?>
                    <tr>
                        <td><?= $i; ?></td>
                        <td><?= $row["Nama_Pengguna"]; ?></td>
                        <td><?= $row["Email_Pengguna"]; ?></td>
                        <td><?= $row["Pw_Pengguna"]; ?></td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>

        </table>
        
      </div>
    </main>

    <footer>
      <p>Copyright &copy; Angkotify</p>
    </footer>
  </body>
</html>