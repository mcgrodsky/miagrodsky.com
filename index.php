<?php get_header(); ?>
  <div class = "blog_page">
    <div class = "search"><i class="fa fa-search"></i><?php get_search_form();?></div>
    <?php get_template_part("loop"); ?>  <!--took the loop and put it in its own file called loop.php, "loop" refers to this file -->
  </div>
<?php get_footer(); ?>
