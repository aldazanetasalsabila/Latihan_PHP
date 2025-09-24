<?php
$username = "admin";
$password = "12345";

$inputUser = "admin";
$inputPass = "12345";

if ($inputUser == $username && $inputPass == $password) {
    echo "Login berhasil, selamat datang $username!";
} else {
    echo "Login gagal, username atau password salah.";
}
?>
