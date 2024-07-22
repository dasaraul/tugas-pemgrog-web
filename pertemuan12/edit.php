<?php
// Include file koneksi ke database
include 'konek.php';

// Cek jika ada ID dikirim
if(isset($_GET['id'])){
    $id = $_GET['id'];

    // Query untuk mengambil data siswa berdasarkan ID
    $query = mysqli_query($koneksi, "SELECT * FROM siswa WHERE siswa_id = '$id'") or die(mysqli_error($koneksi));
    $data = mysqli_fetch_assoc($query);

    // Cek jika data tidak ditemukan
    if(mysqli_num_rows($query) < 1){
        echo 'Data tidak ditemukan! ';
        echo '<a href="index.php">Kembali</a>';
        exit();
    }
}else{
    echo 'ID tidak ditemukan! ';
    echo '<a href="index.php">Kembali</a>';
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Mahasiswa</title>
</head>
<body>
    <center>
    <h2>Edit Data Mahasiswa</h2>
    <p><a href="index.php">Beranda</a> / <a href="edit.php">Edit Data</a></p>
    
    <form action="edit_proses.php" method="post">
        <input type="hidden" name="id" value="<?php echo $data['siswa_id']; ?>">
        <table cellpadding="3" cellspacing="0">
            <tr>
                <td>NIS</td>
                <td>:</td>
                <td><input type="text" name="nis" value="<?php echo $data['siswa_nis']; ?>" required></td>
            </tr>
            <tr>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td><input type="text" name="nama" value="<?php echo $data['siswa_nama']; ?>" required></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><input type="text" name="alamat" value="<?php echo $data['siswa_alamat']; ?>" required></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td><input type="text" name="kelas" value="<?php echo $data['siswa_fakultas']; ?>" required></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>:</td>
                <td><input type="text" name="jurusan" value="<?php echo $data['siswa_jurusan']; ?>" required></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td></td>
                <td><input type="submit" name="edit" value="Edit"></td>
            </tr>
        </table>
    </form>
</body>
</html>
