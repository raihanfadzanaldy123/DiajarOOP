<?php
    class Manusia{
        public  $nama_saya;

        function berinama($saya){
            $this->nama_saya=$saya;
        }
    }

    class Teman extends Manusia{
        public $nama_teman;

        function berinamateman($teman){
            $this->nama_teman = $teman;
        }
    }

    $angsam = new Teman; //instansiasi class

    $angsam->berinama("Angsam");
    $angsam->berinamateman("Putra");

    echo "Nama Saya : ".$angsam->nama_saya . "<br/>";
    echo "Nama Teman Saya : ".$angsam->nama_teman;
?>

