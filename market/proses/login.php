<?php
include "koneksi.php";
session_start();
$username = $_POST["username"];
$password = $_POST["password"];

$login = mysqli_query($db, "select * from users where username='$username' and password='$password'");

$cek_login = mysqli_num_rows($login);
if ($cek_login > 0) {
    $data = mysqli_fetch_assoc($login);
    if ($data['role'] == 1) {
        $_SESSION['username'] = $username;
        $_SESSION['role'] = "1";
        header("location:../admin/home.php");
    }
} else {
    header("location:../index.php?pesan=gagal");
}