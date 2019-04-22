<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Mirillis
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
   <meta charset="<?php bloginfo( 'charset' ); ?>">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="profile" href="https://gmpg.org/xfn/11">
   <link rel='stylesheet' href='https://apimgmtstorelinmtekiynqw.blob.core.windows.net/content/MediaLibrary/Widget/Tracking/styles/tracking.css' />

   <?php wp_head(); ?>
</head>
<?php global $redux_demo; ?>

<body <?php body_class(); ?>>
   <header>
      <div class="wr-logo">
         <div class="logo">
            <a href="#" class="logo-text"><?php bloginfo( 'name' ); ?></a>
            <div class="logo--contact-name"><?php echo $redux_demo['phone-label']; ?>
               <a href="#" class="logo--phone"><?php echo $redux_demo['phone-number']; ?></a>
            </div>
            <?php
			the_custom_logo();
				?>
         </div>
      </div>
      <nav>

         <?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'myTopnav',
                    'menu_class' => 'topnav',
			) );
			?>
      </nav>

      <?php
         
     echo get_custom_header_markup();

if ( is_header_video_active() && ( has_header_video() || is_customize_preview() ) ) {
	wp_enqueue_script( 'wp-custom-header' );
	wp_localize_script( 'wp-custom-header', '_wpCustomHeaderSettings', get_header_video_settings() );
}
      ?>

   </header>
