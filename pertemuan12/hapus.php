<?php
// Masukkan file koneksi ke database
include 'konek.php';

// Cek jika ada ID yang dikirim
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Query untuk hapus data siswa berdasarkan ID
    $query = mysqli_query($koneksi, "DELETE FROM siswa WHERE siswa_id = '$id'") or die(mysqli_error($koneksi));

    if ($query) {
        echo 'Data berhasil dihapus! ';
        echo '<a href="index.php">Kembali</a>';
    } else {
        echo 'Gagal menghapus data! ';
        echo '<a href="index.php">Kembali</a>';
    }
} else {
    echo 'ID tidak ditemukan! ';
    echo '<a href="index.php">Kembali</a>';
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Hapus Data Mahasiswa</title>
    <style>
        body {
            background-image: url('https://images3.alphacoders.com/136/thumb-1920-1369315.png');
            background-size: cover; /* Menjaga gambar latar agar menutupi seluruh halaman */
            background-position: center; /* Memposisikan gambar di tengah halaman */
            background-attachment: fixed; /* Menjaga gambar latar tetap saat scroll */
            color: #000; /* Warna teks hitam agar kontras dengan background */
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%; /* Lebar kontainer disesuaikan agar tidak terlalu lebar */
            max-width: 800px; /* Lebar maksimum kontainer */
            margin: 0 auto; /* Memusatkan kontainer di tengah halaman */
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.9); /* Latar belakang putih transparan untuk kontainer */
            border-radius: 8px; /* Sudut melengkung pada kontainer */
            text-align: center; /* Memusatkan teks di dalam kontainer */
        }
        table {
            border-collapse: collapse;
            width: auto; /* Lebar tabel menyesuaikan dengan konten */
            background-color: #fff; /* Warna latar belakang tabel putih */
            color: #000; /* Warna teks tabel hitam */
            margin: 0 auto; /* Memusatkan tabel di tengah kontainer */
        }
        td {
            padding: 8px;
            text-align: left;
            border: 1px solid #ddd; /* Batas tabel yang halus */
        }
        input[type="text"] {
            width: 100%; /* Input teks mengambil lebar penuh sel tabel */
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            background-color: #4CAF50; /* Warna tombol hijau */
            color: white;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049; /* Warna tombol saat hover */
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Hapus Data Mahasiswa</h2>
        <p>Proses penghapusan data selesai.</p>
        <p><a href="index.php">Kembali ke Beranda</a></p>
    </div>
</body>
</html>
