<?php
    class gajian{
        public $jamker1,$nama,$alamat,$nip;


        public function datdir($nama,$nip,$alamat,$jamker1){
            $this->nama=$nama;
            $this->nip=$nip;
            $this->alamat=$alamat;
            $this->jamker1=$jamker1;
        }

        public function gajkotor(){
           $hasil = $this->jamker1 * 75000;
           return $hasil;
        }
        
        public function gajbersih(){
            $gajbersih = $this->gajkotor() - ($this->gajkotor() * 0.025);
            return $gajbersih;
        }
    }


        if(isset($_POST['simpan'])){
        $a   = $_POST['nama'];
        $b   = $_POST['nip'];
        $c   = $_POST['alamat'];
        $d   = $_POST['jamker'];
    }


    $output = new gajian();
    $output->datdir($a,$b,$c,$d);
    echo "Nama :  ".$output->nama."<br/>";
    echo "NIP  :  ".$output->nip."<br/>";
    echo "Alamat: ".$output->alamat."<br/>";
    echo "Gaji Kotor : ".$output->gajkotor()."<br/>";
    echo "Gaji Bersih: ".$output->gajbersih()."<br/>";
?>