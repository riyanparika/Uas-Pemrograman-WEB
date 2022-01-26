<?php

include "koneksi.php";

$nama = $_POST["nama"];
$jumlah = $_POST["jumlah"];
$tipe = $_POST["tipe"];
$alamat = $_POST["alamat"];

$input = mysqli_query($db, "INSERT INTO `belumdikirim` (`id`, `jumlah`, `nama`, `tipe`, `alamat`) VALUES (NULL, '$jumlah', '$nama', '$tipe', '$alamat')");

if ($input) {
    header("location:../admin/home.php");

}