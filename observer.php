<?php

require_once __DIR__ . '/vendor/autoload.php';

use BehavioralPatterns\Observer\RandomNumberGenerator;
use BehavioralPatterns\Observer\DigitObserver;
use BehavioralPatterns\Observer\GraphObserver;

$generator = new RandomNumberGenerator();
$digitObserver = new DigitObserver();
$graphObserver = new GraphObserver();

$generator->addObserver($digitObserver);
$generator->addObserver($graphObserver);
$generator->exec();