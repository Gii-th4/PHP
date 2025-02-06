<?php
class Mobil {
    // Atribut
    public $merk;
    public $warna;
    public $speed;

    // Nilai default posisi
    public $position_x = 0;
    public $position_y = 0;

    //spesial metode (dijalankan ketika object dibuat)
    public function __construct($merk, $warna, $speed){
        $this->warna = $warna;
        $this->merk = $merk;
        $this->speed = $speed;
    }

    // Method (prilaku)
    public function maju() {
        $this->position_x += $this->speed;
    }

    public function mundur() {
        $this->position_x -= $this->speed;
    }

    public function kiri() {
        $this->position_y += $this->speed;
    }

    public function kanan() {
        $this->position_y -= $this->speed;
    }
}

// Membuat objek dari kelas Mobil
$mobil1 = new Mobil("Toyota", "Hitam", 40);
$mobil2 = new Mobil("Xenia", "putih", 60);

// Mengatur properti objek
$mobil1->merk = "Toyota";
$mobil1->warna = "Hitam";
$mobil1->speed = 40;

$mobil2->merk = "Xenia";
$mobil2->warna = "Putih";
$mobil2->speed = 60;

// Memanggil metode untuk mengubah posisi mobil
$mobil1->maju();
$mobil1->kanan();
$mobil1->mundur();
$mobil1->kiri();


for($i = 0; $i<5; $i++){
    $rand = rand(1, 2);

    if ($rand == 1){
        $mobil1->maju();
    }else{
        $mobil2->maju();
    }
}


echo "Mobil $mobil1->merk berada di posisi X: $mobil1->position_x,<br/>";
echo "Saya punya mobil dengan merk $mobil2->merk<br/>";
?>

