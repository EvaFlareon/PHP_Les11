<?php 

class Television extends Goods
{
	public $brand;
	public $model;

	public function __construct($title, $brand, $model, $price)
	{
		$this->title = $title;
		$this->brand = $brand;
		$this->model = $model;
		$this->price = $price;
	}

	public function getPrintClass()
	{
		parent::getPrintClass();
	}

	public function onTelevision()
	{
		echo 'Включили телевизор<br><hr>';
	}

	public function offTelevision()
	{
		echo 'Выключили телевизор<br><hr>';
	}
}

?>