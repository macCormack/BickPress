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
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<?php foundationpress_entry_meta(); ?>
	</header>
	<div class="entry-content">
		<?php the_content( __( 'Continue reading...', 'foundationpress' ) ); ?>
	</div>

	<hr />
	
	<footer class="news__footer">
		<a href="<?php the_permalink(); ?>" class="btn__readMore">
			<div class="tooltips"><span>Read More</span></div>
			<svg version="1.1" id="Layer_1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="48px" height="48px" viewBox="0 0 48 48" xml:space="preserve">
				<path d="M12,20c-2.2,0-4,1.8-4,4s1.8,4,4,4s4-1.8,4-4S14.2,20,12,20z M36,20c-2.2,0-4,1.8-4,4s1.8,4,4,4s4-1.8,4-4S38.2,20,36,20zM24,20c-2.2,0-4,1.8-4,4s1.8,4,4,4s4-1.8,4-4S26.2,20,24,20z"/>
			</svg>
		</a>
		<?php printf( __( 'Category' ).': %1$s', get_the_category_list(', ') ); ?>
	</footer>
</article>
