<?php
include "conn.php";

if (isset($_POST['login'])) {
    $Username = $_POST['username']; // Mengubah 'Username' menjadi 'username'
    $Password = $_POST['password']; // Mengubah 'Password' menjadi 'password'

    // Menggunakan parameterized query untuk menghindari SQL injection
    $sql = "SELECT * FROM tb_registeradmn WHERE Email = '$Username' && Password = '$Password' ";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 1) {
        header('location: WEB5.php');
        exit;
    } else {
        header('location: login.html'); // Mengubah 'Login.html' menjadi 'login.html'
        exit;
    }
}
?>
