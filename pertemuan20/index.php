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
$mahasiswa = query("SELECT * FROM mahasiswa ORDER BY id DESC");
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
    <style>
        .loader {
            width: 130px;
            position: absolute;
            top: 109px;
            left: 310px;
            z-index: -1;
            display: none;
        }

        @media print {

            .logout,
            .tambah,
            .form-cari,
            .aksi {
                display: none;
            }
        }
    </style>
    <script src="js/jquery.js"></script>
    <script src="js/script.js"></script>
</head>

<body>
    <a href="logout.php" class="logout">logout</a> <a href="cetak.php" target="_blank">Cetak</a>
    <h1>Daftar Mahasiswa</h1>
    <a href="tambah.php" class="tambah">Tambah Data mahasiswa</a>
    <br><br>
    <form action="" method="post" class="form-cari">
        <input type="text" name="keyword" size="40" autofocus placeholder="masukan pencarian .." autocomplete="off" id="keyword">
        <button type="submit" name="cari" id="tombol-cari">Cari</button>
        <img src="img/loader.gif" class="loader">
    </form>
    <br><br>
    <div id="container">
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>No.</th>
                <th class="aksi">Aksi</th>
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
                    <td class="aksi">
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
    </div>
</body>

</html>