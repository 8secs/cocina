<?php

global $project;
$project = 'cocina';

ini_set('memory_limit','80M');
ini_set('mysql.connect_timeout', 14400);
date_default_timezone_set ( 'Europe/Madrid');

global $database;
//LOCAL
//$database = 'SS_cocina';
//cocina.COM
//$database = 'db562588325';
//HOMECOOKING
$database = 'db563848102';


require_once('conf/ConfigureFromEnv.php');

//Item::add_extension('ItemExtension');
Security::setDefaultAdmin("arangeltorres@gmail.com", "gelves08");

Object::useCustomClass("MemberLoginForm", "CocinaLoginForm");

/*Object::add_extension("Group", 'GroupExtension');
Object::add_extension("ChefObject", 'Addressable');
Object::add_extension('ChefObject', 'Geocodable');*/

// Set the site locale
i18n::set_locale('en_GB');
Translatable::set_default_locale('en_GB');