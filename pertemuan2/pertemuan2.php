<!-- Penulisan Sintaks PHP -->
<?php 
// Standard Output
// echo, print
// print_r()
// var_dump()

    // 1. PHP didalam HTML
    // 2. HTML didalam PHP
    
    //Variabel dan Tipe Data
    // =Variabel=
    // Variabel digunakan untuk menampung sebuah nilai Contoh $nama yang akan disiikan damli hermawan
    // Variabel tidak boleh diawali dengan angka tapi boleh mengandung angka
    // $nama = "Damli Hermawan S.kom";
    // echo 'Damli Hermawan, S.kom diambil dari Variable $nama<br>';
    // echo '________________________________________<br>';
    // echo "Halo, nama saya $nama <br><br>";

    //  //=Operator=
    // //  Aritmatika
    // // + - * / %
    // echo 'Belajar Operator<br>';
    // echo '____________<br>';
    // //langsung tanpa variabel
    // echo 1 + 1;
    // //dengan variable 
    // echo "<br>"; 
    // $x = 10;
    // $y = 20;

    // echo $x * $y;
    //penggabungan string /concatenation/concat
    // $nama_depan = "Damli";
    // $nama_belakang = "Hermawan";

    // echo $nama_depan . " " . $nama_belakang;    
    //Assignment
    // =, +=, -=, *=, /=, %=, .=

    // perbandingan
    // <,>,<=,>=,==,!=
    // var_dump(1 < 5 );
// identitas
// ===, !==
// var_dump(1 === "1");

// logika
// &&, ||, !
$x = 30 ;
var_dump($x < 20 || $x % 2 == 0); 
?>