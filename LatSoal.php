<?php
    
    class Izin{
        public $username ;
        protected $password="123";
        private $namanya ="Angsam";

        public function Pass(){
            return $this->password;
        }
        public function Nickname(){
            return $this->namanya;
        }
    } 

    $key = new Izin();
    $key->username="angsam7";


    echo "id : ".$key->username."<br />";
    echo "Password : ".$key->Pass()."<br />";
    echo "Username : ".$key->Nickname();
?>