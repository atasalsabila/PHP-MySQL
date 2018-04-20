<?php

include "connect.php";

$nama  = $_POST['nama'];
$umur = $_POST ['umur'];
$email = $_POST['email'];
$number   = $_POST['number'];

$sql = "INSERT INTO phonebook (nama, umur, email, number) "
     . "VALUES ('$nama', '$umur', '$email', '$number')";
/* eksekusi query SQL */
$res = mysqli_query($link, $sql);
if($res) echo "Hore!! Data berhasil disimpan!";
else echo mysqli_error($link);

/* tutup koneksi MySQL */
mysqli_close($link);
