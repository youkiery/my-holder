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

$xtpl = new XTemplate("main.tpl", PATH .'/taikhoan/');
$xtpl->assign("header", chenheader());
$xtpl->assign("footer", chenfooter());
$xtpl->assign("ngaymai", date('d/m/Y 07:00', time() + 60 * 60 * 24));
$xtpl->parse("main");
$contents = $xtpl->text();

include NV_ROOTDIR . '/includes/header.php';
echo nv_site_theme($contents);
include NV_ROOTDIR . '/includes/footer.php';

