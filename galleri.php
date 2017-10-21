<?php
/**
 * Template Name: Galleri
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <div class="full full--side">
    <div class="innhold">
      <?php the_content(); ?>
      <?php $bilder = get_field('bilder'); ?>
      <?php if($bilder): ?>
      <div class="bildegalleri">
        <?php foreach ($bilder as $bilde): ?>
          <a href="<?php echo $bilde['url']; ?>" class="bildegalleri__bilde fancybox" rel="bildegalleri">
            <?php echo wp_get_attachment_image( $bilde['ID'], 'kvadrat' ); ?>
          </a>
        <?php endforeach; ?>
      </div>
      <?php endif; ?>
    </div>
  </div>
<?php endwhile; ?>
