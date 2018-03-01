<?php

class Duck extends Goods
{
	public $species;
	public $habitat;

	public function __construct($title, $species, $habitat, $price)
	{
		$this->title = $title;
		$this->species = $species;
		$this->habitat = $habitat;
		$this->price = $price;
	}

	public function getPrintClass()
	{
		parent::getPrintClass();
	}

	public function flyDuck()
	{
		echo $this->species.' полетела<br><hr>';
	}
}

?>