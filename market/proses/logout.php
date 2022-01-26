<?php
session_start();

session_destroy();

echo "<script languange= 'javascript'>
    alert('Berhasil LogOut')
    document.location = '../index.php'
    </script>";