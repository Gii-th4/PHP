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