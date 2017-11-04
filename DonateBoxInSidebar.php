<?php
/**
 * DonateBoxInSidebar
 *
 * @file
 * @ingroup Extensions
 * @author Suriyaa Sundararuban <contact@suriyaa.tk> (https://about.suriyaa.tk/)
 * @license https://www.gnu.org/copyleft/gpl.html GNU General Public License 2.0 or later
 * @link https://www.mediawiki.org/wiki/Extension:DonateBoxInSidebar Documentation
 */

if ( !defined( 'MEDIAWIKI' ) ) die( "This is an extension to the MediaWiki package and cannot be run standalone." );

$wgExtensionCredits['parserhook'][] = array(
	'path' => __FILE__,
	'name' => 'DonateBoxInSidebar',
	'url' => 'https://www.mediawiki.org/wiki/Extension:DonateBoxInSidebar',
	'version' => '1.2.0',
	'author' => "[https://about.suriyaa.tk Suriyaa Sundararuban]",
	'descriptionmsg' => 'sidebardonatebox-desc',
);
// Internationalization file
$wgMessagesDirs['DonateBoxInSidebar'] = __DIR__ . '/i18n';
$wgExtensionMessagesFiles['DonateBoxInSidebar'] = __DIR__ . '/DonateBoxInSidebar.i18n.php';

$wgHooks['SkinBuildSidebar'][] = 'efDonateBoxInSidebar';

function efDonateBoxInSidebar( $skin, &$bar ) {
	global $wgDonateBoxInSidebarContent;
	$bar['donate'] = $wgDonateBoxInSidebarContent;
	return true;
}

# Config variable holding the HTML content of the sidebar
$wgDonateBoxInSidebarContent = '';
