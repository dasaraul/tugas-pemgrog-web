<?php
// buat variabel untuk menampung data dari file formtoko.html
$sticker = rand(1, 10); // data sticker dengan qty random
$kaos = rand(1, 10); // data kaos dengan qty random
$jacket = rand(1, 10); // data jacket dengan qty random

// harga dasar masing-masing produk
define('HARGA_STICKER', 7500);
define('HARGA_KAOS', 35000);
define('HARGA_JACKET', 50000);

// total harga sebelum diskon
$total = (HARGA_STICKER * $sticker) + (HARGA_KAOS * $kaos) + (HARGA_JACKET * $jacket);

// diskon tetap 12%
$diskon = 0.12 * $total;
$pesan_diskon = '12%';

// subtotal setelah diskon
$subtotal = $total - $diskon;

// tulis ke file, mode yang digunakan adalah 'a' = append
$fp = fopen("faktur.txt", "a");
fwrite($fp, "Data Faktur Pembelian: \n");
fwrite($fp, "Harga Stiker: Rp." . (HARGA_STICKER * $sticker) . ",-\n");
fwrite($fp, "Harga Kaos: Rp." . (HARGA_KAOS * $kaos) . ",-\n");
fwrite($fp, "Harga Jacket: Rp." . (HARGA_JACKET * $jacket) . ",-\n");
fwrite($fp, "Diskon: $pesan_diskon\n");
fwrite($fp, "SUBTOTAL: Rp." . $subtotal . ",-\n");
fwrite($fp, "=====================================\n\n");
fclose($fp);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembelian Online</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f8f9fa;
        }
        h2 {
            color: #343a40;
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 12px;
            border: 1px solid #dee2e6;
            text-align: center;
        }
        th {
            background-color: #007bff;
            color: #ffffff;
        }
        td {
            color: #495057;
        }
        .btn {
            display: block;
            width: 200px;
            margin: 20px auto;
            padding: 10px;
            text-align: center;
            text-decoration: none;
            background-color: #007bff;
            color: #ffffff;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h2>NOTED ONLINE STORE DATA PEMBELIAN</h2>
    <table>
        <tr><th>Item</th><th>Harga</th><th>Qty</th><th>Total</th></tr>
        <tr>
            <td>Stiker</td>
            <td>Rp. <?php echo HARGA_STICKER; ?></td>
            <td><?php echo $sticker; ?></td>
            <td>Rp. <?php echo $sticker * HARGA_STICKER; ?></td>
        </tr>
        <tr>
            <td>Kaos</td>
            <td>Rp. <?php echo HARGA_KAOS; ?></td>
            <td><?php echo $kaos; ?></td>
            <td>Rp. <?php echo $kaos * HARGA_KAOS; ?></td>
        </tr>
        <tr>
            <td>Jacket</td>
            <td>Rp. <?php echo HARGA_JACKET; ?></td>
            <td><?php echo $jacket; ?></td>
            <td>Rp. <?php echo $jacket * HARGA_JACKET; ?></td>
        </tr>
        <tr>
            <td colspan="3">Total</td>
            <td>Rp. <?php echo $total; ?></td>
        </tr>
        <tr>
            <td colspan="3">Diskon</td>
            <td><?php echo $pesan_diskon; ?></td>
        </tr>
        <tr>
            <td colspan="3">SUBTOTAL</td>
            <td>Rp. <?php echo $subtotal; ?></td>
        </tr>
    </table>
    <a class="btn" href="faktur.php">Lihat Faktur</a>
</body>
</html>
