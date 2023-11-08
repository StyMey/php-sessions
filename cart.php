<?php 
session_start();

require 'inc/head.php'; ?>

<section class="cookies container-fluid">
    <div class="row">
        <h1>Basket</h1>
        <?php foreach ($_COOKIE['cart'] as $basket) :?>
            <ul>
                <li><img src="assets/img/product-<?=$basket ?>.jpg"></li>
            </ul>
        <?php endforeach; ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
