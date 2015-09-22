<?php

get_header();

?>

<div class="text-box">
  <div class="text-wrap">

<?php

if (have_posts()):
  while (have_posts()):
    the_post();

?>

    <div class="post">
      <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
      <div class="excerpt">
        <?php the_excerpt(); ?> 
      </div>
      <!-- <a href="<?php the_permalink(); ?>" class="read-more">Read this post</a> -->
    </div>

<?php

  endwhile;
endif;

?>

  </div>
</div>

<?php

get_footer();
