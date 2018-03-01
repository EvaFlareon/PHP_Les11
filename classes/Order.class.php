<?php

class Order extends Basket
{
	function __construct($object, $order_price)
	{
		echo "Вы заказали $object->title в количестве $object->amount на сумму $order_price";
	}
}

?>