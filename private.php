<?php
    class Komputer{
        //private
        private $jenis_processor ="Intel-Core i7";

        public function tampilkan_processor(){
            return $this->jenis_processor;
        }
    }
        //buat class laptop
    class Laptop extends Komputer{
        public function tampilkan_processor(){
            return $this->jenis_processor;
        }
    }
$komputer_baru = new Komputer();
$laptop_baru = new Laptop();

// jalankan method dari class komputer
echo $komputer_baru->tampilkan_processor(); // Intel Core i7

// jalankan method dari class laptop (error)
echo $laptop_baru->tampilkan_processor();
?>