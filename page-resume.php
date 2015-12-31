<?php get_header(); ?>
  <div class = "experience">
    <?php if(have_posts()):
      while(have_posts()):
        the_post();?>
        <h3><?php the_content();?></h3>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>

  <div class = "skills">
    <h2>Skills</h2>
    <?php the_field('skills'); ?>
  </div>

  <div class = "education">
    <h2> Education </h2>
    <?php the_field('education'); ?>
  </div>
<?php get_footer();?>
