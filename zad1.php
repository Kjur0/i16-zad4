<!DOCTYPE html>
<html lang="pl">

<head>
    <style>
        body {
            background-color: white;
        }

        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
        }

        td,
        th {
            height: 40px;
            width: 40px;
            border: 1px solid #dddddd;
            text-align: center;
        }
    </style>
</head>

<body>
    <h1>1. Tabliczka mnożenia</h1>
    <form>
    <input type="submit" value="Generuj ponownie"><br>
    </form>
    <?php
    $n = rand(5, 20);
    $m = rand(5, 20);
    echo '<table><tr>';
    for ($i = 0; $i <= $m; $i++) {
        echo "<th>$i</th>";
    }
    echo '</tr>';
    $x = 0;
    while ($x++ < $n) {
        echo "<tr>";
        echo "<th>$x</th>";
        $y = 1;
        do {
            echo "<td>" . $x * $y++ . "</td>";
        } while ($y <= $m);
        echo "</tr>";
    }
    echo '</table>';
    ?>
</body>

</html>