<?php
include __DIR__ . "./classes/autoimport.php";

$product1 = new Product("Croccantini Mao Mao", "Cibo per gatti", 2.49);
$product2 = new Product("Croccantini Woff", "Cibo per cani", 3.49);

$card1 = new Card("1111222233334444", "Guest", 10, 23, "123");
$card2 = new Card("5555666677778888", "Piero Guerra", 12, 23, "567");

$guest = new Guest($card1);
$piero = new RegisteredUser("PGuerra", "password", $card2);

$guest->getCart()->addProductToCart($product1);
$piero->getCart()->addProductToCart($product2);
$piero->getCart()->addProductToCart($product1);

var_dump($piero->getCartTotal());
var_dump($guest->getCartTotal());

var_dump($piero->pay());
