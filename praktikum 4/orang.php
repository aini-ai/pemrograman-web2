<?php

class orang{
    protected $nama;

    public function setNama ($nama){
        $this->nama = $nama;
    }

    public function ucapsalam(){
        echo "halo perkenalkan nama saya". $this->nama . "<br>";
    }
}