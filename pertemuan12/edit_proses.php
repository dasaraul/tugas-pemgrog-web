<?php
// Include file koneksi ke database
include 'konek.php';

// Cek jika tombol edit di klik
if(isset($_POST['edit'])){
    $id = $_POST['id'];
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];

    // Query untuk mengupdate data siswa berdasarkan ID
    $query = mysqli_query($koneksi, "UPDATE siswa SET siswa_nis='$nis', siswa_nama='$nama', siswa_kelas='$kelas', siswa_jurusan='$jurusan' WHERE siswa_id='$id'") or die(mysqli_error($koneksi));

    if($query){
        echo 'Data berhasil diupdate! ';
        echo '<a href="index.php">Kembali</a>';
    }else{
        echo 'Gagal mengupdate data! ';
        echo '<a href="edit.php?id='.$id.'">Kembali</a>';
    }
}
?>
