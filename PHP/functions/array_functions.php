
<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

   	    $list = [rand(1, 500), rand(1, 500), rand(1, 500), rand(1, 500)];
        echo max($list);
        echo "<br>";
        echo min($list);
        echo "<br>";
        sort($list);
        echo print_r($list);



    ?>
</body>

</html>