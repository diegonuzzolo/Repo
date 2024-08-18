<?php
	$dbname = 'loginapp';
	$status = "<h3 id='statusConnection' > Connessione al database in corso... </h3>";
	echo $status;
	// 1 Creazione della connessione
	$connection = new mysqli('localhost', 'root', '', $dbname);
?>

	<?php
		// 2 verifica
		if($connection){
		echo "<script>
		let status = document.getElementById('statusConnection');
		status.innerText = 'database: $dbname. Connessione effettuata!';
		status.style.color = 'green';

		</script>";
	}else{
		echo "<script>

		let status = document.getElementById('statusConnection');
		status.innerText = 'Connessione al database non effettuata.';
		status.style.color = 'red';

		</script>";
	}
	
	?>
	