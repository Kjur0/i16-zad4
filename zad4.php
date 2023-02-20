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
    <h1>4. Rok przestępny</h1>
    <form method="post">
        <label for="a">Wpisz przedział:<br>od:</label>
        <input type="number" name="a" step="1" min="1" max="9999" required><br>
        <label for="b">do:</label><input type="number" name="b" step="1" min="1" max="9999" required><br>
        <input type="submit" value="Sprawdź">
    </form><br>
    <?php
    function czy_prestepny(int $rok)
    {
        return (($rok % 4 == 0 && $rok % 100 != 0) || $rok % 400 == 0);
    }
    if (array_key_exists('a', $_POST) && $_POST['a'] < $_POST['b']) {
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = 0;
        echo "<p>Lata przestępne z przedziału: $a - $b to:<br><ul>";
        for ($r = $a; $r <= $b; $r++) {
            if (czy_prestepny($r)) {
                echo "<li>$r</li>";
                $c++;
            }
        }
        echo "</ul>Łącznie $c</p>";
    } else if (array_key_exists('a', $_POST)) {
        echo "<p style='color:red'>BŁĘDNY PRZEDZIAŁ</p>";
    }
    ?>
</body>

</html>