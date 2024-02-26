<?php
session_start();
include "config.php";

// Mengambil data username dan meng-hash password
$username = $_POST['username'];
$password = md5($_POST['password']);

// Memeriksa apakah data pengguna ada di database
$query = mysqli_query($con, "SELECT * FROM user WHERE username='$username' AND password='$password'");
$data = mysqli_fetch_array($query);
$jml = mysqli_num_rows($query);

if ($jml > 0) {
    // Jika pengguna valid, set variabel sesi dan redirect ke halaman tertentu
    $_SESSION['username'] = $data['username'];
    $_SESSION['password'] = $data['password'];

    // Tambahan langkah atau kondisi setelah login berhasil
    // Contoh: Redirect ke halaman dashboard
    header('location: index.php');
} else {
    // Jika login gagal, tampilkan pesan kesalahan dan redirect kembali ke halaman login
    echo "<p align='center'>Login gagal</p>";
    echo "<meta http-equiv='refresh' content='2; url=login.php'>";
}
?>