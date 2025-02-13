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

<?php
// Class Pegawai
class Pegawai {
    private $nama;
    private $jabatan;
    private $gaji;

    public function __construct($nama, $jabatan, $gaji) {
        $this->nama = $nama;
        $this->jabatan = $jabatan;
        $this->gaji = $gaji;
    }

    public function getNama() { return $this->nama; }
    public function getJabatan() { return $this->jabatan; }
    public function getGaji() { return $this->gaji; }

    public function getInfoPegawai() {
        return "Nama: " . $this->nama . "\nJabatan: " . $this->jabatan . "\nGaji: " . $this->gaji;
    }
}

// Class HasilHitung
class HasilHitung {
    public $gaji_pokok;
    public $tunjangan;
    public $pajak;
    public $gaji_total;

    public function __construct($gaji_pokok, $tunjangan, $pajak, $gaji_total) {
        $this->gaji_pokok = $gaji_pokok;
        $this->tunjangan = $tunjangan;
        $this->pajak = $pajak;
        $this->gaji_total = $gaji_total;
    }
}

// Class Payroll
class Payroll {
    private $pegawai;
    private $tunjangan;
    private $pajak;

    public function __construct(Pegawai $pegawai, $tunjangan = 0.2, $pajak = 0.1) {
        $this->pegawai = $pegawai;
        $this->tunjangan = $tunjangan;
        $this->pajak = $pajak;
    }

    public function hitungGajiTotal() {
        $gaji_pokok = $this->pegawai->getGaji();
        $tunjangan = $this->tunjangan * $gaji_pokok;
        $pajak = $this->pajak * $gaji_pokok;
        $gaji_total = $gaji_pokok + $tunjangan - $pajak;

        return new HasilHitung($gaji_pokok, $tunjangan, $pajak, $gaji_total);
    }

    public function tampilSlipGaji() {
        $hasil = $this->hitungGajiTotal();
        echo $this->pegawai->getInfoPegawai() . "\n";
        echo "Tunjangan: " . $hasil->tunjangan . "\n";
        echo "Pajak: " . $hasil->pajak . "\n";
        echo "Total Gaji: " . $hasil->gaji_total . "\n";
    }
}

// Eksekusi program
$pegawai1 = new Pegawai("Andi", "Manager", 10000000);
$pegawai2 = new Pegawai("Budi", "Staff IT", 7000000);

$payroll1 = new Payroll($pegawai1);
$payroll2 = new Payroll($pegawai2, 0.3, 0.1);

echo "Slip Gaji 1:\n";
$payroll1->tampilSlipGaji();
echo "\n";

echo "Slip Gaji 2:\n";
$payroll2->tampilSlipGaji();
?>
