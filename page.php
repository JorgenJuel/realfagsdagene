<?php while (have_posts()) : the_post(); ?>
  <div class="full full--side">
    <div class="innhold">
      <?php the_content(); ?>
    </div>
  </div>
<?php endwhile; ?>
