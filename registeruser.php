<?php
include "conn.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  

    // Ambil data yang dikirimkan melalui form
    $Email = $_POST['Email'];
    $password = $_POST['password'];

    // SQL untuk menambahkan pengguna baru ke dalam database
    $sql = "INSERT INTO tb_registeradmn (Email, password) VALUES ('$Email', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "<p>Registrasi berhasil.</p>";
        // Redirect to login page
        header("Location: index.php");
        exit(); // Ensure that script execution stops after redirection

    } else {
        echo "<p>Registrasi gagal: " . $conn->error . "</p>";
    }

    // Tutup koneksi database
    // $conn->close();
}
?>
