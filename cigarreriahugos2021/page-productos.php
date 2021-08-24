<?php
/* Template Name: Productos */

 get_header(); ?>

<?php
echo do_shortcode('[smartslider3 slider="2"]');
?>

	<main role="main" class="main1">
		<!-- section -->
		<section class="clear">

			<h1><span><?php the_title(); ?></span></h1>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
        <?php $args = array(
            "post_type" => "productos",
            "posts_per_page" => 10,
            "order" => "ASC",
            "orderby" => "title"
        ); ?>
        <?php $productos = new WP_Query($args); ?>
        <?php while($productos->have_posts() ): $productos->the_post(); ?>
			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class("grid2-4"); ?>>
                
				    <div class="imagen-destacada">
                        <?php the_post_thumbnail("productodestacado"); ?>

				        <a class="mas-info" href="<?php the_permalink()?>">
                          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/masinfo.png">
                        </a>
	                </div> <!-- /imagen destacada-->

				<a class="mas-info" href="<?php the_permalink()?>">
                     <h2><?php the_title(); ?></h2>
                </a>
				
                
				
		        <br class="clear">
			</article><!-- /article -->
            <?php endwhile; wp_reset_postdata(); ?>

	        </div> 
		
        
		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
