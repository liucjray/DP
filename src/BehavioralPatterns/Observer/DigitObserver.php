<?php

namespace BehavioralPatterns\Observer;

class DigitObserver implements Observer
{
    public function update(NumberGenerator $generator)
    {
        echo sprintf('%s: %d %s',
            __CLASS__,
            $generator->getNumber(),
            PHP_EOL
        );
    }
}