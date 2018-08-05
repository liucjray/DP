<?php

class CharDisplay extends AbstractDisplay
{
    private $char;

    public function __construct($char)
    {
        $this->char = $char;
    }

    public function open()
    {
        echo '<<';
    }

    public function show()
    {
        echo $this->char;
    }

    public function close()
    {
        echo '>>';
        echo chr(10);
    }

}