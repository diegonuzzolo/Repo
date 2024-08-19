<?php
require "Prodotto.php";

$p1 = new Prodotto('Apple', 'Macbook air 13"', "1299$", 'img.jpg');
$p1->setDescrizione("Apple Macbook air M2 13 pollici processore ultraveloce.");

?>


<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pagina prodotti</title>
</head>
<body>
<?php
$p1->display();
?>


</body>
</html>