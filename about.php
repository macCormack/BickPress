<?php
/*
Template Name: About
*/
get_header(); ?>

<header id="homepage-hero" role="banner">
	<div class="row">
		<div class="small-12 columns">
			<h1 class="entry-title"><?php the_title(); ?> me</h1>
		</div>
	</div>
</header>

	<div class="row">
		<div class="small-12 large-10 columns" role="main">

		<?php do_action( 'foundationpress_before_content' ); ?>

		<?php while ( have_posts() ) : the_post(); ?>
			<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
				<div class="entry-content">
					<?php the_content(); ?>
				</div>
				<footer>
					<?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
					<p><?php the_tags(); ?></p>
				</footer>
				<?php do_action( 'foundationpress_page_before_comments' ); ?>
				<?php comments_template(); ?>
				<?php do_action( 'foundationpress_page_after_comments' ); ?>
			</article>
		<?php endwhile;?>

		<?php do_action( 'foundationpress_after_content' ); ?>

		</div>
	</div>
	<div id="about-accordion" class="row about__accordion">
		<div class="small-12 large-10 large-push-1 columns">
			<ul class="accordion" data-accordion>
			<li class="accordion-navigation">
			<a href="#arts-education">ARTS EDUCATION</a>
				<div id="arts-education" class="content active">
			  		<ul>
			  			<li>Studied with: KVETA  – 1990-1994 – Watercolour</li>
			  			<li>Studied with Shirley Scoble – 1994- 2002 – Watercolour</li>
			  			<li>Studied with Peter Poor – The Kathleen Gormley McKay Art Centre 1999</li>
			  			<li>Private Instuction with with D.D. Gadjanski  – 2005 – 2008 Continuing –  Acrylic</li>
			  			<li>Halliburton School of the Arts – Annette Blady – July 2006 – Picasette – July 2007, July 2008, July 2009 – Mixed Media</li>
			  			<li>Studied with Lila Lewis Irving – Studio Six – June 2010, July 2011 – Non-objective painting</li>
			  			<li>Haliburton School of the Arts – Jill Segal – July 2010 – Mixed Media</li>
			  			<li>Ongoing workshops and demonstrations, speakers  with BWS, TWS, & MAC</li>
			  		</ul>
				</div>
			</li>
			</ul>
			<ul class="accordion" data-accordion>
			<li class="accordion-navigation">
			<a href="#prof-affil">Proffesional Affiliation</a>
				<div id="prof-affil" class="content">
			  		<ul>
			  			<li>Bayview Watercolour Society Member (BWS), Toronto, Ontario</li>
			  			<li>Toronto Watercolour Society Member (TWS), Toronto, Ontario</li>
			  			<li>Markham Arts Council, Markham (MAC), Ontario</li>
			  		</ul>
				</div>
			</li>
			</ul>
			<ul class="accordion" data-accordion>
			<li class="accordion-navigation">
			<a href="#juri-exhibitions">JURIED EXHIBITIONS</a>
				<div id="juri-exhibitions" class="content">
			  		<ul>
			  			<li>BWS, Toronto – Richvale Public Library November 2002 – Honourable Mention</li>
			  			<li>BWS, Toronto Botanical Garden November 2003, 2004, 2006</li>
			  			<li>TWS, North Toronto Memorial Community Centre    November 2005, 2006, 2007</li>
			  			<li>BWS, The Kathleen Gormley McKay Art Centre November 2005, June 2007, April 2009, April 2010 – (Honourable Mention) April,  2011</li>
			  			<li>BWS, Burr House May 2008  “Endless Expression Show”  – Best Acrylic Award</li>
			  			<li>WGA, North York Civic Centre – May 2008</li>
			  			<li>BWS, Historic MacDonald House – September 2008 – Honourable Mention & Peoples Choice Award, October 2009</li>
			  			<li>TWS – Todmorden Mills Gallery – March 2010 – Award of Merit</li>
			  			<li>TWS, J.D. Carrier Art Gallery – November 2009, May 2011</li>
			  		</ul>
				</div>
			</li>
			</ul>
			<ul class="accordion" data-accordion>
			<li class="accordion-navigation">
			<a href="#shows">Shows</a>
				<div id="shows" class="content">
			  		<ul>
			  			<li>Bayview Watercolour Society – Showcase of Painting – October 2006</li>
			  			<li>Boynton House  – December 2010</li>
			  			<li>The Heintzman House Invitational Show –   April 2006 – 2011</li>
			  			<li>Legacy of the Circle: Thornhill Artist Today – November 2006 (McKay)</li>
			  			<li>Willowdale Group of Artists</li>
			  			<li>North York Civic Centre – November 2006, 2007, 2008</li>
			  			<li>Kathleen Gormley Mckay House – December 2006, Mixed Pallette – June 2011</li>
			  			<li>Markham Theatre – December 2006</li>
			  			<li>Markham Art Council Shows – Nov. 2007, 2008, 2009   June 2008-2011</li>
			  			<li>Mayor’s Art Showcase (MAC) – March 2009, May 2010</li>
			  			<li>Artist Choice Show – North Toronto Memorial Centre – November 2009</li>
			  			<li>Artcures Inc. – Aurora Cultural Center – June 2010, July 2011</li>
			  			<li>Art In The Park – June 2010 – 2011</li>
			  			<li>Vaughan of a Kind – November 2010</li>
			  			<li>Hillcrest Boutique Night – March 2011</li>
			  		</ul>
				</div>
			</li>
			</ul>
			<ul class="accordion" data-accordion>
			<li class="accordion-navigation">
			<a href="#char-donations">CHARITABLE DONATIONS</a>
				<div id="char-donations" class="content">
			  		<ul>
			  			<li>North Toronto Cat Rescue Foundation – 2007</li>
			  			<li>Jacob’s Ladder Fundraiser Event – 2007</li>
			  			<li>Heintzman House Breast Cancer Fundraiser – 2009</li>
			  			<li>VMCI  Food Bank Fundraiser – June 2009</li>
			  		</ul>
				</div>
			</li>
			</ul>
			








		</div>

	</div>
<?php get_footer(); ?>