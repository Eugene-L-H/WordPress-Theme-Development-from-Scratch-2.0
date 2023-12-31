<?php

/* 
Template Name: General Template
*/

?>

<?php get_header(); ?>

<!-- Add in custom header image. -->
<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>"
  width="<?php echo get_custom_header()->width; ?>" alt="Header Image" />

<!---->
<div id="content" class="site-content">
  <div id="primary" class="content-area">
    <main id="main" class="site-main">

      <div class="container">
        <div class="general-template">

          <?php
          if (have_posts()):
            while (have_posts()):
              the_post();
              ?>

              <article>
                <h1>
                  <?php the_title(); ?>
                </h1>
                <?php the_content(); ?>
              </article>
              <?php
            endwhile;
          else:
            ?>
            <p>There are no posts!</p>
          <?php endif;
          ?>

        </div> <!-- .blog-items -->

      </div> <!-- .container -->
    </main>
  </div>
  <!---->
  <?php get_footer(); ?>