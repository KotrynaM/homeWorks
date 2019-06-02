<!DOCTYPE html>
<html lang="lt">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> PHP02 | task05</title>
    </head>
    <body>
        <?php
            $temp = [-4, 3, 9, 19, 9, 12, 20, 24, 20, 12, 14, 18, 21, 20, 23, 16, 16, 15, 19, 19, 17, 17, 15, 12, 13, 13, 15, 19, 21];
        
            asort($temp);
            foreach ($temp as $row) {
                echo "$row <br/>";
            }
        
            $sum = array_sum($temp);
        
            $count = count($temp);
        
            $average = ($sum/$count);
            echo "Vidutinė temperatūra yra". round($average)."&degC <br/><br/>";
            
            $temp = array_unique($temp);
            
            asort($temp);
        
            $warmest = array_slice($temp, -5, 5);

            $coolest = array_slice($temp, 0, 5);
            
            echo "Šilčiausios 5 temp. yra ";
            foreach($warmest as $w) {
                echo "$w&degC; ";
                
            }
            echo "Šalčiausios 5 temp. yra ";
            foreach($coolest as $c) {
                echo "$c&degC; ";

            }
        ?>
    </body>
</html>
