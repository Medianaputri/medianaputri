<?php
require_once 'conn.php'; // Koneksi ke database

if(isset($_GET['NIP'])) {
    $nip = $_GET['NIP'];
    
    // Ambil data guru berdasarkan NIP
    $query = $conn->query("SELECT * FROM tb_guru WHERE NIP='$nip'");
    $data = $query->fetch_assoc();

    // Tampilkan form edit dengan data guru
    if($data) {
        ?>
        <form method="POST">
            <input type="hidden" name="NIP" value="<?php echo $data['NIP']; ?>">
            Nama: <input type="text" name="Nama" value="<?php echo $data['Nama']; ?>"><br>
            Tempat lahir: <input type="text" name="Tempat_lahir" value="<?php echo $data['Tempat_lahir']; ?>"><br>
            Tanggal lahir: <input type="date" name="Tanggal_lahir" value="<?php echo $data['Tanggal_lahir']; ?>"><br>
            Agama: <input type="text" name="Agama" value="<?php echo $data['Agama']; ?>"><br>
            Marital: <input type="text" name="Marital" value="<?php echo $data['Marital']; ?>"><br>
            Alamat: <input type="text" name="Alamat" value="<?php echo $data['Alamat']; ?>"><br>
            Nama PT: <input type="text" name="Nama_pt" value="<?php echo $data['Nama_pt']; ?>"><br>
            Ijazah: <input type="text" name="Ijazah" value="<?php echo $data['Ijazah']; ?>"><br>
            Lulus: <input type="text" name="Lulus" value="<?php echo $data['Lulus']; ?>"><br>
            Golongan: <input type="text" name="Golongan" value="<?php echo $data['Golongan']; ?>"><br>
            Ket: <input type="text" name="Ket" value="<?php echo $data['Ket']; ?>"><br>
            Jenis Kelamin: <input type="text" name="Jenis_Kelamin" value="<?php echo $data['Jenis_Kelamin']; ?>"><br>
           
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
    $tempat_lahir = $_POST['Tempat_lahir'];
    $tanggal_lahir = $_POST['Tanggal_lahir'];
    $agama = $_POST['Agama'];
    $marital= $_POST['Marital'];
    $alamat = $_POST['Alamat'];
    $nama_pt = $_POST['Nama_pt'];
    $ijazah = $_POST['Ijazah'];
    $lulus = $_POST['Lulus'];
    $golongan = $_POST['Golongan'];
    $ket = $_POST['Ket'];
    $jenis_kelamin = $_POST['Jenis_Kelamin'];

    // Update data guru di database
    $update = $conn->query("UPDATE tb_guru SET Nama='$nama', Tempat_lahir='$tempat_lahir', Tanggal_lahir='$tanggal_lahir', Agama='$agama', Marital='$marital', Alamat='$alamat', Nama_pt='$nama_pt', Ijazah='$ijazah', Lulus='$lulus', Golongan='$golongan', Ket='$ket', Jenis_Kelamin='$jenis_kelamin' WHERE NIP='$nip'");
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
    
    // Ambil data siswa berdasarkan NIS
    $query = $conn->query("SELECT * FROM tb_siswa WHERE NIS='$nis'");
    $data = $query->fetch_assoc();

    // Tampilkan form edit dengan data siswa
    if($data) {
        ?>
        <form method="POST">
            <input type="hidden" name="NIS" value="<?php echo $data['NIS']; ?>">
            Nama: <input type="text" name="Nama" value="<?php echo $data['Nama']; ?>"><br>
            Tempat lahir : <input type="text" name="Tempat_lahir" value="<?php echo $data['Tempat_lahir']; ?>"><br>
            Tanggal lahir : <input type="date" name="Tanggal_lahir" value="<?php echo $data['Tanggal_lahir']; ?>"><br>
            Jenis Kelamin : <input type="text" name="Jenis_Kelamin" value="<?php echo $data['Jenis_Kelamin']; ?>"><br>
            Agama: <input type="text" name="Agama" value="<?php echo $data['Agama']; ?>"><br>
            Ayah : <input type="text" name="Ayah" value="<?php echo $data['Ayah']; ?>"><br>
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
    $tempat_lahir = $_POST['Tempat_lahir'];
    $tanggal_lahir = $_POST['Tanggal_lahir'];
    $jenis_kelamin = $_POST['Jenis_Kelamin'];
    $agama = $_POST['Agama'];
    $ayah = $_POST['Ayah'];
    $alamat = $_POST['Alamat'];

    // Update data siswa di database
    $update = $conn->query("UPDATE tb_siswa SET Nama='$nama', Tempat_lahir='$tempat_lahir', Tanggal_lahir='$tanggal_lahir', Jenis_Kelamin='$jenis_kelamin', Agama='$agama', Ayah='$ayah', Alamat='$alamat' WHERE NIS='$nis'");
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
