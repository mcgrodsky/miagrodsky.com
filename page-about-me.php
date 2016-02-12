<?php get_header(); ?>
<?php if(have_posts()):
  while(have_posts()):
    the_post();?>
    <h1 class = "h1header about-me-h1"> About Me </h1>
    <div class = "about-me"><img class = "about-me-img" src="http://i.imgur.com/l1IoDLI.jpg?1" title="source: imgur.com"  alt="Mia Grodsky Headshot" width="320" height="480"/></a><p>In June 2015 I left my job to pursue a career in front-end web development. This past October I enrolled in <a href = "https://generalassemb.ly/education/web-development-immersive">General Assembly's full-time web development Immersive course</a> to learn the fundamentals of web development from the ground up. Most enthused by the power of CSS and Javascript, I love playing in the front-end integrating complex coding concepts with smooth, appealing layouts. When I am not coding, you'll find me playing guitar, getting outdoors, and cooking. View my <a href="http://miagrodsky.com/wp-content/uploads/2015/06/resume_12_1_15.pdf" rel="">resume</a> for more details about my experience. 
    </p></div>
  <?php endwhile;endif ?>
  <img class ="about_me_img" src="<?php the_field('image'); ?>" />
  <h1 class = "h1header h1portfolio"> Portfolio</h1>
  <div class = "portfolio clearfix">
    <div class = "portfolio-element">
      <a href = "https://learning-to-shred.herokuapp.com/">
      <img src="http://i.imgur.com/Fs73vLB.png alt="Learning to Shred" width="450px" height="270px" class = "img-one" /></a>
      <div class = "description">
        <p>Learning to Shred offers an easy-to-use interface for creating guitar chords. Users have the ability to populate the fretboard with pre-generated chords, or make their own chords by clicking on the frets.</p>
        <ol class="tech-used-div clearfix">
          <li class="tech-used">Ruby on Rails</li>
          <li class="tech-used">SASS</li>
          <li class="tech-used">Javascript/jQuery</li>
          <li class="tech-used">Susy</li>
          <li class="tech-used">Git/Github</li>
          <li class="tech-used">Heroku </li>
        </ol>
    </div>
    <div class = "portfolio-element">
      <a href = "http://housemate-matchmaker.herokuapp.com">
      <img src="http://i.imgur.com/7oWLsOV.png alt="Screen Shot 2015-12-28 at 2.26.36 PM" width="450px" height="270px" class = "img-two"/></a>
      <div class = "description">
        <p>Inspired by my unsavory experience trying to find housing through Craigslist, this app is a listings page for people trying to move to DC.</p>
        <ol class="tech-used-div clearfix">
          <li class="tech-used">Ruby on Rails</li>
          <li class="tech-used">Heroku</li>
          <li class="tech-used">Sass</li>
          <li class="tech-used">Bootstrap</li>
          <li class="tech-used">Git/Github</li>

      </ol>
      </div>
    </div>
    <div class = "portfolio-element">
        <a href = "http://mcgrodsky.github.io/Mona-Match-Me"/>
        <img class="alignnone wp-image-76 img-three" src="http://i.imgur.com/8wjdHDv.png width="450px" height="270px"/>
          </a>
          <div class = "description">
        <p>Mona match me is a card matching game where users play against a timer to match all the cards.</p>
          <ol class="tech-used-div clearfix">
          <li class="tech-used">HTML</li>
          <li class="tech-used">CSS</li>
          <li class="tech-used">Javascript</li>
          <li class="tech-used">JQuery</li>
          <li class="tech-used">Git/Github</li>
      </ol>
      </div>
    </div>
    <div class = "portfolio-element">
      <a href = "http://frequen-c.herokuapp.com" />
        <img src = "http://i.imgur.com/OQ9P5e4.png" alt="Frequen.c" width="450px" height="270px" class = "img-four"/></a>
        <div class = "description">
        <p>Frequen.c is an application that facilitates the creation of podcast clubs (like book clubs!) for users.</p>
        <ol class="tech-used-div clearfix">
          <li class="tech-used">HTML</li>
          <li class="tech-used">Node</li>
          <li class="tech-used">Express</li>
          <li class="tech-used">Mongo</li>
          <li class="tech-used">Javascript</li>
          <li class="tech-used">Sass</li>
          <li class="tech-used">Git/Github</li>
        </ol>
    </div>
  </div>


  <?php get_footer();?>
