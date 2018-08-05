<?php

abstract class Factory
{
    public function create(string $owner): Product
    {
        $product = $this->createProduct($owner);

        $this->registerProduct($product);

        return $product;
    }

    abstract public function createProduct($owner): Product;

    abstract public function registerProduct(Product $product);
}