<?php
/**
 * Template Name: Om oss
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <div class="full full--transparent full--iframevideo">
    <iframe src="<?php the_field('video'); ?>" frameholder="0" allowfullscreen></iframe>
  </div>


    <div class="logoholder logoholder--mtop">
      <?php get_template_part( 'templates/logo' ); ?>
    </div>

  <div class="full full--side">
    <div class="innhold innhold--stor">
      <h1><?php the_title(); ?></h1>
      <aside class="sidebilde">
        <?php echo wp_get_attachment_image( get_field('bilde'), 'arrangement' ); ?>
      </aside>
      <?php the_field('introtekst'); ?>

      <div class="tofelt">
        <div class="tofelt__felt">
          <?php the_field('kontaktfelt'); ?>
        </div>
        <div class="tofelt__felt">
          <div class="kartholder">
            <?php the_field('kart'); ?>
          </div>
          <div class="innhold__adresse">
            <?php the_field('karttekst'); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php endwhile; ?>
