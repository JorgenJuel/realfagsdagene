<?php
  function getNewArstall($post_id, $gammelt){
    $terms = wp_get_post_terms( $post_id, 'arstall' , array( 'fields' => 'names' ));
    if(is_array($terms)){
      if($gammelt == $terms[0]){
        return false;
      }else{
        return $terms[0];
      }
    }
    return false;
  }
?>
<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'sage'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>
<div class="arrangementer">
  <?php $i = 1; ?>
  <?php $aarstall = ""; $nyttArstall = false; ?>
  <?php while (have_posts()) : the_post(); ?>
    <?php $left = $i % 2 ?>
    <?php if($nyttArstall = getNewArstall($post->ID, $aarstall)): ?>
      <?php $aarstall = $nyttArstall; ?>
      <h2 class="arrangementer__arstall"><?php echo $aarstall; ?></h2>
    <?php  endif; ?>
    <?php include(locate_template('templates/arrangement.php')); ?>
    <?php $i++; ?>
  <?php endwhile; ?>
</div>

<?php the_posts_navigation(); ?>
