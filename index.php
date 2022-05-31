<!DOCTYPE html>
<html>

<head>
    <style type="text/css">
        
#data {
  font-family: Arial, Helvetica, sans-serif;
  text-align: center;
  border-collapse: collapse;
  width: 100%;
}

#data td, #data th {
  border: 1px solid #ddd;
  padding: 8px;
}

#data tr:nth-child(even){
    background-color: #f2f2f2;
}

#data tr:hover {
    background-color: #ddd;
}

#data th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
.button1 {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.button2 {
  background-color: red;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

    </style>
    <title>Belajar PHP - Tampilkan Data Identitas</title>
</head>

<body>

    <a href="tambah.php">+ TAMBAH IDENTITAS</a>
    <br />
    <br />
    <table id = data border="1">
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
                <td><?php echo $d['Nama']; ?></td>
                <td><?php echo $d['alamat']; ?></td>
                <td><?php echo $d['telp']; ?></td>
                <td><?php echo $d['prodi']; ?></td>
                <td>
                        <a href="edit.php?id=<?php echo $d['id_mahasiswa']; ?>" class="button1" >EDIT </a>
                        <a href="hapus.php?id=<?php echo $d['id_mahasiswa']; ?>" class="button2">HAPUS</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>


</body>

</html>