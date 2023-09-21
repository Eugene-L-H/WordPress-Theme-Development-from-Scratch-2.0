<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <header>
    <h2>
      <a href="<?php the_permalink(); ?>">
        <?php the_title(); ?>
      </a>
    </h2>

    <!-- if statement that will display the meta info if "post" type equals "post" -->
    <?php if (get_post_type() === 'post'): ?>
      <div class="meta-info">
        <!-- Add in featured image -->
        <div class="featured-image">
          <?php the_post_thumbnail([275, 275]); ?>
        </div>
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
    <?php endif; ?>

  </header>

  <?php the_excerpt(); ?>
</article>