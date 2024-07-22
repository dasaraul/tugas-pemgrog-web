<?php
// Include file koneksi ke database
include 'konek.php';

// Cek jika tombol tambah di klik
if(isset($_POST['tambah'])){
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $fakultas = $_POST['fakultas'];
    $jurusan = $_POST['jurusan'];

    // Query untuk menambahkan data ke dalam tabel siswa
    $query = mysqli_query($koneksi, "INSERT INTO siswa (siswa_nis, siswa_nama, siswa_alamat, siswa_fakultas, siswa_jurusan) VALUES ('$nis', '$nama', '$alamat', '$fakultas', '$jurusan')") or die(mysqli_error($koneksi));

    if($query){
        echo 'Data berhasil ditambahkan! ';
        echo '<a href="index.php">Kembali</a>';
    }else{
        echo 'Gagal menambahkan data! ';
        echo '<a href="tambah.php">Kembali</a>';
    }
}
?>
