<!doctype html>  
<!--[if lt IE 7 ]> <html class="ie6 ie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7 ie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8 ie" <?php language_attributes(); ?>> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />

	<title>
	<?php wp_title('&lsaquo;',true,'right'); ?>
	<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>
	</title>
	
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	<link rel="icon" href="/favicon.ico" type="image/x-icon" />
	
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
	
	<?php wp_head(); //leave for plugins ?>
		
</head>

<body <?php body_class(); ?>>
	
	<div id="wrapper_border" class="center" style="margin-top: 50px;">
<?php /*								
		<!--logo-->
		<div id="logoContainer"> 

			<?php $logo = get_option('logo') ?>
			
			<?php if( !$logo ) : ?>
			
				<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"> <?php echo get_option('header_text', 'Pinzolo'); ?></a></h1>
				<p><?php echo get_option('sub_header_text', 'Edit me in the Theme Customizer'); ?></p>				

			<?php else : ?>
			
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<img src="<?php echo esc_url($logo) ?>" alt="<?php bloginfo('name'); ?> "/> 
				</a>
					
			<?php endif ?>
		
		</div>		
*/ ?>								
		<div id="wrapper_bg" class="center" >
			
			<div id="navwrap">
				
				<div id="navwrap2">		
	
					<nav>
						<?php wp_nav_menu(array('theme_location' => 'top', 'container' => 0, 'menu_id' => 'menuUl', 'items_wrap' => '<ul id="%1$s" class="%2$s"><li class="tnskip" >&nbsp;</li>%3$s<li class="tnskip">&nbsp;</li><li class="tnskip filler"></li></ul>' )); ?>					
					</nav>
					
				</div>			
			
			</div>

			<?php 
			
			if ( is_singular() && has_post_thumbnail( $post->ID ) ) : 
				
				$image_array = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID) , 'full' );
				$image = $image_array[0];
					 
			else :
			
				$image = get_header_image();
				
			endif;
			?>
			
			<?php if ( $image && !is_page_template('page-gallery.php')  ) : ?>
				<header>
					<?php if( get_the_title( $ID ) != "Home" ) { ?>
						<a href="/"><img class="size-full" src="<?php echo $image; ?>"  alt="" /></a>
					<?php } else { ?>
						<img class="size-full" src="<?php echo $image; ?>"  alt="" />
					<?php } ?>
				</header>
			<?php endif; ?>
			
			<?php if( get_the_title( $ID ) == "Home" ) { ?>

			<div id="homeboxes">
				<div class="homebox"><a href="/category/video/"><img src="wp-content/uploads/2014/12/videos_button.png" alt="Videos" /></a></div>
				<div class="homebox"><a href="https://github.com/bitsquare/bitsquare/releases"><img src="/wp-content/uploads/2014/12/download_button.png" alt="Download" /></a></div>
				<div class="homebox"><a href="https://github.com/bitsquare/bitsquare"><img src="/wp-content/uploads/2014/12/source_button.png" alt="Source" /></a></div>
				<div class="homebox"><a href="https://bitsquare.io/bitsquare.pdf"><img src="/wp-content/uploads/2014/12/whitepaper_button.png" alt="Whitepaper" /></a></div>
			</div>

			<div id="homevideo">
				<iframe src="https://player.vimeo.com/video/113838717" width="704" height="396" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
			</div>
			<?php } ?>
