<?php
// Masukkan file koneksi ke database
include 'konek.php';

// Cek jika tombol edit di klik
if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];

    // Query untuk update data siswa berdasarkan ID
    $query = mysqli_query($koneksi, "UPDATE siswa SET siswa_nis='$nis', siswa_nama='$nama', siswa_alamat='$alamat', siswa_fakultas='$kelas', siswa_jurusan='$jurusan' WHERE siswa_id='$id'") or die(mysqli_error($koneksi));

    if ($query) {
        $message = 'Data berhasil diupdate!';
        $link = 'index.php';
    } else {
        $message = 'Gagal mengupdate data!';
        $link = 'edit.php?id=' . $id;
    }
} else {
    $message = 'Tidak ada data yang diupdate!';
    $link = 'edit.php';
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Status Edit Data Mahasiswa</title>
    <style>
        body {
            background-image: url('https://images3.alphacoders.com/136/thumb-1920-1369315.png');
            background-size: cover; /* Gambar latar menutupi seluruh halaman */
            background-position: center; /* Memposisikan gambar di tengah halaman */
            background-attachment: fixed; /* Gambar latar tetap saat scroll */
            color: #000; /* Warna teks hitam untuk kontras dengan background */
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Mengisi tinggi viewport */
        }
        .notification {
            width: 80%; /* Lebar kontainer disesuaikan agar tidak terlalu lebar */
            max-width: 600px; /* Lebar maksimum kontainer */
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.9); /* Latar belakang putih transparan untuk kontainer */
            border-radius: 8px; /* Sudut melengkung pada kontainer */
            text-align: center; /* Teks berada di tengah */
        }
        a {
            color: #4CAF50; /* Warna tautan hijau */
            text-decoration: none;
            font-weight: bold;
        }
        a:hover {
            text-decoration: underline; /* Garis bawah saat hover */
        }
    </style>
</head>
<body>
    <div class="notification">
        <h2><?php echo $message; ?></h2>
        <p><a href="<?php echo $link; ?>">Kembali ke Beranda</a></p>
    </div>
</body>
</html>
