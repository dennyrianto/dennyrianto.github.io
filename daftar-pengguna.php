<?php 
require_once(dirname(__FILE__) ."/database.php");
if(isset($_POST["submit"])) {
  try {
    insertDataPengguna($_POST);
  } catch (Throwable $th) {
    echo "ERROR";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Angkotify - Daftar Pengguna</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body style="background-color: #eeeeee;">

        <section class="vh-100 gradient-custom">
            <div class="container py-5 h-100">
              <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                  <div class="card bg-body" style="border-radius: 1rem; box-shadow: 5px 10px 18px #dddddd">
                    <div class="card-body p-5 text-center">
          
                      <div class="mb-md-5 mt-md-4 pb-5">
          
                        <img src="img/logoAngkotify.png" style="margin-bottom: 50px">
                        <h4 class="mb-4">Pendaftaran Pengguna</h4>

                        <!-- Form daftar pengguna -->
                        <form action="" method="post">
                          
                          <div class="form-outline form-white mb-4">
                            <input type="text" id="Nama_Pengguna" class="form-control form-control-lg" placeholder="Nama" name="Nama_Pengguna"/>
                          </div>

                          <div class="form-outline form-white mb-4">
                            <input type="email" id="Email_Pengguna" class="form-control form-control-lg" placeholder="Email" name="Email_Pengguna" required/>
                          </div>
            
                          <div class="form-outline form-white mb-4">
                            <input type="password" id="Pw_Pengguna" class="form-control form-control-lg" placeholder="Password" name="Pw_Pengguna" />
                          </div>

                          <div class="form-outline form-white mb-4">
                            <input type="text" id="Domisili" class="form-control form-control-lg" placeholder="Alamat" name="Domisili"/>
                          </div>

                          <div class="form-outline form-white mb-4">
                            <input type="tel" id="nomor_hp" class="form-control form-control-lg" placeholder="Nomor HP" name="nomor_hp"/>
                          </div>
           
                          <button class="btn btn-outline-light btn-lg px-5" name="submit" type="submit" style="background-color: #418E02;">Daftar Sebagai Pengguna</button>
                        </form>
                      </div>
      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>


    

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>