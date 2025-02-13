<?php

abstract class Produk{

    public $nama;
    public $harga;
    public $kategori;

    public function __construct($nama, $harga, $kategori){
        $this->nama = $nama;
        $this->harga = $harga;
        $this->kategori = $kategori;
    }

    public function getInfoProduk(){
        echo "Nama : " . $this->nama . "<br>";
        echo "Harga : Rp " . $this->harga . "<br>";
        echo "Kategori : " . $this->kategori . "<br>";
    }
}

class Makanan extends Produk{
  public $Exp;

  public function __construct($nama, $harga, $Exp){
    $this->nama = $nama;
    $this->harga = $harga;
    $this->kategori = "Makanan";
    $this->Exp = $Exp;
  }

  public function getInfoProduk(){
    echo "Nama : " . $this->nama . "<br>";
    echo "Harga : Rp " . $this->harga . "<br>";
    echo "Kategori : " . $this->kategori . "<br>";
    echo "Exp: " . $this->Exp . "<br><br>";   
  }
}

class Elektronik extends Produk{
    public $Garansi;
    public function __construct($nama, $harga, $Garansi){
        $this->nama = $nama;
        $this->harga =  $harga;
        $this->kategori = "Elktronik";
        $this->Garansi = $Garansi;
    }
    
    public function getInfoProduk(){
        echo "Nama : " . $this->nama . "<br>";
        echo "Harga : Rp " . $this->harga . "<br>";
        echo "Kategori : " . $this->kategori . "<br>";
        echo "Garansi: " . $this->Garansi . "<br><br>";   
      }
}

$produk1 = new Makanan("Bolu Khas Lembang", 25000, "31JAN2025");
$produk2= new Elektronik("Samsung S24 Fe", 9950000, "2TAHUN");

$produk1->getInfoProduk();
$produk2->getInfoProduk();
?>

//contoh lain (key  PRIVATE)

<?php

class Pegawai {
    private $nama;
    private $jabatan;
    private $gaji;

    public function __construct($nama, $jabatan, $gaji) {
        $this->nama = $nama;
        $this->jabatan = $jabatan;
        $this->gaji = $gaji;
    }

    public function getNama() {
        return $this->nama;
    }

    public function getJabatan() {
        return $this->jabatan;
    }

    public function getGaji() {
        return $this->gaji;
    }

    public function getGajiBersih($tunjangan, $pajak) {
        $gajiKotor = $this->gaji + ($this->gaji * $tunjangan);
        $gajiBersih = $gajiKotor - ($gajiKotor * $pajak);
        return $gajiBersih;
    }

    public function getInfoPegawai($tunjangan, $pajak) {
        echo "Nama: " . $this->getNama() . "<br>";
        echo "Jabatan: " . $this->getJabatan() . "<br>";
        echo "Gaji Pokok: Rp" . number_format($this->getGaji(), 0, ',', '.') . "<br>";
        echo "Tunjangan: Rp" . number_format($this->getGaji() * $tunjangan, 0, ',', '.') . "<br>";
        echo "Pajak: Rp" . number_format(($this->getGaji() + ($this->getGaji() * $tunjangan)) * $pajak, 0, ',', '.') . "<br>";
        echo "Gaji Bersih: Rp" . number_format($this->getGajiBersih($tunjangan, $pajak), 0, ',', '.') . "<br><br>";
    }
}

// Nilai tunjangan dan pajak
$tunjangan = 0.2; // 20% dari gaji
$pajak = 0.1; // 10% dari gaji + tunjangan

// Membuat objek pegawai
$pegawai1 = new Pegawai("Anggita Dewi Lestari", "Freelance", 3000000);

// Menampilkan informasi pegawai
$pegawai1->getInfoPegawai($tunjangan, $pajak);
?>
