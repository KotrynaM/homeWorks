<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
        <title>Failo skaitymas su PHP</title>
    <body>
        <?php
            $filename = 'text.txt';
            $file = fopen ($filename, "r");
        
            $filesize = filesize($filename);
            $filetext = fread($file, $filesize);
            fclose($file);
        
            echo "Failo dydis: $filesize B";
            echo "<pre>$filetext</pre>";
        ?>
    </body>
</html>
