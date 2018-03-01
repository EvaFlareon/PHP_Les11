<?php

class Basket extends Goods
{
	public function OrderPrice()
	{
		$full_order_price = $this->amount * $this->price;
		return $full_order_price;
	}
}

?>