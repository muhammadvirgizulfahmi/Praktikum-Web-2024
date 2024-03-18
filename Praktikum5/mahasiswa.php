<?php
class Mahasiswa {
    // Property
    public $nama;
    public $nim;
    public $prodi;
    public $angkatan;
    public $ipk;

    // Method
    function __construct($nim, $nama) {
        $this->nama = $nama;
        $this->nim = $nim;
    }
    
    function predikat_ipk() {
        if ($this->ipk < 2.0) {
            return "Cukup";
        } elseif ($this->ipk >= 2.0 && $this->ipk < 3.0) {
            return "Baik";
        } elseif ($this->ipk <= 3.0 && $this->ipk < 3.75) {
            return "Memuaskan";
        } elseif ($this->ipk >= 3.75 && $this->ipk <= 4.0) {
            return "Cum Laude";
        }
    }
}

// Instance Object
$mahasiswa1 = new Mahasiswa(110223126, "Virgi");
$mahasiswa1->ipk = 4;
$mahasiswa1->prodi = "TI";
$mahasiswa1->angkatan = 2023;

?>