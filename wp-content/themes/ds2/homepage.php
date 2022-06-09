<?php
/*
Template Name: Home Page
*/
?>

<?php $options = get_option( 'ds2_theme_options' ); ?>

<?php get_header(); ?>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=173821009346463";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>



<?php if ( $options['slider'] == 1 ) : ?>

	<section style="slider">
		<div class="theme-default">
			<div id="slider" class="nivo-slider">
				
				<?php
				// The Query
				$the_query = new WP_Query( array( 'post_type' => 'book', 'orderby' => 'title', 'order' => 'ASC' ) );

				// The Loop
				while ( $the_query->have_posts() ) : $the_query->the_post();
					
				$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id ( $the_query->ID ), 'full' )	
				?>
				
				<img src="<?php echo $thumbnail[0] ?>" alt="" class="slide">
				
				<?php
				endwhile;				
				?>
				
			</div>
		</div><!--/theme-default-->
	</section><!--/slider-->
	
<?php endif; 
if ( $options['col4'] == 1 ) :
?>
	
	<section id="maininfo">
	
		<article>
			<header>
				<div class="circle"><div class="ico-cloud"></div></div>
				<h2><?php echo $options['col4_1h']; ?></h2>
			</header>
			<p>
			<?php echo $options['col4_1p']; ?>
			</p>
		</article>
		
		<article>
			<header>
				<div class="circle"><div class="ico-dropbox"></div></div>
				<h2><?php echo $options['col4_2h']; ?></h2>
			</header>
			<p>
			<?php echo $options['col4_2p']; ?>
			</p>
		</article>

		<article>
			<header>
				<div class="circle"><div class="ico-wordpress"></div></div>
				<h2><?php echo $options['col4_3h']; ?></h2>
			</header>
			<p>
			<?php echo $options['col4_3p']; ?>
			</p>
		</article>
		
		<article>
			<header>
				<div class="circle"><div class="ico-globe"></div></div>
				<h2><?php echo $options['col4_4h']; ?></h2>
			</header>
			<p>
			<?php echo $options['col4_4p']; ?>
			</p>
		</article>		
		
		<div class="clr"></div>
		
	</section><!--/maininfo-->

<?php endif; 
if ( $options['cta'] == 1 ) :
?>
	
	<section class="cta">
		<article>
			<header>
				<h1>Nunc eroc magna</h1>
			</header>
			<p>
			Curabitur sit amet tincidunt diam. Proin vitae placerat quam. 
			Maecenas arcu lacus, varius rutrum feugiat a, interdum et est. 
			Vestibulum at libero porta elit ullamcorper viverra. 
			Quisque et ipsum diam, in condimentum urna. 
			Fusce justo leo, semper at scelerisque ultricies, consequat volutpat diam. 
			Aenean turpis tortor, scelerisque a sodales sed, accumsan sit amet est.
			</p>
		</article>
			<a href="<?php echo $options['linkCta']; ?>" class="button big"><?php echo $options['buttonCta']; ?></a>
			
		<div class="clr"></div>
	</section>
	
<?php endif; 
if ( $options['recent'] == 1 ) :
?>	
	
	<section id="recent">
	
		<section>
		
			<header>
				<h2>Recent post</h2>
			</header>		
		
<?php
$args = array( 'numberposts' => 1 );
$lastposts = get_posts( $args );
foreach($lastposts as $post) : setup_postdata($post); ?>

			<article>
				<header>
					
				 <?php if ( has_post_thumbnail()) : ?>
				   <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
				   <?php the_post_thumbnail(); ?>
				   </a>
				 <?php endif; ?>					
					
					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				</header>
				
					<?php the_excerpt(); ?>
					
				<div class="clr"></div>
				
			</article>
			
<?php endforeach; ?>
			
		</section>
		
		<section>
			<header>			
				<h2>Recent on facebook</h2>
			</header>
			<article>
				<div class="fb-activity" data-site="<?php echo $options['facebookURL']; ?>" data-width="454" data-height="185" data-header="false" data-recommendations="false"></div>
			</article>
		</section>
		
		<div class="clr"></div>
		
	</section>

<?php endif; ?>

<?php get_footer(); ?>