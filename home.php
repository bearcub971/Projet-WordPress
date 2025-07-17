<?php
get_header();
?>

<main class="site-blog container">

  <h1 class="page-title">Blog.</h1>

  <div class="blog-grid">
    <!-- Colonne de gauche : sidebar -->
    <aside class="blog-sidebar">
      <?php if ( is_active_sidebar('sidebar-blog') ) : ?>
        <?php dynamic_sidebar('sidebar-blog'); ?>
      <?php endif; ?>
    </aside>

    <!-- Colonne de droite : boucle des articles -->
    <section class="blog-posts">
      <?php if ( have_posts() ) : ?>
        <div class="posts-grid">
          <?php while ( have_posts() ) : the_post(); ?>
            <article <?php post_class('post-card'); ?>>
              <?php if ( has_post_thumbnail() ) : ?>
                <a href="<?php the_permalink(); ?>">
                  <?php the_post_thumbnail('medium_large'); ?>
                </a>
              <?php endif; ?>
              <div class="post-meta">
                <span class="post-category">
                  <?php echo get_the_category_list(', '); ?>
                </span>
              </div>
              <h2 class="post-title">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </h2>
              <div class="post-excerpt">
                <?php the_excerpt(); ?>
              </div>
            </article>
          <?php endwhile; ?>
        </div>

        <!-- Pagination -->
        <nav class="pagination">
          <?php
            echo paginate_links( array(
              'mid_size' => 2,
              'prev_text' => '«',
              'next_text' => '»',
            ) );
          ?>
        </nav>

      <?php else : ?>
        <p>Aucun article trouvé.</p>
      <?php endif; ?>
    </section>
  </div>

</main>

<?php
get_footer();
