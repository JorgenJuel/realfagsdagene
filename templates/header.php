<?php /*<header class="banner">
  <div class="container">
    <a class="brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
    <nav class="nav-primary">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
      endif;
      ?>
    </nav>
  </div>
</header>
*/ ?>
<header class="topptekst">
  <?php if(!(is_home() || is_front_page() || is_page_template( 'om-oss.php' ))): ?>
    <div class="logoholder">
      <?php get_template_part( 'templates/logo' ); ?>
    </div>
  <?php endif; ?>
  <button class="navknapp">
    <span class="navknapp__linje"></span>
    <span class="navknapp__linje"></span>
    <span class="navknapp__linje"></span>
  </button>
  </div>
  <nav class="navmeny">
    <?php
      if (has_nav_menu('hovedmeny')) :
       bem_menu('hovedmeny', 'menu');
     endif;
    ?>
  </nav>
</header>