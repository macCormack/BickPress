<?php get_header(); ?>
	
	<header class="news__hero" role="banner">
		<div class="row">
			<div class="small-12 large-7 columns">
				<h1>News</h1>
			</div>
		</div>
	</header>
	<section class="news__main">
		<div id="news-main" class="news__inner">
		<?php if ( have_posts() ) : ?>

			<?php do_action( 'foundationpress_before_content' ); ?>

			<?php while ( have_posts() ) : the_post(); ?>
					<div class="small-12 medium-6 large-4 columns">
						<?php get_template_part( 'content-custom', get_post_format() ); ?>
					</div>
			<?php endwhile; ?>

			<?php else : ?>
				<?php get_template_part( 'content', 'none' ); ?>

			<?php do_action( 'foundationpress_before_pagination' ); ?>

		<?php endif;?>



		<?php if ( function_exists( 'foundationpress_pagination' ) ) { foundationpress_pagination(); } else if ( is_paged() ) { ?>
			<nav id="post-nav">
				<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'foundationpress' ) ); ?></div>
				<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'foundationpress' ) ); ?></div>
			</nav>
		<?php } ?>

		<?php do_action( 'foundationpress_after_content' ); ?>
		</div>
	</section>
<div class="row">
	<div class="small-12 columns">
		<?php get_sidebar(); ?>
	</div>
</div>
<?php get_footer(); ?>

<script>
	var container = document.querySelector('#news-main');
	var msnry;
// initialize Masonry after all images have loaded
imagesLoaded( container, function() {
  msnry = new Masonry( container,  {
  	itemSelector: '.large-4'
  });
});
</script>
