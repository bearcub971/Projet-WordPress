<?php
// single.php
get_header(); ?>

<div class="single-container">
  <aside class="single-sidebar">
    <?php get_search_form(); ?>

    <?php if ( is_active_sidebar('blog-sidebar') ) : ?>
      <?php dynamic_sidebar('blog-sidebar'); ?>
    <?php endif; ?>
  </aside>

  <main class="single-content">
    <?php
    if ( have_posts() ) :
      while ( have_posts() ) : the_post(); ?>

        <h1 class="single-title"><?php the_title(); ?></h1>

        <?php if ( has_post_thumbnail() ) : ?>
          <div class="single-thumb">
            <?php the_post_thumbnail('large'); ?>
          </div>
        <?php endif; ?>

        <div class="single-meta">
          <span class="single-category">
            <?php the_category(', '); ?>
          </span>
          &bullet;
          <span class="single-date"><?php echo get_the_date(); ?></span>
        </div>

        <div class="single-text">
          <?php the_content(); ?>
        </div>

        <div class="single-tags">
          <?php the_tags('', ' '); ?>
        </div>

        <?php
        // commentaires
        if ( comments_open() || get_comments_number() ) :
          comments_template();
        endif;
        ?>

      <?php endwhile;
    endif;
    ?>
  </main>
</div>

<?php get_footer(); ?>
