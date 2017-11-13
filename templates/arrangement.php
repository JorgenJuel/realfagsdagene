
<?php $class = $left? 'arrangement--left' : 'arrangement--right'; ?>
<?php if($nyttArstall){$class .= ' arrangement--start';} ?>
<article class="arrangementer__arrangement arrangement <?php echo $class; ?>">
  <aside class="arrangement__bilde">
    <?php echo get_the_post_thumbnail( null, 'kvadrat' ); ?>
  </aside>
  <div class="arrangement__tekst">
    <div class="arrangement__topptekst">
      <h3><?php the_title(); ?></h3>
      <h4><?php the_field('underfelt'); ?></h4>
    </div>
    <div class="arrangement__deler">
    </div>
    <div class="arrangement__bunntekst">
      <span class="arrangement__bunntekst__tidspunkt"><?php the_field('tidspunkt'); ?></span>
      <span class="arrangement__bunntekst__knapp">Vis mer</span>
      <div class="arrangement__bunntekst__ekstra">
        <?php the_content(); ?>
      </div>
    </div>
  </div>
</article>