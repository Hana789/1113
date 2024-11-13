<?php get_header(); ?>

<main>
  <section class="hero" style="background-image: url(<?php echo get_template_directory_uri();?>/title22.png)">
    <div class="hero-container"></div>
  </section>

  <!-- ここにループ -->
  <?php if(have_posts()): while(have_posts()): the_post(); ?>

  <?php the_title(); ?>
  <?php the_content(); ?>
  

  <?php endwhile; else: ?>
    <?php endif; ?>


</main>

<?php get_footer(); ?>