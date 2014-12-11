<?php

/**
 * Model admin for ChangeLogs
 */
class ChangeLogAdmin extends ModelAdmin {

	private static $managed_models = array(
		'ChangeLog'
	);

	private static $menu_title = 'Logs';

	private static $url_segment = 'logs';

	public function canView($member = null) {
		return Permission::check('CMS_ACCESS_CMSMain', 'any', $member);
	}
}