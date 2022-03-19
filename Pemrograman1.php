<?php

class Handphone {

    public  $merk,
            $ram,
            $ukuranlayar,
            $type,
            $warna,
            $harga;

    public function __construct( $merk = "merk", $ram = "ram", $ukuranlayar = "ukuranlayar", $type = "type", $warna = "warna", $harga = 0) {

        $this->merk = $merk;
        $this->ram = $ram;
        $this->ukuranlayar = $ukuranlayar;
        $this->type = $type;
        $this->warna = $warna;
        $this->harga = $harga;


    }

    public function getlabel() {

        return "$this->merk, $this->ram";

    }

    public function getMerkHandphone() {

        $str = "{$this->type} │ {$this->getlabel()} (Rp. {$this->harga})";

        return $str;
    }

}

class PaketData {

    public  $nama,
            $gb,
            $jenis,
            $kartuoperator,
            $code,
            $harga;

    public function __construct( $nama = "nama", $brand = "brand", $merk = "merk", $tipe = "tipe", $mesin = "mesin", $harga = 0) {

        $this->nama = $nama;
        $this->brand = $brand;
        $this->merk = $merk;
        $this->tipe = $tipe;
        $this->mesin = $mesin;
        $this->harga = $harga;


    }

    public function getlabel() {

        return "$this->brand, $this->merk, $this->tipe, $this->mesin";

    }

    public function getInfoKendaraan() {

        $str = "{$this->nama} │ {$this->getlabel()} (Rp. {$this->harga})";

        return $str;
    }

}

class Komik extends Hiburan {

    public function getInfoHiburan() {
        $str = "Komik : {$this->judul} │ {$this->getlabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman.";
        return $str; 
    }

}

class Game extends Hiburan {

    public function getInfoHiburan() {
        $str = "Game : {$this->judul} │ {$this->getlabel()} (Rp. {$this->harga}) - {$this->waktuMain} Jam.";
        return $str; 
    }

}

class Motor extends Kendaraan {

    public function getInfoKendaraan() {
        $str = "Kendaraan : {$this->nama} │ {$this->getlabel()} (Rp. {$this->harga})";
        return $str; 
    }

}

class Mobil extends Kendaraan {

    public function getInfoKendaraan() {
        $str = "Kendaraan : {$this->nama} │ {$this->getlabel()} (Rp. {$this->harga})";
        return $str; 
    }

}

class CetakInfoHiburan {

    public function cetak(Hiburan $hiburan){
        $str = "{$hiburan->judul} {$hiburan->getlabel()} (Rp. {$hiburan->harga})";
        return $str;
    }

}

class CetakInfoKendaraan {

    public function cetak(Kendaraan $kendaraan){
        $str = "{$kendaraan->nama} {$kendaraan->getlabel()} (Rp. {$kendaraan->harga})";
        return $str;
    }

}

$hiburan1 = new Komik("Naruto", "Mashashi Kishimoto", "Shonen Jump", 380000, 1000, 0);
$hiburan2 = new Komik("One Piece", "Eiichiro Oda", "Shonen Jump", 225000, 1000, 0);
$hiburan3 = new Game("Uncharted 4", "Neil Druckmann", "Sonnny Computer", 190000, 0, 14);
$hiburan4 = new Game("Resident Evil 8", "Isamu Hara", "Capcom", 5450000, 0, 10);
$kendaraan1 = new Motor("Motor", "Honda", "ADV", "Matic ABS-ISS", "150cc", 37000000);
$kendaraan2 = new Motor("Motor", "Kawasaki", "Ninja ZX25R", "Kopling ABS SE", "250cc", 114000000);
$kendaraan3 = new Mobil("Mobil", "Daihatsu", "Terios", "Matic R A/T Deluxe", "1596cc", 215000000);
$kendaraan4 = new Mobil("Mobil", "Toyota", "Avanza", "Matic Veloz", "1496cc", 232000000);

echo $hiburan1->getInfoHiburan();
echo "<br>";
echo $hiburan2->getInfoHiburan();
echo "<br>";
echo $hiburan3->getInfoHiburan();
echo "<br>";
echo $hiburan4->getInfoHiburan();
echo "<hr>";
echo $kendaraan1->getInfoKendaraan();
echo "<br>";
echo $kendaraan2->getInfoKendaraan();
echo "<br>";
echo $kendaraan3->getInfoKendaraan();
echo "<br>";
echo $kendaraan4->getInfoKendaraan();
echo "<hr>";


?>