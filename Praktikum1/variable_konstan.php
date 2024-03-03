<?php
    //definisikan/membuat konstanta
    define('PHI',3.14);
    define('DBNAME','inventori');
    define('DBSERVER','localhost');

    $jari = 8;
    $luas = PHI * $jari * $jari;
    $kll = 2 * PHI * $jari;

    echo 'Luas Lingkaran dengan Jari '. $jari. ' : '. $luas;
    echo '<br/>Kelilingnya : '. $kll;
?>
<hr/>
<?php
    echo 'Nama Databasenya : '.DBNAME;
    echo '<br/>Lokasi databasenya ada di '.DBSERVER;
?>

<?php
    /*
    1. Apa bedanya variable user dengan variable system?
    Variable user adalah variable yang ditentukan dan digunakan oleh pengguna
    yang mendeklarasikan variable tersebut. Sedangkan variable system adalah
    variable yang ditentukan oleh sistem operasi komputer. 
    2. Apa persamaan variable system dengan variable konstan?
    Persamaan dari kedua variable tersebut dapat dilihat dari sifatnya yaitu
    untuk menyimpan nilai atau value */
?>

