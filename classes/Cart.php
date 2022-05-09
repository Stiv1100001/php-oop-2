<?php

class Cart
{
    private array $products;

    public function __construct()
    {
        $this->products = [];
    }

    public function addProductToCart(Product $product): void
    {
        array_push($this->products, $product);
    }

    
    /**
     *
     * @return array
     */
    public function getProducts(): array
    {
        return $this->products;
    }

    public function getTotal(): float
    {
        $total = 0.0;

        foreach ($this->products as $product) {
            $total += $product->getPrice();
        }

        return $total;
    }
}
