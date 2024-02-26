<?php 
$fruits = ["Mango", "Banana", "Melon", "Orange"];

echo $fruits[1];
echo "<br>";
echo "jumlah buah = " . count($fruits);

echo "<ol>";
foreach ($fruits as $fruit) {
    echo "<li>Buah " . $fruit . "</li>";

}
echo "</ol>";

$fruits[] = "Avocado"; 
$fruits[2] = "Strawberry";

echo "<ol>";
foreach ($fruits as $i => $v) {

    echo "<li>Buah Index ke-" . $i . "=" . $v . "</li>";
}
echo "</ol>"


?>