

<!DOCTYPE html>
<html>
<head>
	<?php

	require "db.php";

	?>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Document</title>
</head>
<body>


<?php

$query = "SELECT * from utenti";

$result = $connection->query($query);

if(!$result){
	echo 'query fallita.'.$connection->error;
}


// while ($row = mysqli_fetch_row($result)) { per richiedere solo in formato arrayList i record dal database
// 	print_r($row);
// }

while ($row = $result->fetch_assoc()) {

	echo "<pre>";
	print_r($row);
	echo "</pre>";

}



?>



</body>
</html>
