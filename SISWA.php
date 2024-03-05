<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $nis = $_POST['tNIS'];
    $nama = $_POST['tNama'];
    $tempat_lahir = $_POST['tTempat_lahir'];
    $tanggal_lahir = $_POST['tTanggal_lahir'];
    $jenis_kelamin = $_POST['tGender'];
    $agama = $_POST['tAgama'];
    $ayah = $_POST['tAyah'];
    $ibu = $_POST['tIbu'];
    $pekerjaan_ayah = $_POST['tPekerjaan_ayah'];
    $pekerjaan_ibu = $_POST['tPekerjaan_ibu'];
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
    $sql = "INSERT INTO tb_siswa (NIS, Nama, Tempat_lahir, Tanggal_lahir, Jenis_Kelamin, Agama, Ayah, Ibu, Pekerjaan_ayah, Pekerjaan_ibu, Alamat) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssssssss", $nis, $nama, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $agama, $ayah, $ibu, $pekerjaan_ayah, $pekerjaan_ibu, $alamat);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Data siswa berhasil ditambahkan!";
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
