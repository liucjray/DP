<?php

namespace BehavioralPatterns\Observer;

class GraphObserver implements Observer
{
    public function update(NumberGenerator $generator)
    {
        echo sprintf('%s: %s %s',
            __CLASS__,
            str_repeat('*', $generator->getNumber()),
            PHP_EOL
        );
    }
}