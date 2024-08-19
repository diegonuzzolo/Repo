
<!DOCTYPE html>
<html lang="it">

<head>
    <?php
    require "db.php";
    ?>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifica credenziali</title>
</head>

<?php
    
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "SELECT salt, password from utenti where username = '$username' ";

        $result = $connection->query($query);
        if ($result) {
            $array = $result->fetch_assoc();
            $salt_hex = $array['salt'];
            $hashed_password = $array['password'];
            $salt = hex2bin($salt_hex);

            $input_hash = hash('sha512', $password . $salt);

            if ($input_hash === $hashed_password) {
                echo "Password corretta!";
            } else {
                echo "Password errata.";
            }

        }else{die('query invalida: '.$connection->error);}

    }


?>

<body>
    
    <div class="container">
        <div class="col-xs-6">
            <form action="login_verify.php" method="post">
                
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name="username">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <br>
                <input type="submit" value="Verifica" name="submit" class="btn btn-primary">
            </form>
        </div>
    </div>


    
</body>

</html>