<?php

namespace BehavioralPatterns\Observer;

interface Observer {
    public function update(NumberGenerator $generator);
}