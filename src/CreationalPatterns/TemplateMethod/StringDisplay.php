<?php

namespace CreationalPatterns\TemplateMethod;

class StringDisplay extends AbstractDisplay
{
    private $string;
    private $length;

    public function __construct($string)
    {
        $this->string = $string;
        $this->length = mb_strwidth($string);
    }

    public function open()
    {
        echo $this->printLine();
    }

    public function show()
    {
        echo sprintf('|%s|', $this->string);
        echo chr(10);
    }

    public function close()
    {
        echo $this->printLine();
    }

    private function printLine()
    {
        echo '+';
        for ($i = 0; $i < $this->length; $i++) {
            echo '-';
        }
        echo '+';
        echo chr(10);
    }
}