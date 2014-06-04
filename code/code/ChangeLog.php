<?php
class ChangeLog extends DataObject {

	private static $db = array(
		'What' => 'Varchar',
		'Details' => 'Text'
	);

	private static $has_one = array(
		'Who' => 'Member'
	);

	private static $summary_fields = array(
		'Title'
	);

}