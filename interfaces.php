<?php

interface CarsInterface
{
	public function startCar();
	public function stoptCar();
}

interface TvInterface
{
	public function onTelevision();
	public function offTelevision();
}

interface PenInterface
{
	public function writePen($wrieString);
}

interface DuckInterface
{
	public function flyDuck();
}

?>