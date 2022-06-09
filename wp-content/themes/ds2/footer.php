<?php $options = get_option( 'ds2_theme_options' ); ?>
<footer>
	
		<section class="top">
			
			<div class="left">
			<?php dynamic_sidebar( 'footer-left' ) ?>
			</div>
			
			<div class="center">
			<?php dynamic_sidebar( 'footer-center' ) ?>
			</div>
			
			<div class="right">
			<?php dynamic_sidebar( 'footer-right' ) ?>
			</div>
			
			<div class="clr"></div>
			
		</section>
		
		<section class="bottom">
			<div class="left">
			DESIGNERSTRON 2.0
			</div>
			<div class="right">
			webdesign 2012, adrianbienias.pl
			</div>
			
			<div class="clr"></div>
		</section>	
		
	</footer>
	
</div><!--/wrapper-->
<?php wp_footer(); ?>
</body>
</html>