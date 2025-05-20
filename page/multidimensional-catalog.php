<?php 
include('my-functions.php');

$products =[   
    "bottes_harry" => [
        "name" => "Bottes Harry",
        "price" => 20000000,
        "discount" => 5,
        "picture_url" => "https://www.dofusbook.net/static/dist/items/11070-100.webp",
    ],
    "capuche_roissingue" => [
        "name" => "Capuche Souveraine du Roissingue",
        "price" => 45000000,
        "discount" => 10,
        "picture_url" => "https://www.dofusbook.net/static/dist/items/16204-100.webp",
    ],
    "talisman_songe" => [
        "name" => "Talisman Songe",
        "price" => 110000000,
        "discount" => 0,
        "picture_url" => "https://www.dofusbook.net/static/dist/items/1238-100.webp",
    ],
    "ceste_guerre" => [
        "name" => "Ceste de Guerre",
        "price" => 200000000,
        "discount" => 20,
        "picture_url" => "https://www.dofusbook.net/static/dist/items/9343-100.webp",
    ],
    "hachoir_ravageur" => [
        "name" => "Hachoir du Ravageur",
        "price" => 450000000,
        "discount" => 0,
        "picture_url" => "https://www.dofusbook.net/static/dist/items/19083-100.webp",
    ]
];
echo "<main>";
foreach($products as $object => $properties) {
    echo "<div class='main__itemFeed__card'>
            <h3 class='main__itemFeed__card__itemName'>".$properties['name']."</h3>
            <img class='main__itemFeed__card__itemImage' alt='".$properties['name']."' src='".$properties['picture_url']."'>
            <p class='main__itemFeed__card__itemPrice'>Prix HT : ".formatPrice(price: discountedPrice(priceExcludingTva($properties['price']), $properties['discount']))."</p>
        </div>";
};

echo "</main>";
?>