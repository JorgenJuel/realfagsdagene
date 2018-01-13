
<section class="full full--center" style="background-image: url(<?php echo wp_get_attachment_url( get_field('bunnbilde', 'option')); ?> );)">
  <div class="innhold innhold--senter">
  	<?php the_field('bunntekst', 'option'); ?>
  </div>
</section>