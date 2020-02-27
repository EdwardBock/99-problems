<?php


/**
 * Plugin Name:       99 Problems
 * Plugin URI:        http://bewegungsfreund.org/99-problems
 * Description:       Manage routes of you boulder and climbing hall
 * Version:           0.0.1
 * Requires at least: 5.0
 * Tested up to:      5.3.2
 * Author:            Edward Bock
 * Author URI:        https://edwardbock.de
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       nine-nine-problems
 * Domain Path:       /languages
 */

namespace NineNineProblems;

const DOMAIN = "nine-nine-problems";
const CPT_REBUILDING = "rebuilding";
const TAX_WALL = "wall";

class Plugin {

	public function __construct() {

		require_once dirname(__FILE__).'/classes/pages.php';
		require_once dirname(__FILE__)."/classes/post-types.php";

	}

}
new Plugin();