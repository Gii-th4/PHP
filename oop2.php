<?php

abstract class Hewan {
    // attribute
    public $jumlah_kaki;
    public $warna;
    public $posisi_mata;
    
    // method overriding
    public function __construct($wrn) {
        $this->warna = $wrn;
    }

    public function bersuara() {
        echo "Hewan Bersuara";
    }
}


interface Unggas {
    public function bertelur();
}



class Kucing extends Hewan {
    // attribute
    public $jumlah_kaki = 4;
    public $posisi_mata = "Depan";

    // method overriding
    public function bersuara() {
        echo "meong <br/>";
    }
}


class Bebek extends Hewan implements Unggas{
    // attribute
    public $jumlah_kaki = 2;
    public $posisi_mata = "Samping";

    // method overriding
    public function bersuara() {
        echo "wek wek <br/>";
    }

    public function bertelur(){
        echo"Ihhhh telurnya asin";
    }
}


$kucing1 = new Kucing("Putih");
$bebek1 = new Bebek("Coklat");

echo "Kucing 1 memiliki $kucing1->jumlah_kaki kaki, berwarna $kucing1->warna, matanya di $kucing1->posisi_mata <br/>";
echo "Bebek 1 memiliki $bebek1->jumlah_kaki kaki, berwarna $bebek1->warna, matanya di $bebek1->posisi_mata<br/>";
$kucing1->bersuara();
$bebek1->bersuara();

?>

