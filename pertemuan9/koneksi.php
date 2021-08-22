<!--
Developer : Damli Hermawan
No Handphone : 081221463627
Instagram : damlihermawan
Git : damlihermawan2020
-->
<?php
//integrasi connection dengan variable
$servername = "localhost";
$username = "damli";
$password = "Dam@09031996";
$database = "phpdasar";
//membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $database);
//mengecek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
echo "Koneksi berhasil";
mysqli_close($conn);
?>