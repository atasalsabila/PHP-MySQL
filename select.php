<!DOCTYPE html>
<html>
<head>
    <body style="background-color: #dce775;">
    <table bgcolor="#e6ee9c" border="6">
        <left>
    <h1>========HASIL FORM========</h1>
    </left>
    <title>FORM</title>
</head>
<?php

include "connect.php";

$sql = "SELECT id, nama, umur, email, number "
     . "FROM phonebook";
$res = mysqli_query($link, $sql);
echo "<tr>";
echo "<td>ID</td>";
echo "<td>Nama</td>";
echo "<td>Umur</td>";
echo "<td>Email</td>";
echo "<td>No. HP</td>";
echo "<td>Action</td>";
echo "</tr>";
while($baris = mysqli_fetch_array($res)) {
    $id = $baris['id'];
    echo "<tr>";
    echo "<td>" . $id . "</td>";
    echo "<td>" . $baris['nama'] . "</td>";
    echo "<td>" . $baris['umur'] . "</td>";
    echo "<td>" . $baris['email'] . "</td>";
    echo "<td>" . $baris['number'] . "</td>";
    echo '<td><a href="delete.php?id='.$id.'">Delete</a></td>'; 
    echo '  <td> <a href="edit.php?id='.$id.'">EDIT</a> </td>';
    echo "</tr>";
}
echo "</table>";
mysqli_close($link);
