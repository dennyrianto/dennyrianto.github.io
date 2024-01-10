<?php 

// Connect ke database
$conn = new mysqli('localhost', 'root', '', 'angkotify');

if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : " . $conn->connect_error);
}

function query($sql) {
    global $conn;

    $statement = $conn->prepare($sql);
    $statement->execute();
    $result = $statement->get_result();
    $arr = [];
    while($a = $result->fetch_assoc()){
        $arr[] = $a;
    }
    return $arr;
}

//masukindatasupir
function insertDataSupir($data) {
    global $conn;

    $Nama_Supir = $data['Nama_Supir'];
    $NoKTP_Supir = $data['NoKTP_Supir'];
    $Tgl_Lahir = $data['Tgl_Lahir'];
    $No_SIM = $data['No_SIM'];
    $Plat_Nomor = $data['Plat_Nomor'];
    $NoHP_Supir = $data['NoHP_Supir'];
    $Pw_Supir = $data['Pw_Supir'];
    $Pw_Supir = password_hash($Pw_Supir, PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO supir(Nama_Supir, NoKTP_Supir, Tgl_Lahir, No_SIM, Plat_Nomor, NoHP_Supir, Pw_Supir) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $Nama_Supir, $NoKTP_Supir, $Tgl_Lahir, $No_SIM, $Plat_Nomor, $NoHP_Supir, $Pw_Supir);
    if(!$stmt->execute()) {
        throw new Exception("". $stmt->error);
    }
    echo "Pendaftaran Berhasil Dilakukan...";
    $stmt->close();
     // Menambahkan delay 1 detik
     sleep(1);

     // Setelah pendaftaran berhasil, arahkan pengguna ke halaman login-supir.html
     header("Location: login-supir.php");
 
}
//datapengguna
function insertDataPengguna($data) {
        global $conn;
        $Nama_Pengguna = $data['Nama_Pengguna'];
        $Email_Pengguna = $data['Email_Pengguna'];
        $Pw_Pengguna = $data['Pw_Pengguna'];
        $Domisili = $data['Domisili'];
        $nomor_hp = $data['nomor_hp'];
        $Pw_Pengguna = password_hash($Pw_Pengguna, PASSWORD_DEFAULT);
    
        $stmt = $conn->prepare("INSERT INTO pengguna(Nama_Pengguna, Email_Pengguna, Pw_Pengguna, Domisili, nomor_hp) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $Nama_Pengguna, $Email_Pengguna, $Pw_Pengguna, $Domisili, $nomor_hp);
        if(!$stmt->execute()) {
            throw new Exception("". $stmt->error);
        }
        echo "Pendaftaran Berhasil Dilakukan...";
        $stmt->close();

    // Menambahkan delay 1 detik
    sleep(1);

    // Setelah pendaftaran berhasil, arahkan pengguna ke halaman login-supir.html
    header("Location: login-pengguna.php");

}
//login supir
function loginSupir($data) {
    global $conn;
    $email = $data["input-email"];
    $password = $data["input-password"];
    $no_kendaraan = $data["input-type"];

    $statement = $conn->prepare("SELECT Pw_Supir FROM supir WHERE Nama_Supir = ? && Plat_Nomor = ?");
    $statement->bind_param("ss", $email, $no_kendaraan);
    if(!$statement->execute()) {
        throw new Exception("ERROR". $statement->error);
    }
    $result = $statement->get_result();
    $result = $result->fetch_assoc();
    if(password_verify($password, $result["Pw_Supir"])) {
        $_SESSION["login"] =  true;
        $_SESSION["namaSupir"] = $email;
        header("Location: indexsupir.php");
    } else {
        echo "Password Salah";
    }

}
//login pengguna
function loginPengguna($data) {
    global $conn;
    $email = $data["input-email"];
    $password = $data["input-password"];
    
    $statement = $conn->prepare("SELECT Pw_Pengguna FROM pengguna WHERE Email_Pengguna = ?");
    $statement->bind_param("s", $email);
    if(!$statement->execute()) {
        throw new Exception("ERROR". $statement->error);
    }
    $result = $statement->get_result();
    $result = $result->fetch_assoc();
    if(password_verify($password, $result["Pw_Pengguna"])) {
        $_SESSION["login"] =  true;
        $_SESSION["email"] = $email;
        header("Location: landing-page.php");
    } else {
        echo "Password Salah"; }
}

//login admin
function loginadmin($data) {
    global $conn;
    $username = $data["input-username"];
    $password = $data["input-password"];
    
    $statement = $conn->prepare("SELECT Pw_Admin FROM admin WHERE Username = ?");
    $statement->bind_param("s", $username);
    if(!$statement->execute()) {
        throw new Exception("ERROR". $statement->error);
    }
    $result = $statement->get_result();
    $result = $result->fetch_assoc();
    if(password_verify($password, $result["Pw_Admin"])) {
        $_SESSION["login"] =  true;
        $_SESSION["input-username"] = $username;
        header("Location: admin-page.php");
    } else {
        echo "Password Salah"; }
}



    
?>