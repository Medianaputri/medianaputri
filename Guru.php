<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $nip = $_POST['tNIP'];
    $nama = $_POST['tNama'];
    $kode_guru = $_POST['tKode_guru'];
    $jenis_kelamin = $_POST['tGender'];
    $guru_mapel = $_POST['tGuru_Mapel'];
    $alamat = $_POST['tAlamat'];
    
    // Database connection
    $servername = "localhost"; // Change this to your server name
    $username = "root"; // Change this to your database username
    $password = ""; // Change this to your database password
    $dbname = "database_webrpl"; // Change this to your database name

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and bind the SQL statement
    $sql = "INSERT INTO tb_guru (NIP, Nama, Kode_guru, Jenis_Kelamin, Guru_Mapel, Alamat) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssss", $nip, $nama, $kode_guru, $jenis_kelamin, $guru_mapel, $alamat );

    // Execute the statement
    if ($stmt->execute()) {
        echo "Data guru berhasil ditambahkan!";
        header("Location: WEB5.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close connection
    $stmt->close();
    $conn->close();
}
?>
