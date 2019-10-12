<?php
    class Karyawan{
        public $nama;
        public $pekerjaan;
        public $tahun_bekerja;
        protected $gaji;
        private $gjmanager= 5000000;
        private $gjobs = 500000;

    // optimal parameter
        public function setdata($nama,$pekerjan,$tahun_bekerja){
            $this->nama=$nama;
            $this->pekerjaan=$pekerjaan;
            $this->tahun_pekerjaan=$pekerjaan;
        }
        public function getdata(){
      if (($this->pekerjaan == "manager") && ($this->tahun_bekerja >= 10)) {
         $this->gaji = $this->tahun_bekerja * $this->gjmanager;
      } elseif (($this->pekerjaan == "ob") && ($this->tahun_bekerja >= 10)) {
         $this->gaji = $this->tahunbekerja * $this->gjob;
      } elseif (($this->pekerjaan == "manager") && ($this->tahun_bekerja >= 5)) {
         $this->gaji = $this->tahun_bekerja * ($this->gjmanager - 1000000);
      } elseif (($this->pekerjaan == "ob") && ($this->tahun_bekerja >= 5)) {
         $this->gaji = $this->tahun_bekerja * ($this->gjob - 100000);
      }
      return $this->gaji;
   }
}
$karyawan = new Karyawan();
$karyawan = setdata();

echo "nama =$karyawan->nama <br>";
echo "Pekerjaan = $karyawan->pekerjaan <br>";
echo "Tahun Bekerja = $karyawan->tahun_bekerja <br>";
echo "gaji = " . number_format($karyawan->getdata(),0,",",".") ."<br>";
?>