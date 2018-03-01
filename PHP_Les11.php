<?php

// 1. Распишите свое понимание пространства имен. (Представьте, что вас спрашивают на собеседовании).

// Пространство имен схоже с файлами, лежащими в разных папках, или с более техничной точки зрения, как области памяти, которые отделены друг от друга логически

// 2. Распишите свое понимание исключений (Exception) и зачем они нужны. (Представьте, что вас спрашивают на собеседовании).

// Исключения позволяют предотваращть возможные ошибки, исправить их во время выполнения программы или остановить программу, чтобы отладить ее именно в том месте, где все должно было пройти хорошо, но все же поломалось

// 3. Сделайте класс Товар из прошлого ДЗ абстрактным суперклассом для всех остальных классов.

// 4. Придумайте свое пространство имен (для всех классов), распределите все классы и интерфейсы по директориям и напишите свой autoloader.

// 5. Опишите класс Корзина, в который можно передавать любой товар. Опишите у корзины нужные свойства и методы. Например, метод получения суммы заказа, удаление товара из корзины и т.д.

// 6. Опишите класс Заказ, который создается на основе Корзины и имеет методы для оформления и печати (вывода на экран) информации о заказе. 

abstract class Goods
{
	public $title;
	public $price;

	public function newPrice($discount) {
		echo 'Цена со скидкой согла бы составлять '.round($this->price - ($this->price / 100 * $discount)).' рублей<br><hr>';
	}

	public function getPrintClass() {	
		echo $this->title.'<br>';
		foreach ($this as $key => $item) {
			echo "{$key} => {$item}<br>";
		}
		echo '<hr>';
	}

	public function userOrderClass($amount) {
		$order_class = new Basket();
		$order_class->title = $this->title;
		$order_class->price = $this->price;
		$order_class->amount = $amount;
		return $order_class;
	}
}

function __autoload($className) {
	$filePath = './classes/'.$className.'.class.php';
	if (file_exists($filePath)) {
		include "$filePath";
	} else {
		die ("Класса $className не существует");
	}
}

function userOrder($item, $amount) {
	$order = $item->userOrderClass($amount);
	return $order;
}

$car1 = new Car('Машина1', '1401', 'White', 300000);
$car2 = new Car('Машина2', 'Malina', 'Orange', 700000);

$tv1 = new Television('Телевизор1', 'LG', '55LJ622V', 40000);
$tv2 = new Television('Телевизор2', 'Samsung', '"32" FHD Flat TV UE32J5100K Series 5', 35000);

$pen1 = new BallpointPen('Шариковая ручка1', 'Attache', 'Blue', 25);
$pen2 = new BallpointPen('Шариковая ручка2', 'ErichKrause', 'Black', 30);

$duck1 = new Duck('Утка1', 'Мандаринка', 'Восточная Азия', 5000);
$duck2 = new Duck('Утка1', 'Кряква', 'Кряква широко распространена в северном полушарии', 7000);

$user_order = userOrder($car1, 1);
$user_price = $user_order->OrderPrice();

$final_order = new Order($user_order, $user_price);

?>