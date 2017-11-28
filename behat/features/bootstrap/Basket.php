<?php

class Basket
{
	private $products;
	private $productsPrice = 0.0;
	private $shelf;

	public function __construct(Shelf $shelf)
	{
		$this->shelf = $shelf;
	}

	public function addProduct($product)
	{
		$this->products[] = $product;
		$this->productsPrice += $this->shelf->getProductPrice($product);
	}

	public function count()
	{
		return $this->products;
	}

	public function getTotalPrice()
	{
		return $this->productsPrice + $this->calculateTax() + $this->calculateShipping();
	}

	/**
	 * @return float
	 */
	private function calculateTax(): float
	{
		return $this->productsPrice * 0.2;
	}

	/**
	 * @return int
	 */
	private function calculateShipping(): int
	{
		return $this->productsPrice > 10 ? 2 : 3;
	}
}