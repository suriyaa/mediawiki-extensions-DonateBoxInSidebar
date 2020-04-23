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

if ( function_exists( 'wfLoadExtension' ) ) {
	wfLoadExtension( 'DonateBoxInSidebar' );
	// Keep i18n globals so mergeMessageFileList.php doesn't break
	$wgMessagesDirs['DonateBoxInSidebar'] = __DIR__ . '/i18n';
	$wgExtensionMessagesFiles['DonateBoxInSidebar'] = __DIR__ . '/DonateBoxInSidebar.i18n.php';
	// wfWarn(
	// 'Deprecated PHP entry point used for CentralAuth extension. ' .
	// 'Please use wfLoadExtension instead, ' .
	// 'see https://www.mediawiki.org/wiki/Extension_registration for more details.'
	// );
	return;
} else {
	die( 'This version of the CentralAuth extension requires MediaWiki 1.25+' );
}
