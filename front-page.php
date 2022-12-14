<?php get_header(); ?>
<section class="hero">
        <div class="hero__wrapper">
            <div class="wrapper">
                <div class="wrapper__heading">
                    <h1>POSEIDON PLUMBING</h1><br />
                    <h1>DRAINLAYERS & GASFITTERS</h1>
                    <div class="button">
                    <a href="http://poseidon.local/services/"><button class="btn-service">Our Services</button></a>
                    <a href="http://poseidon.local/about/#contact"><button class="btn-contact">Contact Us</button></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="hero2">
        <h2 class="hero2__heading">Our Services</h2>
        <div class="hero2__subheading">
        <p class="plain">We Provide The Best</p> 
        <p class="color">Plumbing Services</p>
        </div>
    <section class="services">
        <a class="green-link" href="http://poseidon.local/services/">
        <div class="service-card__green">
        <div class="icon-container__green"><i class="fa-solid fa-house-user"></i></div>
        <div class="content"> 
        <h2 class="heading">Residential</h2>
        <p class="detail">
            We can help you with everything from a leaky top through to bathroom renovation or new home build.
        </p>
    </div>
    </div>
</a>    

        
        <a class="orange-link" href="http://poseidon.local/services/">
        <div class="service-card__orange">
            <div class="icon-container__orange"><i class="fa-solid fa-wrench"></i></div>
            <div class="content"> 
            <h2 class="heading">Commercial</h2> 
            <p class="detail">
            We can help you with everything from a leaky top through to bathroom renovation or new home build.
            </p>
        </div>
        </div>
    </a>   


        <a class="blue-link" href="http://poseidon.local/services/">
        <div class="service-card__blue">
        <div class="icon-container__blue"><i class="fa-solid fa-hand-holding-droplet"></i></div>
        <div class="content"> 
        <h2 class="heading">Drain Blocking</h2> 
        <p class="detail">
        We can help you with everything from a leaky top through to bathroom renovation or new home build.
        </p>
     </div>
    </div>
</a>  
    </section>
    </div>

    
    <div class="hero4">
        <div class="hero4-wrapper">
        <div class="hero4__heading">
            <p class="small">What we offer you</p>
            <p class="big">Experience the best plumbing repairs & maintenance service</p>
        </div>
        <section class="about">

            <div class="about-card">
            <div class="icon-container">
            <i class="fa-solid fa-screwdriver-wrench"></i>
            </div>
            <div class="content">
                <h3>Fast Service</h3>
                <p>Lorem Ipsum dolor sit amet consectetur adipiscing</p>
                </div>
            </div>
            

            <div class="about-card">
            <div class="icon-container">
                <i class="fa-solid fa-hand-holding-dollar"></i>
            </div>
                <div class="content">
                <h3>Affordable Price</h3>
                <p>Lorem Ipsum dolor sit amet consectetur adipiscing</p>
                </div>
            </div>


            <div class="about-card">
            <div class="icon-container">
            <i class="fa-solid fa-user-check"></i>
            </div>
            <div class="content">
                <h3>Qualified Team</h3>
                <p>Lorem Ipsum dolor sit amet consectetur adipiscing</p>
                </div>
            </div>


            <div class="about-card">
            <div class="icon-container">
            <i class="fa-solid fa-certificate"></i>
            </div>
            <div class="content">
                <h3>One Year warranty</h3>
                <p>Lorem Ipsum dolor sit amet consectetur adipiscing</p>
                </div>
            </div>

        </section>
        </div>
        <div class="hero4-wrapper2">

        </div>
    </div>




    <div class="hero3">
        <h2 class="hero3__heading">Our Projects</h2>
        <div class="hero3__subheading">
        <p class="plain">We provide the</p> 
        <p class="color">best project outcomes</p>
        </div>
     <section class="work">
        <?php 
        global $query_string;
        query_posts ('posts_per_page=6');
        while (have_posts()) : the_post();?>
        <?php the_content(); ?>
       <?php endwhile;?>
     </section>
     <div class="btn-container">
    <a href="#">
    <button class="btn-blue">
    View All Projects
    </button>
    </a>
    </div>


    <div class="hero-products">
        <h2 class="hero-products__heading">Our Products</h2>
        <div class="hero-products__subheading">
        <p class="plain">Shop our</p> 
        <p class="color">high quality products</p>
        </div>
        <section class="products">
            <?php echo do_shortcode('[best_selling_products tag="product-front-page" limit="8"]'); ?>
            <div class="btn-container">
            <a href="http://poseidon.local/shop/">
            <button class="btn-blue">
                View All Products
            </button>
        </a>
        </div>
        </section>
    </div>



    
    <div class="hero6">
        <p class="hero6__heading">Unsure what service you need?</p>
    <section class="call">
        <p>Call us <strong>0800 333 777</strong> or get </p>
        <a href="#"><button class="btn-yellow">Free Quote</button></a>
    </section>
    </div>


    <script>
        ScrollReveal({
            reset: true,
            distance: '30px',
            duration: 2300,
            delay: 300
        });

        ScrollReveal().reveal('.wrapper__heading', { delay: 300 })
        ScrollReveal().reveal('.service-card__green',{ delay: 300, origin: 'left' })
        ScrollReveal().reveal('.service-card__orange',{ delay: 400, origin: 'left' })
        ScrollReveal().reveal('.service-card__blue',{ delay: 500, origin: 'left' })
        ScrollReveal().reveal('.icon-container__green, .icon-container__blue, .icon-container__orange', { delay: 400, origin: 'right' })
        </script>

<?php get_footer(); ?>