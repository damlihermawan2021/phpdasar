<!--
Developer : Damli Hermawan
No Handphone : 081221463627
Instagram : damlihermawan
Git : damlihermawan2020
-->
<?php
//session
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

//koneksi kedatabase

require "functions.php";
//pagination
//Configurasi 
$JmlDataPerhalaman = 2;
$Jmldata = count(query("SELECT * FROM mahasiswa"));
$jmlhalaman = ceil($Jmldata / $JmlDataPerhalaman);
$halamanAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
$awalData = ($JmlDataPerhalaman * $halamanAktif) - $JmlDataPerhalaman;
$mahasiswa = query("SELECT * FROM mahasiswa LIMIT $awalData,$JmlDataPerhalaman");
//ketika toombol cari diklik
if (isset($_POST["cari"])) {
    $mahasiswa = cari($_POST["keyword"]);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>

<body>
    <a href="logout.php">logout</a>
    <h1>Daftar Mahasiswa</h1>
    <a href="tambah.php">Tambah Data mahasiswa</a>
    <br><br>
    <form action="" method="post">
        <input type="text" name="keyword" size="40" autofocus placeholder="masukan pencarian .." autocomplete="off">

        <button type="submit" name="cari">Cari</button>
    </form>
    <!-- Navigation -->
    <?php if ($halamanAktif > 1) : ?>
        <a href="?halaman=<?= $halamanAktif - 1; ?>">&laquo;</a>
    <?php endif; ?>
    <?php for ($i = 1; $i <= $jmlhalaman; $i++) : ?>
        <?php if ($i == $halamanAktif) : ?>
            <a href="?halaman=<?= $i; ?>" style="font-weight: bold; color: red;"><?= $i; ?></a>
        <?php else : ?>
            <a href="?halaman=<?= $i; ?>"><?= $i; ?></a>
        <?php endif; ?>
    <?php endfor; ?>
    <?php if ($halamanAktif < $jmlhalaman) : ?>
        <a href="?halaman=<?= $halamanAktif + 1; ?>">&raquo;</a>
    <?php endif; ?>
    <br><br>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($mahasiswa as $row) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a> | |
                    <a href="hapus.php?id=<?= $row["id"]; ?>" onclick=" return confirm('Yakin?') ">hapus</a>
                </td>
                <td><img src="img/<?= $row["gambar"]; ?>" width=" 50"></td>
                <td><?= $row["nim"]; ?></td>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["email"]; ?></td>
                <td><?= $row["jurusan"]; ?></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body>

</html>