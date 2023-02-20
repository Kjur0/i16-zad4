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
    <h1>2. Odwrotna kolejność</h1>
    <form method="post">
        <label for="num">Wpisz liczbę:</label><input type="number" name="num" step="1" min="0" required><input type="submit" value="Pisz!">
    </form><br>
    <?php
    if (array_key_exists('num', $_POST)) {
        $num = $_POST['num'];
        echo "Liczba $num napisana w odwrotnej kolejności to: ";
        while ($num > 0) {
            echo $num % 10;
            $num = ($num - ($num % 10)) / 10;
        }
    }
    ?>
</body>

</html>