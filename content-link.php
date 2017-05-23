<?php $link_url = get_post_meta($post->ID, 'link_url', true); ?>
<?php $link_title = get_post_meta($post->ID, 'link_title', true); ?>

<?php 
  if ( has_post_thumbnail() ) : ?>

 <div class="card-image">

  <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
	<?php the_post_thumbnail(); ?>
  </a>
  
</div>
<?php endif; ?>

<div class="card-content">
  
 <h2 class="card-title post-title"><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

<div class="post-excerpt"><?php the_excerpt();; ?></div>

</div> <!-- /.card-content -->

<div class="card-action">
  <a href="<?php echo $link_url; ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><svg class="svg card-action__icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 125" style="enable-background:new 0 0 100 100;" xml:space="preserve"><g><polygon points="33.9,61.7 15.1,61.7 15.1,36.5 52.7,36.5 52.7,58.6 62.7,58.6 62.7,26.5 5.1,26.5 5.1,71.7 33.9,71.7  "/><polygon points="67.2,36.5 84.8,36.5 84.8,61.7 48.1,61.7 48.1,40.6 38.1,40.6 38.1,71.7 94.8,71.7 94.8,26.5 67.2,26.5  "/></g></svg></a>
   <span class="small" style="float: right; line-height: 2;">Shared by <?php echo get_the_author_meta( 'display_name'); ?></span>
</div>