<?php

namespace BehavioralPatterns\Observer;

abstract class NumberGenerator
{
    /**
     * @var array $observers
     */
    private $observers = [];

    public function addObserver(Observer $observer)
    {
        $this->observers[] = $observer;
    }

    public function deleteObserver(Observer $observer)
    {
        if ($index = array_search($observer, $this->observers)) {
            unset($this->observers[$index]);
        }
    }

    public function notifyObservers()
    {
        foreach ($this->observers as $observer) {
            /** @var $observer Observer */
            $observer->update($this);
        }
    }

    // 獲取
    public abstract function getNumber();

    // 生成
    public abstract function exec();
}
