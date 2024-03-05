<?php
require_once 'conn.php'; // Koneksi ke database

if(isset($_GET['NIP'])) {
    $nip = $_GET['NIP'];
    
    // Ambil data siswa berdasarkan NIK
    $query = $conn->query("SELECT * FROM tb_guru WHERE NIP='$nip'");
    $data = $query->fetch_assoc();

    // Tampilkan form edit dengan data siswa
    if($data) {
        ?>
        <form method="POST">
            <input type="hidden" name="NIP" value="<?php echo $data['NIP']; ?>">
            Nama: <input type="text" name="Nama" value="<?php echo $data['Nama']; ?>"><br>
            Kode Guru: <input type="text" name="Kode_guru" value="<?php echo $data['Kode_guru']; ?>"><br>
            Jenis Kelamin: <input type="text" name="Jenis_Kelamin" value="<?php echo $data['Jenis_Kelamin']; ?>"><br>
            Guru Mapel: <input type="text" name="Guru_Mapel" value="<?php echo $data['Guru_Mapel']; ?>"><br>
            Alamat: <input type="text" name="Alamat" value="<?php echo $data['Alamat']; ?>"><br>
            <input type="submit" name="update" value="Update">
        </form>
        <?php
    } else {
        echo "Data tidak ditemukan.";
    }
}

if(isset($_POST['update'])) {
    // Ambil data dari form
    $nip = $_POST['NIP'];
    $nama = $_POST['Nama'];
    $kode_guru = $_POST['Kode_guru'];
    $jenis_kelamin = $_POST['Jenis_Kelamin'];
    $guru_mapel = $_POST['Guru_Mapel'];
    $alamat = $_POST['Alamat'];

    // Update data siswa di database
    $update = $conn->query("UPDATE tb_guru SET Nama='$nama', Kode_guru='$kode_guru', Jenis_Kelamin='$jenis_kelamin', Guru_Mapel='$guru_mapel', Alamat='$alamat' WHERE NIP='$nip'");
    if($update) {
       ?>
        <script>
            // Gunakan window.location.href untuk mengarahkan ke halaman baru
            window.location.href = "WEB5.php";
        </script>
        <?php
    } else {
        echo "Gagal memperbarui data.";
    }
}
?>


<?php
require_once 'conn.php'; // Koneksi ke database

if(isset($_GET['NIS'])) {
    $nis = $_GET['NIS'];
    
    // Ambil data siswa berdasarkan NIK
    $query = $conn->query("SELECT * FROM tb_siswa WHERE NIS='$nis'");
    $data = $query->fetch_assoc();

    // Tampilkan form edit dengan data siswa
    if($data) {
        ?>
        <form method="POST">
            <input type="hidden" name="NIS" value="<?php echo $data['NIS']; ?>">
            Nama: <input type="text" name="Nama" value="<?php echo $data['Nama']; ?>"><br>
            Kelas : <input type="text" name="Kelas" value="<?php echo $data['Kelas']; ?>"><br>
            Jenis Kelamin: <input type="text" name="Jenis_Kelamin" value="<?php echo $data['Jenis_Kelamin']; ?>"><br>
            Alamat: <input type="text" name="Alamat" value="<?php echo $data['Alamat']; ?>"><br>
            <input type="submit" name="update" value="Update">
        </form>
        <?php
    } else {
        echo "Data tidak ditemukan.";
    }
}

if(isset($_POST['update'])) {
    // Ambil data dari form
    $nis = $_POST['NIS'];
    $nama = $_POST['Nama'];
    $kelas = $_POST['Kelas'];
    $jenis_kelamin = $_POST['Jenis_Kelamin'];
    $alamat = $_POST['Alamat'];

    // Update data siswa di database
    $update = $conn->query("UPDATE tb_siswa SET Nama='$nama', Kelas='$kelas', Jenis_Kelamin='$jenis_kelamin', Alamat='$alamat' WHERE NIS='$nis'");
    if($update) {
       ?>
        <script>
            // Gunakan window.location.href untuk mengarahkan ke halaman baru
            window.location.href = "WEB5.php";
        </script>
        <?php
    } else {
        echo "Gagal memperbarui data.";
    }
}
?>