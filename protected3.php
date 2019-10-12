<?php
 
// buat class komputer
class Komputer{
 
   // property dengan hak akses protected
   protected $jenis_processor = "Intel Core i7";
}
  
// buat class laptop
class Laptop extends Komputer{
   public function tampilkan_processor() {
     return $this->jenis_processor;
   }
}
  
// buat objek dari class laptop (instansiasi)
$laptop_baru = new Laptop();
  
// jalankan method
echo $laptop_baru->tampilkan_processor(); // "Intel Core i7"
?>