<?php

########################################################################
# Extension Manager/Repository config file for ext "extbase_staticinfotables".
#
# Auto generated 31-08-2011 06:30
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Extbase Static Info Tables',
	'description' => 'Extbase domain models for the static info tables',
	'category' => 'misc',
	'author' => 'Marco Huber',
	'author_email' => 'mail@marco-huber.de',
	'author_company' => '',
	'shy' => '',
	'dependencies' => 'cms,extbase,static_info_tables',
	'conflicts' => '',
	'priority' => '',
	'module' => '',
	'state' => 'stable',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'version' => '0.0.2',
	'constraints' => array(
		'depends' => array(
			'cms' => '',
			'extbase' => '',
			'static_info_tables' => '',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'suggests' => array(
	),
	'_md5_values_when_last_written' => 'a:9:{s:21:"ExtensionBuilder.json";s:4:"c02e";s:12:"ext_icon.gif";s:4:"e922";s:14:"ext_tables.php";s:4:"bb48";s:14:"ext_tables.sql";s:4:"d41d";s:32:"Classes/Domain/Model/Country.php";s:4:"6b5a";s:44:"Configuration/ExtensionBuilder/settings.yaml";s:4:"4ad0";s:34:"Configuration/Typoscript/setup.txt";s:4:"a057";s:39:"Tests/Unit/Domain/Model/CountryTest.php";s:4:"29c4";s:14:"doc/manual.sxw";s:4:"8d2d";}',
);

?>