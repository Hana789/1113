<?php get_header(); ?>

<main>
  <section class="hero" style="background-image: url(<?php echo get_template_directory_uri();?>/title22.png)">
    <div class="hero-container"></div>
  </section>

  <!-- ここからループ -->
  <?php if(have_posts()): while(have_posts()): the_post(); ?>
  <section class="menu">
            <div class="menu-list">
                <div class="grade">
                    <div><span>1</span></div>
                    <div class="grid-case">
                    <?php $args = array(
                        'orderby' => 'date',
                        'order' => 'DESC',
                        'category_name' => '学年１',
                        );
                    $new_query = new WP_Query($args);
                    if($new_query->have_posts()): while($new_query->have_posts()): $new_query->the_post(); ?>

                    <ul>
                    <li><a href="">●●●●●●●●●●</a></li>
                    
                    </ul>
                <?php endwhile; wp_reset_postdata(); else: ?>
                    <?php endif; ?>


            </div>
                </div>
                <div class="grade">
                    <div><span>2</span></div>
                    <div class="grid-case">

                    <?php $args = array(
                        'orderby' => 'date',
                        'order' => 'DESC',
                        'category_name' => '学年２',
                        );
                    $new_query = new WP_Query($args);
                    if($new_query->have_posts()): while($new_query->have_posts()): $new_query->the_post(); ?>

                    <ul>
                    <li><a href="">1●●●●●●●●●●</a></li>
                   
                </ul>
                <?php endwhile; wp_reset_postdata(); else: ?>
                  <?php endif; ?>

            </div>
                </div>
                <div class="grade">
                    <div><span>3</span></div>
                    <div class="grid-case">

                    <?php $args = array(
                        'orderby' => 'date',
                        'order' => 'DESC',
                        'category_name' => '学年３',
                        );
                    $new_query = new WP_Query($args);
                    if($new_query->have_posts()): while($new_query->have_posts()): $new_query->the_post(); ?>

                    <ul>
                    <li><a href="">●●●●</a></li>
                    
                </ul>

                <?php endwhile; wp_reset_postdata(); else: ?>
                  <?php endif; ?>

            </div>
                </div>
            </div>
    </section>
    <?php endwhile; else: ?>
      <?php endif; ?>
<!-- ここまでループ -->

</main>

<?php get_footer(); ?>