<?php get_header(); ?>
<section class="about-header">

    <div class="about-header__banner">
        <div class="sub-banner">
            <h1>CERTIFIED PLUMBERS, GASFITTERS, DRAINLAYERS </h1>
        </div>
    </div>

    <div class="about-header__content">
        <div class="about-header__card">
        <h1>Our History</h1>
        </div>
        <div class="about-header__card">
        <p>Fox Plumbing Ltd is owner operated and started within the North Shore area and quickly expanded through out the greater Auckland region.
        Through various relationships we became the trusted plumbers to numerous builders and construction firms throughout Auckland.
        Fox Plumbing now operates with a dynamic team of Plumbers, Drainlayers and Gasfitters, with 35 years of combined experience taking on large Commercial projects, High End Housing and Maintenance contracts.</p>
        </div>
    </div>

    <div class="about-header__ceo">
        <div class="contents">
            <h1>Meet Paul</h1>
            <h4>The CEO of Poseidon</h4>
            <p>We work for a wide array of customers from Local Residents and Property Managers through to Builders and Building Management firms. Whether it is a simple maintenance job or bathroom renovation you require, we’re here to help. With quick response times and the know-how to complete the job in a timely manner, we’re proud to save you time and money.
            Our friendly team of registered and experienced Plumbers and Administrative staff are fully equipped to provide you with a seamless service from the initial job enquiry through to the completion of the job.
            We thank you for taking the time to consider Grouse Plumbing and look forward to helping you on your next plumbing project – letting our service and workmanship speak for itself.
        </div>
        <div class="image">
        </div>
    </div>


    <div class="about-header__team">
    <div class="contents">
            <h1>Meet Tom</h1>
            <h4>Certified Master Plumber</h4>
            <p>We work for a wide array of customers from Local Residents and Property Managers through to Builders and Building Management firms. Whether it is a simple maintenance job or bathroom renovation you require, we’re here to help. With quick response times and the know-how to complete the job in a timely manner, we’re proud to save you time and money.
            Our friendly team of registered and experienced Plumbers and Administrative staff are fully equipped to provide you with a seamless service from the initial job enquiry through to the completion of the job.
            We thank you for taking the time to consider Grouse Plumbing and look forward to helping you on your next plumbing project – letting our service and workmanship speak for itself.
        </div>
        <div class="image">
    </div>
    </div>


    <a id="contact">
    <div class="about-header__contact">
        <div class="contents">
            <h1>Contact Us</h1>
            <div class="body">
        <?php while (have_posts()) : the_post();?>
        <?php the_content(); ?>
       <?php endwhile;?>
       </div>
        </div>
    </div>
</a>

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

<?php get_footer(); ?>