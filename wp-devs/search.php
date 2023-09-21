<?php get_header(); ?>

<div id="primary">
  <div id="main">
    <div class="container">

      <h1>Search results for:
        <?php echo get_search_query(); ?>
      </h1>

      <?php
      // Display search form.
      get_search_form();

      while (have_posts()):
        the_post();
        // Import article (posts results) from parts/content-archive.php
        get_template_part('parts/content', 'archive');
      endwhile;
      the_posts_pagination();
      ?>

    </div>
  </div>
</div>

<?php get_footer(); ?>