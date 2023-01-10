<?php

/**
 * XrmToolBox Enabler
 *
 * @package       XRMTOOLBOX
 * @author        The Enabler
 * @license       gplv2
 * @version       1.0.0
 *
 * @wordpress-plugin
 * Plugin Name:   XrmToolBox Enabler
 * Plugin URI:    https://github.com/georged/xrmtoolbox-enabler
 * Description:   Enables XrmToolBox protocol
 * Version:       1.0.0
 * Author:        The Enabler
 * Author URI:    https://doubin.ski
 * Text Domain:   xrmtoolbox-enabler
 * Domain Path:   /languages
 * License:       GPLv2
 * License URI:   https://www.gnu.org/licenses/gpl-2.0.html
 *
 * You should have received a copy of the GNU General Public License
 * along with XrmToolBox Enabler. If not, see <https://www.gnu.org/licenses/gpl-2.0.html/>.
 */

// Exit if accessed directly.
if (!defined('ABSPATH')) exit;

// Allow xrmtoolbox:// hyperlinks
function wpse_allow_xtb_protocol($protocols)
{
  $protocols[] = 'xrmtoolbox';
  return $protocols;
}
add_action('plugins_loaded', function () {
  add_filter('kses_allowed_protocols', 'wpse_allow_xtb_protocol');
});
