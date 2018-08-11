<?php

namespace BehavioralPatterns\Observer;

class RandomNumberGenerator extends NumberGenerator
{
    private $number;

    // 獲取
    public function getNumber()
    {
        return $this->number;
    }

    // 生成
    public function exec()
    {
        for ($i = 0; $i < 20; $i++) {
            $this->number = random_int(0, 49);
            $this->notifyObservers();
        }
    }
}
