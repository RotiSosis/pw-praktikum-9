<?php

include("koneksi.php");
error_reporting(0);

$id = $_GET['rn'];
$query = "DELETE FROM karyawan WHERE id ='$id'";

$data = mysqli_query($conn, $query);

if ($data) {
    echo "Record dihapus dari Database";
    echo "<meta http-equiv=refresh content=2;URL='send.php'>";
} else {
    echo "Gagal menghapus record dari database";
    echo "<meta http-equiv=refresh content=2;URL='send.php'>";
}
