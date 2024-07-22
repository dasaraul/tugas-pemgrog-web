<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materi PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
        }
        .content {
            margin: 20px;
        }
        .code {
            background-color: #f4f4f4;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .result {
            background-color: #e7f7e7;
            padding: 10px;
            border: 1px solid #c3e6cb;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="content">
       <center> <h1>Materi PHP</h1> </center><br>
        
        <h2>1. Variabel PHP</h2>
        <p>Di PHP, variabel dimulai dengan tanda <code>$</code>. Berikut contohnya:</p>
        <div class="code">
            <code>
                &lt;?php<br>
                $nama = "Jaya";<br>
                $umur = 18;<br>
                echo "Nama: " . $nama . ", Umur: " . $umur;<br>
                ?&gt;
            </code>
        </div>
        <div class="result">
            <p>Hasilnya:</p>
            <p>
                <?php
                $nama = "Jaya";
                $umur = 19;
                echo "Nama: " . $nama . ", Umur: " . $umur;
                ?>
            </p>
        </div>

        <h2>2. Penerapan Konstanta dan Tipe Variabel PHP</h2>
        <p>Konstanta itu nilai yang nggak bisa diubah setelah didefinisikan. Tipe variabel di PHP itu ada integer, float, string, dan boolean.</p>
        <div class="code">
            <code>
                &lt;?php<br>
                define("PI", 3.14);<br>
                $angka = 10; // integer<br>
                $desimal = 10.5; // float<br>
                $benar = true; // boolean<br>
                echo "PI: " . PI;<br>
                ?&gt;
            </code>
        </div>
        <div class="result">
            <p>Hasilnya:</p>
            <p>
                <?php
                define("PI", 3.14);
                $angka = 10; // integer
                $desimal = 10.5; // float
                $teks = "Halo"; // string
                $benar = true; // boolean
                echo "PI: " . PI;
                ?>
            </p>
        </div>

        <h2>3. Komentar dalam PHP</h2>
        <p>Komentar dipakai untuk nambahin catatan di kode. PHP bisa pakai komentar satu baris atau beberapa baris.</p>
        <div class="code">
            <code>
                &lt;?php<br>
                // Ini komentar satu baris<br>
                /*<br>
                Ini komentar<br>
                beberapa baris<br>
                */<br>
                ?&gt;
            </code>
        </div>
        <div class="result">
            <p>Komentar ini nggak ngaruh ke hasil output.</p>
        </div>

        <h2>4. Operator</h2>
        <p>PHP mendukung banyak operator yang dikelompokkan dalam beberapa kategori:</p>
        
        <h3>4.1 Operator Aritmatika</h3>
        <div class="code">
            <code>
                &lt;?php<br>
                $a = 10;<br>
                $b = 2;<br>
                echo $a + $b; // Penjumlahan<br>
                echo $a - $b; // Pengurangan<br>
                echo $a * $b; // Perkalian<br>
                echo $a / $b; // Pembagian<br>
                echo $a % $b; // Sisa bagi<br>
                ?&gt;
            </code>
        </div>
        <div class="result">
            <p>Hasilnya:</p>
            <p>
                <?php
                $a = 10;
                $b = 2;
                echo "Penjumlahan: " . ($a + $b) . "<br>";
                echo "Pengurangan: " . ($a - $b) . "<br>";
                echo "Perkalian: " . ($a * $b) . "<br>";
                echo "Pembagian: " . ($a / $b) . "<br>";
                echo "Sisa bagi: " . ($a % $b);
                ?>
            </p>
        </div>

        <h3>4.2 Operator Kombinasi</h3>
        <div class="code">
            <code>
                &lt;?php<br>
                $a = 10;<br>
                $a += 5; // sama dengan $a = $a + 5<br>
                echo $a;<br>
                ?&gt;
            </code>
        </div>
        <div class="result">
            <p>Hasilnya:</p>
            <p>
                <?php
                $a = 10;
                $a += 5; // sama dengan $a = $a + 5
                echo $a;
                ?>
            </p>
        </div>

        <h3>4.3 Operator Perbandingan</h3>
        <div class="code">
            <code>
                &lt;?php<br>
                $a = 10;<br>
                $b = 20;<br>
                echo ($a == $b) ? "true" : "false"; // Sama dengan<br>
                echo ($a != $b) ? "true" : "false"; // Tidak sama dengan<br>
                echo ($a < $b) ? "true" : "false"; // Kurang dari<br>
                echo ($a > $b) ? "true" : "false"; // Lebih dari<br>
                echo ($a <= $b) ? "true" : "false"; // Kurang dari atau sama dengan<br>
                echo ($a >= $b) ? "true" : "false"; // Lebih dari atau sama dengan<br>
                ?&gt;
            </code>
        </div>
        <div class="result">
            <p>Hasilnya:</p>
            <p>
                <?php
                $a = 10;
                $b = 20;
                echo "Sama dengan: " . (($a == $b) ? "true" : "false") . "<br>";
                echo "Tidak sama dengan: " . (($a != $b) ? "true" : "false") . "<br>";
                echo "Kurang dari: " . (($a < $b) ? "true" : "false") . "<br>";
                echo "Lebih dari: " . (($a > $b) ? "true" : "false") . "<br>";
                echo "Kurang dari atau sama dengan: " . (($a <= $b) ? "true" : "false") . "<br>";
                echo "Lebih dari atau sama dengan: " . (($a >= $b) ? "true" : "false");
                ?>
            </p>
        </div>

        <h3>4.4 Operator Logika</h3>
        <div class="code">
            <code>
                &lt;?php<br>
                $x = true;<br>
                $y = false;<br>
                echo ($x && $y) ? "true" : "false"; // DAN (AND)<br>
                echo ($x || $y) ? "true" : "false"; // ATAU (OR)<br>
                echo (!$x) ? "true" : "false"; // TIDAK (NOT)<br>
                ?&gt;
            </code>
        </div>
        <div class="result">
            <p>Hasilnya:</p>
            <p>
                <?php
                $x = true;
                $y = false;
                echo "AND: " . (($x && $y) ? "true" : "false") . "<br>";
                echo "OR: " . (($x || $y) ? "true" : "false") . "<br>";
                echo "NOT: " . ((!$x) ? "true" : "false");
                ?>
            </p>
        </div>

        <h3>4.5 Operator Increment/Decrement</h3>
        <div class="code">
            <code>
                &lt;?php<br>
                $a = 10;<br>
                echo ++$a; // Pre-increment<br>
                echo $a++; // Post-increment<br>
                echo --$a; // Pre-decrement<br>
                echo $a--; // Post-decrement<br>
                ?&gt;
            </code>
        </div>
        <div class="result">
            <p>Hasilnya:</p>
            <p>
                <?php
                $a = 10;
                echo "Pre-increment: " . (++$a) . "<br>";
                echo "Post-increment: " . ($a++) . "<br>";
                echo "Pre-decrement: " . (--$a) . "<br>";
                echo "Post-decrement: " . ($a--);
                ?>
            </p>
        </div>

        <h3>4.6 Operator String</h3>
        <div class="code">
            <code>
                &lt;?php<br>
                $a = "JAWA";<br>
                $b = "NICH";<br>
                echo $a . " " . $b; // Penggabungan String<br>
                ?&gt;
            </code>
        </div>
        <div class="result">
            <p>Hasilnya:</p>
            <p>
                <?php
                $a = "JAWA";
                $b = "NICH";
                echo $a . " " . $b;
                ?>
            </p>
        </div>

        <h2>5. Escape Character</h2>
        <p>Escape character dipakai buat masukin karakter spesial di string.</p>
        <div class="code">
            <code>
                &lt;?php<br>
                echo "Ini adalah tanda kutip: \\"";<br>
                echo "Baris baru menggunakan \\n";<br>
                echo "Tab menggunakan \\t";<br>
                ?&gt;
            </code>
        </div>
        <div class="result">
            <p>Hasilnya:</p>
            <p>
                <?php
                echo "Ini adalah tanda kutip: \"<br>";
                echo "Baris baru menggunakan \\n<br>";
                echo "Tab menggunakan \\t";
                ?>
            </p>
        </div>

        <h2>6. Spesial Character</h2>
        <p>Spesial character dalam string itu termasuk newline (\n), tab (\t), dan lain-lain.</p>
        <div class="code">
            <code>
                &lt;?php<br>
                echo "Baris pertama\\nBaris kedua"; // Newline<br>
                echo "Kolom pertama\\tKolom kedua"; // Tab<br>
                ?&gt;
            </code>
        </div>
        <div class="result">
            <p>Hasilnya:</p>
            <p>
                <?php
                echo nl2br("Baris pertama\nBaris kedua"); // Newline
                echo "<br>";
                echo "Kolom pertama\tKolom kedua"; // Tab
                ?>
            </p>
        </div>
    </div>
</body>
</html>
