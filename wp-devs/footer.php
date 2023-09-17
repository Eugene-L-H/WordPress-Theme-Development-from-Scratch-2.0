<footer class="site-footer">
  <div class="container">
    <div class="copyright">
      <p>Copyright X - All Rights Reserved</p>
    </div>
    <nav>
      <?php
      /* This is where we will add the menu by using the register_nav_menus() function in functions.php */
      wp_nav_menu(
        array(
          'theme_location' => 'wp_devs_footer_menu',
          'depth' => 1
        )
      );
      ?>
    </nav>
  </div>
</footer>
</div>
<?php wp_footer(); ?>
</body>

</html>