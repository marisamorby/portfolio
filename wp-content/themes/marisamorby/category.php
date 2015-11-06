<?php

get_header();


?>



<div class="text-box">
  <div class="text-wrap blog-wrap">

    <div class="main">

<?php get_template_part("loop"); ?>

    </div>

<?php get_sidebar(); ?>

  </div>
      <div class="social-icon-wrap">
        <a href="https://www.facebook.com/marisa.morby" target="_blank"><i class="fa fa-facebook"></i></a>
        <a href="https://twitter.com/marisamorby" target="_blank"><i class="fa fa-twitter"></i></a>
        <a href="https://www.linkedin.com/pub/marisa-morby/19/633/639" target="_blank"><i class="fa fa-linkedin"></i></a>
      </div>
</div>

<?php

get_footer();
