	<section id="blog" class="single">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>	
	
		<article>
		
			<header>
				<?php 
				if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
				  echo the_post_thumbnail( $id, array(614,254) );
				} 
				?>
				<hr>
				<p>Author: <?php the_author_posts_link(); ?>, Posted: <?php the_time('j F, Y'); ?>, Categories: <?php the_category(' ,') ?></p>
				<hr>
				<h1 class="entry-title"><?php the_title(); ?></h1>			
			</header>		
	
			<section>
				
				<?php the_content(); ?>
				
				<div class="clr"></div>

				<?php comments_template(); ?>				
				
				<div class="clr"></div>
			</section>
		</article>	
		
	<?php endwhile; endif; ?>
		
		<div class="clr"></div>
		
	</section><!--/blog-->