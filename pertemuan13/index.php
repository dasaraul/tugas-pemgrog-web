<!DOCTYPE html>
<html>
<head>
    <title>PEMROGRAMAN WEB</title>
</head>
<body>
    <h2>MEMBUAT CONTOH PERINTAH CRUD PADA PEMROGRAMAN WEB</h2>
    <a href="index.php">Beranda</a> | <a href="tambah.php">Tambah Data</a>
    <h3>Data Siswa</h3>
    <table cellpadding="5" cellspacing="0" border="1">
        <tr bgcolor="#CCCCCC">
            <th>No.</th>
            <th>NIS</th>
            <th>Nama Lengkap</th>
            <th>Jenis Kelamin</th>
            <th>Telepon</th>
            <th>Opsi</th>
        </tr>
        
        <?php
        // Include file koneksi ke database
        include 'konek.php';
        
        // Query ke database dg SELECT table siswa diurutkan berdasarkan NIS paling besar
        $query = mysqli_query($koneksi, "SELECT * FROM siswa ORDER BY siswa_nis DESC") or die(mysqli_error($koneksi));
        
        // Jika query menghasilkan nilai > 0 maka menjalankan script di bawah if
        if(mysqli_num_rows($query) == 0){ // Ini artinya jika data hasil query di atas kosong
            echo '<tr><td colspan="7">Tidak ada data!</td></tr>';
        }else{ // Ini artinya jika data hasil query ada (data di database tidak kosong)
            // Melakukan perulangan while dengan dari dari query $query
            $no = 1; // Membuat variabel $no untuk membuat nomor urut
            while($data = mysqli_fetch_assoc($query)){ // Mengambil semua data dari hasil eksekusi $query
                echo '<tr>';
                echo '<td>'.$no.'</td>'; // Menampilkan nomor urut
                echo '<td>'.$data['siswa_nis'].'</td>'; // Menampilkan data nis dari database
                echo '<td>'.$data['siswa_nama'].'</td>'; // Menampilkan data nama lengkap dari database
                echo '<td>'.$data['siswa_fakultas'].'</td>'; // Menampilkan data kelas dari database
                echo '<td>'.$data['siswa_jurusan'].'</td>'; // Menampilkan data jurusan dari database
                echo '<td><a href="edit.php?id='.$data['siswa_id'].'">Edit</a> | <a href="hapus.php?id='.$data['siswa_id'].'" onclick="return confirm(\'Yakin?\')">Hapus</a></td>'; // Menampilkan opsi edit dan hapus
                echo '</tr>';
                $no++; // Menambah jumlah nomor urut setiap row
            }
        }
        ?>
    </table>
</body>
</html>
