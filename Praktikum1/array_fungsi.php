<!DOCTYPE html>
<html>
<body>

<?php
$ar_buah = ["p"=>"Pepaya","a"=>"Apel","m"=>"Mangga","j"=>"Jambu" ];
echo '<ol>';
foreach($ar_buah as $k =>$v){
    echo '<li>'.$k.' - ' . $v .'</li>';
    }
    echo '</ol>';
    //sort
    sort($ar_buah);
    echo '<hr/>';
    echo '<ol>';
    foreach($ar_buah as $k =>$v){
    echo '<li>'.$k.' - ' . $v .'</li>';
    }
    echo '</ol>';
    '<hr/>';
    //arsort
    arsort($ar_buah);
    echo '<hr/>';
    echo '<ol>';
    foreach($ar_buah as $k =>$v){
    echo '<li>'.$k.' - ' . $v .'</li>';
    }
    echo '</ol>';
    /* fungsi sort(array) adalah untuk mengurutkan nilai array
    dari urutan terkecil hingga terbesar (1-10 atau a-z).
    Sedangkan arsort(array) digunakan untuk mengurutkan nilai
    array dari urutan terbesar hingga terkecil (10-1 atau z-a). */
?>
<hr/>
<?php
    $tims = ['erwin','heru','ali','zaki'];
    array_pop($tims);
    foreach($tims as $person){
        echo $person.'<br/>';
    }
    /* fungsi array_pop adalah untuk mengambil
    nilai atau value terakhir dalam sebuah array */
?>
<hr/>
<?php
    $tims = ['erwin','heru','ali','zaki'];
    array_push($tims,'wati');
    foreach($tims as $person){
        echo $person.'<br/>';
    }
    /* fungsi array_push adalah untuk memasukkan
    nilai atau value ke dalam array sebagai
    nilai atau value yang terakhir */
?>
<hr/>
<?php
    $tims = ['erwin','heru','ali','zaki'];
    array_shift($tims);
    foreach($tims as $person){
        echo $person.'<br/>';
    }
    /* fungsi array_shift adalah untuk mengambil
    nilai atau value pertama dalam sebuah array */
?>
<hr/>
<?php
    $tims = ['erwin','heru','ali','zaki'];
    array_unshift($tims,'joko','wati');
    foreach($tims as $person){
        echo $person.'<br/>';
    }
    /* fungsi array_unshift adalah untuk memasukkan
    nilai atau value ke dalam sebuah array sebagai
    nilai atau value pertama*/
?>
    </body>
    </html>
