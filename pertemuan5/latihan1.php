<?php 
//array
// sebuah variabel yang bisa menampung banyak nilai

//cara lama
$hari = array("senin","selasa","rabu");

//cara baru
$bulan = ["january","febuary"];
$arr1 = [123,"string",false];

//cara menampilkan array
// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// echo "<br>";

// //untuk menampilkan 1 elemen array
// // echo $arr1[0];
// var_dump($hari);
// $hari[] = "kamis";
// echo"<br>";
// print_r($bulan);

// echo "<br>";

// // Menampilkan 1 element pada array
// echo $arr1 [0];
// echo "<br>";
// echo $bulan [1];

//menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "kamis";
echo "<br>";
var_dump($hari);
?>