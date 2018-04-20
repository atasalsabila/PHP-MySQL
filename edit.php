<?php

include "connect.php";

$id = $_GET['id'];
$sql = "SELECT id, nama, umur, email, number "
     . "FROM phonebook "
     . "WHERE id = $id";
$res = mysqli_query($link, $sql);
$baris = mysqli_fetch_array($res)
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>FORM</title>
</head>
<body style="background-color: #607d8b;">
    <div class="form-box"  style="background-color: #cfd8dc">
        <center>
          <h1>ISI DATA BERIKUT INI </h1>
          </center>
    <body>
<form action="save.php" method="POST">
                <label for="name">NAMA</label>
                <input type="text" id="nama" name="nama" value="<?php echo $baris ['nama'] ?>">
                <br>
                <label for="lname">UMUR</label> 
                <input type="number" id="umur" name="umur" value="<?php echo $baris ['umur'] ?>">
                <br>
                <label for="name">EMAIL</label> 
                <input type="text" id="email" name="email" value="<?php echo $baris ['email'] ?>">
                <br>
                <label for="name">N0. HP</label>
                <input type="number" id="number" name="number" value="<?php echo $baris ['number'] ?>">
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <br>
				<input type="submit" value="Save!"
                style="background-color: #37474f">
                
        </form>
    </body>
</html>

