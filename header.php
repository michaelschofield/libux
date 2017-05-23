<!DOCTYPE html>

<html <?php language_attributes(); ?>>

	<head>
		
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
		<meta name="msvalidate.01" content="5B143AFB7C6862226ACB861205A65D30" />
		<meta property="fb:pages" content="756498824493854" />
																		
		<title><?php wp_title('|', true, 'right'); ?></title>
				
		<?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>
		 
		<?php wp_head(); ?>

<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','//connect.facebook.net/en_US/fbevents.js');

fbq('init', '957557021003719');
fbq('track', "PageView");</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=957557021003719&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

	</head>
	
	<body <?php body_class(); ?>>
		
		<div class="navigation section small-padding bg-dark lx-header">
		
			<div class="navigation-inner section-inner">
			
				<div class="blog-title">
					<a href="<?php echo esc_url( home_url() ); ?>" title="<?php echo esc_attr( get_bloginfo( 'title' ) ); ?><?php echo esc_attr( get_bloginfo( 'description' ) ); ?>" rel="home"><img src="https://libux.co/wp-content/uploads/avatar-e1467259159145.jpg" alt="LibUX"> <span>LibUX</span> </a>
				</div>

				<div class="nav-toggle fleft hidden">
					
					<a href="#">Menu</a>
					
					<div class="clear"></div>
					
				</div>
						
				<ul class="main-menu">
				
					<?php if ( has_nav_menu( 'primary' ) ) {
																		
						wp_nav_menu( array( 
						
							'container' => '', 
							'items_wrap' => '%3$s',
							'theme_location' => 'primary', 
							'walker' => new baskerville_nav_walker
														
						) ); } else {
					
						wp_list_pages( array(
						
							'container' => '',
							'title_li' => ''
						
						));
						
					} ?>
											
				 </ul> <!-- /main-menu -->
				 
				 <!--<a class="search-toggle fright" href="#"></a>-->
				 
				 <div class="clear"></div>
				 
			</div> <!-- /navigation-inner -->
			
		</div> <!-- /navigation -->
		
		<div class="mobile-navigation section bg-graphite no-padding hidden">
					
			<ul class="mobile-menu">
			
				<?php if ( has_nav_menu( 'primary' ) ) {
																	
					wp_nav_menu( array( 
					
						'container' => '', 
						'items_wrap' => '%3$s',
						'theme_location' => 'primary', 
						'walker' => new baskerville_nav_walker
													
					) ); } else {
				
					wp_list_pages( array(
					
						'container' => '',
						'title_li' => ''
					
					));
					
				} ?>
										
			 </ul> <!-- /main-menu -->
		
		</div> <!-- /mobile-navigation -->