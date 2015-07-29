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
		<h1>Hi, I&rsquo;m Marisa.</h1><br>

		<h2>Copywriter</h2>

		<p>You want copy that sells. Get copy that sells.</p> 
	</div>

	<img src="<?=ASSETS_DIR?>/images/Marisa_Morby_Profile.png" alt="Marisa Morby">

</div>

<!-- This is the block with scrolling About Me text on white background -->
<div class="text-box">
	<div class="text-wrap">

		<h3>Hey, I'm Marisa Morby. You want copy that sells. Get copy that sells.</h3>

		<h3>Who I am</h3>

		<p>I'm a weird, fun, and fantastic storyteller.</p>

		<p>I travel and work remotely. I can proudly say hello, goodbye, thank you, and <i>what??</i> in six languages now. Go me.</p>
		
		<p>I'm hilarious. You should know that more for your own safety than anything, really. In fact, I was told I should be a comedian twice in the same night, by the same British guy. I'm counting it twice because I'm an optimist (I'm also bad at math, but whatever). So try and wipe that smile off your face. You can't. Because I'm so damn funny.</p>

		<p>I believe in silver linings. In 2014 I was in a job that was slowly sucking out my soul. I loved my coworkers, but knew that I needed to quit and focus on work I loved. Then in June, they shut down the office and laid everyone off. I could've been sad, but realized I'd just be paid to do what I <i>needed</i> to do anyway. See? Silver lining!</p>

		<h3>What I do</h3>

		<p>I work on fun projects to learn new skills. This website is one of them. I didn't know any code before I built this. Now I can design sites like it's magic!</p>

		<p>I learn new things, tackle challenges, and stare danger in the face. (Ok, maybe not the last one.)</p>

		<p>I love writing. I've mastered the art of the comma, have a degree in literature, and can spell words of up to five syllables. I'm happiest writing articles that teach skills for a happier life.</p>

		<p>I solve people problems. I'm curious and enjoy people. I like taking big issues, talking with people about them, and creating manageable plans that fix the problems.</p>

	</div>

<!-- This is the scroll arrow -->
  	<a class="arrow-wrap">
    <span class="arrow"></span>
  	</a>

</div>


<!-- This is the block with another image the Portfolio header -->
<div class="image-portfolio full-sized-image" id="portfolio">

	<h2>Portfolio</h2>
	<img src="<?=ASSETS_DIR?>/images/Portfolio.jpg" alt="Portfolio">
</div>

<!-- This is the block with Work text on a scrolling white background -->

<div class ="text-box">
	<div class="text-wrap">
		<div class="logo-wrap">

			<a href="http://www.futureinsights.com/home/how-to-convince-your-boss-you-should-work-from-home-or-rome.html" target="_blank"><img src="<?=ASSETS_DIR?>/images/Future_insights_logo.png" alt= "Future Insights Logo"></a>

			<a href="https://www.themuse.com/advice/the-underrated-skills-that-will-make-you-a-better-employee-and-human-being" target="_blank"><img src="<?=ASSETS_DIR?>/images/the_muse_logo.png" alt= "The Muse Logo"></a>

			<a href="https://www.linkedin.com/pulse/4-most-important-questions-ask-during-interview-marisa-morby?trk=pulse_spock-articles" target="_blank"><img src="<?=ASSETS_DIR?>/images/LinkedIn_pulse_logo.png" alt= "LinkedIn Pulse Logo"></a>

			<a href="http://www.lifehack.org/articles/work/9-signs-you-need-quit-your-job.html" target="_blank"><img src="<?=ASSETS_DIR?>/images/lifehack_logo.png" alt= "Lifehack Logo"></a>
		</div>

			<div class="portfolio-text">
				<h3>To read more of my work, visit my <a href="https://medium.com/@marisamorby" target="_blank">Medium Publication.</h3>
			</div>
	</div>	

<!-- This is the scroll arrow -->
  <a class="arrow-wrap">
    <span class="arrow"></span>
  </a>
  
</div>

<!-- This is the block with another image and Blog header 
<div class="image-blog full-sized-image" id="blog">
		<h2>Blog</h2>
		<img src="http://127.0.0.1:5000/wp-content/uploads/2015/06/Typewriter.jpg">
</div>


<! This is the block with the Blog text on a scrolling white background 
<div class="text-box">

		<p>Post 1</p>
		<p>Post 2</p>
		<p>Post 3</p>

</div> 

< - -! This is the scroll arrow - - >
  <a class="arrow-wrap">
    <span class="arrow"></span>
  </a>	

</div>  -->


<!-- This is the block with another image and contact header -->

<div class="image-work-together full-sized-image" id="work-together">

		<h2>Work Together</h2>
		<img src="<?=ASSETS_DIR?>/images/Work_With_Me.jpg" alt="Work With Me">
</div>

<!-- This is the block with the contact form on a scrolling white background -->

<div class="text-box">
	<div class="text-wrap">
		<h3>Services</h3>
		<p>Sales Pages</p>
		<p>Lead Pages</p>
		<P>Articles</p>	
		<h3>Interested in working together? Me, too! Shoot me an email and I'll get back to you within two days. Pinky promise.</h3>

		<div class="social-icon-wrap">
			<a href="https://www.facebook.com/marisa.morby" target="_blank"<i class="fa fa-facebook"></i></a>
			<a href="https://twitter.com/marisamorby" target="_blank"<i class="fa fa-twitter"></i></a>
			<a href="https://www.linkedin.com/pub/marisa-morby/19/633/639" target="_blank"<i class="fa fa-linkedin"></i></a>
		</div>

	</div>		

<!-- Back to top arrow-->
  <a class="arrow-wrap-top" href="#">
 	<span class="arrow-top"></span>
  </a>
 </div>

<?php
get_footer();







