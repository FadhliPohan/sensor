<?php
// menyimpan inputan dari halaman login
$email  = $_POST['email'];
$pass   = $_POST['password'];

// memanggil konfigurasi database
include 'inc/koneksi.php';
// perintah SQL untuk chek data ke database
$sql  = "select * from tbl_user where email='$email'";
$user = mysqli_query($konek, $sql);

// menghitung jumlah data yang ketemu
if(mysqli_num_rows($user)>0){
    // kalau berhasil maka dialihkan ke halaman index
    session_start();
    $userData = mysqli_fetch_array($user);
    
    if(password_verify($pass,$userData['password'])){
        // password benar
        $_SESSION['status_login']= "sudah_login";
        $_SESSION['email']   = $userData['email'];
        $_SESSION['password']   = $userData['password'];
        header("location:home.php");
    }else{
         header("location:Login.php");
    }

}else{
    // kalau gagal maka balik ke halaman login
    header("location:Login.php");
}
?>
