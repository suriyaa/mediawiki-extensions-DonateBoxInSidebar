<?php

class DonateBoxInSidebarHooks {
	public static function onDonateBoxInSidebar( $skin, &$bar ) {
		global $wgDonateBoxInSidebarContent;
		$bar['donate'] = $wgDonateBoxInSidebarContent;
		return true;
	}
}
