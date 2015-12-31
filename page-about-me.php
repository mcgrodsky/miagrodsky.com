<?php get_header(); ?>
<?php if(have_posts()):
  while(have_posts()):
    the_post();?>
    <h1 class = "h1header"> About Me </h1>
    <div class = "about-me"><?php the_content();?>
    </div>
  <?php endwhile;endif ?>


  <img class ="about_me_img" src="<?php the_field('image'); ?>" />

  <h1 class = "h1header"> Portfolio</h1>
  <div class = "portfolio">
    <div class = "col">
    <div class = "portfolio-element">
      <img src="http://i.imgur.com/7oWLsOV.png alt="Screen Shot 2015-12-28 at 2.26.36 PM" width="450" height="228" />
      <p>Inspired by my unsavory experience trying to find housing through Craigslist, this app is a listings page for people trying to move to DC.</p>

      <div class="tech-used-div clearfix">
      <div class="tech-used">Ruby on Rails</div>
      <div class="tech-used">Heroku</div>
      <div class="tech-used">Sass</div>
      <div class="tech-used">Bootstrap</div>
      <div class="tech-used">Git/Github</div>
      </div>
    </div class = "col">
    </div>
    <div class = "portfolio-element">
      <div class = "col">
        <img class="alignnone wp-image-76" src="http://i.imgur.com/8wjdHDv.png width="450" height="228" />
        <p>Mona match me is a card matching game where users play against a timer to match all the cards.</p>
        <div class="tech-used-div clearfix">
        <div class="tech-used">HTML</div>
        <div class="tech-used">CSS</div>
        <div class="tech-used">Javascript</div>
        <div class="tech-used">JQuery</div>
        <div class="tech-used">Git/Github</div>
        </div>
      </div>
    </div>
    <div class = "portfolio-element">
      <div class = "col">
        <img src = "http://i.imgur.com/OQ9P5e4.png" alt="Frequen.c" style="width:450px;height:228px;" />
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
    </div>
    <div class = "portfolio-element">
      <div class = "col">
        <img class="alignnone wp-image-82" src=http://i.imgur.com/baYWY93.png alt="Average Rails Blog" width="410px" height="228px" />
        <p class="clearfix">Frequen.c facilitates the creation of podcast clubs (like book clubs!) giving users the ability to search, save, and listen to podcasts on the app.</p>
        <div class="tech-used-div clearfix">
        <div class="tech-used">Ruby on Rails</div>
        <div class="tech-used">CSS</div>
        <div class="tech-used">HTML</div>
        <div class="tech-used">Heroku</div>
        <div class="tech-used">Git/Github</div>
        </div>
      </div>


    </div>
</div>

  <?php get_footer();?>


  <!-- <div id = "resume">
    <div class = "experience">
      <div class="&quot;job-title">
        <div class="s1"> <b>Web Development Immersive</b>, General Assembly, Washington DC</div>
        <p class="p3"><span class="s2"><i>October 2015 2014 - January 2016</i></span></p>
        <p class="p3"><span class="s2">Built fluency in full-stack web development through completing an intensive three-month program focused on common best practices in object-oriented programming, MVC frameworks, data modeling, and test-driven development.</span></p>
        <p class="s1"><span class="s1"><b>Community Relations Specialist,</b> Coordinated Care, Tacoma WA</span></p>
        <p class="p3"><span class="s2"><i>June 2014 - July 2015</i></span></p>
        <p class="p3"><span class="s2">Created and implemented outreach efforts to over 5,000 prospective healthcare consumers in Washington, promoting brand awareness and building relationships with over 75 community influencers. </span><span class="s2">Implemented community events attended by over 100 community </span><span class="s2">influencers successfully identifying and educating potential consumers of health insurance.</span></p>
        <p class="s1"><span class="s1"><b>Marketing Intern</b>, Coordinated Care, Tacoma WA</span></p>
        <p class="p3"><span class="s2"><i>January 2014– May 2014</i></span></p>
        <p class="p3"><span class="s2">Assisted with e-marketing, branding conversation, website content, management of photos and consents, assisted with Key Provider outreach program, collateral, and branding. </span></p>
        <p class="s1"><span class="s1"><b>Development Intern,</b> Puget Sound Revels; Tacoma WA</span></p>
        <p class="p3"><span class="s2"><i>January 2013– January 2014</i></span></p>
        <p class="p3"><span class="s2">Project lead for the redesign of WordPress website, customizing a purchased theme while working in WordPress environment, also m</span><span class="s2">anaged website content alongside Facebook and Twitter pages.</span></p>

      </div>
    </div>

      <div class = "skills">
        <h2>Skills</h2>
        <p> HTML, CSS, Javascript/JQuery, Angular Bootstrap, Ruby, Ruby on Rails, Express, Node.js, SQL, MySQL, WordPress, SquareSpace, Git Github, Heroku Deployment, Indesign, Illustrator </p>
      </div>

      <div class = "education">
        <h2> Education </h2>
        <p>University of Puget Sound: Tacoma, WA
          Bachelor of Arts in Chinese Language, Science Technology & Society, September 2010 - May 2014</p>
          <p>General Assembly: Washington D.C
            Full-Time Web Development Immersive
            October 2015 - January 2016</p>
          </div>
  </div> -->
