<article class="latest-news">
  <!-- Add in featured image -->
  <a href="<?php the_permalink() ?>">
    <?php the_post_thumbnail('large'); ?>
  </a>

  <!-- Add in meta info -->
  <h3>
    <a href="<?php the_permalink() ?>">
      <?php the_title(); ?>
    </a>
  </h3>

  <div class="meta-info">
    <p>Posted in
      <!-- Add in author link -->
      <span class="author-name">
        <?php the_author_posts_link(); ?>
      </span>
      <!-- Display categories and tags -->
      Categories:
      <span>
        <?php the_category(', '); ?>
      </span>
      <span>
        <?php the_tags('', ','); ?>
      </span>
    </p>

    <span>
      <?php echo get_the_date(); ?> by
    </span>
  </div>
  <?php the_excerpt(); ?>
</article>