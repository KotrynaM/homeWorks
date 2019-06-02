<!DOCTYPE html>
<html lang="lt">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Stačiakampio plotas | PHP03 task03</title>
    </head>
        
    <body>
        <?php
        
        
            // jei mygtukas nepaspaustas arba jei duomenys neįvesti - rodome formą.
            if (!isset($_POST['submit']) || empty($_POST['firstName']) || empty ($_POST['surname']))
            
            {
        ?>
        
        <form action="<?php $_PHP_SELF; ?>" method="POST">
            Vardas: <input type="text" name="firstName"/>
            Pavardė: <input type="text" name="surname"/>
            <input type="submit" name="submit" value="Įvesti" />
        </form>
        
        <?php
         //jei mygtukas paspaustas ir duomenys įvesti, atliekame veiksmą ir pateikiame rezultatą.
        }   else {
            //vartotojo įvestus duomenys priskiriame kintamiesiems.
            $vardas = $_POST['firstName'];
            $pavarde = $_POST['surname'];
                if($_POST['firstName'] && $_POST['surname']){
                    if(!preg_match("/[^A-Za-z'-]/", $_POST['firstName'])){
                        echo "Jūsų duomenys: $vardas $pavarde"; 
                        } else{
                            die("Įvesti netinkami duomenys.");
                    }
                }
            }
        ?>
    </body>
</html>