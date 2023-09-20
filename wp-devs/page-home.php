<?php get_header(); ?>
<!---->
<div id="content" class="site-content">
  <div id="primary" class="content-area">
    <main id="main" class="site-main">
      <section class="hero">
        Hero
      </section>
      <section class="services">
        <h2>Services</h2>
        <div class="container">

          <!-- Add in custom widgets -->
          <div class="services-item">
            <?php

            if (is_active_sidebar('services-1')) {
              dynamic_sidebar('services-1');
            } else {
              echo "Please add some widgets to the services widget area.";
            }

            ?>
          </div>
          <div class="services-item">
            <?php

            if (is_active_sidebar('services-2')) {
              dynamic_sidebar('services-2');
            } else {
              echo "Please add some widgets to the services widget area.";
            }

            ?>
          </div>
          <div class="services-item">
            <?php

            if (is_active_sidebar('services-3')) {
              dynamic_sidebar('services-3');
            } else {
              echo "Please add some widgets to the services widget area.";
            }

            ?>
          </div>
          <!-- End custom widgets -->

        </div>
      </section>
      <section class="home-blog">
        <h2>Latest News</h2>
        <div class="container">

          <!-- The Loop -->
          <?php

          /* Note: 'category__in' => array(5, 6) is used to only show posts from categories 5 and 6 (News and Events) */
          $args = array(
            'post_type' => 'post',
            'posts_per_page' => 3,
            'category__in' => array(5, 6),
            'category__not_in' => array(1),
          );

          $postlist = new WP_Query($args);

          if (have_posts()):
            while ($postlist->have_posts()):
              $postlist->the_post();
              ?>
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
              <?php


              // Check if comments are open or not. Display comments template if they are.
              if (comments_open() || get_comments_number()) {
                comments_template();
              }

            endwhile;

            // Reset the global post object so that the rest of the page works correctly. Used after custom WP_Query.
            wp_reset_postdata();
          else:
            ?>
            <p>There are no posts!</p>
          <?php endif;

          ?>

        </div> <!-- .container -->

      </section>
    </main>
  </div>
  <!---->
  <?php get_footer(); ?>