<?php

abstract class AbstractDisplay
{
    abstract public function open();

    abstract public function show();

    abstract public function close();

    final public function display()
    {
        $this->open();

        for ($i = 0; $i < 5; $i++) {
            $this->show();
        }

        $this->close();
    }
}
