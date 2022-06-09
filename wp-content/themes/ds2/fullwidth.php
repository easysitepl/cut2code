<?php
/*
Template Name: Full width
*/
?>
<?php get_header(); ?>

	<section id="blog" class="single" style="width:940px;">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>	
	
		<article>
		
			<header>
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
	
	<div class="clr"></div>

<?php get_footer(); ?>