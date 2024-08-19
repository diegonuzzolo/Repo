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