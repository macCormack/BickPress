<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @subpackage FoundationPress
 * @since FoundationPress 1.0
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('news__container'); ?>>
	<header>
		<a class="news__thumb" href="<?php the_permalink(); ?>"><?php the_post_thumbnail( $size, $attr ); ?></a>
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<?php foundationpress_entry_meta(); ?>
	</header>
	<div class="entry-content">
		<?php the_excerpt(); ?>
	</div>
	
	<hr />
	<footer class="news__footer">
		<a class="btn__share">
			<!-- <div class="tooltips"><span>Share</span></div> -->
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="36" height="36">
		    <path fill="none" d="M 0 0 h 48 v 48 h -48 Z" />
		    <path d="M 36 32.17 c -1.52 0 -2.89 0.59 -3.93 1.54 l -14.25 -8.31 c 0.11 -0.45 0.18 -0.92 0.18 -1.4 s -0.07 -0.95 -0.18 -1.4 l 14.1 -8.23 c 1.07 1 2.5 1.62 4.08 1.62 c 3.31 0 6 -2.69 6 -6 s -2.69 -6 -6 -6 s -6 2.69 -6 6 c 0 0.48 0.07 0.95 0.18 1.4 l -14.1 8.23 c -1.07 -1 -2.5 -1.62 -4.08 -1.62 c -3.31 0 -6 2.69 -6 6 s 2.69 6 6 6 c 1.58 0 3.01 -0.62 4.08 -1.62 l 14.25 8.31 c -0.1 0.42 -0.16 0.86 -0.16 1.31 c 0 3.22 2.61 5.83 5.83 5.83 s 5.83 -2.61 5.83 -5.83 s -2.61 -5.83 -5.83 -5.83 Z" />
		</svg>
		</a>
		<div class="news__share">
			
		</div>
		<?php printf( __( 'Category' ).': %1$s', get_the_category_list(', ') ); ?>
	</footer>
</article>
