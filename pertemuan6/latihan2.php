<?php 
// $mahasiswa = [
//     ["Damli Hermawan","10114047","Teknik Informatika","damlihermawan09@gmail.com"],
// //     ["Malik","10114048","Teknik Informatika","Malik09@gmail.com"]
// ];
//array associative
//definisinya sama seperti array numerik, kecuali
//key-nya adalah string yang kita buat sendiri\
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
    <title>latihan2</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <img src="img/<?= $mhs["gambar"];
             ?>" >
        </ul>
        
    <ul>
        <li>Nama :<?= $mhs["nama"];?></li>
        <li>NIM :<?= $mhs["nim"];?></li></li>
        <li>Jurusan :<?= $mhs["jurusan"];?></li></li>
        <li>Alamat Email :<?= $mhs["email"];?></li></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>