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
<div class="image-header full-sized-image">

	<div class="about-me-header">
		<h1>Hi, I&rsquo;m Marisa.</h1>

		<h2>Copywriter &amp; Content Strategist</h2>	

		<h2>I&rsquo;m a people person and I like creating great conversations.</h2> 

		<h2>I want to create great conversations for you.</h2>
	</div>

	<img src="http://127.0.0.1:5000/wp-content/uploads/2015/05/BW_First_Photo_Site.png">

</div>

<!-- This is the block with scrolling About Me text on white background -->
<div class="about-me-text">

	<p>Oh hey, I&rsquo;m Marisa Morby. I&rsquo;m curious about people, love making connections, and have a knack for writing. In eight words or less, I&rsquo;d call myself a content strategist who can solve your problems.</p>

	<p><strong>SOME THINGS YOU SHOULD KNOW ABOUT ME</strong></p>

	<p><strong>I&rsquo;M SHORT.</strong></p>

		<p>Like 4'11" short. If you ever meet me in person, I have a list of things I don&rsquo;t need to hear anymore. Things like, &ldquo;Oh my god, your sooo little.&rdquo; Yes, I know. I&rsquo;ve known me all my life. </p>	

	<p><strong>I HAVE WILD AND FANTASTIC CURLY HAIR.</strong></p>

		<p>My hair is like an untamed beast. It flashes out into a lion&rsquo;s mane every morning and behaves best when I take it for long walks on the beach.</p>

	<p><strong>I&rsquo;M WEIRD, AND THAT&rsquo;S A GOOD THING.</strong></p>

		<p>I tend to make connections that other people don&rsquo;t see, or come up with stories that would otherwise go unheard. My weirdness makes for great entertainment at dinner parties. You. Are. Welcome.</p>

	<p><strong>I TRAVEL THE WORLD BECAUSE I CAN.</strong></p>

		<p>And I&rsquo;ve become a pretty solid traveler, too. I can say hello, thank you, goodbye, and what?? in seven languages now. This is a true skill. Also, did I already mention how entertaining I am at dinner parties?</p>	

	<p><strong>I LIKE WORKING ON PROJECTS SO I CAN LEARN NEW SKILLS.</strong></p>

		<p>This website you&rsquo;re reading is one of them. Guess how much code I knew before I built this? None. It took me a month to get the site up, but guess who knows CSS and HTML, now? This girl. I love learning new things, tackling challenges, and staring danger in the face. Ok, maybe I got carried away on the last thing.</p>

	<p><strong>I LOVE WRITING</strong>.</p>	

		<p>And I&rsquo;m good at it, too! I&rsquo;ve mastered the art of the comma (Oxford all the way, baby!), have a degree in literature, and can spell words of up to five syllables.</p> 

		<p>I&rsquo;m also great at using my articles to teach people skills that will help them have happier lives. Want to see for yourself? Check out a couple articles here and here.</p>

	<p><strong>I WAS TOLD THAT I SHOULD BE A COMEDIAN.</strong></p>

		<p>Twice. In the same night by the same half-drunk British man. But you know what? I&rsquo;m counting it as two because I also happen to be an eternal optimist. Try and wipe that smile off your face. You can&rsquo;t. Because I&rsquo;m so damn funny.</p>

	<p><strong>I BELIEVE IN SILVER LININGS.</strong></p>

		<p>At the beginning of 2014 I was miserable in my corporate job. I loved my coworkers, but the work was slowly killing my soul. I just wasn&rsquo;t suited to admin work and reporting.</p> 

		<p>I decided I needed to quit my job at the end of the year and really focus on the things I loved to do.</p> 

		<p>Guess what happened? I got laid off. Now, that could be a sad story, but it isn&rsquo;t! I basically got paid to do what I <i>needed</i> to do anyway, and now I travel and work remotely.</p> 

		<p>See? Silver lining!</p>

	<p><strong>I&rsquo;M GREAT AT SOLVING PEOPLE PROBLEMS.</strong></p>

		<p>Since I love talking to people, and I&rsquo;m curious about what motivates them, I&rsquo;m great at taking a big issue, talking with people about it, and breaking it down into manageable parts that can actually be fixed.</p> 

		<p>Being in HR really taught me how to use this skill. Everyone leaves the table feeling that their story was respected and heard.</p> 

</div>


<!-- This is the block with another image the work header -->
<div class="image-projects full-sized-image">


	<div class="work-header">

		<h3>WORK</h3>

	</div>

	<!-- This is the scroll arrow -->
<section class="main">
  <a class="arrow-wrap">
    <span class="arrow"></span>
  </a>
</section>
	
	<img src="http://127.0.0.1:5000/wp-content/uploads/2015/07/work-3.jpg">
</div>



<!-- This is the block with Work text on a scrolling white background -->

<div class ="work-text">

		<p>Writing</p>
		<p>People Skills</p>
		<p>Social Media</p>

</div>	




<!-- This is the block with another image and Blog header -->
<div class="image-blog full-sized-image">

	<div class="blog-header"> 

		<h3>BLOG</h3>

	</div>

<!-- This is the scroll arrow -->
<section class="main">
  <a class="arrow-wrap">
    <span class="arrow"></span>
  </a>
</section>

	<img src="http://127.0.0.1:5000/wp-content/uploads/2015/06/Typewriter.jpg">

</div>


<!-- This is the block with the Blog text on a scrolling white background -->
<div class="blog-text">

		<p>Post 1</p>
		<p>Post 2</p>
		<p>Post 3</p>

</div>


<!-- This is the block with another image and contact header -->

<div class="image-contact full-sized-image">

	<div class="contact-header">

		<h3>CONTACT ME</h3>

	</div>


	<img src="http://127.0.0.1:5000/wp-content/uploads/2015/07/phones.jpg">

<!-- This is the scroll arrow -->

<section class="main">
  <a class="arrow-wrap">
    <span class="arrow"></span>
  </a>
</section>

</div>


<!-- This is the block with the contact form on a scrolling white background -->

<div class="contact-text">

		<form action="action_page.php"><center>

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

		</form></center>

<!-- Back to top arrow-->

<section class="main">
  <a class="arrow-wrap-top" href="#">
 	<span class="arrow-top"></span>
  </a>
</section>

<p><strong><center>BACK TO TOP</center></strong></p>

</div>







