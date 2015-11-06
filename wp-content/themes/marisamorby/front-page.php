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

		<h2>Copywriter &amp; Marketer</h2>

		<p>
			You want copy that sells.<br class="visible-xs visible-sm">
			Get copy that sells.
		</p>

		<a href="#work-together" class="main-cta">
			Find Out How
		</a>

	</div>

	<img src="<?=ASSETS_DIR?>/images/Marisa_Morby_Profile.png" alt="Marisa Morby">

</div>

<!-- This is the block with scrolling About Me text on white background -->
<div class="text-box">
	<div class="text-wrap" id="how-copy-helps">

		<h3>Copywriting that makes people say, "Holy shit, take my money!"</h3>

		<p>How you sell is more important than what you sell. And if you want people to buy you've got to have great copy. If you don't, then you don't matter.</p>

		<p>I work with clients who crave to stand out from the crowd and be their weird, fun, and totally fantastic selves. So I write marvelous words that do just that. Web copy that delights. Articles that enthrall. And sales pages that make people say, "Holy shit, take my money!"</p>

	</div>

	<!-- This is the scroll arrow -->
	<a class="arrow-wrap pin-to-top" href="#how-copy-helps">
  	<span class="arrow"></span>
	</a>

	<!-- This is the scroll arrow -->
	<a class="arrow-wrap pin-to-bottom" href="#portfolio">
  	<span class="arrow"></span>
	</a>

</div>


<!-- This is the block with another image the Portfolio header -->
<div class="image-portfolio full-sized-image" id="portfolio">

	<h2>
		Some of My
		<strong>Writing</strong>
	</h2>
	<img src="<?=ASSETS_DIR?>/images/Portfolio.jpg" alt="Portfolio">
</div>

<!-- This is the block with Work text on a scrolling white background -->

<div class ="text-box">
	<div class="text-wrap center-me">
		<h3>I&rsquo;ve Written for These Great Companies</h3>
		<p>
			<small>To read an article I wrote for a site, click its logo.</small>
		</p>
		<div class="logo-wrap">

			<a href="http://www.futureinsights.com/home/how-to-convince-your-boss-you-should-work-from-home-or-rome.html" 
			   title="Future Insights — How To Convince Your Boss You Should Work From Home - or Rome" target="_blank">
				<img src="<?=ASSETS_DIR?>/images/Future_insights_logo.png" alt= "Future Insights Logo">
			</a>

			<a href="https://www.themuse.com/advice/the-underrated-skills-that-will-make-you-a-better-employee-and-human-being" 
			   title="The Muse — The Underrated Skills That Will Make You a Better Employee (and Human Being)" target="_blank">
				<img src="<?=ASSETS_DIR?>/images/the_muse_logo.png" alt= "The Muse Logo">
			</a>

			<a href="https://www.linkedin.com/pulse/4-most-important-questions-ask-during-interview-marisa-morby?trk=pulse_spock-articles" 
			   title="LinkedIn Pulse — The 4 Most Important Questions to Ask During an Interview" target="_blank">
				<img src="<?=ASSETS_DIR?>/images/LinkedIn_Pulse_logo.png" alt= "LinkedIn Pulse Logo">
			</a>

			<a href="http://www.lifehack.org/articles/work/9-signs-you-need-quit-your-job.html" 
			   title="Lifehack — 9 Signs You Need to Quit Your Job" target="_blank">
				<img src="<?=ASSETS_DIR?>/images/lifehack_logo.png" alt= "Lifehack Logo">
			</a>

			<a href="http://blog.gojobhero.com/2015/08/03/how-to-make-travel-a-part-of-your-career/" 
			   title="Go Job Hero — How to Make Travel a Part of Your Career" target="_blank">
				<img src="<?=ASSETS_DIR?>/images/Go_Job_Hero_logo.png" alt= "Go Job Hero Logo">
			</a> 

			<a href="http://thenuschool.com/when-and-how-to-say-no-to-a-project/"
				title="NuSchool — When and How to Say No to a Project" 
				target="_blank">
					<img src="<?=ASSETS_DIR?>/images/nuSchool_logo.png" alt= "nuSchool">
			</a>

		</div>

		<div class="portfolio-text">
			<h3>You can read more of my writing on my <a href="/blog">Blog</a> or <a href="https://medium.com/@marisamorby" target="_blank">Medium</a>.</h3>
		</div>
	</div>

	<!-- This is the scroll arrow -->
	<a class="arrow-wrap pin-to-bottom" href="#work-together">
  	<span class="arrow"></span>
	</a>
  
</div>


<!-- This is the block with another image and contact header -->

<div class="image-work-together full-sized-image" id="work-together">

		<h2>
			Let&rsquo;s Work
			<strong>Together</strong>
		</h2>
		<img src="<?=ASSETS_DIR?>/images/Work_With_Me.jpg" alt="Work With Me">
</div>

<!-- This is the block with the contact form on a scrolling white background -->

<div class="text-box">
	<div class="text-wrap">
		<h3>Services</h3>
		<p>
			If you&rsquo;re looking for help with your marketing, I&rsquo;m 
			here for you.
		</p>
		<p>
			From a quick <strong>overhaul of your home page</strong> to full-on 
			<strong>marketing funnel design, copywriting, and testing</strong>, I can
			take the stress out of making your website work for you.
		</p>
		<p>
			Send me a note and we&rsquo;ll figure out how to make the 
			biggest impact.
		</p>

		<?php gravity_form(1, false, false, false, null, true, 100, true); ?> 

		<div class="social-icon-wrap">
			<a href="https://www.facebook.com/marisa.morby" target="_blank"><i class="fa fa-facebook"></i></a>
			<a href="https://twitter.com/marisamorby" target="_blank"><i class="fa fa-twitter"></i></a>
			<a href="https://www.linkedin.com/pub/marisa-morby/19/633/639" target="_blank"><i class="fa fa-linkedin"></i></a>
		</div>

		<!-- Back to top arrow-->
	  <a class="arrow-wrap-top" href="#about">
	 		<span class="arrow"></span>
	  </a>

	</div>	
 </div>

<?php
get_footer();
