<?php
class Komputer{

    public $processor = "Intel Core i7";

    public function __construct(){
        echo "Construct dari komputer <br/>";
    }

    public function __desctruct(){
        echo "Destructoruter dari komputer <br/>";
    }
}


class Laptop extends Komputer{
    public function __construct(){
        parent::__construct();
        echo "Construct Dari Laptop <br/>";
    }

    public function spesifikasi(){
        echo "Spesifikasi Laptop";
    }

    public function __desctruct(){
        echo "Destruct dari Laptop";
        parent::__desctruct();
    }
}
$asus = new Laptop();
$asus->spesifikasi();
echo $asus->processor ."<br/>";
?>