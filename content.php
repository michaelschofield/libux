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

<?php if ( has_excerpt() ) : ?> <div class="post-excerpt"><?php the_excerpt('100'); ?></div><?php endif; ?>

</div> <!-- /.card-content -->
<div class="card-action">
   <?php echo get_the_date(); ?> by <b><?php echo get_the_author_meta( 'display_name'); ?></b>
   <?php echo get_avatar( get_the_author_meta( 'ID' ), 96, '', get_the_author_meta( 'display_name'), array( 'class' => 'z-depth-1' ) ); ?>
</div>


