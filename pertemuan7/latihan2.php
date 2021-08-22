<!--
Developer : Damli Hermawan
No Handphone : 081221463627
Instagram : damlihermawan
Git : damlihermawan2020
-->
<?php 
// cek apakaha tidak ada data di $_GET 
if (!isset($_GET["nama"])||
    !isset($_GET["nim"])||
    !isset($_GET["jurusan"])||
    !isset($_GET["email"])||
    !isset($_GET["gambar"])){
    //redirect
    header("Location: latihan1.php");
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan2</title>
    <style>
         .gambar
{
    width: 50px;
    height: 50px;
}
    </style>
</head>
<body>
    <ul>
        <li><img class="gambar" src="img/<?= $_GET["gambar"]; ?>"></li>
        <li><?= $_GET["nama"]; ?></li>
        <li><?= $_GET["nim"]; ?></li>
        <li><?= $_GET["jurusan"]; ?></li>
        <li><?= $_GET["email"]; ?></li>
    </ul>

    <a href="latihan1.php">kembali</a>
</body>
</html>