<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="site-header container">

  <div class="logo">
    <a href="<?php echo esc_url(home_url()); ?>">
      <img
        class="logo-img"
        src="<?php echo get_template_directory_uri(); ?>/assets/img/svg/logo.svg"
        alt="<?php bloginfo('name'); ?>"
      >
    </a>
  </div>

  <!-- bouton “burger / croix” -->
  <a href="#" class="menu-toggle" aria-label="Ouvrir/fermer le menu">
    <img
      src="<?php echo get_template_directory_uri(); ?>/assets/img/svg/menu.svg"
      class="icon icon-menu"
      alt="Ouvrir le menu">
    <img
      src="<?php echo get_template_directory_uri(); ?>/assets/img/svg/close.svg"
      class="icon icon-close"
      alt="Fermer le menu">
  </a>

  <nav id="nav" class="main-nav">
    <?php
      wp_nav_menu([
        'theme_location' => 'main-menu',  // <- si tu as déclaré un emplacement `mobile-menu`
        'menu_class'     => 'nav-list',
        'container'      => false,
      ]);
    ?>
  </nav>

</header>

<?php wp_footer(); ?>
</body>
</html>
