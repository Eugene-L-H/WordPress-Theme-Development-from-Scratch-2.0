<?php get_header(); ?>

<!-- Add in custom header image. -->
<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>"
  width="<?php echo get_custom_header()->width; ?>" alt="Header Image" />

<!---->
<div id="content" class="site-content">
  <div id="primary" class="content-area">
    <main id="main" class="site-main">

      <!-- Add in archive title above results -->
      <?php the_archive_title('<h1>', '</h1>'); ?>
      <?php the_archive_description('<div class="archive-description">', '</div>'); ?>

      <div class="container">

        <div class="archive-items">

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
            ?>

            <!-- Add in pagination links -->
            <div class="webdevs-pagination">
              <?php echo paginate_links(); ?>
            </div>

            <?php
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