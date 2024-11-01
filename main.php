<?php
/*
Plugin Name:      TPB Binary Clock
Plugin URI:       https://tobiaspaulik.de/wordpress-plugin-wp_binary_clock/
Description:      Binary Clock | Using [tpb_binary_clock] Shortcode to display the clock.
Version:          1.0
Author:           Tobias Paulik
Author URI:       https://tobiaspaulik.de/
License:          GPL2
License URI:      https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:      tpb_binaryclock
Min WP Version:   3.0
Max WP Version:   4.5
*/
?>
<?php defined( 'ABSPATH' ) or die( 'No script kiddies please!' );  
function tpb_binary_clock(){
  // Adding JS
    wp_enqueue_script('clock_script_tp', plugin_dir_url(__FILE__) . 'clock_script_tp.js', array('jquery'));
    wp_register_script('clock_script_tp', plugin_dir_url(__FILE__) . 'clock_script_tp.js', array('jquery'), '1.0', true);
    wp_enqueue_script('clock_script_tp');
  // Adding CSS
    wp_enqueue_style('clock-styles_tp', plugin_dir_url( __FILE__ ) . 'style_tp.css' );
    wp_enqueue_style('clock-styles_tp');
// Display clock
  return '
  <div class="tpb_binclock"><span class="tpb_clock" id="tpb_clock" >0011100:00001111:01010110</span></div>
  ';
}
// Shortcode
add_shortcode('tpb_binary_clock', 'tpb_binary_clock');
?>