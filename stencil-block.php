<?php
/**
 * Plugin Name:       Stencil Block
 * Description:       Example block written with ESNext standard and JSX support – build step required.
 * Requires at least: 5.7
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            The WordPress Contributors
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       stencil-block
 *
 * @package           create-block
 */

function create_block_stencil_block_block_init() {
	$asset_file = include( __DIR__ . '/build/index.asset.php');

	wp_register_style( 'stencil-block-editor-style', plugins_url('./build/index.css', __FILE__ ) );
	wp_register_style( 'stencil-block-style', plugins_url('./build/style-index.css', __FILE__ ) );
	wp_register_script( 'stencil-block-editor-script', plugins_url('./build/index.js', __FILE__ ),
		$asset_file['dependencies'],
		$asset_file['version']
	);

	register_block_type_from_metadata( __DIR__ . '/src/hello' );

}
add_action( 'init', 'create_block_stencil_block_block_init' );

function register_components() {
	$loader = plugins_url( 'packages/components/loader/index.es2017.js', __FILE__ );
	?>
	<script src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.js"></script>
	<script type="module">
	import { defineCustomElements } from '<?php echo $loader;?>';
	defineCustomElements();
	</script>
	<?php
}

add_action( 'wp_print_scripts', 'register_components', 1 );
