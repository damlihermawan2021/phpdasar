<!--
Developer : Damli Hermawan
No Handphone : 081221463627
Instagram : damlihermawan
Git : damlihermawan2020
-->
<?php 
// $_GET

$mahasiswa = [
    [
    "nama" => "Damli Hermawan",
    "nim" => "10114047",
    "jurusan"  =>"Teknik Informatika",
    "email" => "damlihermawan09@gmail.com",
    "gambar" => "damli.jpeg"
],
    [
    "nama" => "HermawanDamli ",
    "nim" => "10114047",
    "jurusan"  =>"Teknik Informatika",
    "email" => "damlihermawan09@gmail.com",
    "gambar" => "hermawan.jpeg"

]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
    <style>
            .gambar
    {
        width: 50px;
        height: 50px;
    }
    </style>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
    <?php foreach ($mahasiswa as $mhs) :?>
        <li>
            <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nim=<?= $mhs["nim"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&email=<?= $mhs["email"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
        </li>
    <?php endforeach; ?>
    </ul>
</body>
</html>