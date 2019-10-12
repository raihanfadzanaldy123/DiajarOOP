<?php
// buat class laptop
class Laptop {
    //buat property untuk class laptop
    var $pemilik;
    var $merk;
    var $ukuran_layar;
    // buat method 
    function hidupkan_laptop(){
        return "Hidupkan Laptop";
    }
    function matikan_laptop(){
        return "Matikan Laptop";
    }
}
    // buat object dari class laptop(instansiasi)
    $laptop_anto = new Laptop();
    // set Property
    $laptop_anto->pemilik="Anto";
    $laptop_anto->merk="Asus ROG";
    $laptop_anto->ukuran_layar="15 inchi";

    // tampilkan Property
    echo $laptop_anto->pemilik;
    echo "<br />";
    echo $laptop_anto->merk;
    echo "<br />";
    echo $laptop_anto->ukuran_layar;
    echo "<br />";

    // tampilkan method
    echo $laptop_anto->hidupkan_laptop();
    echo "<br />";
    echo $laptop_anto->matikan_laptop();
    ?>