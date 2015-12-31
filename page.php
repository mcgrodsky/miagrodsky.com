<?php get_header(); ?>


this is page.php
  <?php if(have_posts()):
    while(have_posts()):
      the_post();?>
      <h2><?php the_title();?></h2>
  <?php endwhile; ?>
<?php endif; ?>

<?php get_footer();?>
