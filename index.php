<?php get_header(); ?>




<div class="row">
  <div class="container top-wrapper">

    <div class="col-md-8 top-new-post">
      <h1><i class="fa fa-newspaper-o"></i>NEW</h1>

      <div class="top-new-contents row">

        <div class="col-md-5">
          <img src="https://placehold.jp/160x110.png" alt="" >
        </div>

        <div class="col-md-7">
          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          <p><?php the_excerpt(); ?></p>
        </div>

      </div>


    </div>

    <?php get_sidebar(); ?>



  </div>


</div>




<?php get_footer(); ?>
