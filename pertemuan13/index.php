<!DOCTYPE html>
<html>
<head>
    <title>TUGAS 2 - Pertemuan ke-12</title>
    <style>
        body {
            background-image: url('https://images3.alphacoders.com/136/thumb-1920-1369315.png');
            background-size: cover;
            color: #000; /* Teks berwarna hitam untuk kontras dengan background gambar */
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%; /* Lebar kontainer bisa diatur sesuai kebutuhan */
            max-width: 1200px; /* Lebar maksimum kontainer */
            margin: 0 auto; /* Memusatkan kontainer */
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8); /* Warna latar belakang putih transparan untuk kontainer */
            border-radius: 8px; /* Sudut melengkung untuk kontainer */
        }
        table {
            border-collapse: collapse;
            width: 100%; /* Tabel mengambil 100% dari lebar kontainer */
            color: #000; /* Warna teks tabel hitam */
        }
        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd; /* Batas tabel yang halus */
        }
        th {
            background-color: #f2f2f2; /* Warna background header tabel */
        }
        tr:nth-child(even) {
            background-color: #f9f9f9; /* Warna background baris genap */
        }
        tr:nth-child(odd) {
            background-color: #fff; /* Warna background baris ganjil */
        }
        a {
            color: #00f; /* Warna link biru */
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <center>
            <h2>CRUD SIMPLE PADA PERTEMUAN 12</h2>
            <a href="index.php">Beranda</a> | <a href="tambah.php">Tambah Data</a>
            <h3>Data Siswa</h3>
            <table cellpadding="5" cellspacing="0" border="1">
                <tr bgcolor="#CCCCCC">
                    <th>No.</th>
                    <th>NIS</th>
                    <th>Nama Lengkap</th>
                    <th>Jenis Kelamin</th>
                    <th>Fakultas</th>
                    <th>Alamat</th> <!-- Baru nih jam 1.40am di tambahin -->
                    <th>Aksi</th>
                </tr>

                <?php
                // Masukkan file koneksi ke database
                include 'konek.php';
                
                // Query ke database untuk ambil data siswa
                $query = mysqli_query($koneksi, "SELECT * FROM siswa ORDER BY siswa_nis DESC") or die(mysqli_error($koneksi));
                
                // Kalau query nggak ada hasilnya
                if(mysqli_num_rows($query) == 0){
                    echo '<tr><td colspan="7">Data nggak ada!</td></tr>';
                } else {
                    // Proses data hasil query
                    $no = 1;
                    while($data = mysqli_fetch_assoc($query)){
                        echo '<tr>';
                        echo '<td>'.$no.'</td>'; // Nomor urut
                        echo '<td>'.$data['siswa_nis'].'</td>'; // NIS
                        echo '<td>'.$data['siswa_nama'].'</td>'; // Nama lengkap
                        echo '<td>'.$data['siswa_alamat'].'</td>'; // Alamat
                        echo '<td>'.$data['siswa_fakultas'].'</td>'; // Fakultas
                        echo '<td>'.$data['siswa_jurusan'].'</td>'; // Jurusan
                        echo '<td><a href="edit.php?id='.$data['siswa_id'].'">Edit</a> | <a href="hapus.php?id='.$data['siswa_id'].'" onclick="return confirm(\'Yakin?\')">Hapus</a></td>'; // Opsi edit dan hapus
                        echo '</tr>';
                        $no++;
                    }
                }
                ?>
            </table>
        </center>
    </div>
</body>
</html>
