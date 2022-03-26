<?php
use models\Product;
use helpers\Component;

$product_m = new Product();
$product = $product_m->getHotDeals(1);
?>

<section id="our-pick">
    <h5 class="section-heading">Our pick</h5>
    <?= Component::component('product-sm', ['product' => $product]) ?>
</section>
