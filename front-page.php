<?php get_header(); ?>

<main class="homepage">

  <!-- HERO -->
        <div class="hero-inner">
            <div class="hero-text">
                <h1>A really professional structure<br>for all your events!</h1>
            </div>
            <div class="hero-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img//png/1.png" alt="Hero image">
            </div>
        </div>
       


    <section class="about-us">
        <div class="container about-flex">
            <div class="text-right1">
                <h2>About Us</h2>
                <p>
                    Specializing in the creation of exceptional events for private and corporate clients, we design, plan and manage every project from conception to execution.
                </p>
            </div>
        </div>
    </section>


  <!-- WHO / VISION / MISSION -->
    <section class="our-values container">
        <div class="about-flex">
            <div class="image-left">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/png/2.png" alt="Our Values">
            </div>
            <div class="text-right">
                <h3>Who are we?</h3>
                <p><?php echo esc_html(get_theme_mod('who_are_we')); ?></p>

                <h3>Our vision</h3>
                <p><?php echo esc_html(get_theme_mod('our_vision')); ?></p>

                <h3>Our mission</h3>
                <p><?php echo esc_html(get_theme_mod('our_mission')); ?></p>
            </div>
        </div>
    </section>

  <!-- SERVICES -->
        <h2 class="services__title">Our Services</h2>
        <div class="services__grid">
            <!-- 1ère image à gauche -->
            <div class="service-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/png/12.png" alt="Private Parties">
            </div>
            <!-- 2ᵉ image à gauche -->
            <div class="service-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/png/5.png" alt="Our Smiling Guest">
            </div>
            <!-- texte centré -->
            <div class="service-item service-item--text">
                <a href="#" class="services-link">Private Parties</a>
            </div>
            <!-- image à droite -->
            <div class="service-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/png/3.png" alt="Corporate Events">
            </div>
        </div>


  <!-- PARTNERS -->
    <section class="partners">
        <h2>Our Partners</h2>
        <div class="partner-logos">
            <!-- Exemple statique -->
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/svg/partner-1.svg" alt="BAKS">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/svg/partner-2.svg" alt="Bernie Banks">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/svg/partner-3.svg" alt="Swiger">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/svg/partner-4.svg" alt="The Mandala Community">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/svg/partner-5.svg" alt="Balkan Studio">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/svg/partner-6.svg" alt="Airball">
        </div>
    </section>
</main>

<?php get_footer(); ?>
