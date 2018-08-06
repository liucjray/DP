<?php

namespace CreationalPatterns\FactoryMethod;

class IDCardFactory extends Factory
{
    private $owners = [];

    public function createProduct($owner): Product
    {
        return new IDCard($owner);
    }

    public function registerProduct(Product $product)
    {
        array_push($this->owners, $product->getOwner());
    }

    public function getOwners(): array
    {
        return $this->owners;
    }

    public function showOwners()
    {
        echo '--------------' . chr(10);

        $i = 1;
        foreach ($this->getOwners() as $owner) {
            echo sprintf("%d. %s %s", $i, $owner, chr(10));
            $i++;
        }

        echo '--------------' . chr(10);
    }
}