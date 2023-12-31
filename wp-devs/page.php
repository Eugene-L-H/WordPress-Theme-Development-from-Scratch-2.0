<?php get_header(); ?>

<!-- Add in custom header image. -->
<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>"
  width="<?php echo get_custom_header()->width; ?>" alt="Header Image" />

<!---->
<div id="content" class="site-content">
  <div id="primary" class="content-area">
    <main id="main" class="site-main">
      <div class="container">

        <div class="page-items">

          <?php
          while (have_posts()):
            the_post();
            // Import article from parts/content.php
            get_template_part('parts/content', 'page');
          endwhile;
          ?>
        </div> <!-- .blog-items -->
      </div> <!-- .container -->

    </main>
  </div>
</div>
<!---->
<?php get_footer(); ?>