
<?php get_header(); ?>



<div class="row single-wrapper">
  <!-- <div class="container"> -->
    <div class="col-md-8 single-contentes-wrapper">



<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>


     <h1><?php the_title(); ?></h1>

     <p><?php the_content(); ?>  </p>


  <?php endwhile; ?>

  <?php else : ?>

    <h2>Not Found</h2>
    <p>ごめんなさい ... 記事がありませんでした ...</p>

  <?php endif; ?>

</div>

<?php get_sidebar(); ?>

</div>
</div>

<!-- </div> -->



<?php get_footer(); ?>
