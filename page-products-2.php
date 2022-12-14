<?php get_header(); ?>

<section class="shop-header">

    <div class="shop-header__banner">
        <div class="sub-banner">
            <h1>BATHROOM KITCHEN PRODUCTS</h1>
        </div>
    </div>
</section>


<?php get_product_search_form(); ?>


<section class="shop-products">
<?php echo do_shortcode('[best_selling_products tag="product-front-page" limit="8"]'); ?>
</section>


        <script>
        ScrollReveal({
            reset: true,
            distance: '50px',
            duration: 2100,
            delay: 200
        });

        ScrollReveal().reveal('.sub-banner', { delay: 300, origin: 'left' })
        </script>


<?php wp_footer(); ?>