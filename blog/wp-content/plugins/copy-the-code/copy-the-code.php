<?php
/**
 * Plugin Name: Copy Anything to Clipboard
 * Plugin URI: https://github.com/maheshwaghmare/copy-the-code/
 * Description: Copy the Text or HTML into the clipboard 📋 (clipboard). You can use it for Blockquote, Wishes, Messages, Shayari, Offer Codes, Special Symbols, Code Snippets, Hidden Content, Or anything which you want 🥳. Read more about <a href="https://wp.me/P4Ams0-9Sn/">Copy Anything to Clipboard</a>.
 * Version: 2.6.2
 * Author: Mahesh M. Waghmare
 * Author URI: https://maheshwaghmare.com/
 * Text Domain: copy-the-code
 *
  *
 * @package Copy the Code
 */

// Set constants.
define( 'COPY_THE_CODE_TITLE', esc_html__( 'Copy Anything to Clipboard', 'copy-the-code' ) );
define( 'COPY_THE_CODE_VER', '2.6.2' );
define( 'COPY_THE_CODE_FILE', __FILE__ );
define( 'COPY_THE_CODE_BASE', plugin_basename( COPY_THE_CODE_FILE ) );
define( 'COPY_THE_CODE_DIR', plugin_dir_path( COPY_THE_CODE_FILE ) );
define( 'COPY_THE_CODE_URI', plugins_url( '/', COPY_THE_CODE_FILE ) );

register_activation_hook( COPY_THE_CODE_FILE, 'copy_the_code_set_fresh_user' );

/**
 * Set as fresh user?
 */
function copy_the_code_set_fresh_user() {
	update_option( 'copy_the_code_fresh_user', 'yes' );
}

require_once COPY_THE_CODE_DIR . 'classes/init.php';
require_once COPY_THE_CODE_DIR . 'classes/class-copy-the-code.php';
