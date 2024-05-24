<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="input_data.php">TAMBAH DATA</a>
    <table border="1">
        <tr>
            <td>NO</td>
            <td>NAMA</td>
            <td>TANGGAL LAHIR</td>
            <td>KELAS</td>
            <td>AKSI</td>
        </tr>
        <?php
        include "class_data.php";
        $no = 1;
        $dt = new siswa();
        foreach ($dt->tampil_data() as $d) {
        ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $d['nama']; ?></td>
            <td><?= $d['tgl']; ?></td>
            <td><?= $d['kelas']; ?></td>
            <td><a href="edit_data.php?id=<?= $d['id']; ?>">EDIT</a> | <a
                    href="aksi_hapus.php?id=<?= $d['id']; ?>">HAPUS</a></td>
        </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>