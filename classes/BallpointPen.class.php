<?php

class BallpointPen extends Goods 
{
	public $manufacturer;
	public $inkColor;

	public function __construct($title, $manufacturer, $inkColor, $price)
	{
		$this->title = $title;
		$this->manufacturer = $manufacturer;
		$this->inkColor = $inkColor;
		$this->price = $price;
	}

	public function getPrintClass()
	{
		parent::getPrintClass();
	}

	public function writePen($wrieString)
	{
		echo 'Вы написали: "'.$wrieString.'"<br><hr>';
	}
}

?>