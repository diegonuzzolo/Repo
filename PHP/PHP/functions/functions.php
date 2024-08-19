
<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

   	    function init(){
            echo "Ciao utente,"."<br>";
            echo "questo e' un semplice messaggio di benvenuto."."<br>"."<br>"."<br>"."<br>";
        }


        function greeting($message){
            echo $message;
            echo "<br>";
        }

        function sum($n, $n1)
        {
            return $n + $n1;
        }
        
        init();
        greeting("In questa sezione sono presenti solo esempi di codice PHP.");
        greeting("la somma di 3 e  98: ".sum(3, 98))


    ?>
</body>

</html>