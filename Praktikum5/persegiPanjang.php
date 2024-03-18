<?php
class PersegiPanjang {
    // Property
    public $panjang;
    public $lebar;
    public $tinggi;
    // Method
    function __construct($p, $l) {
        $this->panjang = $p;
        $this->lebar = $l;
    }
    
    function getLuas() {
        return $this->panjang * $this->lebar;
    }

    function getKeliling() {
        return 2 * ($this->panjang + $this->lebar);
    }
}

// Instance Object
$persegiPanjang1 = new PersegiPanjang(10, 5);

echo "Luas Persegi Panjang 1 = " . $persegiPanjang1->getLuas();
echo "<br>Keliling Persegi Panjang 1 = " . $persegiPanjang1->getKeliling();

// Instance Object 2
$persegiPanjang2 = new PersegiPanjang(20,15);
echo "<br><br>Luas Persegi Panjang 2 = " . $persegiPanjang2->getLuas();
echo "<br>Keliling Persegi Panjang 2 = " . $persegiPanjang2->getKeliling();
?>