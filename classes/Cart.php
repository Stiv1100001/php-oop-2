<?php

class Cart
{
    private array $products;

    public function __construct()
    {
        $this->products = [];
    }

    /**
     * Add product to cart
     * @param Product $product
     * @return void
     */
    public function addProductToCart(Product $product): void
    {
        array_push($this->products, $product);
    }

    
    /**
     *  Get all prducts in cart
     * @return array of Product
     */
    public function getProducts(): array
    {
        return $this->products;
    }

    /**
     * Get total price of cart
     * @return float
     */
    public function getTotal(): float
    {
        $total = 0.0;

        foreach ($this->products as $product) {
            $total += $product->getPrice();
        }

        return $total;
    }
}
