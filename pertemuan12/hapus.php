<?php
// Include file koneksi ke database
include 'konek.php';

// Cek jika ada ID dikirim
if(isset($_GET['id'])){
    $id = $_GET['id'];

    // Query untuk menghapus data siswa berdasarkan ID
    $query = mysqli_query($koneksi, "DELETE FROM siswa WHERE siswa_id = '$id'") or die(mysqli_error($koneksi));

    if($query){
        echo 'Data berhasil dihapus! ';
        echo '<a href="index.php">Kembali</a>';
    }else{
        echo 'Gagal menghapus data! ';
        echo '<a href="index.php">Kembali</a>';
    }
}else{
    echo 'ID tidak ditemukan! ';
    echo '<a href="index.php">Kembali</a>';
}
?>
