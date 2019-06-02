<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP14 | task14</title>
    </head>

    <body>
        <?php
            class AsmensSavybė {
                public $vardas;
                public $pavarde;
                
                public function labas(){
                    return 'Laba diena, aš vardu ' . $this -> vardas . ' ' . $this -> pavarde . '<br>';
                }
            }
                
                $asmuo1 = new AsmensSavybė();
                $asmuo2 = new AsmensSavybė();
                
                $asmuo1 -> vardas = 'Saulė';
                $asmuo1 -> pavarde = 'Šviečia';
                $asmuo1 -> pasisveikinmas = 'Laba diena, aš vardu ';
                
                $asmuo2 -> vardas = 'Vasara';
                $asmuo2 -> pavarde = 'Atėjo';
                $asmuo2 -> pasisveikinmas = 'Laba diena, aš vardu ';
        
        
                echo $asmuo1 -> labas();
                echo $asmuo2 -> labas();
                
        ?>
    </body>
</html>
