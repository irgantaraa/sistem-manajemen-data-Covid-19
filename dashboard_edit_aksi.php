<?php
include "koneksi.php";
$ID_Covid = $_POST['id_covid'];
$lokasi = $_POST['lokasi'];
$terkonfirmasi = $_POST['confirmed'];
$sembuh = $_POST['recovery'];
$meninggal = $_POST['death'];

$query  = mysqli_query($connect, "update indonesia set lokasi='$lokasi', confirmed='$terkonfirmasi', recovery ='$sembuh', death='$meninggal' where id_covid='$ID_Covid' ")
or die(mysqli_error($connect, $query));
if ($query) {
    header('location:dashboard.php');
} else {
    echo mysqli_error($connect);
}
?>