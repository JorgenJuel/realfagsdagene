<?php
/**
 * Template Name: Videoer
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <div class="full full--side">
    <div class="innhold">
      <?php the_content(); ?>
      <?php $videoer = get_field('videoer'); ?>
      <?php if($videoer): ?>
      <div class="videogalleri">
        <?php while(have_rows('videoer')): the_row();?>
          <div class="videogalleri__video">
            <?php the_sub_field('iframe'); ?>
          </div>
        <?php endwhile; ?>
      </div>
      <?php endif; ?>
    </div>
  </div>
<?php endwhile; ?>
