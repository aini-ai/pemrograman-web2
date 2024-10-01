<?php

require_once "orang.php";
require_once "Nilai.php";

class Mahasiswa extends orang{
    protected string $nim;
    protected Nilai $nilai;

    public function setNim($nim){
        $this->nim = $nim;
    }

    public function setNilai($nilai){
        $this->nilai = $nilai;
    }

    public function getNim($nim){
        $this->nim = $nim;
    }

    public function getNilai($nilai){
        $this->nilai = $nilai;
    }

    public function tampilkanData(){
        echo "Nama : " . $this->nama . "<br>";
        echo "NIM : " . $this->nim . "<br>";
        echo "Nilai Tugas : " . $this->nilai->getTugas() . "<br>";
        echo "Nilai Uts : " . $this->nilai->getUts() . "<br>";
        echo "Nilai Uas : " . $this->nilai->getUas() . "<br>";
    }

}