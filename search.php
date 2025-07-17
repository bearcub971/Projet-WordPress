<?php
/**
 * Template Name: Search Results
 */
get_header(); ?>

<section class="search-results">
  <div class="container">
    <h1 class="search-title">
      <?php
        /* Affiche « Search results for: mot » */
        printf(
          /* translators: %s = terme recherché */
          esc_html__( 'Search results for: %s', 'votre‑theme' ),
          '<span>' . esc_html( get_search_query() ) . '</span>'
        );
      ?>
    </h1>

    <?php if ( have_posts() ) : ?>
      <div class="search-grid">
        <?php while ( have_posts() ) : the_post(); ?>
          <article <?php post_class( 'search-item' ); ?>>
            <?php if ( has_post_thumbnail() ) : ?>
              <a href="<?php the_permalink(); ?>" class="search-thumb">
                <?php the_post_thumbnail( 'medium' ); ?>
              </a>
            <?php endif; ?>

            <h2 class="search-item-title">
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h2>

            <div class="search-item-meta">
              <?php 
                /* Catégorie(s) */
                echo get_the_category_list( ', ' ); 
              ?> · 
              <time datetime="<?php echo get_the_date( 'c' ); ?>">
                <?php echo get_the_date(); ?>
              </time>
            </div>

            <div class="search-item-excerpt">
              <?php the_excerpt(); ?>
            </div>
          </article>
        <?php endwhile; ?>
      </div>

      <div class="search-pagination">
        <?php
          the_posts_pagination([
            'mid_size'  => 2,
            'prev_text' => '&laquo;',
            'next_text' => '&raquo;',
          ]);
        ?>
      </div>

    <?php else : ?>
      <p class="no-results">
        <?php esc_html_e( "No results found. Try another search?", 'votre‑theme' ); ?>
      </p>
      <?php get_search_form(); ?>
    <?php endif; ?>
  </div>
</section>

<?php get_footer(); ?>
