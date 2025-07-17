<?php
/**
 * Template Name: About Us
 */
get_header(); 
?>

<main class="about-page">

  <!-- HERO -->
  <section class="hero about-hero">
    <div class="container hero-inner">
      <div class="hero-text">
        <h1><?php the_title(); ?>.</h1>
      </div>
      
    </div>
    <div class="hero-image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/png/4.png" alt="About hero">
      </div>
  </section>

  <!-- ABOUT US -->
  <section class="about-us">
    <div class="container about-inner">
            <div class="text-right2">
                <h2>Sky’s the limit</h2>
                <p>Specializing in the creation of exceptional events for private and corporate clients, we design, plan and manage every project from conception to execution.</p>
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

  <!-- OUR TEAM -->
  <section class="our-team">
    <div class="container">
      <h2>Our Team</h2>
      <div class="team-grid">
        <?php 
        // Exemple statique ; pour plus de flexibilité, remplacez par une loop WP ou ACF repeater
        $members = [
          ['img'=>'5.png','role'=>'Sales Manager','phone'=>'+33 1 53 31 25 23','email'=>'sales@company.com'],
          ['img'=>'6.png','role'=>'Event Planner','phone'=>'+33 1 53 31 25 24','email'=>'plan@company.com'],
          ['img'=>'7.png','role'=>'Designer','phone'=>'+33 1 53 31 25 20','email'=>'design@company.com'],
          ['img'=>'8.png','role'=>'CEO','phone'=>'+33 1 53 31 25 25','email'=>'ceo@company.com'],
        ];
        foreach($members as $m): ?>
        <div class="team-item">
          <img src="<?php echo get_template_directory_uri().'/assets/img/png/'.$m['img']; ?>" alt="<?php echo esc_attr($m['role']); ?>">
          <p class="team-role"><?php echo esc_html($m['role']); ?></p>
          <p class="team-contact"><?php echo esc_html($m['phone']); ?></p>
          <p class="team-contact"><?php echo esc_html($m['email']); ?></p>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>
