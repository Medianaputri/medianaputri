<?php
include("conn.php");

$tabel = $_GET['Tabel'];

if(isset($_GET['NIP'])){
    $id = $_GET['NIP'];

    $sql = "DELETE FROM $tabel WHERE NIP = $id";

    if($conn->query($sql) === True){
        header("Location: WEB5.PHP");
    }else{
        echo"Error".$sql .$conn->error;
    }
    $conn->close();
}

if(isset($_GET['NIS'])){
    $id2 = $_GET['NIS'];

    $sql = "DELETE FROM $tabel WHERE NIS = $id2";

    if($conn->query($sql) === True){
        header("Location: WEB5.PHP");
    }else{
        echo"Error".$sql .$conn->error;
    }
    $conn->close();
}