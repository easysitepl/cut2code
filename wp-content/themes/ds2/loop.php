	<section id="blog">
	
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
		<article>
			<header>
				<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyten' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
				<hr>
				<p>Author: <?php the_author_posts_link(); ?>, Posted: <?php the_time('j F, Y'); ?>, Categories: <?php the_category(' ,') ?></p>
				<hr>
			</header>
			<section>
			
				<?php if ( has_post_thumbnail()) : ?>
				   <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
				   <?php the_post_thumbnail(); ?>
				   </a>
				 <?php endif; ?>
				<?php the_content('<div class="button">read more...</div>'); ?>

				
					
				<div class="clr"></div>
				<hr class="bottom">
			</section>
		</article>	
		
	<?php endwhile; else: ?>
		<p>Sorry, no posts.</p>
	<?php endif; ?>	
		
		<div class="clr"></div>
		
	</section><!--/blog-->