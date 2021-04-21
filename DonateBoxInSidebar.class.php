<?php

class DonateBoxInSidebar {
	function onDonateBoxInSidebar( $skin, &$bar ) {
		global $wgDonateBoxInSidebarContent;
		$bar['donate'] = $wgDonateBoxInSidebarContent;
		return true;
	}
}
