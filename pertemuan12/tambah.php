<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Mahasiswa</title>
    <style>
        body {
            background-image: url('https://images3.alphacoders.com/136/thumb-1920-1369315.png');
            background-size: cover; /* Menjaga gambar latar agar menutupi seluruh halaman */
            background-position: center; /* Memposisikan gambar di tengah halaman */
            background-attachment: fixed; /* Menjaga gambar latar tetap saat scroll */
            color: #000; /* Teks berwarna hitam agar kontras dengan background */
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%; /* Lebar kontainer diatur agar tidak terlalu lebar */
            max-width: 800px; /* Lebar maksimum kontainer */
            margin: 0 auto; /* Memusatkan kontainer di tengah halaman */
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.9); /* Warna latar belakang putih transparan untuk kontainer */
            border-radius: 8px; /* Sudut melengkung pada kontainer */
        }
        table {
            border-collapse: collapse;
            width: 100%; /* Tabel mengisi 100% lebar kontainer */
            background-color: #fff; /* Warna latar belakang tabel putih */
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
            <h2>Tambah Data Mahasiswa</h2>
            <p><a href="index.php">Beranda</a> / <a href="tambah.php">Tambah Data</a></p>
            
            <form action="tambah_proses.php" method="post">
                <table cellpadding="3" cellspacing="0">
                    <tr>
                        <td>NIS</td>
                        <td>:</td>
                        <td><input type="text" name="nis" required></td>
                    </tr>
                    <tr>
                        <td>Nama Lengkap</td>
                        <td>:</td>
                        <td><input type="text" name="nama" required></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td><input type="text" name="alamat" required></td>
                    </tr>
                    <tr>
                        <td>Fakultas</td>
                        <td>:</td>
                        <td><input type="text" name="fakultas" required></td>
                    </tr>
                    <tr>
                        <td>Jurusan</td>
                        <td>:</td>
                        <td><input type="text" name="jurusan" required></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td></td>
                        <td><input type="submit" name="tambah" value="Tambah"></td>
                    </tr>
                </table>
            </form>
        </center>
    </div>
</body>
</html>
