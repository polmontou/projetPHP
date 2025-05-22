<main>
    <h3 class="main__title">Notre boutique</h3>
    <form action='process.php' method='POST'>
        <?php foreach($products as $object => $properties) { ?>
                <div class='main__itemFeed__card'>
                    <h3 class='main__itemFeed__card__itemName'><?= $properties['name'] ?></h3>
                    <img class='main__itemFeed__card__itemImage' alt='<?= $properties['name']?>' src=<?= $properties['picture_url'] ?>>
                    <p class='main__itemFeed__card__itemPriceHT'>Prix HT : <?= formatPrice(priceExcludingTva($properties['price']))?></p>
                    <p class='main__itemFeed__card__itemPriceTTC'>Prix TTC : <?= formatPrice($properties['price']) ?></p>
                    <p class='main_itemFeed__card__discountValue'>Remise : <?= $properties['discount']?> %</p> 
                    <div class='quantity__form'>
                        <label for='<?= $object ?>'>Quantité : </label>
                        <input type='number' id='<?= $object ?>' class='main__itemFeed__card__quantityForm'  name='<?= $object ?>' min='0' max='10' value ="<?= $_SESSION[$object]?>">
                    </div>
                </div>
        <?php }; ?>
        <div id='submitForm__buttons'>
            <input type='submit' value='Commander'>
            <input type='submit' name="resetCart" value="Vider mon panier" >
        </div>

    </form>
</main>
