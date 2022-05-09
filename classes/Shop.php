<?php

class Shop
{
    private array $products = [];

    public function __construct(array $products = null)
    {
        if ($products) {
            $this->products = $products;
        }
    }

  
    /**
     * Get all products
     * @return array
     */
    public function getProducts(): array
    {
        return $this->products;
    }

    public function addProduct(Product $product): void
    {
        array_push($this->products, $product);
    }

    public function addToUserCart(User $user, Product $product): void {
      $user->getCart()->addProductToCart($product);
    }
}
