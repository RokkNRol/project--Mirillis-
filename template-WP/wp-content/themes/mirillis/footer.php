<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Mirillis
 */

?>

</div><!-- #content -->

<footer>
   <nav>
      <?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'myTopnav',
                    'menu_class' => 'footer-nav',
                  'container_class' => 'footer--nav',
			) );
			?>
   </nav>
   <div class="logo">
      <?php
			the_custom_logo();
				?>
   </div>
   <div class="social">
      <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_social/em.png" alt=""></a>
      <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_social/face.png" alt=""></a>
      <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_social/goo.png" alt=""></a>
      <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_social/inst.png" alt=""></a>
      <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/img_social/pint.png" alt=""></a>
   </div>
   <p>Web Developer Blog 2018</p>
</footer>

<?php wp_footer(); ?>

</body>

</html>
