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

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/block-editor/tutorials/block-tutorial/writing-your-first-block-type/
 */
function create_block_stencil_block_block_init() {
	register_block_type_from_metadata( __DIR__ );
}
add_action( 'init', 'create_block_stencil_block_block_init' );

function register_components() {
	$loader = plugins_url( 'packages/components/loader/index.es2017.js', __FILE__ );
	?>
	<script type="module">
	import { defineCustomElements } from '<?php echo $loader;?>';
	defineCustomElements();
	</script>
	<?php
}

add_action( 'wp_print_scripts', 'register_components', 1 );
