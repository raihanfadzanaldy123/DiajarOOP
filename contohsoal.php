<?php
class Motor{
    public $gigi="4.Motor Gigi <br/>";

    public function __construct(){
        echo"1.Motor Matic <br/>";
    }

    public function __destruct(){
        echo "5.Motor Gigi <br/>";
    }
}

class MotorMatic extends Motor{
    public function __construct(){
        parent::__construct();
        echo "2.Dirilis Setelah <br/><br/>";
    }

    public function spesifikasi(){
        echo "3.dibanding <br/><br/>";
    }

    public function __destruct(){
        parent::__destruct();
        echo "6.aa ";
    }
}

$angsam = new MotorMatic();
$angsam->spesifikasi();
echo $angsam->gigi;

?>