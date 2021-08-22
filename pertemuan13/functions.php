<?php

$conn = mysqli_connect("localhost", "damli", "Dam@09031996", "phpdasar");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    global $conn;
    $nim = htmlspecialchars($data["nim"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);

    // upload gambar
    $gambar = upload();
    if (!$gambar) {
        return false;
    }
    $query = "INSERT INTO mahasiswa (nama,nim,email,jurusan,gambar)VALUES 
                ('$nama','$nim','$email','$jurusan','$gambar')
                ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function upload()
{
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $errorFile = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    //cek apakah ada gambar yang tidak di upload
    if ($errorFile === 4) {
        echo "<script> 
            alert ('Pilih gambar terlebih dahulu');
        </script>";
        return false;
    }
    //cek apakah yang diupload gambar ?
    $extensigambarvalid = ['jpg', 'jpeg', 'png'];
    $extensigambar = explode('.', $namaFile);
    $extensigambar = strtolower(end($extensigambar));
    if (!in_array($extensigambar, $extensigambarvalid)) {
        echo "<script>  
        alert ('yang anda upload bukan gambar');
    </script>";
        return false;
    }
    if ($ukuranFile > 1000000) {
        echo "<script> 
        alert ('Ukuran gambar terlalu besar');
        </script>";
        return false;
    }

    // lolos pengecekan
    //generate nama file 
    $namafileBaru = uniqid();
    $namafileBaru .= '.';
    $namafileBaru .= $extensigambar;
    move_uploaded_file($tmpName, 'img/' . $namafileBaru);

    return $namafileBaru;
}

function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
    return mysqli_affected_rows($conn);
}
function ubah($data)
{
    global $conn;
    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $nim = htmlspecialchars($data["nim"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambarLama = htmlspecialchars($data["gambarLama"]);

    //cek apakah gambar lama diupload 
    if ($_FILES['gambar']['error'] === 4) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }
    $query = "UPDATE mahasiswa SET
                nama = '$nama',
                nim = '$nim',
                email = '$email',
                jurusan = '$jurusan',
                gambar = '$gambar'
                WHERE id = $id
                ";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
function cari($keyword)
{
    $query = "SELECT * FROM mahasiswa
            WHERE 
            nama LIKE '%$keyword%'OR
            nim LIKE '%$keyword%' OR
            email LIKE '%$keyword%'OR
            jurusan LIKE '%$keyword%'
            ";
    return query($query);
}
