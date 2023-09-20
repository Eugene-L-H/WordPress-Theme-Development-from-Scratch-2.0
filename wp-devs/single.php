<?php get_header(); ?>

<div id="primary">
  <div id="main">
    <div class="container">

      <?php

      while (have_posts()):
        the_post();
        ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <header>
            <h1>
              <?php the_title(); ?>
            </h1>
            <!-- Add in featured image -->
            <div class="featured-image">
              <?php the_post_thumbnail("large"); ?>
            </div>
            <div class="meta-info">
              <p>Posted:
                <?php echo get_the_date(); ?> by
                <?php the_author_posts_link(); ?>
              </p>
              <p>Categories:
                <?php the_category(', '); ?>
              </p>
              <p>
                <?php the_tags('', ','); ?>
              </p>
            </div>
          </header>

          <?php the_content(); ?>
        </article>

        <?php
      endwhile;
      ?>

    </div>
  </div>
</div>

<?php get_footer(); ?>