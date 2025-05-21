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

function shippingCost(int $weigth, float $total): float {
    if ($weigth > 2000){
        $shippingCost = 0;
    } elseif ($weigth > 500) {
        $shippingCost = $total * 0.1;
    } else {
        $shippingCost = 50000;
    }
    return $shippingCost;
}
?>