<?php
include_once('koneksi.php');
$query = "select * from karyawan";
$result = mysqli_query($conn, $query);

/// deletos



?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HR Table</title>
    <link rel="stylesheet" href="MyStyle.css" </link>

<body>
    <div class="container">
        <table border="1">
            <tr>
                <td>no</td>
                <td>Nama</td>
                <td>Email</td>
                <td>Address</td>
                <td>Gender</td>
                <td>Position</td>
                <td>Status</td>
                <td>Action</td>
            </tr>
            <?php $nomor = 1;
            while ($rows = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td> <?php echo $nomor  ?></td>
                    <td> <?php echo $rows['name'];  ?></td>
                    <td> <?php echo $rows['email'];  ?></td>
                    <td> <?php echo $rows['address'];  ?></td>
                    <td> <?php echo $rows['gender'];  ?></td>
                    <td> <?php echo $rows['position'];  ?></td>
                    <td> <?php echo $rows['status'];  ?></td>
                    <td> <a class="hapus" href='delete.php?rn=<?php echo $rows['id']; ?>'> Delete </a></td>
                </tr>

            <?php $nomor++;
            } ?>
        </table>

        <a class="da-quain" href="/praktikum_9/form.php">Form</a>
    </div>
</body>

</html>


<?php

/*
if (isset($_GET['kode'])) {
    global $conn;
    $nasdaily = "delete from karyawan where name='$_GET[kode]";
    mysqli_query($conn, $nasdaily);


    echo "Data telah terhapus";
    echo "<meta http-equiv=refresh content=2;URL='send.php'>";
    return mysqli_affected_rows($conn);
}
*/
?>