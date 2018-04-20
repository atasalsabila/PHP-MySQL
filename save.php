<?php

include "connect.php";

$nama = $_POST['nama'];
$umur = $_POST['umur'];
$email = $_POST['email'];
$number = $_POST ['number'];
$id = $_POST['id'];
$sql = "UPDATE phonebook " 
	 . "SET nama = '$nama', umur = '$umur', email = '$email', number = '$number' "
     . "WHERE id = $id ";
/* eksekusi query SQL */
$res = mysqli_query($link, $sql);
if($res) echo "Hore!! Data berhasil disimpan!";
else echo mysqli_error($link);

/* tutup koneksi MySQL */
mysqli_close($link);

header('location:select.php');