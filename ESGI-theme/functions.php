<?php
// Charger le CSS principal
function mon_theme_enqueue_styles() {
    wp_enqueue_style('mon-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'mon_theme_enqueue_styles');

function esgi_customize_register($wp_customize) {

    // Section About Us
    $wp_customize->add_section('about_us_section', [
        'title' => __('À propos', 'esgi-projet'),
        'priority' => 30,
    ]);

    $wp_customize->add_setting('about_us_text', [
        'default' => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ]);

    $wp_customize->add_control('about_us_text_control', [
        'label' => __('Texte supplémentaire pour la page About Us', 'esgi-projet'),
        'section' => 'about_us_section',
        'settings' => 'about_us_text',
        'type' => 'textarea',
    ]);
}
add_action('customize_register', 'esgi_customize_register');


function esgi_register_cpt_member() {
    register_post_type('member', [
        'labels' => [
            'name' => 'Membres',
            'singular_name' => 'Membre',
        ],
        'public' => true,
        'has_archive' => true,
        'supports' => ['title', 'editor', 'thumbnail'],
        'show_in_rest' => true,
    ]);
}
add_action('init', 'esgi_register_cpt_member');
function esgi_customize_homepage($wp_customize) {
    // About Us text
    $wp_customize->add_section('esgi_home', ['title' => 'Contenu d’accueil', 'priority' => 30]);

    $wp_customize->add_setting('about_us_text');
    $wp_customize->add_control('about_us_text', [
        'label' => 'Texte About Us',
        'section' => 'esgi_home',
        'type' => 'textarea',
    ]);

    $wp_customize->add_setting('who_are_we');
    $wp_customize->add_control('who_are_we', [
        'label' => 'Texte - Who are we?',
        'section' => 'esgi_home',
        'type' => 'textarea',
    ]);

    $wp_customize->add_setting('our_vision');
    $wp_customize->add_control('our_vision', [
        'label' => 'Texte - Our vision',
        'section' => 'esgi_home',
        'type' => 'textarea',
    ]);

    $wp_customize->add_setting('our_mission');
    $wp_customize->add_control('our_mission', [
        'label' => 'Texte - Our mission',
        'section' => 'esgi_home',
        'type' => 'textarea',
    ]);

    $wp_customize->add_setting('values_image');
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'values_image', [
        'label' => 'Image – section valeurs',
        'section' => 'esgi_home',
        'settings' => 'values_image'
    ]));
}
add_action('customize_register', 'esgi_customize_homepage');
function esgi_register_partner_cpt() {
    register_post_type('partner', [
        'labels' => [
            'name' => 'Partners',
            'singular_name' => 'Partner',
        ],
        'public' => true,
        'supports' => ['title', 'thumbnail'],
        'menu_position' => 5,
        'menu_icon' => 'dashicons-businessman'
    ]);
}
add_action('init', 'esgi_register_partner_cpt');
function esgi_register_service_cpt() {
    register_post_type('service', [
        'labels' => [
            'name' => 'Services',
            'singular_name' => 'Service',
        ],
        'public' => true,
        'supports' => ['title', 'thumbnail', 'editor'],
        'menu_position' => 6,
        'menu_icon' => 'dashicons-hammer'
    ]);
}
add_action('init', 'esgi_register_service_cpt');
function esgi_load_fonts() {
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Overpass:wght@400;700&family=Roboto+Mono:wght@300;600&family=Source+Serif+Pro:wght@400;700&display=swap', false);
}
add_action('wp_enqueue_scripts', 'esgi_load_fonts');
add_theme_support('post-thumbnails');
function esgi_enqueue_assets() {
    wp_enqueue_style('esgi-style', get_template_directory_uri() . '/assets/css/style.css');
}
add_action('wp_enqueue_scripts', 'esgi_enqueue_assets');
function esgi_enqueue_styles() {
    wp_enqueue_style('esgi-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'esgi_enqueue_styles');
function esgi_register_menus() {
  register_nav_menus([
    'main-menu' => __('Menu principal', 'esgi')
  ]);
}
add_action('init', 'esgi_register_menus');
register_nav_menus([
    'main-menu' => 'Menu principal',
  ]);
  function my_theme_enqueue_scripts() {
    // style.css “global”
    wp_enqueue_style(
        'theme-style',
        get_stylesheet_uri(),
        [],
        filemtime( get_stylesheet_directory() . '/style.css' )
    );

    // CSS “about”
    wp_enqueue_style(
        'theme-about',
        get_template_directory_uri() . '/assets/css/about.css',
        ['theme-style'],
        filemtime( get_stylesheet_directory() . '/assets/css/about.css' )
    );

    // CSS “services”
    wp_enqueue_style(
        'theme-services',
        get_template_directory_uri() . '/assets/css/services.css',
        ['theme-style'],
        filemtime( get_stylesheet_directory() . '/assets/css/services.css' )
    );

    // CSS “partners”
    wp_enqueue_style(
        'theme-partners',
        get_template_directory_uri() . '/assets/css/partners.css',
        ['theme-style'],
        filemtime( get_stylesheet_directory() . '/assets/css/partners.css' )
    );

    // JS burger
    wp_enqueue_script(
        'theme-main-js',
        get_template_directory_uri() . '/assets/js/main.js',
        [],
        filemtime( get_template_directory() . '/assets/js/main.js' ),
        true
    );
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_scripts');

function theme_enqueue_styles() {
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Overpass:wght@400;700&family=Source+Serif+Pro:wght@400;700&display=swap', false);
    wp_enqueue_style('theme-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
/*function esgi_enqueue_scripts() {
    // Ton CSS déjà en file, etc.
    wp_enqueue_script(
      'esgi-main',
      get_template_directory_uri() . '/assets/js/main.js',
      [],    // dépendances (jQuery etc), ici vide
      null,  // version
      true   // true = charge dans le footer
    );
  }*/
  add_action('wp_enqueue_scripts', 'esgi_enqueue_scripts');
  function esgi_enqueue_scripts() {
    // Ton autre js/css...
    wp_enqueue_script(
      'esgi-burger',
      get_template_directory_uri() . '/assets/js/burger.js',
      [], null, true
    );
  }
  add_action('wp_enqueue_scripts', 'esgi_enqueue_scripts');
/**
 * Déclaration des réglages pour le Customizer
 */
function mytheme_customize_register( WP_Customize_Manager $wp_customize ) {

    //
    // 1) SECTION « Who / Vision / Mission »
    //
    $wp_customize->add_section( 'about_section', array(
        'title'    => __( 'À propos (Who/Vision/Mission)', 'mytheme' ),
        'priority' => 30,
    ) );

    // Who are we
    $wp_customize->add_setting( 'who_are_we', array(
        'default'           => '',
        'sanitize_callback' => 'wp_kses_post',
    ) );
    $wp_customize->add_control( 'who_are_we', array(
        'label'    => __( 'Who are we ?', 'mytheme' ),
        'section'  => 'about_section',
        'type'     => 'textarea',
    ) );

    // Our vision
    $wp_customize->add_setting( 'our_vision', array(
        'default'           => '',
        'sanitize_callback' => 'wp_kses_post',
    ) );
    $wp_customize->add_control( 'our_vision', array(
        'label'    => __( 'Our vision', 'mytheme' ),
        'section'  => 'about_section',
        'type'     => 'textarea',
    ) );

    // Our mission
    $wp_customize->add_setting( 'our_mission', array(
        'default'           => '',
        'sanitize_callback' => 'wp_kses_post',
    ) );
    $wp_customize->add_control( 'our_mission', array(
        'label'    => __( 'Our mission', 'mytheme' ),
        'section'  => 'about_section',
        'type'     => 'textarea',
    ) );

    //
    // 2) SECTION « Team Members » (fixé à 4 membres)
    //
    $wp_customize->add_section( 'team_section', array(
        'title'    => __( 'Équipe (4 membres)', 'mytheme' ),
        'priority' => 40,
    ) );

    for ( $i = 1; $i <= 4; $i++ ) {
        // Image
        $wp_customize->add_setting( "team_member_{$i}_img", array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        ) );
        $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, "team_member_{$i}_img", array(
            'label'    => sprintf( __( 'Photo membre #%d', 'mytheme' ), $i ),
            'section'  => 'team_section',
            'settings' => "team_member_{$i}_img",
        ) ) );

        // Rôle
        $wp_customize->add_setting( "team_member_{$i}_role", array(
            'default'           => '',
            'sanitize_callback' => 'sanitize_text_field',
        ) );
        $wp_customize->add_control( "team_member_{$i}_role", array(
            'label'    => sprintf( __( 'Rôle membre #%d', 'mytheme' ), $i ),
            'section'  => 'team_section',
            'type'     => 'text',
        ) );

        // Téléphone
        $wp_customize->add_setting( "team_member_{$i}_phone", array(
            'default'           => '',
            'sanitize_callback' => 'sanitize_text_field',
        ) );
        $wp_customize->add_control( "team_member_{$i}_phone", array(
            'label'    => sprintf( __( 'Téléphone membre #%d', 'mytheme' ), $i ),
            'section'  => 'team_section',
            'type'     => 'text',
        ) );

        // Email
        $wp_customize->add_setting( "team_member_{$i}_email", array(
            'default'           => '',
            'sanitize_callback' => 'sanitize_email',
        ) );
        $wp_customize->add_control( "team_member_{$i}_email", array(
            'label'    => sprintf( __( 'Email membre #%d', 'mytheme' ), $i ),
            'section'  => 'team_section',
            'type'     => 'email',
        ) );
    }

    //
    // 3) SECTION « Logos des partenaires » (fixé à 6 logos)
    //
    $wp_customize->add_section( 'partners_section', array(
        'title'    => __( 'Partenaires (6 logos)', 'mytheme' ),
        'priority' => 50,
    ) );

    for ( $j = 1; $j <= 6; $j++ ) {
        $wp_customize->add_setting( "partner_logo_{$j}", array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        ) );
        $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, "partner_logo_{$j}", array(
            'label'    => sprintf( __( 'Logo partenaire #%d', 'mytheme' ), $j ),
            'section'  => 'partners_section',
            'settings' => "partner_logo_{$j}",
        ) ) );
    }

}
add_action( 'customize_register', 'mytheme_customize_register' );
function my_theme_enqueue_contacts_css() {
    wp_enqueue_style(
        'theme-contacts',
        get_template_directory_uri() . '/assets/css/contacts.css',
        ['theme-style'],  // si vous avez un style global
        filemtime( get_template_directory() . '/assets/css/contacts.css' )
    );
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_contacts_css');
function my_theme_enqueue_assets() {
    // style principal
    wp_enqueue_style('theme-style', get_stylesheet_uri());
  
    // script burger
    wp_enqueue_script(
      'theme-nav-toggle',
      get_template_directory_uri() . '/assets/js/main.js',
      [], null, true
    );
  }
  add_action('wp_enqueue_scripts', 'my_theme_enqueue_assets');
  function esgi_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Sidebar Blog', 'esgi' ),
        'id'            => 'sidebar-blog',
        'description'   => 'Widgets affichés dans la colonne de gauche de la page Blog',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );
}
add_action( 'widgets_init', 'esgi_widgets_init' );
function esgi_enqueue_blog_css() {
    wp_enqueue_style(
      'esgi-blog-style',
      get_template_directory_uri() . '/assets/css/blog.css',
      ['theme-style'],
      filemtime( get_template_directory() . '/assets/css/blog.css' )
    );
}
add_action('wp_enqueue_scripts', 'esgi_enqueue_blog_css');
/**
 * À la publication d’un post, importe et assigne automatiquement
 * une image externe comme “image à la une”
 */
add_action('save_post', 'esgi_auto_set_featured_image', 10, 3);
function esgi_auto_set_featured_image($post_ID, $post, $update) {
    // On ne traite que les articles publiés et qu’une seule fois
    if ( $update || $post->post_type !== 'post' || $post->post_status !== 'publish' ) {
        return;
    }
    // URL de l’image que tu veux importer
    $image_url = 'https://exemple.com/chemin/vers/image.jpg'; 
    // Téléchargement du fichier
    $upload_dir = wp_upload_dir();
    $image_data = wp_remote_get($image_url);
    if ( is_wp_error($image_data) ) {
        return;
    }
    $filename = basename($image_url);
    $file = $upload_dir['path'] . '/' . $filename;
    file_put_contents($file, wp_remote_retrieve_body($image_data));
    // Création de l’attachement
    $wp_filetype = wp_check_filetype($filename, null);
    $attachment = [
        'guid'           => $upload_dir['url'] . '/' . $filename, 
        'post_mime_type' => $wp_filetype['type'],
        'post_title'     => sanitize_file_name($filename),
        'post_status'    => 'inherit'
    ];
    $attach_id = wp_insert_attachment($attachment, $file, $post_ID);
    require_once(ABSPATH . 'wp-admin/includes/image.php');
    $attach_data = wp_generate_attachment_metadata($attach_id, $file);
    wp_update_attachment_metadata($attach_id, $attach_data);
    // On définit cette image comme “image à la une”
    set_post_thumbnail($post_ID, $attach_id);
}
function esgi_register_sidebars() {
    register_sidebar([
      'name'          => __('Sidebar Blog', 'esgi'),
      'id'            => 'blog-sidebar',
      'description'   => __('Widgets de la colonne de gauche sur les pages de blog', 'esgi'),
      'before_widget' => '<div class="widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>',
    ]);
  }
  add_action('widgets_init', 'esgi_register_sidebars');
  function esgi_enqueue_single_css() {
    wp_enqueue_style('esgi-single', get_template_directory_uri() . '/assets/css/single.css', ['esgi-style'], filemtime(get_stylesheet_directory() . '/assets/css/single.css'));
  }
  add_action('wp_enqueue_scripts', 'esgi_enqueue_single_css');
    // Méthode PHP pure
if ( ! is_admin() ) {
    show_admin_bar( false );
}
function esgi_enqueue_sidebar_css() {
    wp_enqueue_style(
        'esgi-sidebar',
        get_template_directory_uri() . '/assets/css/sidebar.css',
        ['esgi-style'],
        filemtime( get_template_directory() . '/assets/css/sidebar.css' )
    );
}
add_action('wp_enqueue_scripts', 'esgi_enqueue_sidebar_css');
function esgi_enqueue_404_css() {
    if ( is_404() ) {
      wp_enqueue_style(
        'esgi-404',
        get_template_directory_uri() . '/assets/css/404.css',
        ['esgi-style'], 
        filemtime( get_stylesheet_directory() . '/assets/css/404.css' )
      );
    }
  }
  add_action('wp_enqueue_scripts', 'esgi_enqueue_404_css');
  