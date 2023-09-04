<?php

if (!defined('NV_IS_API')) {
    exit('Stop!!!');
}

include NV_ROOTDIR . '/includes/header.php';
echo nv_site_theme($contents);
include NV_ROOTDIR . '/includes/footer.php';
