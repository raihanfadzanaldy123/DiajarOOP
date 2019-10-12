<?php
    class Produk{
    
        public $tas;
        public $sepatu;
        public $tenda;

    function Diskon(){
        return "Anda Akan Mendapatkan Diskon Sebesar 30%, Karena Telah Membeli 3 Barang";
        }
    }
    $konsumen1 = new Produk;
    $konsumen1->tas="Carrier Eiger rhinos 60L";
    $konsumen1->sepatu="Rei Silverback";
    $konsumen1->tenda="Great Outdoor 4 Person";

    $konsumen2= new Produk;
    $konsumen2->tas="Carrier Rei Kalimutu 50L";


    echo "Belanjaan Anda <br />";
    echo "1. ".$konsumen1->tas." <br />";
    echo "2. ".$konsumen1->sepatu." <br />";
    echo "3. ".$konsumen1->tenda." <br />";
    echo "<b>".$konsumen1->Diskon()."</b> <br /> <br />";

    echo "Belanjaan Anda <br />";
    echo "1. ".$konsumen2->tas." <br />";
?>