<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $nip = $_POST['tNIP'];
    $nama = $_POST['tNama'];
    $tempat_lahir = $_POST['tTempat_lahir'];
    $tanggal_lahir = $_POST['tTanggal_lahir'];
    $agama = $_POST['tAgama'];
    $marital= $_POST['tMarital'];
    $alamat = $_POST['tAlamat'];
    $nama_pt = $_POST['tNama_pt'];
    $ijazah = $_POST['tIjazah'];
    $lulus = $_POST['tLulus'];
    $golongan = $_POST['tGolongan'];
    $ket = $_POST['tKet'];
    $jenis_kelamin = $_POST['tGender'];
    
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
    $sql = "INSERT INTO tb_guru (NIP, Nama, Tempat_lahir, Tanggal_lahir, Agama, Marital, Alamat, Nama_pt, Ijazah, Lulus, Golongan, Ket, Jenis_Kelamin) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssssssssss", $nip, $nama, $tempat_lahir, $tanggal_lahir, $agama, $marital, $alamat, $nama_pt, $ijazah, $lulus, $golongan, $ket, $jenis_kelamin);

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
