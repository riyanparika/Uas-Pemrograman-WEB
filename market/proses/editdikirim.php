<?php

include "koneksi.php";

$id = $_POST["id"];
$nama = $_POST["nama"];
$jumlah = $_POST["jumlah"];
$tipe = $_POST["tipe"];
$alamat = $_POST["alamat"];

$input = mysqli_query($db, "UPDATE `sudahdikrim` SET `jumlah` = '$jumlah', `nama` = '$nama', `tipe` = '$tipe', `alamat` = '$alamat' WHERE `sudahdikirim`.`id` = $id;");

if ($input) {
    header("location:../admin/home.php");

}