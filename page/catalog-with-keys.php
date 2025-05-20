<?php

$bottes_harry = [
    "name" => "Bottes Harry",
    "price" => 200000,
    "weight" => 1000,
    "discount" => 0,
    "picture_url" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQS6U5HfFOyZanwYylJQGoJ8Hh9yiHJMXezJw&s",
];

$capuche_roissingue = [
    "name" => "Capuche Souveraine du Roissingue",
    "price" => 450000,
    "weight" => 600,
    "discount" => 0,
    "picture_url" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR_vW-jP6v5pQYXrutpV_91uziybKA7VBYVQg&s",
];

$talisman_songe = [
    "name" => "Talisman Songe",
    "price" => 1100000,
    "weight" => 150,
    "discount" => 5,
    "picture_url" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSWV4DsQZkXGxIzdqS3JrlOWGRx_is3pygyKg&s",
];

echo "<div class='card'>
    <h3>".$bottes_harry['name']."</h3>
    <img alt='".$bottes_harry['name']."' src='".$bottes_harry['picture_url']."' class='card__img'>
    <p>Prix :".$bottes_harry["price"]."kamas</p> 
    </div>";

echo "<div class='card'>
    <h3>".$capuche_roissingue['name']."</h3>
    <img alt='".$capuche_roissingue['name']."' src='".$capuche_roissingue['picture_url']."' class='card__img'>
    <p>Prix :".$capuche_roissingue["price"]."kamas</p> 
    </div>";

echo "<div class='card'>
    <h3>".$talisman_songe['name']."</h3>
    <img alt='".$talisman_songe['name']."' src='".$talisman_songe['picture_url']."' class='card__img'>
    <p>Prix :".$talisman_songe["price"]."kamas</p> 
    </div>";


?>