<?php

// $name = "Dofus Ocre";
// $price = 200000000;
// $currency = "kamas";
// $pic = "https://www.dofuspourlesnoobs.com/uploads/1/3/0/1/13010384/1725837_orig.png";

// echo "<h1> $name </h1><br>";
// echo "<img src='$pic' alt='Dofus Ocre'><br>";
// echo "<h3> Prix : $price $currency";

$products = [
    "Dofus Ocre",
    "Dofus Vulbis", 
    "Dofus Pourpre", 
    "Capuche Souveraine du Roissingue", 
    "Bottes Harry",
    "Talisman Songe",
    "Cestes de Guerre"
];
$last_index = array_key_last($products);

sort($products);
foreach($products as $product) {
    echo "<p>$product</p>";
}



?>