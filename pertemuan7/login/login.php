<?php 
// cek apakah tombol submit sudah dipencet atau belom
    if(isset($_POST["submit"])){
// cek username dan password bener apa tidak
    if($_POST["username"] == "admin" && $_POST["password"] == "123"){
//jika benar redirect ke halaman admin  
    header("Location: admin.php");
    exit;
}else{
//jika salah, tampilkan pesan kesalahan
$error= true ;
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>halaman login</title>
</head>
<body>

    <?php if (isset($error)): ?>
        <p style="color: red;">username / password salah!</p>
    <?php endif; ?>
    <h1>Login admin</h1>
    <ul>
<form action="" method="POST">
    <li>
    <label>
        Username :
        <input type="text" name="username">
    </label>
    </li>
    <li>
        
        <label>
            Password :
            <input type="password" name="password">
        </label>
    </li>
<li>
    <button type="submit" name="submit">Login</button>
    </li>
</form>
</ul>
</body>
</html>