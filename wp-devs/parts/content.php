<article>
  <h2>
    <a href="<?php the_permalink(); ?>">
      <?php the_title(); ?>
    </a>
  </h2>

  <!-- Add in featured image -->
  <div class="featured-image">
    <a href="<?php the_permalink(); ?>">
      <?php the_post_thumbnail([275, 275]); ?>
    </a>
  </div>

  <div class="meta-info">
    <p>Posted in
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
  <a href="<?php the_permalink(); ?>">
    <?php the_excerpt(); ?>
  </a>
</article>