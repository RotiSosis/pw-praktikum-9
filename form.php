<?php

require 'koneksi.php';

if (isset($_POST["proses"])) {

    if (registrasi($_POST) > 0) {
        echo "<script>
            alert('Registrasi Berhasil !');
            document.location.href = 'form.php';
            </script>
            ";
    } else {
        echo "<script>
            alert('Registrasi Gagal !');
            document.location.href = 'form.php';
            </script>
            ";
    }
}


?>

<!DOCTYPE html>
<html lang="en" clas="html">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bababui</title>
    <link rel="stylesheet" href="style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&display=swap" rel="stylesheet">



</head>

<body>
    <div class="container">
        <div class="cassidy">
            <div class="tambah-data">
                <h2>Tambah Data</h2>
                <form action="" method="post">

                    <label>Name </label>
                    <input name="nama" type=text>
                    <br>

                    <label>Email </label>
                    <input name="email" type=text>
                    <br>

                    <label>Address </label>
                    <input name="address" type=text>
                    <br>

                    <label>Gender </label>
                    <select name="gender">
                        <option value="Male">Male </option>
                        <option value="Female">Female </option>
                    </select>
                    <br>

                    <label>Position </label>
                    <input name="position" type=text>
                    <br>

                    <label>Status </label>
                    <select name="status">
                        <option value="Fulltime">Fulltime </option>
                        <option value="Parttime">Parttime </option>
                    </select>

                    <button class="btn" name="proses">Submit</button>
                    <br>

                    <a class="da-quain" href="/praktikum_9/send.php">Data</a>

                </form>
            </div>
        </div>
    </div>
</body>

</html>


<?php
/*
include "koneksi.php";
$koneksi = mysqli_connect("localhost", "root", "", "praktikum_9");

if (isset($_POST['proses'])) {
    mysqli_query($koneksi, "insert into karyawan set
    name = '$_POST[nama]',
    email = '$_POST[email]',
    address = '$_POST[address]',
    gender = '$_POST[gender]',
    position = '$_POST[position]',
    status = '$_POST[status]',
    
    ");

    echo "Data Tersimpan";
}

*/
?>