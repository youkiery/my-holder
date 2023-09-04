<?php

/**
 * @Project Petcoffee-tech
 * @Chistua (hchieuthua@gmail.com)
 * @Copyright (C) 2019
 * @Createdate 21-03-2019 13:15
 */

if (!defined('NV_IS_ADMIN_FORM')) {
	die('Stop!!!');
}

include (NV_ROOTDIR . "/includes/header.php");
echo nv_admin_theme("");
include (NV_ROOTDIR . "/includes/footer.php");
