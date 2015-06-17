<?php
/*
Template Name: News Template
*/
get_header(); ?>

<header id="homepage-hero" role="banner">
	<div class="row">
		<div class="small-12 medium-7 columns">
			<h1><a href="<?php bloginfo( 'url' ); ?>" title="<?php bloginfo( 'name' ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
			<h4 class="subheader"><?php bloginfo( 'description' ); ?></h4>
		</div>
	</div>

</header>

	<div class="row">
		<div class="small-12 large-8 columns" role="main">

		<?php do_action( 'foundationpress_before_content' ); ?>

		<?php if ( have_posts() ) : ?>

		<?php do_action( 'foundationpress_before_content' ); ?>

		<?php while ( have_posts() ) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" class="news__container" <?php post_class(); ?>>
				<header>
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<?php foundationpress_entry_meta(); ?>
				</header>
				<div class="entry-content">
					<?php get_template_part( 'content-custom', get_post_format() ); ?>
				</div>
				<footer>
					<?php printf( __( 'Category' ).': %1$s', get_the_category_list(', ') ); ?>
				</footer>
				<hr />
			</article>
		<?php endwhile; ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>

		<?php do_action( 'foundationpress_before_pagination' ); ?>

	<?php endif;?>

		<?php do_action( 'foundationpress_after_content' ); ?>

		</div>

    
</div>
<?php get_footer(); ?>