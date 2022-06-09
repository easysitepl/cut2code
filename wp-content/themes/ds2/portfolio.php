<?php
/*
Template Name: Portfolio
*/
?>
<?php get_header(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.quicksand.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>

	<section id="portfolio">	
		
		<nav id="filter"><span>Filter:</span></nav>
		
		<div class="clr"></div>
		
        <section id="container">
        	<ul id="stage">
			
				<?php
				// The Query
				$the_query = new WP_Query( array( 'post_type' => 'portfolio', 'orderby' => 'title', 'order' => 'ASC' ) );

				// The Loop
				while ( $the_query->have_posts() ) : $the_query->the_post();
					
				$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id ( $the_query->ID ), 'thumbnail' );
				$full = wp_get_attachment_image_src( get_post_thumbnail_id ( $the_query->ID ), 'full' );
				
				$cats = wp_get_object_terms( $post->ID, 'portfolio_category' );

				$items = array();
					foreach ( $cats as $cat ){
						$slug = $cat->slug;
						$items[] = $slug;
					}
					$counter = count($cats);
					$i = 0;
					
				?>
							
            	<li data-tags="<?php 
					foreach ( $items as $tag ){
						if (++$i === $counter ){
							$tags = $tag;
						}
						else{
							$tags = $tag . ', ';
						}
						echo $tags;
					}
				?>"><a href="<?php echo $full[0] ?>" rel="lightbox[portfolio]"><img src="<?php echo $thumbnail[0] ?>" style="width:294px;height:194px;background:#3a5a97;"></a></li>

				<?php
				endwhile;				
				?>				
				
            </ul>
        </section>
		
		<div class="clr"></div>
		
	</section><!--/portfolio-->
	
	<div class="clr"></div>

<?php get_footer(); ?>