<?php

namespace DNADesign\ChangeLog;

use SilverStripe\Admin\ModelAdmin;
use SilverStripe\Security\Permission;

/**
 * Model admin for ChangeLog objects
 */
class ChangeLogAdmin extends ModelAdmin
{
    private static $managed_models = array(
        'DNADesign\ChangeLog\ChangeLog'
    );

    private static $menu_title = 'Logs';

    private static $url_segment = 'logs';

    public function canView($member = null)
    {
        return Permission::check('CMS_ACCESS_CMSMain', 'any', $member);
    }
}
