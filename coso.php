<?php
    class Rpl {
        public $kelas;
        public $jurusan;
        public $nilai_kelas;
        public $siswa;
        public $walikelas;

    public function nilainya(){
        return "Kelas Kalian Terakreditasi $nilai_kelas, SELAMATT";
    }
    public function brok(){
        return "Mantap Broo Siiss";
    }
}
$rpl1 = new Rpl();
$rpl1 -> $jurusan ="RPL";
$rpl1 -> $kelas = "XI RPL 1";
$rpl1 -> $nilai_kelas = "A";
$rpl1 -> $siswa = "35";
$rpl1 -> $walikelas = "Pak Sofwan";

$rpl2 = new Rpl();
$rpl2 -> $jurusan ="RPL";
$rpl2 -> $kelas = "XI RPL 2";
$rpl2 -> $nilai_kelas = "A";
$rpl2 -> $siswa = "33";
$rpl2 -> $walikelas = "Pak Wildan";


$rpl3 = new Rpl();
$rpl3 -> $jurusan ="RPL";
$rpl3 -> $kelas = "XI RPL 2";
$rpl3 -> $nilai_kelas = "A";
$rpl3 -> $siswa = "33";
$rpl3 -> $walikelas = "Bu tammy";


echo "Jurusan : ".$rpl1->$jurusan."<br>";
echo "Kelas ".$rpl1->$kelas." Terakreditasi ".$rpl1->$nilai_kelas."<br>";
echo "Dengan Sebanyak Siswa : ".$rpl1->$siswa." Siswa <br>";
echo "Wali Kelas : ".$rpl1->$walikelas."<br>".$rpl2->nilainya()."<br>".$rpl2->brok()."<br><br>";

echo "Jurusan : ".$rpl2->$jurusan."<br>";
echo "Kelas ".$rpl2->$kelas." Terakreditasi ".$rpl2->$nilai_kelas."<br>";
echo "Dengan Sebanyak Siswa : ".$rpl2->$siswa." Siswa <br>";
echo "Wali Kelas : ".$rpl2->$walikelas."<br>".$rpl2->nilainya()."<br>".$rpl2->brok()."<br><br>";

echo "Jurusan : ".$rpl3->$jurusan."<br>";
echo "Kelas ".$rpl3->$kelas." Terakreditasi ".$rpl3->$nilai_kelas."<br>";
echo "Dengan Sebanyak Siswa : ".$rpl3->$siswa." Siswa <br>";
echo "Wali Kelas : ".$rpl3->$walikelas."<br>".$rpl3->nilainya()."<br>";
echo $rpl3->brok();


  
?>