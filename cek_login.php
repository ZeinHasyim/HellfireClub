<?php 

include 'koneksi.php';
session_start();

$username   = $_POST['username'];
$password   = $_POST['password'];

$login = mysqli_query($koneksi, "SELECT * FROM akun WHERE username = '$username' AND password = '$password'");
$data  = mysqli_fetch_array($login);

if(!empty($data)) {
    $_SESSION['username']         = $data['username'];
    $_SESSION['password']         = $data['password'];
    $_SESSION['nama_lengkap']     = $data['nama_lengkap'];
    $_SESSION['no_hp']            = $data['no_hp'];
    $_SESSION['akun']         = $data['id'];
    echo "<script>window.location = 'input_artikel.php';</script>";
} else {
    echo "<script>alert('Akun anda tidak terdaftar');</script>";
    echo "<script>window.location = 'login.php';</script>";
}

?>