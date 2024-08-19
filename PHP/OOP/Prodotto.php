<?php


class Prodotto{

	public string $nome;
	public string $prezzo;
	public string $brand;
	public string $descrizione;
	public string $img;

	public function __construct(string $brand, string $nome, string $prezzo, string $immagine)
	{
		$this->nome = $nome;
		$this->brand = $brand;
		$this->prezzo = $prezzo;
		$this->img = $immagine;
	}


	public function setDescrizione(string $desc){
		$this->descrizione = $desc;
	}

	public function display(){
		echo "

			<div class='card' style='width: 18rem;'>
 			<img src='{$this->img}' class='card-img-top' alt=''>
  			<div class='card-body'>
    		<h5 class='card-title'>{$this->brand} {$this->nome} {$this->prezzo}</h5>
    		<p class='card-text'> {$this->descrizione} </p>
    		<a href='#' class='btn btn-primary'>Acquista</a>
  			</div>
			</div>

		";
	}





}
?>