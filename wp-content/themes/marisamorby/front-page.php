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

		<h3>Hi, I'm Marisa Morby. I'm a curious, fun, and creative copy writer. You want copy that sells. Get copy that sells.</h3>

		<h3>Who I am</h3>

		<p>Text</p>

		<h3>What I do</h3>

		<p>Text</p>

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

		<a href="http://www.futureinsights.com/home/how-to-convince-your-boss-you-should-work-from-home-or-rome.html" target="_blank"><img src="<?=ASSETS_DIR?>/images/Future_insights_logo.png" alt= "Future Insights Logo"></a>

		<a href="http://www.futureinsights.com/home/how-to-convince-your-boss-you-should-work-from-home-or-rome.html" target="_blank"><img src="<?=ASSETS_DIR?>/images/Future_insights_logo.png" alt= "Future Insights Logo"></a>

		<a href="http://www.futureinsights.com/home/how-to-convince-your-boss-you-should-work-from-home-or-rome.html" target="_blank"><img src="<?=ASSETS_DIR?>/images/Future_insights_logo.png" alt= "Future Insights Logo"></a>

		<a href="http://www.futureinsights.com/home/how-to-convince-your-boss-you-should-work-from-home-or-rome.html" target="_blank"><img src="<?=ASSETS_DIR?>/images/Future_insights_logo.png" alt= "Future Insights Logo"></a>

		<h3><center>To read more of my work, visit my Medium Publications</center></h3>

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

<div class="image-work-with-me full-sized-image" id="work-with-me">

		<h2>Work With Me</h2>
		<img src="<?=ASSETS_DIR?>/images/Work_With_Me.jpg" alt="Work With Me">
</div>

<!-- This is the block with the contact form on a scrolling white background -->

<div class="text-box">
	<div class="text-wrap">

	<h3>Services</h3>
	<p>Sales Pages</p>
	<p>Lead Pages</p>
	<P>Artices</p>		
	</div>		

<!-- Back to top arrow-->
  <a class="arrow-wrap-top" href="#">
 	<span class="arrow-top"></span>
  </a>

<p><b><center>BACK TO TOP</center></b></p>

</div>

<?php
get_footer();







