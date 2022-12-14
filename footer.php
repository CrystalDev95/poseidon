<section class="footer">
    <div class="footer__card">
    <h3>Information</h3>
    <?php
    wp_nav_menu( array(
        'menu' => '22',
        'menu_class' => 'footer-container__body'
    ));

    ?>
    </div>
    <div class="footer__card">
        <h3>Services</h3>
    <?php
    wp_nav_menu( array(
        'menu' => '20',
        'menu_class' => 'footer-container__body'
    ));

    ?>
    </div>
    <div class="footer__card">
        <p>Call us now</p>
        <h1>0800 333 777</h1>
        <p>Poseidon@gmail.com</p>
        <div class="social-icons">
            <i class="fa-brands fa-facebook"></i>
            <i class="fa-brands fa-instagram"></i>
        </div>
    </div>
    </section>


<?php wp_footer(); ?>
</body>
</html>