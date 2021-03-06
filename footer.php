<?php if ( !is_category( 'quotes' ) ) : ?>
 <?php if ( !has_category( 'quotes' ) ) : ?>
<div class="footer section medium-padding bg-graphite">
	
	<div class="section-inner row">
	
		<?php if ( is_active_sidebar( 'footer-a' ) ) : ?>
		
			<div class="column column-1 one-third">
			
				<div class="widgets">
		
					<?php dynamic_sidebar( 'footer-a' ); ?>
										
				</div>
				
			</div>
			
		<?php else : ?>
		
			<div class="column column-1 one-third">
			
				<div class="widgets">
			
					<div id="search" class="widget widget_search">
					
						<div class="widget-content">
						
							<h3 class="widget-title"><?php _e( 'Search form', 'baskerville' ); ?></h3>
			                <?php get_search_form(); ?>
			                
						</div>
						
	                </div>
									
				</div>
				
			</div>
			
		<?php endif; ?> <!-- /footer-a -->
			
		<?php if ( is_active_sidebar( 'footer-b' ) ) : ?>
		
			<div class="column column-2 one-third">
			
				<div class="widgets">
		
					<?php dynamic_sidebar( 'footer-b' ); ?>
										
				</div> <!-- /widgets -->
				
			</div>
			
		<?php else : ?>
		
			<div class="column column-2 one-third">
			
				<div class="widgets">
				
					<div class="widget widget_recent_entries">
					
						<div class="widget-content">
						
							<h3 class="widget-title"><?php _e( 'Latest posts', 'baskerville' ); ?></h3>
							
							<ul>
				                <?php
									$args = array( 'numberposts' => '5', 'post_status' => 'publish' );
									$recent_posts = wp_get_recent_posts( $args );
									foreach( $recent_posts as $recent ){
										echo '<li><a href="' . get_permalink($recent["ID"]) . '" title="'.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a> </li> ';
									}
								?>
							</ul>
			                
						</div>
						
	                </div>
									
				</div> <!-- /widgets -->
				
			</div>
			
		<?php endif; ?> <!-- /footer-b -->
							
		<?php if ( is_active_sidebar( 'footer-c' ) ) : ?>
		
			<div class="column column-3 one-third">
		
				<div class="widgets">
		
					<?php dynamic_sidebar( 'footer-c' ); ?>
										
				</div> <!-- /widgets -->
				
			</div>
			
		<?php else : ?>
		
			<div class="column column-3 one-third">
			
				<div id="meta" class="widget widget_text">
					<div class="widget-content">
					
						<h3 class="widget-title"><?php _e( "Text widget", "baskerville" ); ?></h3>
						<p><?php _e( "These widgets are displayed because you haven't added any widgets of your own yet. You can do so at Appearance > Widgets in the WordPress settings.", "baskerville" ); ?></p>
		                
					</div>
                </div>
								
			</div>
			
		<?php endif; ?> <!-- /footer-c -->
		
		<div class="clear"></div>
	
	</div> <!-- /footer-inner -->

</div> <!-- /footer -->
<?php endif; ?>
<?php endif; ?>
<div class="credits section bg-dark small-padding">

	<div class="credits-inner section-inner">

		<p class="credits-left fleft">
		
			&copy; <?php echo date("Y") ?> <a href="<?php echo home_url(); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a>
		
		</p>
		
		<p class="credits-right fright">
			
			<span><?php printf( __( 'Design and User Experience for Libraries', 'baskerville'), 'http://www.andersnoren.se' ); ?> &mdash; </span><a class="tothetop" title="<?php _e('To the top', 'baskerville'); ?>" href="#"><?php _e('Up', 'baskerville' ); ?> &uarr;</a>
			
		</p>
		
		<div class="clear"></div>
	
	</div> <!-- /credits-inner -->
	
</div> <!-- /credits -->

<?php wp_footer(); ?>

<script>
// Temp fix for Baskerville's MEJS Scripts - @schoeyfield 6/1/15
jQuery('audio').mediaelementplayer({
  alwaysShowControls: true,
  features: ['playpause', 'progress', 'volume'],
  audioVolume: 'horizontal',
  audioWidth: 872,
  audioHeight: 100
});

<!-- Hotjar Tracking Code for http://libux.co -->
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:261075,hjsv:5};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'//static.hotjar.com/c/hotjar-','.js?sv=');

</script>
</body>
</html>