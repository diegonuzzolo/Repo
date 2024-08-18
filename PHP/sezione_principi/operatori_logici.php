<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // comparazione ==
        // identico ===
        // confronto > < >= <= <>
        // non uguale !=
        // non identico !==

        // And && 
        // Or || 
        // Not !


    if(4 == 4){
        echo "e' vero";
    }
    echo '<br>';
    if(4 === 4){
        echo "e' vero";
    }
    echo "<br>";
    if(4 < 4){
        echo "e' vero";
    }else{
        echo "non e' vero";
    }
    echo "<br>";
    if(4 === '4'){
        echo "4 e '4' sono identici";
    }else{
        echo "4 e '4' non sono identici";
    }
    


    ?>
</body>
</html>