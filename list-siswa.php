<?php include("config.php");?>
<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport"content="width=device-width, initial-scale=1.0">
    <title>Pendaftar</title>
</head>
<body>
    <center>
    <h1>Calon Peserta Didik</h1>
    <a href="from-daftar.php">
        <button style="margin-bottom: 15px;">Tambah Baru</button> <br></a>
    <a href="home.php">
    <button style="margin-bottom: 15px;">Pulang Ke Home</button>
    </a>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Kelamis</th>
            <th>Agama</th>
            <th>Sekolah Asal</th>
            <th>Tindakan</th>
        </tr>
        <tr>
        <td>
            
        <?php
        $sql = "SELECT * FROM pendaftaran_siswa";
        $query = mysqli_query($db, $sql);
        $amel = 1;
        while($siswa =mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$amel."</td>";
            echo "<td>".$siswa['nama']."</td>";
            echo "<td>".$siswa['alamat']."</td>";
            echo "<td>".$siswa['jenis_kelamin']."</td>";
            echo "<td>".$siswa['agama']."</td>";
            echo "<td>".$siswa['sekolah_asal']."</td>";

            echo "<td>";
            echo "<a href='form-edit.php?id=".$siswa['id']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$siswa['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
            $amel++;
        }
        ?>
             </td>
        </tr>
    </table>
    <p>Total : <?php echo mysqli_num_rows($query)?></p>
    </body>
    </center>
    </html>