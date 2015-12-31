<?php
//The Loop
if(have_posts()):while(have_posts()):the_post(); ?>

<h2>
  <a href = "<?php the_permalink(); ?>">
    <?php the_title(); ?>
  </a>
</h2>
<h3><?php the_content(); ?></h3>
<h2><?php the_date(); ?></h2>
<h2><?php the_time(); ?></h2>


  <?php endwhile;endif?>
