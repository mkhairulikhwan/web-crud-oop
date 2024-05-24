<?php

class siswa
{
    private $host = 'localhost';
    private $user = 'root';
    private $pass = '';
    private $database = 'coba';
    private $koneksi;

    function __construct()
    {
        $this->koneksi = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
    }

    function tampil_data()
    {
        $query = mysqli_query($this->koneksi, 'SELECT * FROM siswa');
        while ($row = mysqli_fetch_array($query)) {
            $data[] = $row;
        }
        return $data;
    }

    function simpan_data($nama, $tgl, $kelas)
    {
        $query = mysqli_query($this->koneksi, "INSERT INTO siswa VALUES ('','$nama','$tgl','$kelas')");
    }

    function tampil_edit($id)
    {
        $query = mysqli_query($this->koneksi, "SELECT * FROM siswa WHERE id='$id'");
        while ($row = mysqli_fetch_array($query)) {
            $data[] = $row;
        }
        return $data;
    }

    function edit_data($id, $nama, $tgl, $kelas)
    {
        mysqli_query($this->koneksi, "UPDATE siswa SET nama='$nama', tgl='$tgl', kelas='$kelas' WHERE id='$id'");
    }

    function hapus_data($id)
    {
        mysqli_query($this->koneksi, "DELETE FROM siswa WHERE id='$id'");
    }
}
