<?php

function formatPrice(float $price): string {
    $formatedPrice = number_format(($price/100), 2,","," ")." kamas";
    return $formatedPrice;
}

function priceExcludingTva(float $priceTtc): float {
    $priceHt = $priceTtc/1.2;
    return $priceHt;
}

function discountedPrice(float $priceHt, $discount): float {
    $discountedPrice = $priceHt * ((100-$discount)/100);
    return $discountedPrice;
}

?>