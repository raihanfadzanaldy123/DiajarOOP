<?php 
    class family{
        public $nama,$nik,$alamat,$umur;

        public function __construct($nama,$nik,$alamat,$umur){
            $this->nama     = $nama;
            $this->nik      = $nik;
            $this->alamat   = $alamat;
            $this->umur     = $umur;
        }
        
    }
      if(isset($_POST['asup'])){
        $a   = $_POST['nama'];
        $b   = $_POST['nik'];
        $c   = $_POST['alamat'];
        $d   = $_POST['umur'];
    }
        $nampil = new family($a,$b,$c,$d);
        foreach ($a as $key => $value) {
            echo "Nama  : ".$a[$key]."<br/>";
            echo "NIP   : ".$b[$key]."<br/>";
            echo "Alamat: ".$c[$key]."<br/>";
            echo "umur  : ".$d[$key]."<br/>"; 
            echo "<hr>";
     }

?>