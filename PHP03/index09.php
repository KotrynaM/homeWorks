<!DOCTYPE html>
<html lang="lt">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Stačiakampio plotas</title>
    </head>
    <body>
        <?php
            function daugyba($num1, $num2) {
                $sandauga = $num1 * $num2;
                echo "Stačiakampio plotas yra: $sandauga";
            }
        
            daugyba(5, 8);
        ?>
    </body>
</html>
