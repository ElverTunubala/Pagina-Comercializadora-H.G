<?php
get_header(); ?>
</div>
<section class="slider">

    <?php $args = array(
         "post_type" => "slider",
         "orderby" => "menu_order",
         "order" => "ASC",
         "posts_per_page" => -1
     );?>
    
     <?php $slider = new WP_Query($args); ?>
     <ul class="slider">
     
        <?php while($slider->have_posts() ): $slider->the_post(); ?>
          <li>
             <?php the_post_thumbnail("slider"); ?>
          </li>
         
         
        <?php endwhile; wp_reset_postdata(); ?>
     </ul>
     
</section>

<div class="wrapper">

<?php the_content(); ?>
<?php get_footer(); ?>