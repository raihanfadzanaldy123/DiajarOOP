<?php
//1.class adalah sebuah blueprint/template untuk membuat instance dari object
//2.Class Mendefinikasikan object
//3.Class Menyimpan Data(property) dan perilaku(method)

//Membuat class Dengan Nama Kucing
    class Kucing{
        //membuat property
        public $warna    ="Coklat";
        public $jml_kaki = 4;
        public $mkn_fav  ="Pindang";

        //Membuat Method dengan Nama bersuara
        public function bersuara(){
            return "Miaww";
        }
    }
//membuat object baru
$kucing1 = new Kucing();
$kucing1 -> $warna="oren";
$kucing1 -> $jml_fav;

echo "Warna Kucing : $kucing1->$warna";
?>