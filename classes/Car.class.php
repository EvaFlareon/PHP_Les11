<?php 

class Car extends Goods
{
	public $brand = 'Lada';
	public $model;
	public $color;

	public function __construct($title, $model, $color, $price)
	{
		$this->title = $title;
		$this->model = $model;
		$this->color = $color;
		$this->price = $price;
	}

	public function getPrintClass()
	{
		parent::getPrintClass();
	}

	public function startCar()
	{
		echo 'Поехали!<br><hr>';
	}

	public function stoptCar()
	{
		echo 'Остановились<br><hr>';
	}
}

?>