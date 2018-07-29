<?php

class StringDisplayImpl implements DisplayImpl
{
    private $string;
    private $width;

    public function __construct($string)
    {
        $this->string = $string;
        $this->width = strlen($string);
    }

    public function rawOpen()
    {
        $this->printLine();
    }
    public function rawPrint()
    {
        echo sprintf('|%s|', $this->string);
        echo chr(10);
    }
    public function rawClose()
    {
        $this->printLine();
    }
    private function printLine()
    {
        echo '+';
        for ($i=0; $i<$this->width; $i++) {
            echo '-';
        }
        echo '+'; echo chr(10);
    }
}