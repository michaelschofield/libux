<?php /* Template Name: Quote */ ?>

<?php get_header(); ?>

<div>

  <section class="lx-quote">

    <blockquote class="lx-quote__blockquote">

      <p><?php echo get_post_meta( get_the_ID(), 'quote_content', true ); ?></p>

      <cite class="lx-quote__citation">&mdash; <?php echo get_post_meta( get_the_ID(), 'quote_attribution', true ); ?>
        <a href="<?php echo get_post_meta( get_the_ID(), 'quote_source', true ); ?>" class="lx-quote__citation__source"><?php echo get_post_meta( get_the_ID(), 'quote_source_title', true ); ?></a>
      </cite>
    </blockquote>

    <button class="button" href="//libux.co/quotes">New Quote</a>

  </section>

</div>

<?php get_footer(); ?>
