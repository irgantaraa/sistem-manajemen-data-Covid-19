<?php
include "koneksi.php";
$id = $_GET['id'];
$query = mysqli_query($connect, "delete from indonesia where id_covid='$id'")
    or die(mysqli_error($connect));
if ($query) {
    header('location:dashboard.php');
} else {
    echo mysqli_error($connect);
}
