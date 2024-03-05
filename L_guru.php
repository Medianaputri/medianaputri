<!DOCTYPE html>
<html>
<head>
 <title>Halaman guru</title>
 <link rel="stylesheet" href="dguru.css">
</head>
<body>
 
<?php 
 session_start();
 
 // cek apakah yang mengakses halaman ini sudah login
 if($_SESSION['level']==""){
 header("location:index.php?pesan=gagal");
 }
 
 ?>
 <h1>Halaman Guru</h1>
 <a href="logout.php" class="logout-button">Logout</a>
 <p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>
  <body>
  
  <a href="#" id="courses-link">Mata Pelajaran</a> | 
  <a href="#" id="gurus-link">Data Guru</a> | 
  <a href="#" id="siswas-link">Data Siswa</a>| 

  <section id="courses" class="mapel" style="display: none">
    <h2>Data Nilai Pelajaran</h2>
    <div class="table-container">
        <table id="nilai-table">
            <thead>
                <tr>
                    <th>Mata Pelajaran</th>
                    <th>Nilai</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td contenteditable="true">Pemrograman Dasar (PD)</td>
                    <td contenteditable="true">85</td>
                </tr>
                <tr>
                    <td contenteditable="true">Basis Data (BD)</td>
                    <td contenteditable="true">78</td>
                </tr>
                <tr>
                    <td contenteditable="true">Dasar Desain Grafis (DDG)</td>
                    <td contenteditable="true">92</td>
                </tr>
                <tr>
                    <td contenteditable="true">Informatika</td>
                    <td contenteditable="true">88</td>
                </tr>
                <tr>
                    <td contenteditable="true">Internet Of Things (IOT)</td>
                    <td contenteditable="true">80</td>
                </tr>
                <tr>
                    <td contenteditable="true">Pemrograman Berorientasi Object (PBO)</td>
                    <td contenteditable="true">90</td>
                </tr>
                <tr>
                    <td contenteditable="true">Produk Kreatif dan Kewirausahaan (PKK)</td>
                    <td contenteditable="true">82</td>
                </tr>
                <tr>
                    <td contenteditable="true">Pemrograman Web(PWEB)</td>
                    <td contenteditable="true">87</td>
                </tr>
                
            </tbody>
        </table>
    </div>
</section>

    <section id="gurus" class="dashboard-item" style="display: none">
    <h2>DATA GURU</h2>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Data Guru</title>
                <body>
                    <form id="addteacherForm" action="Guru.php" method="post">
                    <label class="form-label">NIP</label>
                    <input type="text" class="form-control" name="tNIP" placeholder="Masukkan NIP Anda">
                    
                    <label class="form-label">Nama</label>
                    <input type="text" class="form-control" name="tNama" placeholder="Masukkan Nama Anda">
                    
                    <label class="form-label">Kode_guru</label>
                    <input type="text" class="form-control" name="tKode_guru" placeholder="Masukkan Kode Anda">

                    <label class="form-label">Jenis Kelamin</label>
                    <select class="form-control" name="tGender">
                    <option value="Option">Option</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>

                    <label class="form-label">Guru_Mapel</label>
                    <select class="form-control" name="tGuru_Mapel">
                    <option value="Option">Option</option>
                        <option value="Pemrograman Web">Pemrograman Web</option>
                        <option value="Basis Data">Basis Data</option>
                        <option value="Pemrograman Berorientasi Objek">Pemrograman Berorientasi Objek</option>
                        <option value="HHPS">HHPS</option>
                        <option value="Pemdas">Pemograman Dasar</option>
                        <option value="(DDG)">Desain Grafis(DDG)</option>
                        <option value="Informatika">Informatika</option>
                        <option value="IOT">Internet Of Thinks(IOT)</option>
                        <option value="PKK">Produk Kreatif dan Kewirausahaan(PKK)</option>


                    </select>
                    
                    <label class="form-label">Alamat</label> <!-- Moved label here -->
                    <textarea class="form-control" name="tAlamat" placeholder="Masukkan Alamat Anda"></textarea>
                    
                    <button type="submit">Tambah Guru</button>
                    
                </form>

                <table border="1">
    <thead>
        <tr>
            <th>NIP</th>
            <th>Nama</th>
            <th>Kode_guru</th>
            <th>Jenis Kelamin</th>
            <th>Guru_Mapel</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include "conn.php";
        $query = "SELECT * FROM tb_guru"; // Change this query according to your table structure
        $result = mysqli_query($conn, $query);

        // Check if query executed successfully
        if ($result) {
            // Fetch associative array
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['NIP'] . "</td>";
                echo "<td>" . $row['Nama'] . "</td>";
                echo "<td>" . $row['Kode_guru'] . "</td>";
                echo "<td>" . $row['Jenis_Kelamin'] . "</td>";
                echo "<td>" . $row['Guru_Mapel'] . "</td>";
                echo "<td>" . $row['Alamat'] . "</td>";
                echo "<td>";
                echo "<a href='edit.php?NIP=" . $row['NIP'] . "'>Edit</a>";
                echo " | ";
                echo "<a href='hapus.php?NIP=" . $row['NIP'] . "&Tabel=tb_guru'>Hapus</a>";
                echo "</td>";
                echo "</tr>";
            }
        } else {
            echo "Error: " . mysqli_error($conn);
        }

        // Close connection
        mysqli_close($conn);
        ?>
    </tbody>
</table>
    </section>

    <section id="siswas" class="dashboard-item" style="display: none">  
            <h2>DATA SISWA</h2>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Data Siswa</title>
                <body>
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

                    <label class="form-label">Alamat</label> <!-- Moved label here -->
                    <textarea class="form-control" name="tAlamat" placeholder="Masukkan Alamat Anda"></textarea>
                    
                    <button type="submit">Tambah Siswa</button>  

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
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
    <?php
        include "conn.php";
        $query = "SELECT * FROM tb_siswa"; // Change this query according to your table structure
        $result = mysqli_query($conn, $query);

        // Check if query executed successfully
        if ($result) {
            // Fetch associative array
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['NIS'] . "</td>";
                echo "<td>" . $row['Nama'] . "</td>";
                echo "<td>" . $row['Tempat_lahir'] . "</td>";
                echo "<td>" . $row['Tanggal_lahir'] . "</td>";
                echo "<td>" . $row['Jenis_Kelamin'] . "</td>";
                echo "<td>" . $row['Agama'] . "</td>";
                echo "<td>" . $row['Ayah'] . "</td>";
                echo "<td>" . $row['Ibu'] . "</td>";
                echo "<td>" . $row['Pekerjaan_ayah'] . "</td>";
                echo "<td>" . $row['Pekerjaan_ibu'] . "</td>";
                echo "<td>" . $row['Alamat'] . "</td>";
                echo "<td>";
                echo "<a href='edit.php?NIS=" . $row['NIS'] . "'>Edit</a>";
                echo " | ";
                echo "<a href='hapus.php?NIS=" . $row['NIS'] . "&Tabel=tb_siswa'>Hapus</a>";
                echo "</td>";
                echo "</tr>";
            }
        } else {
            echo "Error: " . mysqli_error($conn);
        }

        // Close connection
        mysqli_close($conn);
        ?>
    </tbody>
</table>

</section>
  
    <script>
       
        const coursesLink = document.getElementById("courses-link");
        const gurusLink = document.getElementById("gurus-link");
        const siswasLink = document.getElementById("siswas-link");
        
       
        const coursesSection = document.getElementById("courses");
        const gurusSection = document.getElementById("gurus");
        const siswasSection = document.getElementById("siswas");

        coursesLink.addEventListener("click", function () {
          coursesSection.style.display = "block";
          gurusSection.style.display = "none";
          siswasSection.style.display = "none";
        });

        gurusLink.addEventListener("click", function () {
          coursesSection.style.display = "none";
          gurusSection.style.display = "block";
          siswasSection.style.display = "none";
        });

        siswasLink.addEventListener("click", function () {
          coursesSection.style.display = "none";
          gurusSection.style.display = "none";
          siswasSection.style.display = "block";
        });

      </script>
 
 <br/>
 <br/>
</body>
</html>