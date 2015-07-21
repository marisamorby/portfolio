<?php
/**
 * Custom front-page.php template
 *
 * Used to display the homepage of your
 * WordPress site.
 *
 * @link http://themes.required.ch/?p=606
 */

get_header(); ?>

<!-- This is the block with the first background photo, and main header with byline -->
<div class="gradient-overlay full-sized-image" id="about">

  <div class="about-me-header">
    <h1>Hi, I&rsquo;m Marisa.</h1>
    <h2>Copywriter &amp; Content Strategist</h2>  
    <p>
      I&rsquo;m a people person and I like creating great conversations.<br>
      I want to create great conversations for you.
    </p>
  </div>

  <img src="<?= ASSETS_DIR ?>/images/marisa-morby.jpg" alt="Marisa Morby">

</div>

<!-- This is the block with scrolling About Me text on white background -->
<div class="text-box">
  <div class="text-wrap">

    <h3>A content strategist who wants to help you solve your problems.</h3>
    <p>
      Tattooed ennui authentic, gluten-free cardigan XOXO cronut scenester 
      fashion axe master cleanse retro mixtape fixie direct trade blog. 
      Locavore Vice VHS bespoke synth beard. Disrupt cold-pressed quinoa 
      crucifix you probably haven't heard of them, keytar listicle ugh 
      scenester drinking vinegar vegan narwhal. Fap actually fixie art party, 
      Thundercats trust fund lomo kale chips. Truffaut authentic artisan, 
      aesthetic cardigan Echo Park swag narwhal 3 wolf moon.
    </p>
    <h3>I'm short. Like 4'11" short.</h3>
    <p>
      Tilde meditation, health goth Echo Park Marfa retro PBR forage. Master 
      cleanse Portland occupy, roof party 3 wolf moon four loko single-origin 
      coffee normcore tousled viral tofu Pinterest direct trade DIY. Biodiesel 
      migas tousled blog fap, cardigan Etsy 90's sriracha typewriter 
      dreamcatcher flannel Marfa. Chillwave Carles trust fund, swag Godard food 
      truck pickled wolf Blue Bottle whatever stumptown fingerstache 
      Williamsburg. Letterpress disrupt YOLO, tote bag crucifix normcore four.
    </p>
    <h3>One day I will own a dog named Sqwudge.</h3>
    <p>
      Loko Echo Park 90's Williamsburg kitsch kogi sustainable. Banksy vinyl 
      Austin, 90's kitsch chambray irony +1 fixie authentic squid synth lo-fi 
      fashion axe. Austin four dollar toast biodiesel banh mi, tattooed disrupt 
      drinking vinegar swag salvia food truck typewriter blog Pinterest. 
      Mumblecore banjo yr narwhal cornhole, cliche lo-fi Thundercats small 
      batch mustache butcher. Kickstarter selfies cred salvia cronut try-hard 
      lo-fi, asymmetrical viral synth heirloom paleo.
    </p> 

  </div>

  <!-- This is the scroll arrow -->
  <a class="arrow-wrap">
    <span class="arrow"></span>
  </a>

</div>


<!-- This is the block with another image the work header -->
<div class="image-work full-sized-image" id="work">
  <h2>Work</h2>
  <img src="http://placekitten.com/g/1600/902">
</div>



<!-- This is the block with Work text on a scrolling white background -->

<div class="text-box">

  <div class="text-wrap">
    <p>Writing</p>
    <p>People Skills</p>
    <p>Social Media</p>
  </div>

  <!-- This is the scroll arrow -->
  <a class="arrow-wrap">
    <span class="arrow"></span>
  </a>

</div>  




<!-- This is the block with another image and Blog header -->
<!-- <div class="image-blog full-sized-image" id="blog">
  <h2>Blog</h2>
  <img src="http://placekitten.com/g/1600/901">
</div> -->


<!-- This is the block with the Blog text on a scrolling white background -->
<!-- <div class="text-box">

  <div class="text-wrap">
    <p>Post 1</p>
    <p>Post 2</p>
    <p>Post 3</p>
  </div>

  <! - - This is the scroll arrow - - >
  <a class="arrow-wrap">
    <span class="arrow"></span>
  </a>

</div> -->


<!-- This is the block with another image and contact header -->

<div class="image-contact full-sized-image" id="contact">
  <h2>Contact Me</h2>
  <img src="http://placekitten.com/g/1600/903">
</div>


<!-- This is the block with the contact form on a scrolling white background -->

<div class="text-box">

  <div class="text-wrap">

    <form action="action_page.php">

      <div>
        <label for="name">Name:</label>
        <input type="text" id="name" />
      </div>

      <div><br>
        <label for="mail">E-mail:</label>
        <input type="email" id="mail" />
      </div></br>

      <div><br>
        <label for="msg">Message:</label>
        <textarea id="msg"></textarea>
      </div></br>

    </form>

  </div>

  <!-- Back to top arrow-->
  <a class="arrow-wrap-top" href="#">
    <span class="arrow-top"></span>
  </a>

  <p><strong><center>BACK TO TOP</center></strong></p>

</div>
<?php

get_footer();
