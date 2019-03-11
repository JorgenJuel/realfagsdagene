<?php
/**
 * Template Name: Bedriftsside
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <div class="full full--side">
    <div class="innhold innhold--stor innhold--sidefelt">
      <h1><?php the_title(); ?></h1>
      <aside class="sidefelt">
        <?php the_field('sidefelt'); ?>
        <p class="sidefelt--mobil">
          Les mer om bedriftene under
        </p>
      </aside>
      <div class="bedriftsoversikt">
      <?php while(have_rows('bedrifter')):the_row(); ?>
        <div class="bedriftsoversikt__bedrift">
          <div class="bedriftsoversikt__bedrift__logo">
          <?php echo wp_get_attachment_image( get_sub_field('logo'), 'full' ); ?>
          </div>
          <div class="bedriftsoversikt__bedrift__tekst">
            <?php the_sub_field('tekst'); ?>
          </div>
        </div>
      <?php endwhile; ?>
      </div>
    </div>
  </div>
<?php endwhile; ?>
