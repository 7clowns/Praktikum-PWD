<?php
include("connect.php");

if (isset($_POST['daftar'])) {

    $Nama = $_POST['Nama'];
    $alamat = $_POST['alamat'];
    $telp = $_POST['telp'];
    $prodi = $_POST['prodi'];

    mysqli_query($db, "INSERT INTO mahasiswa VALUES 
    ('','$Nama', '$alamat', '$telp', '$prodi')");
    header("location:index.php");
}