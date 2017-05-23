<?php $quote_content = get_post_meta($post->ID, 'quote_content', true); ?>
<?php $quote_attribution = get_post_meta($post->ID, 'quote_attribution', true); ?>

<div class="post-header">

    <h2 class="post-title"><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
  <?php //the_time( get_option( 'date_format' ) ); ?> <?php //the_author_meta('display_name'); ?>

    <?php if( is_sticky() ) { ?> <span class="sticky-post"><?php _e('Sticky post', 'baskerville'); ?></span> <?php } ?>

</div> <!-- /post-header -->

<div class="post-quote">

	<blockquote><?php echo $quote_content; ?></blockquote>

	<?php if ( $quote_attribution != '' ) : ?>

		<cite><?php echo $quote_attribution; ?></cite>

	<?php endif; ?>

</div> <!-- /post-quote -->

<?php if($post->post_content != "") : ?>

	<div class="post-excerpt">

		<?php the_excerpt('100'); ?>

	</div> <!-- /post-excerpt -->

<?php endif; ?>


<div class="clear"></div>
