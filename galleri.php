<?php
/**
 * Template Name: Galleri
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <div class="full full--side">
    <div class="innhold">
      <?php the_content(); ?>
      <?php while(have_rows('bildegallerier')): the_row(); ?>
        <h2 class="overskrift overskrift--senter"><?php the_sub_field('bildetittel'); ?></h2>
        <div class="bildegalleri">
        <?php foreach (get_sub_field('bilder') as $bilde): ?>
          <a href="<?php echo $bilde['url']; ?>" class="bildegalleri__bilde fancybox" rel="bildegalleri">
            <?php echo wp_get_attachment_image( $bilde['ID'], 'kvadrat' ); ?>
          </a>
        <?php endforeach; ?>
        </div>
      <?php endwhile; ?>
    </div>
  </div>
<?php endwhile; ?>
