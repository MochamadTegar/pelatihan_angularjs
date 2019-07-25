<?php
include 'koneksi.php';
$data = json_decode(file_get_contents("php://input"));

$nama = $conn->real_escape_string($data->nama);
$instansi = $conn->real_escape_string($data->instansi);
$email = $conn->real_escape_string($data->email);
$no_telp = $conn->real_escape_string($data->no_telp);

$query = "INSERT INTO member(nama, instansi, email, no_telp) VALUES ('".$nama."','".$instansi."','".$email."','".$no_telp."')";
$conn->query($query);
?>