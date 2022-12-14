<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/scrollreveal"></script>
    <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
    <header class="main-header">
    <nav class="main-header__nav"> 
        
    <div id="menuToggle">
    <input type="checkbox" />
    <span></span>
    <span></span>
    <span></span>
    <ul id="mobile-menu">
    <?php
    wp_nav_menu( array(
        'theme_location' => 'top-menu',
        'container' => false
    ));
    ?>
    </ul>
  </div>





       <a href="/">    
       <div class="main-header__logo">
            <h3>Poseidon</h3>
            <h3>Poseidon</h3>
        </div>
        </a>

        
            <div class="main-header__wpmenu">
        <?php
            wp_nav_menu( array(
                'theme_location' => 'top-menu',
                'container' => false
            ));
            ?>
        </div>

        
        </nav>

        <div class="main-header__tools">
            <a href="<?php echo wc_get_cart_url(); ?>" class="tools-icons">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
            </a>
        </div>
    </header>



<script>
function myFunction() {
  var x = document.getElementById("myLinks");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
</script>