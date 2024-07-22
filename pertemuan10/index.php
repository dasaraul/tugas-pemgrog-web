<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struktur Kontrol PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 0;
        }
        #header {
            background-image: url('https://i.pinimg.com/736x/99/fb/62/99fb6248b2083941015425d4ae596ab3.jpg');
            background-size: cover;
            background-position: center;
            height: 200px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
        }
        #header h1 {
            font-size: 3em;
            margin: 0;
            color: rgb(155, 155, 155);
        }

        #header p {
            font-size: 1.2em;
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }
        section {
            padding: 20px;
            margin-top: 20px;
            background: #fff;
            border: #ccc 1px solid;
        }
        h1, h2 {
            color: #50b3a2;
        }
        code {
            display: block;
            background: #f4f4f9;
            padding: 10px;
            margin: 10px 0;
            border-left: #e8491d 3px solid;
            white-space: pre-wrap;
        }
    </style>
</head>
<body>
<header id="header">
    <div>
        <h1>Hadi Wijaya Web</h1>
        <p>Stay Safe lurr</p>
    </div>
</header>

<section class="container">
    <?php
    // contoh if else
    $nilaiA = 5;
    echo "<h2>Contoh If Else</h2>";
    echo "<code>Nilai dari a adalah \$nilaiA<br>";
    if ($nilaiA > 10) {
        echo "a lebih besar dari 10<br>";
    } else {
        echo "a tidak lebih besar dari 10<br>";
    }
    echo "</code>";
    echo "<code>
    \$nilaiA = 5;\n
    if (\$nilaiA > 10) {\n
        echo \"a lebih besar dari 10\";\n
    } else {\n
        echo \"a tidak lebih besar dari 10\";\n
    }
    </code>";

    // contoh do while
    echo "<h2>Contoh Do While</h2>";
    $nilaiB = 0;
    echo "<code>";
    do {
        echo "Nilai dari b adalah $nilaiB<br>";
        $nilaiB++;
    } while ($nilaiB < 5);
    echo "</code>";
    echo "<code>
    \$nilaiB = 0;\n
    do {\n
        echo \"Nilai dari b adalah \$nilaiB<br>\";\n
        \$nilaiB++;\n
    } while (\$nilaiB < 5);
    </code>";

    // contoh switch case
    echo "<h2>Contoh Switch Case</h2>";
    $hari = 3;
    echo "<code>";
    switch ($hari) {
        case 1:
            echo "Hari ini adalah Senin<br>";
            break;
        case 2:
            echo "Hari ini adalah Selasa<br>";
            break;
        case 3:
            echo "Hari ini adalah Rabu<br>";
            break;
        case 4:
            echo "Hari ini adalah Kamis<br>";
            break;
        case 5:
            echo "Hari ini adalah Jumat<br>";
            break;
        default:
            echo "Akhir pekan<br>";
            break;
    }
    echo "</code>";
    echo "<code>
    \$hari = 3;\n
    switch (\$hari) {\n
        case 1:\n
            echo \"Hari ini adalah Senin\";\n
            break;\n
        case 2:\n
            echo \"Hari ini adalah Selasa\";\n
            break;\n
        case 3:\n
            echo \"Hari ini adalah Rabu\";\n
            break;\n
        case 4:\n
            echo \"Hari ini adalah Kamis\";\n
            break;\n
        case 5:\n
            echo \"Hari ini adalah Jumat\";\n
            break;\n
        default:\n
            echo \"Akhir pekan\";\n
            break;\n
    }
    </code>";

    // contoh elseif
    echo "<h2>Contoh Elseif</h2>";
    $nilaiC = 20;
    echo "<code>";
    if ($nilaiC < 10) {
        echo "c kurang dari 10<br>";
    } elseif ($nilaiC > 10 && $nilaiC < 30) {
        echo "c antara 10 dan 30<br>";
    } else {
        echo "c lebih besar atau sama dengan 30<br>";
    }
    echo "</code>";
    echo "<code>
    \$nilaiC = 20;\n
    if (\$nilaiC < 10) {\n
        echo \"c kurang dari 10\";\n
    } elseif (\$nilaiC > 10 && \$nilaiC < 30) {\n
        echo \"c antara 10 dan 30\";\n
    } else {\n
        echo \"c lebih besar atau sama dengan 30\";\n
    }
    </code>";

    // contoh for loop
    echo "<h2>Contoh For Loop</h2>";
    echo "<code>";
    for ($i = 0; $i < 5; $i++) {
        echo "Nilai dari i adalah $i<br>";
    }
    echo "</code>";
    echo "<code>
    for (\$i = 0; \$i < 5; \$i++) {\n
        echo \"Nilai dari i adalah \$i<br>\";\n
    }
    </code>";
    ?>
</section>
</body>
</html>
