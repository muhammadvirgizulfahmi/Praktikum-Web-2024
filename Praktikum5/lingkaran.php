<?php
class Lingkaran {
    private $jari;
    const PHI = 22/7;

    function __construct($r) {
        $this->jari = $r;
    }

    function getLuas(){
        return self::PHI * $this->jari ** 2;
    }

    function getKeliling(){
        return self::PHI * $this->jari * 2;
    }
}

// Instance Object
$lingkaran1 = new Lingkaran(10);

echo "Nilai Phi = ". Lingkaran::PHI . "s";
echo "<br/>Luas Lingkaran = ". $lingkaran1->getLuas();
echo "<br/>Keliling linngkaran = ". $lingkaran1->getKeliling();

// Instance Object 2
$lingkaran2 = new Lingkaran(20);

echo "<br/><br/>Luas Lingkaran = ". $lingkaran2->getLuas();
echo "<br/>Keliling linngkaran = ". $lingkaran2->getKeliling();
?>