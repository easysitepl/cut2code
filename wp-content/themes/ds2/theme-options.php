<?php

// Utworzenie opcji portfolio w menu administratora
function portfolio_menu() {
	$args = array( 
	'public' => true,
	'label' => __( 'Portfolio' ),
	'supports' => array( 'title', 'thumbnail' )
	);
	register_post_type( 'portfolio', $args );
	register_taxonomy( 'portfolio_category', 'portfolio' );
}
add_action( 'init', 'portfolio_menu' );

$options = get_option( 'ds2_theme_options' ); // pobranie aktywnych opcji z bazy
if ( $options['slider'] == 1 ) : // slider on/off

	// Dopisanie ciągu kodów do sekcji head
	function slider(){
		echo '
		<link rel="stylesheet" type="text/css" media="all" href="' . get_bloginfo( 'template_url' ) .'/css/nivo-slider.css" >
		<script type="text/javascript" src="' . get_bloginfo( 'template_url' ) .'/js/jquery-1.7.1.min.js"></script>
		<script type="text/javascript" src="' . get_bloginfo( 'template_url' ) .'/js/jquery.nivo.slider.js"></script>
		<script type="text/javascript">
		$(window).load(function(){
			$("#slider").nivoSlider();
		});
		</script>
		';
	}
	add_action( 'wp_head', 'slider' );

	// Utworzenie opcji slidera w menu administratora
	function slider_menu() {
		$args = array( 
		'public' => true,
		'label' => __( 'Slider items' ),
		'supports' => array( 'title', 'thumbnail' )
		);
		register_post_type( 'book', $args );
	}
	add_action( 'init', 'slider_menu' );

endif; // koniec slider on/off

// Inicjalizacja opcji motywu
function theme_options_init(){
	register_setting( 'ds2_options', 'ds2_theme_options' );
}
add_action( 'admin_init', 'theme_options_init' );

// Aktywacja pozycji w menu motywu
function theme_options_add_page() {
	add_theme_page( __( 'Theme Options' ), __( 'Theme Options' ), 'edit_theme_options', 'theme_options', 'theme_options_do_page' );
}
add_action( 'admin_menu', 'theme_options_add_page' );

// Stworznie strony z opcjami motywu
function theme_options_do_page() { ?>

	<div class="wrap">
		<?php screen_icon(); echo "<h2>" . __( 'Theme Options' ) . "</h2>"; ?>

		<form method="post" action="options.php">
			<?php settings_fields( 'ds2_options' ); ?>
			<?php $options = get_option( 'ds2_theme_options' ); ?>

			<table class="form-table">
			
			<tr valign="top">
				<th scope="row">
					<?php _e( 'Show slider' ); ?>
				</th>
				<td>
					<input name="ds2_theme_options[slider]" type="checkbox" value="1" <?php checked( '1', $options['slider'] ); ?>>
				</td>
			</tr>
			
			<tr valign="top">
				<th scope="row">
					<?php _e( 'Show 4 columns' ); ?>
				</th>
				<td>
					<input name="ds2_theme_options[col4]" type="checkbox" value="1" <?php checked( '1', $options['col4'] ); ?>>
				</td>
			</tr>

			<tr valign="top">
				<th scope="row">
					<?php _e( 'Show CTA' ); ?>
				</th>
				<td>
					<input name="ds2_theme_options[cta]" type="checkbox" value="1" <?php checked( '1', $options['cta'] ); ?>>
				</td>
			</tr>
			<tr valign="top">
				<th scope="row">
					<?php _e( 'Link CTA' ); ?>
				</th>
				<td>
					<textarea style="width:200px;height:100px;" name="ds2_theme_options[linkCta]"><?php echo $options['linkCta']; ?></textarea>
				</td>
			</tr>
			<tr valign="top">
				<th scope="row">
					<?php _e( 'Text Button CTA' ); ?>
				</th>
				<td>
					<textarea style="width:200px;height:100px;" name="ds2_theme_options[buttonCta]"><?php echo $options['buttonCta']; ?></textarea>
				</td>
			</tr>			
			
			<tr valign="top">
				<th scope="row">
					<?php _e( 'Show Recent' ); ?>
				</th>
				<td>
					<input name="ds2_theme_options[recent]" type="checkbox" value="1" <?php checked( '1', $options['recent'] ); ?>>
				</td>
			</tr>
			<tr valign="top">
				<th scope="row">
					<?php _e( 'Facebook Recent URL' ); ?>
				</th>
				<td>
					<input name="ds2_theme_options[facebookURL]" type="text" value="<?php echo $options['facebookURL']; ?>">
				</td>
			</tr>			
			
			<tr valign="top">
				<th scope="row">
					<?php _e( '4 Columns First Header' ); ?>
				</th>
				<td>
					<input name="ds2_theme_options[col4_1h]" type="text" value="<?php echo $options['col4_1h']; ?>">
				</td>
			</tr>
			<tr valign="top">
				<th scope="row">
					<?php _e( '4 Columns First Text' ); ?>
				</th>
				<td>
					<textarea style="width:200px;height:100px;" name="ds2_theme_options[col4_1p]"><?php echo $options['col4_1p']; ?></textarea>
				</td>
			</tr>			
			
			<tr valign="top">
				<th scope="row">
					<?php _e( '4 Columns Second Header' ); ?>
				</th>
				<td>
					<input name="ds2_theme_options[col4_2h]" type="text" value="<?php echo $options['col4_2h']; ?>">
				</td>
			</tr>
			<tr valign="top">
				<th scope="row">
					<?php _e( '4 Columns Second Text' ); ?>
				</th>
				<td>
					<textarea style="width:200px;height:100px;" name="ds2_theme_options[col4_2p]"><?php echo $options['col4_2p']; ?></textarea>
				</td>
			</tr>			
			
			<tr valign="top">
				<th scope="row">
					<?php _e( '4 Columns Third Header' ); ?>
				</th>
				<td>
					<input name="ds2_theme_options[col4_3h]" type="text" value="<?php echo $options['col4_3h']; ?>">
				</td>
			</tr>
			<tr valign="top">
				<th scope="row">
					<?php _e( '4 Columns Third Text' ); ?>
				</th>
				<td>
					<textarea style="width:200px;height:100px;" name="ds2_theme_options[col4_3p]"><?php echo $options['col4_3p']; ?></textarea>
				</td>
			</tr>			
			
			<tr valign="top">
				<th scope="row">
					<?php _e( '4 Columns Fourth Header' ); ?>
				</th>
				<td>
					<input name="ds2_theme_options[col4_4h]" type="text" value="<?php echo $options['col4_4h']; ?>">
				</td>
			</tr>
			<tr valign="top">
				<th scope="row">
					<?php _e( '4 Columns Fourth Text' ); ?>
				</th>
				<td>
					<textarea style="width:200px;height:100px;" name="ds2_theme_options[col4_4p]"><?php echo $options['col4_4p']; ?></textarea>
				</td>
			</tr>					

			</table>

			<?php submit_button(); ?>
		</form>
	</div>
	
<?php } ?>