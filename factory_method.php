<?php

require_once __DIR__ . '/vendor/autoload.php';

use CreationalPatterns\FactoryMethod\IDCardFactory;

// include_once 'Product.php';
// include_once 'Factory.php';
// include_once 'IDCard.php';
// include_once 'IDCardFactory.php';

$factory = new IDCardFactory();
$cardA = $factory->create('A');
$cardB = $factory->create('B');
$cardC = $factory->create('C');

$cardA->make();
$cardB->make();
$cardC->make();

$factory->showOwners();