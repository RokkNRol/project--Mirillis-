<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Mirillis
 */

get_header();
?>
<div class="advantages_container">
   <div class="advantages">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
?>
      <div class="advantages_item">
         <a href="<?php the_permalink(); ?>">
            <?php echo get_the_post_thumbnail(get_the_ID(), 'post-customthumb'); ?>
         </a>
         <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
         <?php the_excerpt(); ?>
      </div>

      <?php
      endwhile;
else : 
      get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
   </div>
</div>
<?php

get_footer();
