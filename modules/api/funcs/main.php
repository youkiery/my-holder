<?php

if (!defined('NV_IS_API')) {
    exit('Stop!!!');
}

$xtpl = new XTemplate("main.tpl", NV_ROOTDIR ."/modules/api/template/");
$xtpl->parse("main");
$contents = $xtpl->text();

include NV_ROOTDIR . '/includes/header.php';
echo nv_site_theme($contents);
include NV_ROOTDIR . '/includes/footer.php';
