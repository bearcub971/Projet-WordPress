<?php
/* Template Name: Services */
get_header();
?>

<!-- SECTION Our Services -->
        <h3 class="services__title">Our Services</h3>
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

<!-- SECTION Description dessous -->
<section class="services-description">
  <div class="container">
    <h2 class="services-description__title">Corp. Parties</h2>
    <p class="services-description__text">
      Specializing in the creation of exceptional events for private and corporate clients, <br>
      we design, plan and manage every project from conception to <br>
      execution.
    </p>
  </div>
</section>

<!-- IMAGE PLEINE LARGEUR -->
<div class="services-hero-image">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/png/9.png" alt="Corporate Event">
</div>

<?php get_footer(); ?>
