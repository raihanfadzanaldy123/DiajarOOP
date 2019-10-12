<?php
 
// buat class laptop
class Laptop {
 
   // buat protected property
   protected $pemilik="Anto ";
 
   public function akses_pemilik() {
      return $this->pemilik;
   }
   protected function hidupkan_laptop() {
      return "Hidupkan Laptop";
   }
   public function paksa_hidup() {
      return $this->hidupkan_laptop();
   }
}
  
// buat objek dari class laptop (instansiasi)
$laptop_anto = new Laptop();
  
// jalankan method akses_pemilik()
echo $laptop_anto->akses_pemilik(); // "Anto"
  
// jalankan method paksa_hidup()
echo $laptop_anto->paksa_hidup(); // "Hidupkan Laptop"
?>