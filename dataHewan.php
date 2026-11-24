<?php

class Hewan {
    private $nama;
    private $umur;

    public function setNama($nama) {
        $this->nama = $nama;
    }

    public function setUmur($umur) {
        $this->umur = $umur;
    }

    public function getNama() {
        return $this->nama;
    }

    public function getUmur() {
        return $this->umur;
    }
}

class Kucing extends Hewan {
    public function getSuara() {
        return "Meow Meow";
    }
}

class Anjing extends Hewan {
    public function getSuara() {
        return "Guk Guk";
    }
}

// Membuat objek Kucing
$kucing = new Kucing();
$kucing->setNama("Milo");
$kucing->setUmur(2);

// Membuat objek Anjing
$anjing = new Anjing();
$anjing->setNama("Bobby");
$anjing->setUmur(3);

?>