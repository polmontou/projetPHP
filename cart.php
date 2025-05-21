<!-- Header -->
<?php 
require('template/header.php'); 
include('page/my-functions.php');

$products =[   
    "bottes_harry" => [
        "name" => "Bottes Harry",
        "price" => 20000000,
        "discount" => 5,
        "weigth" => 800,
        "picture_url" => "https://www.dofusbook.net/static/dist/items/11070-100.webp",
    ],
    "capuche_roissingue" => [
        "name" => "Capuche Souveraine du Roissingue",
        "price" => 45000000,
        "discount" => 10,
        "weigth" => 300,
        "picture_url" => "https://www.dofusbook.net/static/dist/items/16204-100.webp",
    ],
    "talisman_songe" => [
        "name" => "Talisman Songe",
        "price" => 110000000,
        "discount" => 0,
        "weigth" => 150,
        "picture_url" => "https://www.dofusbook.net/static/dist/items/1238-100.webp",
    ],
    "ceste_guerre" => [
        "name" => "Ceste de Guerre",
        "price" => 200000000,
        "discount" => 20,
        "weigth" => 250,
        "picture_url" => "https://www.dofusbook.net/static/dist/items/9343-100.webp",
    ],
    "hachoir_ravageur" => [
        "name" => "Hachoir du Ravageur",
        "price" => 450000000,
        "discount" => 0,
        "weigth" => 1200,
        "picture_url" => "https://www.dofusbook.net/static/dist/items/19083-100.webp",
    ]
];

?>
<main>
    <h3 class="main__title">Votre commande</h3>
    <div class="main__recapCommand">Votre commande contient :
        <table>

        <?php 
        $totalCart = 0;
        $totalWeight = 0;
        foreach($_POST as $key=>$value) {
            if($value > "0") { 
                $priceWithoutTva = priceExcludingTva($products[$key]['price']);
                $discountedPrice = discountedPrice(priceExcludingTva($products[$key]['price']), $products[$key]['discount']);
                $totalDiscountedPrice = $discountedPrice * $value;
                $totalCart += $totalDiscountedPrice;
                $totalWeight += $products[$key]['weigth']*$value;
        ?>
                <tr class="main__recapCommand__itemLine main__recapCommand__itemInfo--rightside">
                    <td class="main__recapCommand__itemInfo__td--nowrap"><?= $value?> x</td>
                    <td><?= $products[$key]['name']?></td>
                    <td class="modifiedBy main__recapCommand__itemInfo__td--nowrap" ><?= formatPrice($priceWithoutTva)?> /u</td>
                </tr>
                <?php if($products[$key]['discount'] > 0) {?> 
                <tr class="main__recapCommand__itemLine main__recapCommand__itemInfo--rightside">
                    <td class="modifiedBy" colspan="2">Réduction de <?= $products[$key]['discount']?> % soit :</td>
                    <td class="modifiedBy main__recapCommand__itemInfo__td--nowrap" ><?= formatPrice($discountedPrice)?> /u</td>
                </tr>
                <?php } ?>
                <tr class="main__recapCommand__itemLine main__recapCommand__itemInfo--rightside">
                    <td class="modifiedBy" colspan="2">Soit pour <?= $value?> : </td>
                    <td class="modifiedBy main__recapCommand__itemInfo__td--nowrap" ><?= formatPrice($totalDiscountedPrice)?></td>
                </tr>
                <tr class="main__recapCommand__itemLine main__recapCommand__itemInfo--rightside">
                    <td class="modifiedBy" colspan="2">Avec en TVA : </td>
                    <td class="modifiedBy main__recapCommand__itemInfo__td--nowrap" ><?= formatPrice($totalDiscountedPrice*0.2)?></td>
                </tr>
            <?php } 
        }
        $shippingCost = shippingCost($totalWeight, $totalCart*1.2) ?>
                <tr class="main__recapCommand__itemLine main__recapCommand__itemInfo--rightside">
                    <td class="modifiedBy" colspan="2">Soit un total HT de : </td>
                    <td class="modifiedBy main__recapCommand__itemInfo__td--nowrap" ><?= formatPrice($totalCart)?></td>
                </tr>
                <tr class="main__recapCommand__itemLine main__recapCommand__itemInfo--rightside">
                    <td class="modifiedBy" colspan="2">Ce qui fait en TVA : </td>
                    <td class="modifiedBy main__recapCommand__itemInfo__td--nowrap" ><?= formatPrice($totalCart*0.2)?></td>
                </tr>
                <tr class="main__recapCommand__itemLine main__recapCommand__itemInfo--rightside">
                    <td class="modifiedBy" colspan="2">Frais de livraison pour <?= $totalWeight ?> pods :</td>
                    <td class="modifiedBy main__recapCommand__itemInfo__td--nowrap" >
                        <?= ($shippingCost == 0) ? "OFFERTS!" : $shippingCost?>
                    </td>
                </tr>
                <tr class="main__recapCommand__itemLine main__recapCommand__itemInfo--rightside">
                    <td class="modifiedBy" colspan="2">Et donc un total TTC de : </td>
                    <td class="modifiedBy main__recapCommand__itemInfo__td--nowrap" ><?= formatPrice(($totalCart*1.2)+$shippingCost)?></td>
                </tr>

        </table>
    </div>
</main>




<!-- Footer -->
<?php require('template/footer.php') ?>