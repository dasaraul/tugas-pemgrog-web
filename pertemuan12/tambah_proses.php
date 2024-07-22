<?php
// Masukkan file koneksi ke database
include 'konek.php';

// Cek jika tombol tambah di klik
if (isset($_POST['tambah'])) {
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $fakultas = $_POST['fakultas'];
    $jurusan = $_POST['jurusan'];

    // Query untuk menambahkan data ke dalam tabel siswa
    $query = mysqli_query($koneksi, "INSERT INTO siswa (siswa_nis, siswa_nama, siswa_alamat, siswa_fakultas, siswa_jurusan) VALUES ('$nis', '$nama', '$alamat', '$fakultas', '$jurusan')") or die(mysqli_error($koneksi));

    // Menentukan apakah data berhasil ditambahkan
    if ($query) {
        $message = 'Data berhasil ditambahkan!';
        $link = 'index.php';
    } else {
        $message = 'Gagal menambahkan data!';
        $link = 'tambah.php';
    }
} else {
    // Jika form belum di-submit atau ada kesalahan
    $message = 'Tidak ada data yang ditambahkan!';
    $link = 'tambah.php';
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Status Tambah Data Mahasiswa</title>
    <style>
        body {
            background-image: url('https://images3.alphacoders.com/136/thumb-1920-1369315.png');
            background-size: cover; /* Gambar latar menutupi seluruh halaman */
            background-position: center; /* Posisi gambar di tengah halaman */
            background-attachment: fixed; /* Gambar tetap pada posisinya saat scroll */
            color: #000; /* Warna teks hitam untuk kontras */
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Mengisi tinggi viewport */
        }
        .notification {
            width: 80%; /* Lebar kontainer disesuaikan */
            max-width: 500px; /* Lebar maksimum kontainer */
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
