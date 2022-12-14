<?php get_header(); ?>
<main>


<?php
if(have_posts()) {
    while(have_posts()) : the_post();
    ?>

    <div class="page-hero" style="background-image:url('<?php the_post_thumbnail_url('full size'); ?>')">
       <h1 class="page-hero__heading">
        <?php the_title(); ?>
       </h1>
    </div>

    <section class="page-hero__contents">
    <?php the_content(); ?>
    <?php endwhile; } ?>
</section>


</main>
<?php get_footer(); ?>