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
    <h1>3. NWD</h1>
    <form method="post">
        <label for="a">Wpisz liczbę a:</label><input type="number" name="a" step="1" min="0" required><br>
        <label for="b">Wpisz liczbę b:</label><input type="number" name="b" step="1" min="0" required><br>
        <input type="submit" value="Oblicz!">
    </form><br>
    <?php
    function nwd(int $a, int $b)
    {
        $i = 0;
        while ($a != $b) {
            if ($a > $b) $a -= $b;
            else $b -= $a;
            $i++;
        }
        return array($i, $a);
    }
    function unwd(int $a, int $b)
    {
        $i = 0;
        while ($b > 0) {
            $c = $a % $b;
            $a = $b;
            $b = $c;
            $i++;
        }
        return array($i, $a);
    }
    if (array_key_exists('a', $_POST)) {
        $a = $_POST['a'];
        $b = $_POST['b'];
        $i1 = nwd($a, $b)[0];
        $r1 = nwd($a, $b)[1];
        $i2 = unwd($a, $b)[0];
        $r2 = unwd($a, $b)[1];
        echo <<<EOD
        Dla liczb:<br>
        \ta:$a<br>
        \tb:$b<br>
        Wynik 1. implementacji Algorytmu Euklidesa to: $r1 ($i1 iteracji)<br>
        Wynik 2. implementacji Algorytmu Euklidesa to: $r2 ($i2 iteracji)
        EOD;
    }
    ?>
</body>

</html>