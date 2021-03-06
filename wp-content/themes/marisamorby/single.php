<?php

get_header();

?>

<div class="text-box">

    <div class="main">

<?php

if (have_posts()):
  while (have_posts()):
    the_post();

    // Loads the image path for the featured image
    $img_id = get_post_thumbnail_id();
    $img_arr = wp_get_attachment_image_src($img_id, 'title-image');
    $img_src = $img_arr[0];

?>
      <div class="post">

        <div class="title-wrap blog-single gradient-overlay full-sized-image"
             style="background-image: url(<?= $img_src ?>);">
              
          <div class="title-content">
            <h1><?php the_title(); ?></h1>
              
          </div>

          <img src="<?= $img_src ?>" alt="<?php the_title() ?>">
          

               <!-- <span class="post-detail">
                  <ul class="post-detail">
                    <li><p><?php the_date (); ?></p></li>
                    <li><p>by Marisa Morby</p></li>
                  </ul>
                </span> -->


          </div> 


        <div class="content" id="post">
        <!-- This is the scroll arrow -->
            <a class="arrow-wrap pin-to-top" href="#post">
                 <span class="arrow"></span>
            </a>
          <div class="text-wrap content-wrap">
            <?php the_content(); ?> 
            <h3> Have thoughts on this article? Leave a comment below!</h3>
            <?php comments_template(); ?>

              <!-- Back to top arrow-->
              <a class="arrow-wrap-top" href="#nav">
                <span class="arrow"></span>
              </a>
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
