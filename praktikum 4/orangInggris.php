<?php

require_once "orangBiasa.php";

class orangInggris extends orangBiasa{

    // override
    public function ucapSalam()
    {
        echo "hello my name is " . $this->nama . "<br>";
    }
}