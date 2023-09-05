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

define('NV_IS_API', true); 

function duongdan($thumuc = "") {
  return NV_ROOTDIR ."/modules/api/template/$thumuc";
}

function kiemtraphanloai($nhom, $tenphanloai) {
  global $db;

  $sql = "select * from a_phanloai where nhom = '$nhom' and tenphanloai = '$tenphanloai'";
  if (empty($phanloai = $db->fetch($sql))) {
    $sql = "insert into a_phanloai (nhom, tenphanloai) values('$nhom', '$tenphanloai')";
    return $db->insertid($sql);
  }
  return $phanloai["id"];
}