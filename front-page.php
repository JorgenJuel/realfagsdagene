<?php while (have_posts()) : the_post(); ?>
  <?php if(get_field('video')): ?>

  <section class="full full--transparent full--bgvideo">
    <video poster="<?php echo wp_get_attachment_image_url( get_field('bakgrunn'), 'full' ); ?>" autoplay="true" loop="true">
  <source
    src="<?php the_field('video_webm'); ?>"
    type="video/webm">
  <source
    src="<?php the_field('video_mp4'); ?>"
    type="video/mp4">
    </video>
  <?php else: ?>
  <section class="full full--transparent"  style="background-image: url(<?php echo wp_get_attachment_image_url( get_field('bakgrunn'), 'full' ); ?>)">
  <?php endif; ?>
  <div class="resten">
    <?php get_template_part( 'templates/logo' ); ?>
    <h1><?php the_field('tittel'); ?></h1>
  </div>
  <?php if(have_rows('bedrifter')): ?>
    <div class="bedrifter">
    <?php while(have_rows('bedrifter')): the_row(); ?>
      <?php echo wp_get_attachment_image( get_sub_field('logo'), 'full', false, ['class' => 'bedrifter__bilde'] ); ?>
    <?php endwhile; ?>
    </div>
  <?php endif; ?>
</section>
<section class="full full--center">
  <div class="innhold">
    <?php the_content(); ?>
  </div>
</section>
<?php
  $args = ['post_type' => 'foredragsholder', 'posts_per_page' => -1];
  $foredragsholdere = new WP_Query($args);
?>
<?php if($foredragsholdere->have_posts()): ?>
<section class="full full--center">
  <div class="foredragsholdere">
    <h2>Foredragsholdere</h2>
    <div class="mangefelt">
      <?php while($foredragsholdere->have_posts()): $foredragsholdere->the_post(); ?>
      <a href="<?php the_permalink( ); ?>" class="mangefelt__lenke" style="background-image: url('<?php echo get_the_post_thumbnail_url( null, 'profilbilde' ); ?>')" data-target="foredragsholder_<?php echo get_the_ID(); ?>"><span><?php the_title(); ?></span></a>
      <?php endwhile; ?>
    </div>
  </div>
</section>
<?php endif; ?>
<?php wp_reset_postdata(); ?>

<div class="fullskjerm" id="foredragsmodal">
  <button class="fullskjerm__lukk"></button>
  <div class="fullskjerm__venstre">
    <div class="fullskjerm__bilde" id="foredragsmodal__bilde" style="background-image: url()">
    </div>
  </div>
  <div class="fullskjerm__hoyre">
    <div class="fullskjerm__tekst">
      <div class="fullskjerm__tekst__logo">
        <hgroup>
          <h2>Realfagsdagene</h2>
          <h3>Trondheim Science Week</h3>
        </hgroup>
        <svg width="881px" height="923px" viewBox="0 0 881 923" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <g id="realfagsdagene">
            <g id="indre_sirkel" transform="translate(262.000000, 206.000000)" fill="#FE6F48">
                <polygon id="Path" points="569.894531 349.347656 574.901367 354.015625 579.908203 299.365234 572.576172 305.787109"></polygon>
                <polygon id="Path-2" points="577.476562 274.648438 570.853516 282.625 565.376953 231.714844 571.40625 218.996094"></polygon>
                <polygon id="Path-3" points="563.5 200.927734 557.320312 217.476562 537.537109 167.267578 539.453125 147.384766"></polygon>
                <polygon id="Path-4" points="530.566406 135.408203 529.513672 158.259766 490.007812 102.412109 488.927734 83.1699219"></polygon>
                <polygon id="Path-5" points="485.777344 107.136719 483.900391 78.1601562 426.488281 32.5371094 434.818359 64.7714844"></polygon>
                <polygon id="Path-6" points="431.470703 70.0644531 419.787109 30.1855469 361.455078 6.69335938 376.326172 41.9902344"></polygon>
                <polygon id="Path-7" points="371.771484 46.8027344 357.521484 12.4492188 292.638672 0.017578125 310.597656 30.875"></polygon>
                <polygon id="Path-8" points="307.910156 41.28125 285.185547 3.92382812 222.789062 8.1328125 249.945312 42.3769531"></polygon>
                <polygon id="Path-9" points="248.925781 47.2363281 220.421875 13.5390625 161.839844 31.8398438 193.677734 63.265625"></polygon>
                <polygon id="Path-10" points="191.28125 68.609375 156.943359 36.6757812 106.197266 65.4101562 144.441406 94.7929688"></polygon>
                <polygon id="Path-11" points="142.173828 102.189453 99.7519531 71.6621094 60.4511719 109.273438 102.917969 134.763672"></polygon>
                <polygon id="Path-12" points="102.392578 144.476562 61.3457031 119.421875 26.0253906 166.082031 74.2402344 185.617188"></polygon>
                <polygon id="Path-13" points="73.2226562 191.375 28.2753906 173.671875 9.23242188 226.910156 54.2128906 238.591797"></polygon>
                <polygon id="Path-14" points="55.4296875 251.230469 10.40625 239.513672 0.87890625 289.654297 47.7773438 294.84375"></polygon>
                <polygon id="Path-15" points="51.9492188 306.023438 6.33789062 301.640625 6.875 351.101562 54.5136719 352.158203"></polygon>
                <polygon id="Path-16" points="60.9375 362.46875 14.4179688 362.074219 22.8496094 413.986328 72.1757812 408.810547"></polygon>
                <polygon id="Path-17" points="36.1640625 420.990234 81.6367188 415.890625 104.791016 458.900391 59.2226562 471.048828"></polygon>
                <polygon id="Path-18" points="71.8945312 476.611328 115.412109 462.244141 148.421875 500.460938 105.839844 519.972656"></polygon>
                <polygon id="Path-19" points="160.855469 504.234375 122.90625 521.728516 168.839844 554.744141 201.482422 532.578125"></polygon>
                <polygon id="Path-20" points="181.539062 554.328125 213.052734 533.544922 258.650391 554.34375 233.398438 574.359375"></polygon>
                <polygon id="Path-21" points="269.685547 550.792969 246.308594 570.533203 305.578125 580.431641 322.800781 560.136719"></polygon>
                <polygon id="Path-22" points="334.230469 551.304688 317.779297 573.900391 378.061523 569.333008 392.070312 546.830078"></polygon>
                <polygon id="Path-23" points="400.073242 537.73584 389.637695 557.967773 442.189453 537.73584 449.870117 519.457031"></polygon>
                <polygon id="Path-24" points="460.140625 507.814453 455.28125 521.308594 502.236328 492.757812 502.226562 480.265625"></polygon>
                <path d="" id="Path-25"></path>
                <polygon id="Path-26" points="508.208984 481.664062 508.888672 469.113281 547.416016 423.662109 549.550781 433.068359"></polygon>
                <polygon id="Path-27" points="553.076172 413.69043 555.958008 422.075195 572.499023 375.707031 568.444336 371.563477"></polygon>
            </g>
            <g id="midtre_sirkel" transform="translate(159.000000, 127.000000)" fill="#B72C19">
                <polygon id="Path-28" points="681.472656 436.78125 691.289062 446.517578 696.422852 371.079102 686.628906 376.807617"></polygon>
                <polygon id="Path-29" points="686.806641 348.849609 694.621094 339.089844 686.964844 269.77832 678.375 289.851562"></polygon>
                <polygon id="Path-30" points="668.879883 265.682617 676.317383 239.931641 642.316406 163.124023 640.90918 191.279297"></polygon>
                <polygon id="Path-31" points="631.875 192.110352 632.898438 152.867188 582.085938 88.2001953 582.050781 119.740234"></polygon>
                <polygon id="Path-32" points="572.831055 127.490234 565.341797 85.8261719 511.308594 39.6728516 520.336914 82.640625"></polygon>
                <polygon id="Path-33" points="508.739258 84.9775391 493.147461 36.2705078 428.522461 8.53027344 448.950195 57.0703125"></polygon>
                <polygon id="Path-34" points="439.132812 62.6845703 413.84082 11.5908203 342.388672 0.7421875 372.40625 51.4414062"></polygon>
                <polygon id="Path-35" points="333.539062 9.76660156 366.466797 58.2958984 299.273438 59.5576172 259.251953 12.3242188"></polygon>
                <polygon id="Path-36" points="254.595703 23.8867188 294.371094 69.3417969 232.157227 85.1132812 185.217773 44.6523438"></polygon>
                <polygon id="Path-37" points="183.34375 55.09375 229.649414 97.0410156 174.436523 124.989258 122.460938 88.1054688"></polygon>
                <polygon id="Path-38" points="172.367188 135.633789 126.561523 174.261719 69.8095703 143.137695 120.193359 99.0117188"></polygon>
                <polygon id="Path-39" points="126.186523 186.405273 91.1455078 233.341797 29.4277344 209.96875 69.359375 155.416992"></polygon>
                <polygon id="Path-40" points="94.0478516 245.208008 71.4589844 298.455078 8.640625 281.633789 33.2773438 221.132812"></polygon>
                <polygon id="Path-41" points="75.5214844 309.320312 64.3515625 364.861328 0.252929688 356.305664 13.1337891 292.765625"></polygon>
                <polygon id="Path-42" points="71.0195312 375.292969 72.0888672 431.927734 8.35839844 432.287109 8.40332031 367.179688"></polygon>
                <polygon id="Path-43" points="80.8857422 442.025391 93.1503906 497.475586 24.8144531 505.489258 12.7890625 441.467773"></polygon>
                <polygon id="Path-44" points="105.333008 506.116211 129.625977 557.467773 66.9970703 572.660156 36.3173828 513.841797"></polygon>
                <polygon id="Path-45" points="143.158203 562.948242 180.109375 607.825195 123.296875 631.889648 80.2636719 579.533203"></polygon>
                <polygon id="Path-46" points="194.139648 611.394531 241.180664 647.619141 190.6875 676.614258 136.46582 634.378906"></polygon>
                <polygon id="Path-47" points="257.056641 647.583984 310.418945 671.908203 268.15625 704.704102 205.78125 676.849609"></polygon>
                <polygon id="Path-48" points="329.268555 667.181641 392.8125 677.316406 360.088867 713.257812 286.208008 700.268555"></polygon>
                <polygon id="Path-49" points="404.681641 669.977539 373.261719 703.060547 450.678711 695.93457 466.172852 664.581055"></polygon>
                <polygon id="Path" points="480.818359 654.194336 461.399414 684.764648 532.671875 661.243164 542.350586 631.448242"></polygon>
                <polygon id="Path" points="552.889648 616.520508 542.604492 644.931641 606.883789 601.802734 606.379883 580.895508"></polygon>
                <polygon id="Path" points="612.060547 566.305664 612.060547 582.995117 656.762695 534.829102 653.371094 521.466797"></polygon>
                <polygon id="Path" points="661.652344 505.787109 667.214844 517.042969 688.255859 464.626953 680.720703 457.898438"></polygon>
            </g>
            <g id="ytre_sirkel" fill="#5B152B">
                <polygon id="Path-50" points="855.537109 577.742188 869.866211 591.839844 880.9375 478.271484 863.866211 493.552734"></polygon>
                <polygon id="Path-51" points="861.509766 463.169922 878.726562 442.503906 867.119141 346.083008 854.328125 378.416016"></polygon>
                <polygon id="Path" points="843.972656 349.896484 858.101562 309.011719 808.467773 202.915039 803.467773 259.6875"></polygon>
                <polygon id="Path-52" points="787.015625 243.011719 789.111328 180.188477 726.578125 101.318359 734.379883 170.530273"></polygon>
                <polygon id="Path-53" points="720.525391 171.522461 708.030273 98.0800781 628.397461 34.8632812 648.960938 112.639648"></polygon>
                <polygon id="Path-54" points="638.241211 121.518555 611.693359 42.21875 526.645508 5.03320312 562.789062 84.9023438"></polygon>
                <polygon id="Path-55" points="552.082031 92.7734375 511.425781 11.8681641 419.953125 0.631835938 469.429688 79.5097656"></polygon>
                <polygon id="Path-56" points="462.639648 90.9257812 409.392578 12.2324219 318.592773 19.9033203 380.09375 95.2597656"></polygon>
                <polygon id="Path-57" points="376.275391 107.514648 310.43457 35.1289062 228.452148 62.0322266 298.741211 130.566406"></polygon>
                <polygon id="Path-58" points="296.431641 142.37207 222.982422 77.9072266 149.34668 120.725586 230.512695 179.336914"></polygon>
                <polygon id="Path-59" points="228.178711 192.402344 145.769531 135.638672 86.046875 192.353516 173.532227 241.735352"></polygon>
                <polygon id="Path-60" points="173.088867 255.916016 84.0957031 209.297852 39.2148438 275.527344 131.042969 313.648438"></polygon>
                <polygon id="Path-61" points="134.598633 327.648438 107.078125 392.541016 10.4042969 368.210938 42.4912109 292.121094"></polygon>
                <polygon id="Path-62" points="112.290039 407.227539 99.1523438 475.130859 0.6328125 462.566406 16.7099609 382.462891"></polygon>
                <polygon id="Path-63" points="106.169922 487.102539 106.682617 558.068359 8.42871094 556.889648 8.65820312 475.686523"></polygon>
                <polygon id="Path-64" points="117.226562 568.415039 132.316406 638.216797 35.296875 647.530273 19.2011719 568.905273"></polygon>
                <polygon id="Path-65" points="145.353516 647.768555 174.541016 712.746094 81.8359375 735.604492 47.3896484 659.240234"></polygon>
                <polygon id="Path-66" points="187.643555 719.561523 233.850586 776.863281 146.924805 811.169922 97.2441406 742.325195"></polygon>
                <polygon id="Path-67" points="248.675781 780.112305 306.557617 827.823242 228.956055 869.652344 165.662109 815.264648"></polygon>
                <polygon id="Path-68" points="325.030273 827.951172 391.81543 858.370117 327.169922 909.467773 250.350586 871.520508"></polygon>
                <polygon id="Path-69" points="413.946289 854.71582 486.078125 869.129883 434.570312 922.649414 349.638672 904.325195"></polygon>
                <polygon id="Path-70" points="506.079102 859.09082 583.448242 854.347656 546.494141 907.633789 458.310547 911.530273"></polygon>
                <polygon id="Path-71" points="601.398438 839.993164 676.21582 815.717773 663.826172 863.459961 569.378906 890.716797"></polygon>
                <polygon id="Path-72" points="691.520508 796.194336 677.398438 839.589844 770.480469 780.900391 766.703125 746.407227"></polygon>
                <polygon id="Path-73" points="773.313477 722.27832 775.523438 752.010742 824.092773 692.079102 818.668945 671.412109"></polygon>
                <polygon id="Path-74" points="827 655.470703 834.462891 673.05957 864.973633 607.302734 854.424805 601.849609"></polygon>
            </g>
        </g>
</svg>  
      </div>
      <h2 class="fullskjerm__tekst__tittel" id="foredragsmodal__tittel"></h2>
      <div id="foredragsmodal__innhold">
      </div>
    </div>
  </div>
</div>

<?php endwhile; ?>