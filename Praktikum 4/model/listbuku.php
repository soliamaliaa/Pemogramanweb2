<?php

require_once "buku.php";

class listbuku{

public function getData(){
    $list_buku = array(
        new buku('Belajar PHP Dasar', 'Mark Lee', 'Informatika', '2024'),
        new buku('Matematika Diskrit', 'Jeno Lee', 'Andi Publisher', '2016'),
        new buku('Kalkulus 2', 'Haechan', 'Erlangga', '2020'),
        new buku('Metode Penelitian', 'Renjun Huang', 'Informatika', '2021'),
    );
    
    return $list_buku;
}

}