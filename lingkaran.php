<?php
class Bangun_datar{
    public $keliling,$luas,$jari;

    public function __construct($jari=0){
        return $this->jari=$jari;
        // *jari* = nyokot ti property    * $jari* mah di jero parameter tuh nu __Construct
    }

    public function menghitung_keliling(){
        $this->keliling=(2*3.14*$this->jari);
        return $this->keliling;
    }

    public function menghitung_luas(){
        $this->luas=(3.14 * $this->jari * $this->jari);
        return $this->luas;
    }
}
 

$keliling1 = new Bangun_datar(14);
echo "Jari-jari : ".$keliling1->jari."<br/>
      Keliling  : ".$keliling1->menghitung_keliling().
    "<br/> Luas : ".$keliling1->menghitung_luas();

?>