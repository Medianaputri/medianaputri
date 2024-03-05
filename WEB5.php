<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Menu Sekolah</title>
  </head>

  <style>
          .container {
              display: flex;
              align-items: center;
              justify-content: space-around;
              padding: 5px;
            }

            .text {
              max-width: 200px; /* Sesuaikan lebar maksimum teks sesuai kebutuhan */
              text-align: center; 
            }

            body {
              font-family: 'Times New Roman', Times, serif;
              margin: 0;
              padding: 0;
              background-image: url(uuu.jpg);
            }

            header {
              background-color: gainsboro;
              color: black;
              text-align: center;
            }

            nav {
              background-color: white;
              color: white;
              padding: 10px;
              text-align: center;
            }

            section {
              max-width: 900px;
              margin: 20px auto;
              padding: 10px;
              background-color: white;
              border-radius: 10px;
              box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
              text-align: center;
            }
            
            .dashboard-item {
              margin-bottom: 80px;
              padding: 90px;
              background-color: white;
              border-radius: 8px;
              text-align: center;
            }

            h2{
              font-family:'Times New Roman'
            }

            footer {
              background-color: gainsboro;
              color: black;
              text-align: center;
              padding: 0em;
              position: fixed;
              bottom: 0;
              width: 100%;
            }

            li {
              text-align: left;
            }

            
            .teacher-list {
              list-style: none;
              padding: 0;
              margin: 0;
              display: flex;
              flex-wrap: wrap; /* Mengizinkan flex items untuk wrap ke baris baru */
          }

            .teacher-list li {
                margin-bottom: 20px;
                display: flex;
                align-items: center;
                flex-basis: 50%; /* Setiap item daftar guru akan mengambil 50% lebar kontainer */
            }

            .teacher-info {
                margin-left: 20px;
            }
            
          .photo-album {
          display: flex;
          flex-wrap: wrap;
          justify-content: center;  
          }

          justify-conte{
          justify-content: center;
          gap: 20px;
          }

          .event {
            max-width: 300px;
            background-color: #f8f8f8;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
            border: 3px solid #ccc; /* Increase border width */
            margin: 10px;
        }

        .event:hover {
            transform: translateY(-5px);
        }

        .event h3 {
            padding: 10px;
            margin: 10;
            background-color: palegoldenrod;
        }

          col{
            color: #fff;
            text-align: center;
        }

        .image-container {
          display: flex;
          flex-direction: row; /* Menata item agar sejajar dalam satu baris */
          overflow-x: auto; /* Memberikan kemampuan scroll horizontal jika gambar melebihi lebar container */
          gap: 5px; /* Menambahkan jarak antara gambar */
          padding: 10px; /* Menambahkan padding di sekitar kontainer gambar */
          }

        .image-container a {
        flex: 0 0 auto; /* Tetapkan item agar tidak merenggang dan tidak menambah ukuran */
        }

        .image-container img {
        width: 200%; /* Menyesuaikan lebar gambar */
        max-width: 300px; /* Tetapkan lebar maksimum */
        height: auto; /* Menjaga rasio aspek gambar */
        object-fit: cover; /* Pastikan gambar menutupi seluruh kontainer */
        border-radius: 5px; /* Menambahkan sudut bulat pada gambar */
        }

        .image-container img:hover {
        opacity: 0.7; /* Mengurangi kecerahan gambar saat dihover */
        }

        #jadwals {
        display: block;
        }

        table {
        width: 100%;
        border-collapse: collapse;
        }
  
        th, td {
        border: 1px solid #dddddd;
        padding: 8px;
        text-align: center; /* Posisi teks menjadi tengah */
      }

        th {
        background-color: #f2f2f2;
      }


      #siswas h2 {
        color: black;
        font-size: 24px;
        margin-bottom: 20px;
         text-align: center;
    }


.inner-box {
    border: 1px solid #ccc;
    border-radius: 4px;
    padding: 10px;
    margin-bottom: 20px;
}

/* Container styling */
#siswas form {
    margin-bottom: 20px;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 10px;
    text-align: left;
}

/* Style untuk label */
#siswas form label {
    font-weight: bold;
    display: block; /* Make labels display as blocks for better spacing */
    margin-bottom: 8px; /* Add some bottom margin for spacing */
}

/* Style untuk input dan select */
#siswas form .form-control {
    width: calc(100% - 22px); /* Adjusting for padding and border */
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

/* Style untuk tombol */
#siswas form button[type="submit"] {
    display: block;
    width: 20%; /* Set button width to 100% for full width */
    padding: 10px;
    border: none;
    border-radius: 5px;
    background-color: #007bff; /* Blue color */
    color: #fff;
    cursor: pointer;
}

#siswas form button[type="submit"]:hover {
    background-color: #0056b3; /* Darker blue on hover */
}

#GURU

.inner-box {
    border: 1px solid #ccc;
    border-radius: 4px;
    padding: 10px;
    margin-bottom: 20px;
}

#gurus form {
    margin-bottom: 20px;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 10px;
    text-align: left;
}

#addguruForm {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 8px;
    background-color: #f9f9f9;
    text-align: left;
}

/* Label styling */
.form-label {
    display: block;
    margin-bottom: 8px;
    font-weight: bold;
}

/* Input and select styling */
.form-control {
    width: calc(100% - 20px); /* Take into account the padding */
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

/* Button styling */
#gurus form button[type="submit"] {
    display: block;
    width: 20%;
    padding: 10px;
    border: none;
    border-radius: 5px;
    background-color: #007bff; /* Blue color */
    color: #fff;
    cursor: pointer;
    
}

button[type="submit"]:hover {
    background-color: #0056b3;
}

.logout-button {
    padding: 10px 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #007bff;
    color: #fff;
    text-decoration: none;
    position: absolute;
    top: 10px; /* Jarak dari bagian atas */
    right: 10px; /* Jarak dari bagian kanan */
}

.logout-button:hover {
    background-color: #0056b3;
}


</style>

  <body>
 
    <header>
    <a href="logout.php" class="logout-button">Logout</a>
        <div class="container">
            <img src="Logo5.png"  alt="" width="150" height="150">
        </div>
        
      <h2>SMK NEGERI 5 KOTA BEKASI</h2>
      <h1>REKAYASA PERANGKAT LUNAK</h1>
      <nav>
        <a href="#" id="home-link">Home</a> |
        <a href="#" id="tentang-link">Tentang</a> |
        <a href="#" id="courses-link">Mata Pelajaran</a> | 
        <a href="#" id="events-link">Events</a> |
        <a href="#" id="gurus-link">Data Guru</a> | 
        <a href="#" id="siswas-link">Data Siswa</a>| 
        <a href="#" id="jadwals-link">Jadwal Pelajaran</a>
       
      </nav>

      </header>

      <section id="home" class="dashboard-item">
        <marquee behavior="scroll" direction="left">
          <h1>WELCOME TO RPL 5</h1>
        </marquee>
        <p>
          Ini adalah tampilan utama dari dashboard jurusan Rekayasa Perangkat
          Lunak (RPL).
        </p>
      </section>
      
      <section id="tentang" class="tentang-item" style="display: none">
        <h2>Tentang RPL</h2>
        <p>
            RPL adalah singkatan dari Rekayasa Perangkat Lunak dan merupakan sebuah jurusan yang ada di Sekolah Menengah Kejuruan (SMK). 
            RPL adalah sebuah jurusan yang mempelajari dan mendalami semua cara-cara pengembangan perangkat lunak termasuk pembuatan, 
            pemeliharaan, manajemen organisasi pengembangan perangkat lunak dan manajemen kualitas.

            Bukan hanya itu, RPL juga berkaitan dengan software komputer mulai dari pembuatan website, 
            aplikasi, game dan semua yang berkaitan dengan pemrograman dengan menguasai bahasa pemrograman tersebut.
        </p>

        <h3>Apa saja si keunggulan dari jurusan RPL?</h3>
        <ul>
          <li>Mampu bekerja di berbagai bidang karena sudah dibekali dengan berbagai ilmu dan pengetahuan.</li>
          <li>Dalam melakukan kerja lapangan akan lebih mudah karena saat pembelajaran sudah sering melakukan kerja praktek.</li>
          <li>Pekerjaan nya yang relatif mudah dan santai, dapat dikerjakan dimanapun dan kapanpun menggunakan koneksi tentunya.</li>
          <li>Mengerti akan fungsi dari komponen komputer.</li>
        </ul>
        </section>

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

      <section id="events" class="dashboard-item" style="display: none;">
    <h2>Event Jurusan RPL</h2>
    <div class="photo-album">
        <div class="event">
            <h3>A. Pentas Seni RPL "Algorhytm Of Creativity"</h3>
            
            <div class="image-container">
                <a href="pensi1.jpg"><img src="pensi1.jpg" alt="Algorhytm Of Creativity"></a>
                <a href="pensi2.jpg" ><img src="pensi2.jpg" alt=""></a>
                <a href="pensi3.jpg" ><img src="pensi3.jpg" alt=""></a>
            </div> 
        </div>
        <div class="event">
            <h3>B. Ketarunaan Industri RPL Samsung</h3>
            <div class="image-container">
                <a href="ketarunaan.jpg" ><img src="ketarunaan.jpg" alt=""></a>
                <a href="TARUNA1.jpg" ><img src="TARUNA1.jpg" alt=""></a>
                <a href="TARUNA.jpg" ><img src="TARUNA.jpg" alt=""></a>
            </div>
        </div>
    </div>
</section>

        <section id="gurus" class="dashboard-item" style="display: none">
          <h2>PROFIL GURU</h2>
          <ul class="teacher-list">
              <li>
                  <img src="pak yuli.jpg" alt="Pak Yuli Supriyanto" width="100" height="100">
                  <div class="teacher-info">
                      <h3>Yuli Supriyanto, S.KOM, M.Pd.</h3>
                      <p>Jabatan: Kepala Jurusan</p>
                      <p>Guru mapel: Basis Data, Pemrograman WEB</p>
                  </div>
              </li>
              <li>
                  <img src="Bu ratna.jpg" alt="Bu Ratnawati" width="100" height="100">
                  <div class="teacher-info">
                      <h3>Ratnawati, S.T., M.Pd.</h3>
                      <p>Jabatan: Waka HUBIN</p>
                      <p>Guru mapel: Basis Data, Pemrograman WEB</p>
                  </div>
              </li>
              <li>
                  <img src="Pak Rizqy.jpg" alt="Pak Rizqy SGS" width="100" height="100">
                  <div class="teacher-info">
                      <h3>Rizqy Sopiyan, S.T</h3>
                      <p>Jabatan: Bendahara</p>
                      <p>Guru mapel: PKK</p>
                  </div>
              </li>
              <li>
                  <img src="Pak Gustaf.jpg" alt="Pak Gustavianto" width="100" height="100">
                  <div class="teacher-info">
                      <h3>Gustavianto Nusantoro, M.KOM</h3>
                      <p>Jabatan: -</p>
                      <p>Guru mapel: Pemrograman WEB</p>
                  </div>
              </li>
              <li>
                <img src="Pak yuyus.jpg" alt="Pak yuyus" width="100" height="110">
                <div class="teacher-info">
                    <h3>Yuyus Purnama, S.T.</h3>
                    <p>Jabatan: -</p>
                    <p>Guru mapel: HHPS </p>
                </div>
            </li>
            <li>
              <img src="PMUCHLIS.jpg" alt="pak Muchlis" width="110" height="100">
                <div class="teacher-info">
                    <h3>Ahmad Muchlis Fathurrahman, S.Kom.</h3>
                    <p>Jabatan: -</p>
                    <p>Guru mapel: Pemograman WEB </p>
                </div>
            </li>
            <li>
              <img src="Pak Gusdar.jpg" alt="pak gusdar" width="110" height="100">
              <div class="teacher-info">
                  <h3>Agus Darsono S.Kom.</h3>
                  <p>Jabatan: Kepala Bengkel</p>
                  <p>Guru mapel: Pemograman Berorientasi Object </p>
              </div>
            </li>
            <li>
              <img src="Pak Dimas.jpg" alt="Pak dimas" width="110" height="100">
              <div class="teacher-info">
                  <h3>Dimas Aziz Riva'i S.Ak.</h3>
                  <p>Jabatan:- </p>
                  <p>Guru mapel: Pemograman Dasar </p>
              </div>
            </li>
            <li>
              <img src="Pak Jaya.jpg" alt="pak jaya" width="100" height="100">
              <div class="teacher-info">
                  <h3>M. Jaya Wijaya</h3>
                  <p>Jabatan: Toolman </p>
                  <p>Guru mapel: - </p>
              </div>
            </li>
          </ul>

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
                    
                    <label class="form-label">Tempat_lahir</label>
                    <input type="text" class="form-control" name="tTempat_lahir" placeholder="Masukkan tempat lahir Anda">

                    <label class="form-label">Tanggal_lahir</label>
                    <input type="text" class="form-control" name="tTanggal_lahir" placeholder="Masukkan tanggal lahir Anda">

                    <label class="form-label">Agama</label>
                    <input type="text" class="form-control" name="tAgama" placeholder="Masukkan Agama Anda">

                    <label class="form-label">Marital</label>
                    <input type="text" class="form-control" name="tMarital" placeholder="Masukkan Marital Anda">

                    <label class="form-label">Alamat</label> <!-- Moved label here -->
                    <textarea class="form-control" name="tAlamat" placeholder="Masukkan Alamat Anda"></textarea>
                    
                    <label class="form-label">Nama_pt</label>
                    <input type="text" class="form-control" name="tNama_pt" placeholder="Masukkan Nama PT Anda">

                    <label class="form-label">Ijazah</label>
                    <input type="text" class="form-control" name="tIjazah" placeholder="Masukkan Ijazah Anda">
                    
                    <label class="form-label">Lulus</label>
                    <input type="text" class="form-control" name="tLulus" placeholder="Masukkan Lulus Anda">
                    
                    <label class="form-label">Golongan</label>
                    <input type="text" class="form-control" name="tGolongan" placeholder="Masukkan Golongan Anda">

                    <label class="form-label">Ket</label>
                    <input type="text" class="form-control" name="tKet" placeholder="Masukkan Ket Anda">

                    <label class="form-label">Jenis Kelamin</label>
                    <select class="form-control" name="tGender">
                    <option value="Option">Option</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                    
                    <button type="submit">Tambah Guru</button>
                    
                </form>

                <table border="1">
    <thead>
        <tr>
            <th>NIP</th>
            <th>Nama</th>
            <th>Tempat lahir</th>
            <th>Tanggal lahir</th>
            <th>Agama</th>
            <th>Marital</th>
            <th>Alamat</th>
            <th>Nama PT</th>
            <th>Ijazah</th>
            <th>Lulus</th>
            <th>Golongan</th>
            <th>Ket</th>
            <th>Jenis Kelamin</th>
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
                echo "<td>" . $row['Tempat_lahir'] . "</td>";
                echo "<td>" . $row['Tanggal_lahir'] . "</td>";
                echo "<td>" . $row['Agama'] . "</td>";
                echo "<td>" . $row['Marital'] . "</td>";
                echo "<td>" . $row['Alamat'] . "</td>";
                echo "<td>" . $row['Nama_pt'] . "</td>";
                echo "<td>" . $row['Ijazah'] . "</td>";
                echo "<td>" . $row['Lulus'] . "</td>";
                echo "<td>" . $row['Golongan'] . "</td>";
                echo "<td>" . $row['Ket'] . "</td>";
                echo "<td>" . $row['Jenis_Kelamin'] . "</td>";
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
  
                   
<section id="jadwals" class="dashboard-item" style="display: none">
  <h2>Jadwal Pelajaran</h2>
  <body>
      <table slide="1">
        <thead>
          <tr>
            <th>HARI</th>
            <th>JADWAL PELAJARAN</th>
            <th>JAM PELAJARAN</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>SENIN</td>
            <td>PEMOGRAMAN WEB & MATEMATIKA</td>
            <td> 07:00-15:15</td>
          </tr>
          <tr>
            <td>SELASA</td>
            <td>PEMOGRAMAN BERBASIS OBJEK & BAHASA INDONESIA</td>
            <td> 07:00-15:00</td>
          </tr>
          <tr>
            <td>RABU</td>
            <td>PENDIDIKAN KEWARGANEGARAAN & PRODUK KREATIF KEWIRAUSAHAAN</td>
            <td> 07:00-15:00</td>
          </tr>
          <tr>
            <td>KAMIS</td>
            <td>PEMOGRAMAN WEB & BAHASA INGGRIS & BASIS DATA</td>
            <td> 07:00-15:00</td>
          </tr>
          <tr>
            <td>JUM'AT</td>
            <td>BAHASA INGGRIS & PEMOGRAMAN WEB & PABP & HHPS</td>
            <td> 07:00-17:00</td>
          </tr>
        </tbody>
      </table>
    </body>
  </section>

      <script>
        const homeLink = document.getElementById("home-link");
        const tentangLink = document.getElementById("tentang-link");
        const coursesLink = document.getElementById("courses-link");
        const eventsLink = document.getElementById("events-link");
        const gurusLink = document.getElementById("gurus-link");
        const siswasLink = document.getElementById("siswas-link");
        const jadwalsLink = document.getElementById("jadwals-link");

        const homeSection = document.getElementById("home");
        const tentangSection= document.getElementById("tentang");
        const coursesSection = document.getElementById("courses");
        const eventsSection = document.getElementById("events");
        const gurusSection = document.getElementById("gurus");
        const siswasSection = document.getElementById("siswas");
        const jadwalsSection = document.getElementById("jadwals");

        homeLink.addEventListener("click", function () {
          homeSection.style.display = "block";
          tentangSection.style.display = "none";
          coursesSection.style.display = "none";
          eventsSection.style.display = "none";
          gurusSection.style.display = "none";
          siswasSection.style.display = "none";
          jadwalsSection.style.display = "none";
        });

        coursesLink.addEventListener("click", function () {
          homeSection.style.display = "none";
          tentangSection.style.display = "none";
          coursesSection.style.display = "block";
          eventsSection.style.display = "none";
          gurusSection.style.display = "none";
          siswasSection.style.display = "none";
          jadwalsSection.style.display = "none";
        });

        eventsLink.addEventListener("click", function () {
          homeSection.style.display = "none";
          tentangSection.style.display = "none";
          coursesSection.style.display = "none";
          eventsSection.style.display = "block";
          gurusSection.style.display = "none";
          siswasSection.style.display = "none";
          jadwalsSection.style.display = "none";
        });

        gurusLink.addEventListener("click", function () {
          homeSection.style.display = "none";
          tentangSection.style.display = "none";
          coursesSection.style.display = "none";
          eventsSection.style.display = "none";
          gurusSection.style.display = "block";
          siswasSection.style.display = "none";
          jadwalsSection.style.display = "none";
        });

        siswasLink.addEventListener("click", function () {
          homeSection.style.display = "none";
          tentangSection.style.display = "none";
          coursesSection.style.display = "none";
          eventsSection.style.display = "none";
          gurusSection.style.display = "none";
          siswasSection.style.display = "block";
          jadwalsSection.style.display = "none";
        });

        jadwalsLink.addEventListener("click", function () {
          homeSection.style.display = "none";
          tentangSection.style.display = "none";
          coursesSection.style.display = "none";
          eventsSection.style.display = "none";
          gurusSection.style.display = "none";
          jadwalsSection.style.display = "block";
          siswasSection.style.display = "none";
        });

        tentangLink.addEventListener("click", function () {
          homeSection.style.display = "none";
          tentangSection.style.display = "block";
          coursesSection.style.display = "none";
          eventsSection.style.display = "none";
          gurusSection.style.display = "none";
          siswasSection.style.display = "none";
          jadwalsSection.style.display = "none";
        });

       
      </script>
    </header>

    <section class="content">
      <!-- Konten utama sekolah ditambahkan disini -->
    </section>

    <footer>
        <p>&copy; 2024 RPL 5. Hak Cipta Dilindungi.</p>
    </footer>
</body>
</html>