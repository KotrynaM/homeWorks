<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> PHP02 | arrayCities</title>
    </head>
        <?php
            $cities = ['Berlynas', 'Roma', 'Londonas'];
    
            $cities2 = [
                'Tokijas' => 13.6,
                'Vasingtonas' => 0.6,
                'Maskva' => 11.5
            ];
            $cities2 ['Londonas'] = 8.6;
    
            $cities3 = [
                'Tokijas' => [13.6, 1868, 'Japonija'],
                'Vasingtonas' => [0.6, 1790, 'Jav'],
                'Maskva' => [11.5, 1147, 'Rusija']
            ];
            $cities3 ['Londonas'] = [8.6, 43, Anglija];
        ?>
    <body>
        <ul>
            <li>
                <?php
                    print_r($cities);
                ?>
            </li>
            <li>
                <?php
                    echo $cities[1];
                ?>
            </li>
        </ul>
        <ul>
            <li>
                <?php
                    print_r($cities2);
                ?>
            </li>
            <li>
                <?php
                    echo "<br> Gyventojų skaičius:{$cities2['Tokijas']} mln.";
                ?>
            </li>
        </ul>
        <ul>
            <li>
                <?php
                    print_r($cities3);
                ?>
            </li>
            <li>
                <?php
                    echo "<br> Gyventojų skaičius:{$cities3['Londonas'][0]} mln.";
                ?>
            </li>
            <li>
                <?php
                    echo "<br> Įkurtas:{$cities3['Londonas'][1]} m.";
                ?>
            </li>
            <li>
                <?php
                    echo "<br> Šalis:{$cities3['Londonas'][2]}";
                ?>
            </li>
        </ul>
        <?php
            $metai = 1773;
            
            if ($metai >= $cities3['Vasingtonas'][1]) {
                echo "Vašingtonas yra JAV sostinė.";
            }
            elseif ($metai == 1774) {
                echo "JAV sostinė vis dar Filadelfijoje.";
            } 
            else {
                echo 'Liko ' .($cities3['Vasingtonas'][1] - $metai) .'metai(-ų) iki Vašingtono įkūrimo.';
            }
        ?>
        <ul>
            <?php
                $cities4 = ['Tokijas', 'Vašingtonas', 'Maskva', 'Londonas'];
            
                for($i = 0; $i <count($cities4); $i++ ){
                    echo "<li>$cities4[$i]</li>";
                }
            ?>
        </ul>
        <ul>
            <?php
                foreach ($cities4 as $cities4[2]) {
                    echo "miesto pavadinimas - $cities4[2] <br>";
                }
            ?>
        </ul>
    </body>
</html>
