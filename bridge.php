<?php

require_once __DIR__ . '/vendor/autoload.php';

use StructuralPatterns\Bridge\Display;
use StructuralPatterns\Bridge\StringDisplayImpl;
use StructuralPatterns\Bridge\CountDisplay;

//include_once 'Display.php';
//include_once 'CountDisplay.php';
//include_once 'DisplayImpl.php';
//include_once 'StringDisplayImpl.php';

$d1 = new Display(new StringDisplayImpl("Hello, Taiwan."));
$d1->display();

$d2 = new CountDisplay(new StringDisplayImpl("Hello, World."));
$d2->display();

$d3 = new CountDisplay(new StringDisplayImpl("Hello, Universe."));
$d3->display();
$d3->multiDisplay(10);