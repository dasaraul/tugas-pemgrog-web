<?php
// Include file koneksi ke database
include 'konek.php';

// Cek jika tombol tambah di klik
if(isset($_POST['tambah'])){
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];

    // Query untuk menambahkan data ke dalam tabel siswa
    $query = mysqli_query($koneksi, "INSERT INTO siswa (siswa_nis, siswa_nama, siswa_kelas, siswa_jurusan) VALUES ('$nis', '$nama', '$kelas', '$jurusan')") or die(mysqli_error($koneksi));

    if($query){
        echo 'Data berhasil ditambahkan! ';
        echo '<a href="index.php">Kembali</a>';
    }else{
        echo 'Gagal menambahkan data! ';
        echo '<a href="tambah.php">Kembali</a>';
    }
}
?>
