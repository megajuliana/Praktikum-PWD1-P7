<?php

class Hewan {
    // hanya bisa diakses di dalam class Hewan melalui set & get
    private $nama;
    private $umur;

    public function setNama($nama) {
        $this->nama = $nama;
    }

    public function getNama() {
        return $this->nama;
    }

    public function setUmur($umur) {
        $this->umur = $umur;
    }

    public function getUmur() {
        return $this->umur;
    }
}

// Turunan 1: Class Kucing
class Kucing extends Hewan {
    public function getJenis() {
        return "Kucing";
    }

    public function getSuara() {
        return "Meong... Meong!";
    }
}

// Turunan 2: Class Anjing
class Anjing extends Hewan {
    public function getJenis() {
        return "Anjing";
    }

    public function getSuara() {
        return "Guk... Guk!";
    }
}

$kucing = new Kucing();
$kucing->setNama("Mochi");
$kucing->setUmur(2);

$anjing = new Anjing();
$anjing->setNama("Bruno");
$anjing->setUmur(3);