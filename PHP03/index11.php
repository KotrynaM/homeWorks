<!DOCTYPE html>
<html lang="lt">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Stačiakampio plotas | task02</title>
    </head>
        
    <body>
        <?php
            function daugyba($num1, $num2) {
                $sandauga = $num1 * $num2;
                return $sandauga;
            }
            
            // jei mygtukas paspaustas arba jei duomenys neįvesti - rodome formą.
            if (!isset($_POST['submit']) || empty($_POST['ilgis']) || empty ($_POST['plotis'])){
        ?>
        
        <form action="<?php $_PHP_SELF; ?>" method="POST">
            Ilgis: <input type="text" name="ilgis"/>
            Plotis: <input type="text" name="plotis"/>
            <input type="submit" name="submit" value="Skaičiuoti plotą" />
        </form>
        
        <?php
         //jei mygtukas paspaustas ir duomenys įvesti, atliekame veiksmą ir pateikiame rezultatą.
            } else {
                //vartotojo įvestus duomenys priskiriame kintamiesiems.
                $num1 = $_POST['ilgis'];
                $num2 = $_POST['plotis'];
                    //panaudojame funkciją su vartotojo duomenimis.
                    echo 'Stačiakampio, kurio kraštinės yra ' . $num1  . ' ir ' . $num2 . ', plotas: ' . daugyba($num1, $num2);
            }
        ?>
    </body>
</html>