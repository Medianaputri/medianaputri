<!DOCTYPE html>
<html>
<head>
    <title>Halaman siswa</title>
    <link rel="stylesheet" href="dsiswa.css">
</head>
<body>
 
<?php 
 session_start();
 
 // cek apakah yang mengakses halaman ini sudah login
 if($_SESSION['level']==""){
 header("location:index.php?pesan=gagal");
 }
 
 ?>
 <h1>Halaman siswa</h1>
 
 <p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>
  <body>
    
    <h2>DATA SISWA</h2>
    
    <form id="addStudentForm" action="SISWA.php" method="post">
        <label class="form-label">NIS</label>
        <input type="text" class="form-control" name="tNIS" placeholder="Masukkan NIS Anda">
        
        <label class="form-label">Nama</label>
        <input type="text" class="form-control" name="tNama" placeholder="Masukkan Nama Anda">
        
        <label class="form-label">Tempat_lahir</label>
        <input type="text" class="form-control" name="tTempat_lahir" placeholder="Masukkan tempat lahir Anda">

        <label class="form-label">Tanggal_lahir</label>
        <input type="text" class="form-control" name="tTanggal_lahir" placeholder="Masukkan tanggal lahir Anda">

        <label class="form-label">Jenis Kelamin</label>
        <select class="form-control" name="tGender">
            <option value="Option">Option</option>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>

        <label class="form-label">Agama</label>
        <input type="text" class="form-control" name="tAgama" placeholder="Masukkan Agama Anda">

        <label class="form-label">Ayah</label>
        <input type="text" class="form-control" name="tAyah" placeholder="Masukkan nama Ayah Anda">
        
        <label class="form-label">Ibu</label>
        <input type="text" class="form-control" name="tIbu" placeholder="Masukkan nama Ibu Anda">

        <label class="form-label">Pekerjaan_ayah</label>
        <input type="text" class="form-control" name="tPekerjaan_ayah" placeholder="Masukkan Pekerjaan_ayah Anda">

        <label class="form-label">Pekerjaan_ibu</label>
        <input type="text" class="form-control" name="tPekerjaan_ibu" placeholder="Masukkan Pekerjaan_ibu Anda">

        <label class="form-label">Alamat</label>
        <textarea class="form-control" name="tAlamat" placeholder="Masukkan Alamat Anda"></textarea>
     
    </form>

    <table border="1">
        <thead>
            <tr>
                <th>NIS</th>
                <th>Nama</th>
                <th>Tempat_lahir</th>
                <th>Tanggal_lahir</th>
                <th>Jenis_Kelamin</th>
                <th>Agama</th>
                <th>Ayah</th>
                <th>Ibu</th>
                <th>Pekerjaan_ayah</th>
                <th>Pekerjaan_ibu</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>123456</td>
                <td>Elsa </td>
                <td>Jakarta</td>
                <td>2000-01-01</td>
                <td>Laki-laki</td>
                <td>Islam</td>
                <td>John Sr.</td>
                <td>Jane</td>
                <td>Guru</td>
                <td>Wirausaha</td>
                <td>Jl. Raya No. 123</td>
            </tr>
            <!-- Tambahkan data siswa lainnya di sini -->
        </tbody>
    </table>

    <a href="logout.php">LOGOUT</a>

    <br/>
    <br/>
</body>
</html>
