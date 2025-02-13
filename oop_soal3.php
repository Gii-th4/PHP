<?php

class Pegawai{
    private $nama;
    private $jabatan;
    private $gaji;

    public function __construct($nama, $jabatan, $gaji){
        $this->nama = $nama;
        $this->jabatan = $jabatan;
        $this->gaji = $gaji;
    }

    public function getNama(){
        return $this->nama;
    }
    public function getJabatan(){
        return $this->jabatan;
    }public function getGaji(){
        return $this->gaji;
    }

    public function getInfoPegawai(){
        return "Nama= " . $this->nama . "</br>" .  "Jabatan= " . $this->jabatan . "</br>" . "Gaji= " . $this->gaji;
    }
}

class Hitung{
    public $gaji_pokok;
    public $tunjangan;
    public $pajak;
    public $gaji_total;

    public function __construct($gaji_pokok, $tunjangan, $pajak, $gaji_total){
        $this->gaji_pokok = $gaji_pokok;
        $this->tunjangan = $tunjangan;
        $this->pajak = $pajak;
        $this->gaji_total = $gaji_total;
    }
}

class payroll{
    private $pegawai;
    private $tunjangan;
    private $pajak;

    public function __construct(Pegawai $pegawai, $tunjangan = 0.2, $pajak = 0.1 ){
        $this->pegawai = $pegawai;
        $this->tunjangan = $tunjangan;
        $this->pajak = $pajak;
    }

    public function hitungGajiTotal(){
        $gaji_pokok = $this->pegawai->getGaji();
        $tunjangan = $this->tunjangan * $gaji_pokok;
        $pajak = $this->pajak * $gaji_pokok;
        $gaji_total = $gaji_pokok + $tunjangan - $pajak;

        return new Hitung($gaji_pokok, $tunjangan, $pajak, $gaji_total);
    }

    public function tampilSlipGaji(){
        $total = $this->hitungGajiTotal();
        echo $this->pegawai->getInfoPegawai() . "</br>";
        echo "Tunjangan= " . $total->tunjangan . "</br>";
        echo "Pajak= " . $total->pajak . "</br>" ;
        echo "Total Gaji= " . $total->gaji_total . "</br></br>";
    }
}


$pegawai1 = new Pegawai("Andi", "Manager", 10000000) ;

$pegawai2 = new Pegawai("Budi", "Staff IT", 7000000);
  

$payroll1 = new Payroll($pegawai1);
$payroll2 = new Payroll($pegawai2, 0.3, 0.1);
  

$payroll1->tampilSlipGaji();
$payroll2->tampilSlipGaji();


?>

