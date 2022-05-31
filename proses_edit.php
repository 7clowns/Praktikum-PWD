<?php
include("connect.php");

if (isset($_POST['simpan'])) {

    $id = $_POST['id_mahasiswa'];
    $Nama = $_POST['Nama'];
    $alamat = $_POST['alamat'];
    $telp = $_POST['telp'];
    $prodi = $_POST['prodi'];

    $sql = "UPDATE mahasiswa SET Nama='$Nama', alamat='$alamat', telp='$telp', prodi='$prodi' WHERE id_mahasiswa=$id";
    $query = mysqli_query($db, $sql);

    if ($query) {

        header('Location: index.php');
    } else {

        die("Gagal menyimpan perubahan...");
    }
} else {
    die("Akses dilarang...");
}