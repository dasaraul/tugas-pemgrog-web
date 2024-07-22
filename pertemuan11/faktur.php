<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faktur Pembelian</title>
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
        pre {
            background-color: #ffffff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            white-space: pre-wrap;
            word-wrap: break-word;
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
    <h2>Data Faktur Pembelian</h2>
    <pre>
    <?php
        // baca seluruh isi file
        readfile('faktur.txt');
    ?>
    </pre>
    <a class="btn" href="index.php">Kembali ke Form</a>
</body>
</html>
