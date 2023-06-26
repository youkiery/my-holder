<?php

/**
 * @Project Petcoffee-tech
 * @Chistua (hchieuthua@gmail.com)
 * @Copyright (C) 2019
 * @Createdate 21-03-2019 13:15
 */

if (!defined('NV_IS_FORM')) {
	die('Stop!!!');
}

$action = $nv_Request->get_string('action', 'post');
$resp = array(
  'status' => 0
);

if (!empty($action) && function_exists($action)) {
  $action();
}

echo json_encode($resp);
die();

function kiemtrakhachhang() {
  global $db, $nv_Request, $resp;

	$dienthoai = $nv_Request->get_string('dienthoai', 'post', '');
  $sql = "select * from pet_phc_customer where phone = '$dienthoai'";
  if (!empty($khachhang = $db->fetch($sql))) {
    $resp['ten'] = $khachhang['name'];
  }
  else $resp['ten'] = '';
  $resp['status'] = 1;
}

function datlich() {
  global $nv_Request, $resp;

	$dbconfig = [1 => [
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
		"branch" => 'pet_phc',
	], [
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
		"branch" => 'pet_phc',
	], [
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
		"branch" => 'pet_phc',
	]];
	$dulieu = $nv_Request->get_array('dulieu', 'post', '');
	$dbconfig = $dbconfig[$dulieu['chinhanh']];
	$db = new NukeViet\Core\Database($dbconfig);
	
	// kiểm tra số điện thoại
	$sql = "select * from ". $dbconfig['branch'] ."_customer where phone = '$dulieu[dienthoai]'";
	if (empty($db->fetch($sql))) {
		$sql = "insert into ". $dbconfig['branch'] ."_customer (name, phone) values('$dulieu[khachhang]', '$dulieu[dienthoai]')";
		$db->query($sql);		
	}

	$dichvu = implode(', ', $dulieu['dichvu']);
	$cumthoigian = explode(' ', $dulieu['thoigian']);
	$ngaythang = explode('/', $cumthoigian[0]);
	$thoigian = strtotime("$ngaythang[2]/$ngaythang[1]/$ngaythang[0] $cumthoigian[1]");

	$sql = "insert into ". $dbconfig['branch'] ."_spa_datlich (dienthoai, tenkhach, dichvu, ghichu, thoigian) values('$dulieu[dienthoai]', '$dulieu[khachhang]', '$dichvu', '$dulieu[ghichu]', $thoigian)";
	$db->query($sql);

	$resp['status'] = 1;
}