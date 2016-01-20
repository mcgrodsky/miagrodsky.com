<?php get_header(); ?>
<?php if(have_posts()):
  while(have_posts()):
    the_post();?>
    <h1 class = "h1header about-me-h1"> About Me </h1>

    <div class = "about-me"><?php the_content();?>
    </div>
  <?php endwhile;endif ?>

  <img class ="about_me_img" src="<?php the_field('image'); ?>" />

  <h1 class = "h1header h1portfolio"> Portfolio</h1>
  <div class = "portfolio">
    <div class = "portfolio-element">
      <a href = "https://learning-to-shred.herokuapp.com/">

      <img src="http://i.imgur.com/Fs73vLB.png alt="Learning to Shred" width="550px" height="300px" class = "img-one" /><div class="description"> Here is the big fat description box</div>

      </a>
      <p>Learning to Shred offers an easy-to-use interface for creating guitar chords. Users have the ability to populate the fretboard with pre-generated chords, or make their own chords by clicking on the frets.</p>
      <div class="tech-used-div clearfix">
      <div class="tech-used">Ruby on Rails</div>
      <div class="tech-used">SASS</div>
      <div class="tech-used">Javascript/jQuery</div>
      <div class="tech-used">Susy</div>
      <div class="tech-used">Git/Github</div>
      <div class="tech-used">Heroku </div>
      </div>

    </div>
    <div class = "portfolio-element">
      <a href = "http://housemate-matchmaker.herokuapp.com">

      <img src="http://i.imgur.com/7oWLsOV.png alt="Screen Shot 2015-12-28 at 2.26.36 PM" width="550px" height="300px" />
      </a>
      <p>Inspired by my unsavory experience trying to find housing through Craigslist, this app is a listings page for people trying to move to DC.</p>
      <div class="tech-used-div clearfix">
      <div class="tech-used">Ruby on Rails</div>
      <div class="tech-used">Heroku</div>
      <div class="tech-used">Sass</div>
      <div class="tech-used">Bootstrap</div>
      <div class="tech-used">Git/Github</div>
      </div>

    </div>

    <div class = "portfolio-element">
        <a href = "http://mcgrodsky.github.io/Mona-Match-Me"/>
        <img class="alignnone wp-image-76" src="http://i.imgur.com/8wjdHDv.png width="550" height="300px" />
          </a>
        <p>Mona match me is a card matching game where users play against a timer to match all the cards.</p>
        <div class="tech-used-div clearfix">
        <div class="tech-used">HTML</div>
        <div class="tech-used">CSS</div>
        <div class="tech-used">Javascript</div>
        <div class="tech-used">JQuery</div>
        <div class="tech-used">Git/Github</div>
        </div>

      </div>



    <div class = "portfolio-element">
      <a href = "http://frequen-c.herokuapp.com" />
        <img src = "http://i.imgur.com/OQ9P5e4.png" alt="Frequen.c" style="width: 550;height:300px;" />
          </a>
        <p class="clearfix">Frequen.c facilitates the creation of podcast clubs (like book clubs!) giving users the ability to search, save, and listen to podcasts on the app.</p>
        <div class="tech-used-div clearfix">
        <div class="tech-used">HTML</div>
        <div class="tech-used">Node</div>
        <div class="tech-used">Express</div>
        <div class="tech-used">Mongo</div>
        <div class="tech-used">Javascript</div>
        <div class="tech-used">Sass</div>
        <div class="tech-used">Git/Github</div>
        </div>

    </div>
    <div class = "portfolio-element">
        <a href = "https://the-swift-sorcerer.herokuapp.com"/>
          <img class="alignnone wp-image-82" src=http://i.imgur.com/baYWY93.png alt="Average Rails Blog" width="550px" height="300px" />
        </a>
          <p class="clearfix">Your average Ruby on Rails blog. A simple blogging platform for the average internet user. Custom log-in, log-out capabilities with the option to post blog content and comment on other posts.</p>
          <div class="tech-used-div clearfix">
          <div class="tech-used">Ruby on Rails</div>
          <div class="tech-used">CSS</div>
          <div class="tech-used">HTML</div>
          <div class="tech-used">Heroku</div>
          <div class="tech-used">Git/Github</div>
          </div>
      </div>
<div id = "footer">MiaKoda Grodsky &copy; 2016</div>

  <?php get_footer();?>
