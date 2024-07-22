<?php
// Masukkan file koneksi ke database
include 'konek.php';

// Cek jika ada ID yang dikirim
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Query untuk ambil data siswa berdasarkan ID
    $query = mysqli_query($koneksi, "SELECT * FROM siswa WHERE siswa_id = '$id'") or die(mysqli_error($koneksi));
    $data = mysqli_fetch_assoc($query);

    // Cek jika data nggak ditemukan
    if (mysqli_num_rows($query) < 1) {
        echo 'Data nggak ditemukan! ';
        echo '<a href="index.php">Kembali</a>';
        exit();
    }
} else {
    echo 'ID nggak ditemukan! ';
    echo '<a href="index.php">Kembali</a>';
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Mahasiswa</title>
    <style>
        body {
            background-image: url('https://images3.alphacoders.com/136/thumb-1920-1369315.png');
            background-size: cover; /* Menyusun gambar agar menutupi seluruh background tanpa terpotong */
            background-position: center; /* Menempatkan gambar di tengah */
            background-attachment: fixed; /* Memastikan gambar tetap saat scroll */
            color: #000; /* Teks berwarna hitam untuk kontras dengan background gambar */
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%; /* Lebar kontainer bisa diatur sesuai kebutuhan */
            max-width: 800px; /* Lebar maksimum kontainer */
            margin: 0 auto; /* Memusatkan kontainer */
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.9); /* Warna latar belakang putih transparan untuk kontainer */
            border-radius: 8px; /* Sudut melengkung untuk kontainer */
        }
        table {
            border-collapse: collapse;
            width: 100%; /* Tabel mengambil 100% dari lebar kontainer */
            color: #000; /* Warna teks tabel hitam */
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
        </center>
    </div>
</body>
</html>
