<?php
session_start();
$email = $_POST['email'];
$password = $_POST['password'];
$umur = $_POST['umur'];
if($email ==
"tr5405438@gmail.com" && $password == "098" && $umur >= 16 && $umur <= 44){
    // echo "<b>Login Berhasil</b>";
    $_SESSION['login'] = true;
    header('Location: http://localhost/praktekweb/dashboard.php');
}else{
    header('Location: http://localhost/prakteweb/index.php?error=Login Gagal');
}
