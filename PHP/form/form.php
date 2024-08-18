
<?php


if(isset($_POST['submit']))
    {
        define('MINIMUN', 3);
        define('MAXIMUN', 10);

        $name = array('diego', 'gino', 'verga', 'root');

        $username = $_POST['username'];
        $password = $_POST['password'];

           

         if(strlen($username) < MINIMUN){echo " username troppo corto. ";}
         else if(strlen($username) > MAXIMUN){ echo " username troppo lungo. ";}
        
        if(str_contains($username, ' ')){
            echo ' inserisci un username valido. ';   
        }
        else if (!in_array(strtolower($username), $name)) {
            echo 'Ci dispiace '.$username.', non sei autorizzato.';
        }else{
            echo 'Bentornato utente '.$username;
        }
    }

?>


<!DOCTYPE html>
<html lang="it">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="form.php" method="post">
        <input type="text" name="username" placeholder="username">
        <input type="password" name="password" placeholder="password">
        <input type="submit" name="submit">
    </form>
</body>

</html>