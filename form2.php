<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>FORM</title>
</head>

<style type="text/css">
    #save {
        color: white;
    }
</style>
<?php
if(isset($_POST['submit'])) {

include "connect.php";

$nama  = $_POST['nama'];
$umur = $_POST ['umur'];
$email = $_POST['email'];
$number   = $_POST['number'];

$sql = "INSERT INTO phonebook (nama, umur, email, number) "
     . "VALUES ('$nama', '$umur', '$email', '$number')";
/* eksekusi query SQL */
$res = mysqli_query($link, $sql);


/* tutup koneksi MySQL */
mysqli_close($link);
?>
<script type="text/javascript">
    window.alert("Hore!! Data berhasil disimpan!");
</script>
<?php 
}
?>

<body style="background-color: #607d8b;">
    <div class="form-box"  style="background-color: #cfd8dc">
        <center>
          <h1>ISI DATA BERIKUT INI </h1>
          </center>
    <body>
<form action="form2.php" method="POST">
                <label for="name">NAMA</label>
                <input type="text" id="nama" name="nama" placeholder="Nama Lengkap Anda....">
                <br>
                <label for="lname">UMUR</label> 
                <input type="number" id="umur" name="umur" placeholder="Umur Anda....">
                <br>
                <label for="name">Email</label> 
                <input type="text" id="email" name="email" placeholder="Email Anda....">
                <br>
                <label for="name">N0. HP</label><br>
                <input type="number" id="number" name="number" placeholder="No HP Anda....">
                <br>
				<input id="save" type="submit" value="Save!" name="submit" 
                style="background-color: #37474f">
        </form>
    </body>
</html>