<?php get_header(); ?>
<div class="row">
	<div class="small-12 large-10 columns" role="main">

		<?php do_action( 'foundationpress_before_content' ); ?>

		<?php while ( have_posts() ) : the_post(); ?>

		<header class="single__header">
			<h1 class="entry-title"><?php the_title(); ?></h1>
			<?php foundationpress_entry_meta(); ?>
		</header>

		<article <?php post_class('news__container') ?> id="post-<?php the_ID(); ?>">

			<?php do_action( 'foundationpress_post_before_entry_content' ); ?>

			<?php if ( has_post_thumbnail() ) : ?>
					<div class="row">
						<div class="column">
							<?php the_post_thumbnail( '' ); ?>
						</div>
					</div>
				<?php endif; ?>

			<div class="single__content entry-content">

				<?php the_content(); ?>
			</div>
			<hr />
			<footer>
				<?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
				<p><?php the_tags(); ?></p>
			</footer>
			<?php do_action( 'foundationpress_post_before_comments' ); ?>
			<?php comments_template(); ?>
			<?php do_action( 'foundationpress_post_after_comments' ); ?>
		</article>
	<?php endwhile;?>

	<?php do_action( 'foundationpress_after_content' ); ?>

	</div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
