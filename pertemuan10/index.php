<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Control Structures</title>
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
    // if else example
    $a = 5;
    echo "<h2>If Else Example</h2>";
    echo "<code>Value of a is \$a<br>";
    if ($a > 10) {
        echo "a is greater than 10<br>";
    } else {
        echo "a is not greater than 10<br>";
    }
    echo "</code>";
    echo "<code>
    \$a = 5;\n
    if (\$a > 10) {\n
        echo \"a is greater than 10\";\n
    } else {\n
        echo \"a is not greater than 10\";\n
    }
    </code>";

    // do while example
    echo "<h2>Do While Example</h2>";
    $b = 0;
    echo "<code>";
    do {
        echo "Value of b is $b<br>";
        $b++;
    } while ($b < 5);
    echo "</code>";
    echo "<code>
    \$b = 0;\n
    do {\n
        echo \"Value of b is \$b<br>\";\n
        \$b++;\n
    } while (\$b < 5);
    </code>";

    // switch case example
    echo "<h2>Switch Case Example</h2>";
    $day = 3;
    echo "<code>";
    switch ($day) {
        case 1:
            echo "Today is Monday<br>";
            break;
        case 2:
            echo "Today is Tuesday<br>";
            break;
        case 3:
            echo "Today is Wednesday<br>";
            break;
        case 4:
            echo "Today is Thursday<br>";
            break;
        case 5:
            echo "Today is Friday<br>";
            break;
        default:
            echo "It's the weekend<br>";
            break;
    }
    echo "</code>";
    echo "<code>
    \$day = 3;\n
    switch (\$day) {\n
        case 1:\n
            echo \"Today is Monday\";\n
            break;\n
        case 2:\n
            echo \"Today is Tuesday\";\n
            break;\n
        case 3:\n
            echo \"Today is Wednesday\";\n
            break;\n
        case 4:\n
            echo \"Today is Thursday\";\n
            break;\n
        case 5:\n
            echo \"Today is Friday\";\n
            break;\n
        default:\n
            echo \"It's the weekend\";\n
            break;\n
    }
    </code>";

    // elseif example
    echo "<h2>Elseif Example</h2>";
    $c = 20;
    echo "<code>";
    if ($c < 10) {
        echo "c is less than 10<br>";
    } elseif ($c > 10 && $c < 30) {
        echo "c is between 10 and 30<br>";
    } else {
        echo "c is greater than or equal to 30<br>";
    }
    echo "</code>";
    echo "<code>
    \$c = 20;\n
    if (\$c < 10) {\n
        echo \"c is less than 10\";\n
    } elseif (\$c > 10 && \$c < 30) {\n
        echo \"c is between 10 and 30\";\n
    } else {\n
        echo \"c is greater than or equal to 30\";\n
    }
    </code>";

    // for loop example
    echo "<h2>For Loop Example</h2>";
    echo "<code>";
    for ($i = 0; $i < 5; $i++) {
        echo "Value of i is $i<br>";
    }
    echo "</code>";
    echo "<code>
    for (\$i = 0; \$i < 5; \$i++) {\n
        echo \"Value of i is \$i<br>\";\n
    }
    </code>";
    ?>
</section>
</body>
</html>