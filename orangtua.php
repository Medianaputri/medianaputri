<!DOCTYPE html>
<html>
<head>
 <title>Halaman Orangtua</title>
 <link rel="stylesheet" href="admins.css">
</head>
<body>
 
<?php 
 session_start();
 
 // cek apakah yang mengakses halaman ini sudah login
 if($_SESSION['level']==""){
 header("location:index.php?pesan=gagal");
 }
 
 ?>
 <h1>Halaman Orangtua</h1>
 
 <p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>
  <body>
   
 <a href="logout.php">LOGOUT</a>
 
 <br/>
 <br/>
</body>
</html>