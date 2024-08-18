<!DOCTYPE html>
<html>
<head>
	<?php
	require "db.php";
	?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Document</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>


<?php

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    $query = "UPDATE utenti SET username='$username', password='$password' WHERE id =$id";
    $result = $connection->query($query);
    if(!$result){
        die('Query fallita.');
    }
}

$query = "SELECT * from utenti";

$result = $connection->query($query);
if (!$result) {
    die("Query fallita.");
}


?>


    <div class="container">
        <div class="col-xs-6">
            <form action="login_update.php" method="post">
                
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name="username">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <div class="form-group">
                <select name="id">

                	<?php
                        while($columnAssoc = $result->fetch_assoc())
                        {
                            $columId = $columnAssoc["id"];
                            echo "<option>$columId</option>";
                        }
                	?>


                	<!-- <option>
                		1
                	</option> -->
                </select>
            </div>
                <div class="form-group">
                <input type="submit" value="Aggiorna" name="submit" class="btn btn-primary">
            	</div>
            </form>
        </div>
    </div>

</body>
</html>