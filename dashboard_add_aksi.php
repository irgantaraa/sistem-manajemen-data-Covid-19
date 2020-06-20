<?php
include "koneksi.php";
$Lokasi1   = $_POST['Lokasi1'];
$Terkonfimarsi   = $_POST['Terkonfimarsi'];
$Sembuh1   = $_POST['Sembuh1'];
$Meninggal1  = $_POST['Meninggal1'];
$query  = mysqli_query($connect, "insert into indonesia (lokasi,confirmed,recovery,death)
values ('$Lokasi1','$Terkonfimarsi','$Sembuh1','$Meninggal1')");
if ($query) {
    header('location:dashboard.php');
} else {
    echo mysqli_error($connect);
}
