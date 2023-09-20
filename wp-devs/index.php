<?php get_header(); ?>

<!-- Add in custom header image. -->
<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>"
  width="<?php echo get_custom_header()->width; ?>" alt="Header Image" />

<!---->
<div id="content" class="site-content">
  <div id="primary" class="content-area">
    <main id="main" class="site-main">
      <h1>News and Events:</h1>
      <div class="container">

        <div class="blog-items">

          <?php
          if (have_posts()):
            while (have_posts()):
              the_post();
              ?>
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
              <?php
            endwhile;
          else:
            ?>
            <p>There are no posts!</p>
          <?php endif;
          ?>

        </div> <!-- .blog-items -->
        <?php get_sidebar(); ?>
      </div> <!-- .container -->
    </main>
  </div>
  <!---->
  <?php get_footer(); ?>