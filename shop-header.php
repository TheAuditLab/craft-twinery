<?php
    $hero_image = get_field("hero_slider_image_1", 5);
?>

<section id="shop-header" style="background-image: url('<?php echo $hero_image['url']; ?>" >
    <div class="container">
        <h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>
    </container>
</section>