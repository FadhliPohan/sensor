

<?php

// memanggil konfigurasi database
include 'inc/koneksi.php';
// menyimpan inputan dari halaman login
$username      = $_POST['username'];
$pass      = $_POST['password'];


// perintah SQL untuk chek data ke database
$sql  = "select * from tbl_user where username='$username'";
$user = mysqli_query($konek, $sql);

// menghitung jumlah data yang ketemu
if(mysqli_num_rows($user)>0){
    // kalau berhasil maka dialihkan ke halaman index
    session_start();
    $userData = mysqli_fetch_array($user);
    
    if(password_verify($pass,$userData['password'])){
        // password benar
        $_SESSION['status_login'] = "sudah_login";
        $_SESSION['username'] = $userData['username'];
	
        header("location:index.php");
    }else{
        echo"<script>alert('Username dan Password tidak terdaftar');location.href='index.php'</script>";
    }

}else{
    // kalau gagal maka balik ke halaman login
    header("location:login.php");
}
?>