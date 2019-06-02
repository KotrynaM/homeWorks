<!DOCTYPE html>
<html lang="lt">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> PHP02 | task06</title>
    </head>
    <body>
        <?php
            $ceu = array(
                "Italija"=>"Roma",
                "Liuksemburgas"=>"Liuksemburgas",
                "Belgija"=>"Briuselis", "Danija"=>"Kopenhaga", "Suomija"=>"Helsinkis",
                "Prancūzija" => "Paryžius",
                "Slovakija"=>"Bratislava", "Slovenija"=>"Liublijana",
                "Vokietija" => "Berlynas",
                "Graikija"=> "Atėnai", "Airija"=>"Dublinas", "Nyderlandai"=>"Amsterdamas",
                "Portugalija"=>"Lisabona", "Ispanija"=>"Madridas", "Švedija"=>"Stokholmas",
                "Didžioji Britanija"=>"Londonas", "Kipras"=>"Nikosija", "Lietuva"=>"Vilnius", "Čekija"=>"Praha",
                "Estija"=>"Talinas", "Vengrija"=>"Budapeštas", "Latvija"=>"Ryga",
                "Malta"=>"Valeta",
                "Austrija" => "Viena",
                "Bulgarija" => "Sofija",
                "Rumunija" => "Bukareštas",
                "Lenkija"=>"Varšuva"
            );
            
            echo "Valstybės ir miestai: <br>";
            foreach ($ceu as $country => $city) {
                echo "$country - $city, <br>";
            }
            asort($ceu);
            echo "<br>Miestų pavadinimai abc tvarka yra: ";
            foreach ($ceu as $country => $city) {
                echo "$city <br/>";
            }
        ?>
    </body>
</html>
