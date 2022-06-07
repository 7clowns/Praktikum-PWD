<?php
    session_start();
    if(isset($_SESSION['username'])){
    echo "Selamat Datang " . $_SESSION['username'];
    echo "<a href='logout.php'> logout</a>";
    }

?>
<!DOCTYPE html>
<html>

<head>
    <title>Belajar PHP - Tampilkan Data Identitas</title>
</head>

<body>
    <br/>
    <a href="tambah.php">+ TAMBAH IDENTITAS</a><br/>
    <a href="login.php"> login </a>
    <br />
    <br />
    <table border="1">
        <tr>
            <th>no</th>
            <th>id_mahasiswa</th>
            <th>Nama</th>
            <th>alamat</th>
            <th>telp</th>
            <th>prodi</th>
            <th>aksi</th>
        </tr>
        <?php
        include 'connect.php';
        $no = 1;
        $data = mysqli_query($db, "SELECT * FROM mahasiswa");
        while ($d = mysqli_fetch_array($data)) {
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['id_mahasiswa']; ?></td>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['alamat']; ?></td>
                <td><?php echo $d['telp']; ?></td>
                <td><?php echo $d['prodi']; ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $d['id_mahasiswa']; ?>">EDIT</a>
                    <a href="hapus.php?id=<?php echo $d['id_mahasiswa']; ?>">HAPUS</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>