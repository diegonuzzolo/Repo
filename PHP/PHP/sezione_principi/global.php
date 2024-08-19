
<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $x = "uno";
    echo $x."<br>";

    function convert_to_number(){
        global $x; // questa dichiarazione rende la variabile x visibile a livello globale
        $x = 1;

    }

    convert_to_number();

    echo $x;

    ?>
</body>

</html>