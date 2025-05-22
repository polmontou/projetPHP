<!-- Header -->
<?php include('template/header.php'); ?>
<main>
    <h3 class="main__title">Votre commande</h3>
    <div class="main__recapCommand">Votre commande contient :
        <table>

        <?php 
        
        $totalCart = 0;
        $totalWeight = 0;
        foreach($_SESSION as $item=>$quantity) {
            if($quantity > "0" && $item != 'session_started' && $item != 'resetCart' && $item != 'redirectTo') { 
                $priceWithoutTva = priceExcludingTva($products[$item]['price']);
                $discountedPrice = discountedPrice(priceExcludingTva($products[$item]['price']), $products[$item]['discount']);
                $totalDiscountedPrice = $discountedPrice * $quantity;
                $totalCart += $totalDiscountedPrice;
                $totalWeight += $products[$item]['weigth']*$quantity;
        ?>
                <tr class="main__recapCommand__itemLine main__recapCommand__itemInfo--rightside">
                    <td class="main__recapCommand__itemInfo__td--nowrap"><?= $quantity?> x</td>
                    <td><?= $products[$item]['name']?></td>
                    <td class="modifiedBy main__recapCommand__itemInfo__td--nowrap" ><?= formatPrice($priceWithoutTva)?> /u</td>
                </tr>
                <?php if($products[$item]['discount'] > 0) {?> 
                <tr class="main__recapCommand__itemLine main__recapCommand__itemInfo--rightside">
                    <td class="modifiedBy" colspan="2">Réduction de <?= $products[$item]['discount']?> % soit :</td>
                    <td class="modifiedBy main__recapCommand__itemInfo__td--nowrap" ><?= formatPrice($discountedPrice)?> /u</td>
                </tr>
                <?php } ?>
                <tr class="main__recapCommand__itemLine main__recapCommand__itemInfo--rightside">
                    <td class="modifiedBy" colspan="2">Soit pour <?= $quantity?> : </td>
                    <td class="modifiedBy main__recapCommand__itemInfo__td--nowrap" ><?= formatPrice($totalDiscountedPrice)?></td>
                </tr>
                <!-- <tr class="main__recapCommand__itemLine main__recapCommand__itemInfo--rightside">
                    <td class="modifiedBy" colspan="2">Avec en TVA : </td>
                    <td class="modifiedBy main__recapCommand__itemInfo__td--nowrap" ><?= formatPrice($totalDiscountedPrice*0.2)?></td>
                </tr> -->
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
                        <?= ($shippingCost == 0) ? "OFFERTS!" : formatPrice($shippingCost)?>
                    </td>
                </tr>
                <tr class="main__recapCommand__itemLine main__recapCommand__itemInfo--rightside">
                    <td class="modifiedBy" colspan="2">Et donc un total TTC de : </td>
                    <td class="modifiedBy main__recapCommand__itemInfo__td--nowrap" ><?= formatPrice(($totalCart*1.2)+$shippingCost)?></td>
                </tr>

        </table>
        <form id="cart__main__resetCartButton" action="process.php" method="POST">
            <input type="hidden" name="redirectTo" value="cart.php">
            <input type='submit' name="resetCart" value="Vider mon panier" >
        </form>
    </div>
</main>

<!-- Footer -->
<?php include('template/footer.php') ?>