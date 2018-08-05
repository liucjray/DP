<?php

class IDCard extends Product
{
    private $owner;

    public function __construct($owner)
    {
        echo "make $owner ID card" . chr(10);

        $this->owner = $owner;
    }

    public function make()
    {
        echo "use {$this->owner} ID card" . chr(10);
    }

    public function getOwner()
    {
        return $this->owner;
    }
}