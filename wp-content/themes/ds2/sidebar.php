
	<aside id="sidebar">
	
	<?php if( !dynamic_sidebar( 'primary-sidebar' )): ?>
	
		<section class="widget_search">
			<div class="inside">
				<h2>Search</h2>
				
				<?php get_search_form(); ?>
				
				<div class="clr"></div>
			</div>
		</section><!--/search-->
		
		<section class="categories">
			<div class="inside">
				<h2>Categories</h2>
					<ul>
					<?php wp_list_categories('title_li='); ?>
					</ul>
			</div>
		</section><!--/categories-->

		<section class="resentposts">
			<div class="inside">
				<h2>Recent posts</h2>
					<ul>
					<?php
						$recent_posts = wp_get_recent_posts();
						foreach( $recent_posts as $recent ){
							echo '<li><a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a> </li> ';
						}
					?>
					</ul>
			</div>
		</section><!--/resentposts-->
		
		<section class="widget_tag_cloud">
			<div class="inside">
				<h2>Tags</h2>
					<?php wp_tag_cloud('smallest=12&largest=12'); ?>
			</div>
		</section><!--/tags-->
		
		<section class="meta">
			<div class="inside">
				<h2>Meta</h2>
					<ul>
						<li><?php wp_loginout(); ?></li>
						<li><?php wp_register(); ?></li>
					</ul>
			</div>
		</section><!--/meta-->		
		
	<?php endif; ?>
		
	</aside><!--sidebar-->
	
	<div class="clr"></div>