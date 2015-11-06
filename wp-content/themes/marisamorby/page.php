<?php

get_header();

?>

<div class="text-box">

    <div class="main">

<?php

if (have_posts()):
  while (have_posts()):
    the_post();

?>
      <div class="post">

        <div class="title-wrap blog-single gradient-overlay full-sized-image"
             style="background-image: url(<?=ASSETS_DIR?>/images/Marisa_Morby_Profile.png);">
              
          <div class="title-content">

            <h1><?php the_title(); ?></h1>
          </div>
          <img src="<?=ASSETS_DIR?>/images/Marisa_Morby_Profile.png" alt="Marisa Morby">
        </div>

        <div class="content" id="post">
        <!-- This is the scroll arrow -->
            <a class="arrow-wrap pin-to-top" href="#post">
                 <span class="arrow"></span>
            </a>
          <div class="text-wrap content-wrap">
            <?php the_content(); ?>
          </div>
        </div>
      </div>
              <div class="social-icon-wrap">
                <a href="https://www.facebook.com/marisa.morby" target="_blank"><i class="fa fa-facebook"></i></a>
                <a href="https://twitter.com/marisamorby" target="_blank"><i class="fa fa-twitter"></i></a>
                <a href="https://www.linkedin.com/pub/marisa-morby/19/633/639" target="_blank"><i class="fa fa-linkedin"></i></a>
              </div> 
    </div>

<?php

  endwhile;
endif;

?>
    </div>
   
  </div>
</div>

<?php

get_footer();
