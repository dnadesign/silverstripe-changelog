<?php

namespace DNADesign\ChangeLog;

use SilverStripe\ORM\DataObject;
use SilverStripe\Security\Member;

class ChangeLog extends DataObject
{
    private static $table_name = 'ChangeLog';

    private static $db = array(
        'What' => 'Varchar',
        'Details' => 'Text'
    );

    private static $has_one = array(
        'Who' => Member::class
    );

    private static $summary_fields = array(
        'What'
    );
}
