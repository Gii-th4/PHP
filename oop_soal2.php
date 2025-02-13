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
    }

    public function getGaji(){
        return $this->gaji;
    }

    public function getGajian($tunjangan, $pajak){
        $gajiKotor = $this->gaji + ($this->gaji * $tunjangan);
        $Gajian = $gajiKotor - ($gajiKotor * $pajak);
        return $Gajian;
    }

    public function  getInfoPegawai($tunjangan, $pajak){
        echo "Nama: " . $this->getNama() . "<br>";
        echo "Jabatan: " . $this->getJabatan() . "<br>";
        echo "Gaji Pokok: Rp" . $this->getGaji(). "<br>";
        echo "Tunjangan: Rp" . $this->getGaji() * $tunjangan . "<br>";
        echo "Pajak: Rp" . $this->getGaji() + $this->getGaji() * $tunjangan * $pajak . "<br>";
        echo "Gaji utuh: Rp" . $this->getGajian($tunjangan, $pajak) . "<br>";
    } 

}

$tunjangan = 0.2;
$pajak = 0.1;


$pegawai1 = new Pegawai("Anggita Dewi Lestari", "Freelance", 2000000);
$hitungTunjangan = 250000;
$pegawai1->getInfoPegawai($tunjangan, $pajak);

?>
