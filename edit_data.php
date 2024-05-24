<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="aksi_edit.php" method="post">
        <?php
        $id = $_GET['id'];
        include "class_data.php";
        $dt = new siswa();
        foreach ($dt->tampil_edit($id) as $d) {
        ?>
            <table border="1">
                <tr>
                    <td>NAMA SISWA</td>
                    <td><input type="text" name="nama" value="<?= $d['nama']; ?>"></td>
                </tr>
                <tr>
                    <td>TANGGAL LAHIR</td>
                    <td><input type="date" name="tgl" value="<?= $d['tgl']; ?>"></td>
                </tr>
                <tr>
                    <td>KELAS</td>
                    <td><input type="text" name="kelas" value="<?= $d['kelas']; ?>"></td>
                </tr>
                <tr>
                    <td><input type="text" name="id" value="<?= $d['id']; ?>"></td>
                    <td><input type="submit" value="UPDATE DATA"></td>
                </tr>
            </table>
        <?php
        }
        ?>
    </form>
</body>

</html>