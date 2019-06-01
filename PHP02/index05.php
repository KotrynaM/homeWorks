<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>daugybos lentelė</title>
    <style>
        tr {
            height: 40px;
        }
        td{
            width: 60px;
        }
    </style>
</head>
    <?php
        //daugybos lentelė
        echo "<table border=\"1\">";
        // daugybos lentelė skaičiams 1-10
        //pradedame nuo eilučių
        for ($row = 1; $row <= 10; $row++){
            echo "<tr>\n";
            //kiekvienam skaičiui eilutėje stulpelį
            for($col = 1; $col <= 10; $col++){
                //atliekame matematinį veiksmą
                $x = $col * $row;
                
                // siųsti rezulatą į atitinkamą stulpelį
                echo "<td>$x</td>\n";
            }
            echo "</td>";
        }
        echo "</table>";
    ?>
<body> 
</body>
</html>
