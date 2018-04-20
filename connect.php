<?php

/* konfigurasi */
$user = 'user';
$pass = 'rahasia';
$host = 'localhost';
$db   = 'phonebook';

/* buat koneksi ke server mysql */
$link = mysqli_connect($host, $user, $pass, $db);

if(mysqli_connect_errno()) {
    echo "Koneksi database gagal dibuat";
    exit;
}