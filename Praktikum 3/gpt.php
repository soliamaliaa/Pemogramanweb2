<?php

class Orang {
    protected $nama; // Deklarasi properti dalam block class

    public function __construct($nama) {
        $this->nama = $nama; // Set nilai properti
    }

    public function ucapSalam() {
        echo "Halo, perkenalkan nama saya " . $this->nama . "<br>";
    }
}

// Contoh penggunaan:
$orang = new Orang("Budi");
$orang->ucapSalam();
?>
