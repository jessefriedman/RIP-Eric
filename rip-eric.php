<?php
/**
 * Plugin Name:       R.I.P. Eric
 * Description:       Adds a black-and-gold mourning ribbon across the top-left corner of the site in memory of Eric Binnion, linking to Friends of Eric Binnion. Activate to show it, deactivate to remove it. No settings.
 * Version:           1.0.1
 * Requires at least: 5.0
 * Requires PHP:      7.0
 * Author:            Jesse Friedman
 * Author URI:        https://jesse.blog
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 */

// Stop if this file is loaded directly instead of through WordPress.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Print the ribbon at the bottom of every front-end page, for every visitor.
 *
 * The ribbon sits inside a 220px square "corner" box that hides anything
 * spilling past its edges, so both ends of the band are cleanly cut off by
 * the top and left edges of the page no matter what font or theme is in use.
 * The box itself ignores clicks; only the band is clickable.
 */
function rip_eric_ribbon() {
	?>
<style id="rip-eric-ribbon-css">
.rip-eric-corner{position:absolute;top:0;left:0;width:220px;height:220px;margin:0;padding:0;overflow:hidden;z-index:99999;pointer-events:none}
.admin-bar .rip-eric-corner{top:32px}
@media screen and (max-width:782px){.admin-bar .rip-eric-corner{top:46px}}
.rip-eric-corner .rip-eric-ribbon{position:absolute;display:block;top:52px;left:-92px;width:340px;margin:0;padding:18px 0;box-sizing:content-box;transform:rotate(-45deg);background:#000;color:#bfa75d!important;text-align:center;font:800 18px/1 'Albert Sans',-apple-system,BlinkMacSystemFont,'Segoe UI',Helvetica,Arial,sans-serif;letter-spacing:.18em;text-transform:none;text-decoration:none!important;border:0;border-top:3px solid #bfa75d;border-bottom:3px solid #bfa75d;box-shadow:0 3px 10px rgba(0,0,0,.45);pointer-events:auto}
.rip-eric-corner .rip-eric-ribbon:hover,.rip-eric-corner .rip-eric-ribbon:focus{color:#fff!important}
@media print{.rip-eric-corner{display:none}}
</style>
<div class="rip-eric-corner"><a class="rip-eric-ribbon" href="https://friendsofericbinnion.wordpress.com/" target="_blank" rel="noopener noreferrer" aria-label="Remembering Eric Binnion">R.I.P. ERIC</a></div>
	<?php
}
add_action( 'wp_footer', 'rip_eric_ribbon' );
