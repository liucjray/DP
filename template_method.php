<?php


require_once __DIR__ . '/vendor/autoload.php';

use CreationalPatterns\TemplateMethod\CharDisplay;
use CreationalPatterns\TemplateMethod\StringDisplay;

//include_once 'AbstractDisplay.php';
//include_once 'CharDisplay.php';
//include_once 'StringDisplay.php';

$d1 = new CharDisplay('H');
$d2 = new StringDisplay('Hello World.');
$d3 = new StringDisplay('哈囉 世界');

$d1->display();
$d2->display();
$d3->display();