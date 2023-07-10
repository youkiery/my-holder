<?php

/**
 * @Project Petcoffee-tech
 * @Chistua (hchieuthua@gmail.com)
 * @Copyright (C) 2019
 * @Createdate 21-03-2019 13:15
 */

if (!defined('NV_SYSTEM')) {
  die('Stop!!!');
}

define('NV_IS_FORM', true); 
define("PREFIX", $db_config['prefix']);
define("PATH", NV_ROOTDIR . '/modules/' . $module_file . '/template/user/');

$db = $db_slave = new NukeViet\Core\Database([
  "dbhost" => '127.0.0.1',
  "dbport" => '',
  "dbname" => 'phc',
  "dbsystem" => 'phc',
  "dbuname" => 'root',
  "dbpass" => '',
  "dbtype" => 'mysql',
  "collation" => 'utf8mb4_unicode_ci',
  "charset" => 'utf8mb4',
  "persistent" => false,
  "prefix" => 'pet',
]);

