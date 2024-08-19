<!DOCTYPE html>
<html>
<head>
	<?php
	require "db.php";
    require "functions.php";   
    
	?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Document</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<?php
if(isset($_POST['submit'])){
    queryUpdate();
}

querySelectAllUtenti();

?>
<body>


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
                	<?php
                        utentiIdIntoSelectTag();
                	?>
            </div>
                <div class="form-group">
                <input type="submit" value="Aggiorna" name="submit" class="btn btn-primary">
            	</div>
            </form>
        </div>
    </div>

</body>
</html>