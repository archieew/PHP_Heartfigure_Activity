<!DOCTYPE html>
<html>
<head>
    <!--Name: Custodio, Archie D.
    Section: WD - 201-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>oddNumbers</title>
</head>

<body>
    <?php
    echo "<pre>";
    $num = 10;

    for ($i = $num / 2; $i <= $num; $i += 2) {
        for ($j = 1; $j < $num - $i; $j += 2) {
            echo "&nbsp;";
        }

        for ($j = 1; $j <= $i; $j++) {
            echo "A";
        }

        for ($j = 1; $j <= $num - $i; $j++) {
            echo "&nbsp;";
        }

        for ($j = 1; $j <= $i; $j++) {
            echo "A";
        }

        echo "<br/>";
    }

    for ($i = $num; $i >= 1; $i--) {
    }

    for ($j = $i; $j < $num; $j++) {
    }

    echo "&nbsp;";

    for ($j = 1; $j <= ($i * 2) - 1; $j++) {
    }

    echo "C";
    echo "<br/>";
    echo "</pre>";
    ?>
</body>
</html>
