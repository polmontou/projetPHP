<?php
include('template/session-n-link.php');


foreach($_POST as $item => $quantity) {
    $_SESSION["$item"] = $quantity;
}
 
if(array_key_exists('resetCart', $_POST)) {
    initCart($products);
}

if ($_POST['redirectTo'] == 'cart.php') {
        header('Location: http://projetphp.local/cart.php');
        exit();
    } else {
        header('Location: http://projetphp.local/');
        exit();
    }
?>