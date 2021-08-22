<!--
Developer : Damli Hermawan
No Handphone : 081221463627
Instagram : damlihermawan
Git : damlihermawan2020
-->
<?php
//koneksi kedatabase

$conn = mysqli_connect("localhost", "damli", "Dam@09031996", "phpdasar");

//ambil data mahasiswa atau ambil query mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");


//ambil data mahasiswa dari object result

//mysqli_fetch_row() mengembalikan array numerik
//mysqli_fetch_assoc() mengembalikan array associative
//mysqli_fetch_array() mengembalikan kedua nnya numerik dan assocoative
//mysqli_fetch_object() 

// while ($mhs = mysqli_fetch_assoc($result)) {
//     var_dump($mhs);
// }

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
        <?php $no = 1; ?>
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <tr>

                <td><?= $no++; ?></td>
                <td>
                    <a href="">ubah</a> | |
                    <a href="">delete</a>
                </td>
                <td><img src="img/<?= $row["gambar"]; ?>" width=" 50"></td>
                <td><?= $row["nim"]; ?></td>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["email"]; ?></td>
                <td><?= $row["jurusan"]; ?></td>
            </tr>
        <?php endwhile; ?>
    </table>
</body>

</html>