<?php
/**
	* Plugin Name: BW Coronavirus Banner
	* Description: Options to add a banner of your choice to your WordPress site in Botswana.
	* Version: 2.0.3
	* Author: St K` Simon
	* Credits: Robin Devitt
	* Forked URI : https://github.com/robindevitt/
  * Author URI : https://github.com/rascyber/
	* Company URI: https://www.cyberdevelopment.co.za/ 
	* License: GNU General Public License v2.0
	* License URI: https://www.gnu.org/licenses/gpl-2.0.html
	* Text Domain: bw-coronavirus-banner
  * Tags: Botswana, Corona Virus, COVID-19
  * Tested up to: 5.3
  * Stable tag: 5.0
  *
  * You should have received a copy of the GNU General Public License
  * along with Botswana Covid-19 Banner. If not, see
  * https://www.gnu.org/licenses/gpl-2.0.html.
  */
// require

namespace BW\Covid19;

require_once 'includes/bw_covid_19.php';

/**
 * Initialise the plugin.
 */

function init() {

	define( 'BW_COVID19_VERSION', '2.0.3' );
	define( 'BW_COVID19_DIR', plugin_dir_path( __FILE__ ) );
	define( 'BW_COVID19_URL', plugin_dir_url( __FILE__ ) );

	bw_covid_19();
}

add_action( 'plugins_loaded', 'BW\Covid19\init' );

add_action('upgrader_process_complete', 'BW\Covid19\init');

register_activation_hook( __FILE__, 'BW\Covid19\activation_hook' );

add_action( 'admin_notices', 'BW\Covid19\notice' );
