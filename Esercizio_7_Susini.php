<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $x = 5;
        $y = 10;
        if ($x > $y) {
            echo "<h1>x e' maggiore di y</h1>";
            $max = $x;
        } else if ($x < $y) {
            echo "<h1>x e' minore di y</h1>";
            $max = $y;
        } else {
            echo "<h1>x e' uguale a y</h1>";
            $max = $x;
        }
        if ($max<10) {
            "<p>$max e' minore di 10</p>";
        } else if ($max<20 && $max>10) {
            "<p>$max e' compreso tra 10 e 20</p>";
        }
    ?>
</body>
</html>