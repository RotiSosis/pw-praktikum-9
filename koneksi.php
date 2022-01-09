<?php

$conn = mysqli_connect("localhost", "root", "", "praktikum_9");


function registrasi($data)
{
    global $conn;


    $nama = mysqli_real_escape_string($conn, $data["nama"]);
    $email = strtolower(stripslashes($data["email"]));
    $address = mysqli_real_escape_string($conn, $data["address"]);
    $gender = mysqli_real_escape_string($conn, $data["gender"]);
    $position = mysqli_real_escape_string($conn, $data["position"]);
    $status = mysqli_real_escape_string($conn, $data["status"]);


    mysqli_query($conn, "INSERT INTO karyawan VALUE('', '$nama', '$email','$address', '$gender', '$position', '$status')");

    return mysqli_affected_rows($conn);
}
