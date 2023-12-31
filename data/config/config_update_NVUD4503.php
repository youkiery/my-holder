<?php

/**
 * NukeViet Content Management System
 * @version 4.x
 * @author VINADES.,JSC <contact@vinades.vn>
 * @copyright (C) 2009-2023 VINADES.,JSC. All rights reserved
 * @license GNU/GPL version 2 or any later version
 * @see https://github.com/nukeviet The NukeViet CMS GitHub project
 */

if(!defined( 'NV_IS_UPDATE')) {
    exit('Stop!!!');
}

$nv_update_config['updatelog'] = array (
  'step' => 2,
  'old_version' => '4.5.01',
  'file_list' => 
  array (
    0 => 'admin/authors/2step.php',
    1 => 'admin/authors/2step_zalo.php',
    2 => 'admin/authors/api-credentials.php',
    3 => 'admin/authors/api-roles.php',
    4 => 'admin/authors/module.php',
    5 => 'admin/index.php',
    6 => 'admin/language/check.php',
    7 => 'admin/modules/change_custom_name.php',
    8 => 'admin/modules/change_site_title.php',
    9 => 'admin/settings/admin.menu.php',
    10 => 'admin/settings/functions.php',
    11 => 'admin/settings/security.php',
    12 => 'admin/settings/system.php',
    13 => 'admin/upload/config.php',
    14 => 'admin/upload/thumbconfig.php',
    15 => 'admin/upload/uploadconfig.php',
    16 => 'admin/zalo/admin.menu.php',
    17 => 'admin/zalo/functions.php',
    18 => 'admin/zalo/index.html',
    19 => 'admin/zalo/main.php',
    20 => 'admin/zalo/settings.php',
    21 => 'api.php',
    22 => 'assets/css/rss.xsl',
    23 => 'assets/editors/ckeditor/LICENSE.md',
    24 => 'assets/editors/ckeditor/adapters/jquery.js',
    25 => 'assets/editors/ckeditor/build-config.js',
    26 => 'assets/editors/ckeditor/ckeditor.js',
    27 => 'assets/editors/ckeditor/contents.css',
    28 => 'assets/editors/ckeditor/lang/en.js',
    29 => 'assets/editors/ckeditor/lang/fr.js',
    30 => 'assets/editors/ckeditor/lang/vi.js',
    31 => 'assets/editors/ckeditor/nv.php',
    32 => 'assets/editors/ckeditor/plugins/balloonpanel/skins/kama/balloonpanel.css',
    33 => 'assets/editors/ckeditor/plugins/balloonpanel/skins/moono/balloonpanel.css',
    34 => 'assets/editors/ckeditor/plugins/balloonpanel/skins/moono-lisa/balloonpanel.css',
    35 => 'assets/editors/ckeditor/plugins/clipboard/dialogs/paste.js',
    36 => 'assets/editors/ckeditor/plugins/codesnippet/dialogs/codesnippet.js',
    37 => 'assets/editors/ckeditor/plugins/colordialog/dialogs/colordialog.css',
    38 => 'assets/editors/ckeditor/plugins/colordialog/dialogs/colordialog.js',
    39 => 'assets/editors/ckeditor/plugins/copyformatting/styles/copyformatting.css',
    40 => 'assets/editors/ckeditor/plugins/dialog/dialogDefinition.js',
    41 => 'assets/editors/ckeditor/plugins/eqneditor/dialogs/eqneditor.js',
    42 => 'assets/editors/ckeditor/plugins/eqneditor/dialogs/lang/en.js',
    43 => 'assets/editors/ckeditor/plugins/find/dialogs/find.js',
    44 => 'assets/editors/ckeditor/plugins/googledocs/dialogs/googledocs.css',
    45 => 'assets/editors/ckeditor/plugins/googledocs/dialogs/googledocs.js',
    46 => 'assets/editors/ckeditor/plugins/icons.png',
    47 => 'assets/editors/ckeditor/plugins/icons_hidpi.png',
    48 => 'assets/editors/ckeditor/plugins/iframe/dialogs/iframe.js',
    49 => 'assets/editors/ckeditor/plugins/image2/dialogs/image2.js',
    50 => 'assets/editors/ckeditor/plugins/link/dialogs/anchor.js',
    51 => 'assets/editors/ckeditor/plugins/link/dialogs/link.js',
    52 => 'assets/editors/ckeditor/plugins/liststyle/dialogs/liststyle.js',
    53 => 'assets/editors/ckeditor/plugins/pastefromword/filter/default.js',
    54 => 'assets/editors/ckeditor/plugins/pastetools/filter/common.js',
    55 => 'assets/editors/ckeditor/plugins/pastetools/filter/image.js',
    56 => 'assets/editors/ckeditor/plugins/placeholder/dialogs/placeholder.js',
    57 => 'assets/editors/ckeditor/plugins/smiley/dialogs/smiley.js',
    58 => 'assets/editors/ckeditor/plugins/specialchar/dialogs/lang/en.js',
    59 => 'assets/editors/ckeditor/plugins/specialchar/dialogs/lang/fr.js',
    60 => 'assets/editors/ckeditor/plugins/specialchar/dialogs/lang/vi.js',
    61 => 'assets/editors/ckeditor/plugins/specialchar/dialogs/specialchar.js',
    62 => 'assets/editors/ckeditor/plugins/table/dialogs/table.js',
    63 => 'assets/editors/ckeditor/plugins/tabletools/dialogs/tableCell.js',
    64 => 'assets/editors/ckeditor/plugins/templates/dialogs/templates.css',
    65 => 'assets/editors/ckeditor/plugins/templates/dialogs/templates.js',
    66 => 'assets/editors/ckeditor/plugins/templates/templatedefinition.js',
    67 => 'assets/editors/ckeditor/plugins/templates/templates/default.js',
    68 => 'assets/editors/ckeditor/plugins/video/dialogs/video.js',
    69 => 'assets/editors/ckeditor/plugins/video/images/placeholder.png',
    70 => 'assets/editors/ckeditor/skins/moono/dialog.css',
    71 => 'assets/editors/ckeditor/skins/moono/dialog_ie.css',
    72 => 'assets/editors/ckeditor/skins/moono/dialog_ie7.css',
    73 => 'assets/editors/ckeditor/skins/moono/dialog_ie8.css',
    74 => 'assets/editors/ckeditor/skins/moono/dialog_iequirks.css',
    75 => 'assets/editors/ckeditor/skins/moono/editor.css',
    76 => 'assets/editors/ckeditor/skins/moono/editor_gecko.css',
    77 => 'assets/editors/ckeditor/skins/moono/editor_ie.css',
    78 => 'assets/editors/ckeditor/skins/moono/editor_ie7.css',
    79 => 'assets/editors/ckeditor/skins/moono/editor_ie8.css',
    80 => 'assets/editors/ckeditor/skins/moono/editor_iequirks.css',
    81 => 'assets/editors/ckeditor/skins/moono/icons.png',
    82 => 'assets/editors/ckeditor/skins/moono/icons_hidpi.png',
    83 => 'assets/editors/ckeditor/styles.js',
    84 => 'assets/js/DOMPurify/purify.js',
    85 => 'assets/js/admin.js',
    86 => 'assets/js/chart/chart.esm.js',
    87 => 'assets/js/chart/chart.js',
    88 => 'assets/js/chart/chart.min.js',
    89 => 'assets/js/chart/chunks/helpers.segment.js',
    90 => 'assets/js/chart/helpers.esm.js',
    91 => 'assets/js/clipboard/clipboard.min.js',
    92 => 'assets/js/global.js',
    93 => 'assets/js/jquery/additional-methods.min.js',
    94 => 'assets/js/jquery/jquery.min.js',
    95 => 'assets/js/jquery/jquery.validate.min.js',
    96 => 'assets/js/jquery-ui/images/ui-icons_444444_256x240.png',
    97 => 'assets/js/jquery-ui/images/ui-icons_555555_256x240.png',
    98 => 'assets/js/jquery-ui/images/ui-icons_777620_256x240.png',
    99 => 'assets/js/jquery-ui/images/ui-icons_777777_256x240.png',
    100 => 'assets/js/jquery-ui/images/ui-icons_cc0000_256x240.png',
    101 => 'assets/js/jquery-ui/images/ui-icons_ffffff_256x240.png',
    102 => 'assets/js/jquery-ui/jquery-ui.min.css',
    103 => 'assets/js/jquery-ui/jquery-ui.min.js',
    104 => 'assets/js/jquery-ui/jquery-ui.structure.min.css',
    105 => 'assets/js/jquery-ui/jquery-ui.theme.min.css',
    106 => 'assets/js/language/jquery.validator-fr.js',
    107 => 'assets/js/language/jquery.validator-vi.js',
    108 => 'assets/js/plyr/index.html',
    109 => 'assets/js/plyr/plyr.css',
    110 => 'assets/js/plyr/plyr.polyfilled.js',
    111 => 'assets/js/plyr/plyr.svg',
    112 => 'assets/js/site.js',
    113 => 'assets/js/upload.js',
    114 => 'assets/tpl/rss.tpl',
    115 => 'composer.json',
    116 => 'data/certs/cacert.pem',
    117 => 'includes/action_mysql.php',
    118 => 'includes/api/ClearCache.php',
    119 => 'includes/constants.php',
    120 => 'includes/core/admin_access.php',
    121 => 'includes/core/admin_functions.php',
    122 => 'includes/core/admin_login.php',
    123 => 'includes/core/admin_login_zalo.php',
    124 => 'includes/core/admin_logout.php',
    125 => 'includes/core/filesystem_functions.php',
    126 => 'includes/core/is_admin.php',
    127 => 'includes/core/is_user.php',
    128 => 'includes/core/stat.php',
    129 => 'includes/core/theme_functions.php',
    130 => 'includes/core/user_functions.php',
    131 => 'includes/footer.php',
    132 => 'includes/functions.php',
    133 => 'includes/ini/mime.ini',
    134 => 'includes/ini.php',
    135 => 'includes/language/en/admin_authors.php',
    136 => 'includes/language/en/admin_global.php',
    137 => 'includes/language/en/admin_settings.php',
    138 => 'includes/language/en/admin_zalo.php',
    139 => 'includes/language/en/global.php',
    140 => 'includes/language/en/install.php',
    141 => 'includes/language/fr/admin_authors.php',
    142 => 'includes/language/fr/admin_global.php',
    143 => 'includes/language/fr/admin_settings.php',
    144 => 'includes/language/fr/admin_zalo.php',
    145 => 'includes/language/fr/global.php',
    146 => 'includes/language/fr/install.php',
    147 => 'includes/language/vi/admin_authors.php',
    148 => 'includes/language/vi/admin_global.php',
    149 => 'includes/language/vi/admin_settings.php',
    150 => 'includes/language/vi/admin_zalo.php',
    151 => 'includes/language/vi/functions.php',
    152 => 'includes/language/vi/global.php',
    153 => 'includes/language/vi/install.php',
    154 => 'includes/mainfile.php',
    155 => 'includes/plugin/qrcode.php',
    156 => 'includes/utf8/iconv_string_handler.php',
    157 => 'includes/utf8/mb_string_handler.php',
    158 => 'includes/utf8/php_string_handler.php',
    159 => 'includes/xtemplate.class.php',
    160 => 'index.php',
    161 => 'install/action_mysql.php',
    162 => 'install/config.php',
    163 => 'install/data.php',
    164 => 'install/data_by_lang.php',
    165 => 'install/default.htaccess.txt',
    166 => 'install/index.php',
    167 => 'install/ini.php',
    168 => 'install/template.php',
    169 => 'install/tpl/step1.tpl',
    170 => 'install/tpl/step2.tpl',
    171 => 'install/tpl/step3.tpl',
    172 => 'install/tpl/step4.tpl',
    173 => 'install/tpl/step5.tpl',
    174 => 'install/tpl/step6.tpl',
    175 => 'install/tpl/step7.tpl',
    176 => 'install/tpl/step8.tpl',
    177 => 'install/tpl/theme.tpl',
    178 => 'install/tpl/updatetheme.tpl',
    179 => 'install/update.php',
    180 => 'modules/banners/action_mysql.php',
    181 => 'modules/banners/admin/add_banner.php',
    182 => 'modules/banners/admin/edit_banner.php',
    183 => 'modules/banners/admin/info_plan.php',
    184 => 'modules/banners/admin/main.php',
    185 => 'modules/banners/admin/show_list_stat.php',
    186 => 'modules/banners/admin.functions.php',
    187 => 'modules/banners/admin.menu.php',
    188 => 'modules/banners/funcs/addads.php',
    189 => 'modules/banners/funcs/click.php',
    190 => 'modules/banners/funcs/viewmap.php',
    191 => 'modules/banners/language/admin_en.php',
    192 => 'modules/banners/language/admin_fr.php',
    193 => 'modules/banners/language/admin_vi.php',
    194 => 'modules/banners/language/en.php',
    195 => 'modules/banners/language/fr.php',
    196 => 'modules/banners/language/vi.php',
    197 => 'modules/banners/version.php',
    198 => 'modules/comment/action_mysql.php',
    199 => 'modules/comment/admin/config.php',
    200 => 'modules/comment/admin/edit.php',
    201 => 'modules/comment/comment.php',
    202 => 'modules/comment/funcs/post.php',
    203 => 'modules/comment/language/admin_en.php',
    204 => 'modules/comment/language/admin_fr.php',
    205 => 'modules/comment/language/admin_vi.php',
    206 => 'modules/comment/version.php',
    207 => 'modules/contact/admin/config.php',
    208 => 'modules/contact/admin/supporter-content.php',
    209 => 'modules/contact/funcs/main.php',
    210 => 'modules/contact/language/admin_en.php',
    211 => 'modules/contact/language/admin_fr.php',
    212 => 'modules/contact/language/admin_vi.php',
    213 => 'modules/contact/theme.php',
    214 => 'modules/contact/version.php',
    215 => 'modules/feeds/version.php',
    216 => 'modules/freecontent/admin/list.php',
    217 => 'modules/freecontent/admin/manager.php',
    218 => 'modules/freecontent/version.php',
    219 => 'modules/menu/admin/rows.php',
    220 => 'modules/menu/blocks/global.bootstrap.php',
    221 => 'modules/menu/menu_blocks.php',
    222 => 'modules/menu/version.php',
    223 => 'modules/news/Log/Log.php',
    224 => 'modules/news/Log/index.html',
    225 => 'modules/news/Shared/Logs.php',
    226 => 'modules/news/Shared/Posts.php',
    227 => 'modules/news/Shared/index.html',
    228 => 'modules/news/action_mysql.php',
    229 => 'modules/news/admin/admins.php',
    230 => 'modules/news/admin/cat.php',
    231 => 'modules/news/admin/change_cat.php',
    232 => 'modules/news/admin/content.php',
    233 => 'modules/news/admin/declined.php',
    234 => 'modules/news/admin/main.php',
    235 => 'modules/news/admin/move.php',
    236 => 'modules/news/admin/publtime.php',
    237 => 'modules/news/admin/re-published.php',
    238 => 'modules/news/admin/setting.php',
    239 => 'modules/news/admin/stop.php',
    240 => 'modules/news/admin/voices.php',
    241 => 'modules/news/admin/waiting.php',
    242 => 'modules/news/admin.functions.php',
    243 => 'modules/news/admin.menu.php',
    244 => 'modules/news/funcs/content.php',
    245 => 'modules/news/funcs/detail.php',
    246 => 'modules/news/funcs/groups.php',
    247 => 'modules/news/funcs/main.php',
    248 => 'modules/news/funcs/search.php',
    249 => 'modules/news/funcs/sendmail.php',
    250 => 'modules/news/funcs/tag.php',
    251 => 'modules/news/funcs/topic.php',
    252 => 'modules/news/funcs/viewcat.php',
    253 => 'modules/news/functions.php',
    254 => 'modules/news/global.functions.php',
    255 => 'modules/news/language/admin_en.php',
    256 => 'modules/news/language/admin_fr.php',
    257 => 'modules/news/language/admin_vi.php',
    258 => 'modules/news/language/en.php',
    259 => 'modules/news/language/fr.php',
    260 => 'modules/news/language/vi.php',
    261 => 'modules/news/rssdata.php',
    262 => 'modules/news/theme.php',
    263 => 'modules/news/version.php',
    264 => 'modules/page/action_mysql.php',
    265 => 'modules/page/admin/config.php',
    266 => 'modules/page/funcs/main.php',
    267 => 'modules/page/version.php',
    268 => 'modules/seek/funcs/main.php',
    269 => 'modules/seek/functions.php',
    270 => 'modules/seek/version.php',
    271 => 'modules/statistics/admin/cleardata.php',
    272 => 'modules/statistics/funcs/allbots.php',
    273 => 'modules/statistics/funcs/allbrowsers.php',
    274 => 'modules/statistics/funcs/allcountries.php',
    275 => 'modules/statistics/funcs/allos.php',
    276 => 'modules/statistics/funcs/allreferers.php',
    277 => 'modules/statistics/version.php',
    278 => 'modules/two-step-verification/funcs/main.php',
    279 => 'modules/two-step-verification/funcs/setup.php',
    280 => 'modules/two-step-verification/version.php',
    281 => 'modules/users/action_mysql.php',
    282 => 'modules/users/admin/config.php',
    283 => 'modules/users/admin/config_facebook.php',
    284 => 'modules/users/admin/config_google.php',
    285 => 'modules/users/admin/config_single-sign-on.php',
    286 => 'modules/users/admin/edit.php',
    287 => 'modules/users/admin/edit_2step.php',
    288 => 'modules/users/admin/edit_oauth.php',
    289 => 'modules/users/admin/editcensor.php',
    290 => 'modules/users/admin/fields.php',
    291 => 'modules/users/admin/getuserid.php',
    292 => 'modules/users/admin/groups.php',
    293 => 'modules/users/admin/main.php',
    294 => 'modules/users/admin/user_add.php',
    295 => 'modules/users/admin/user_waiting.php',
    296 => 'modules/users/admin/user_waiting_remail.php',
    297 => 'modules/users/blocks/global.login.php',
    298 => 'modules/users/funcs/active.php',
    299 => 'modules/users/funcs/avatar.php',
    300 => 'modules/users/funcs/editinfo.php',
    301 => 'modules/users/funcs/groups.php',
    302 => 'modules/users/funcs/login.php',
    303 => 'modules/users/funcs/logout.php',
    304 => 'modules/users/funcs/lostactivelink.php',
    305 => 'modules/users/funcs/lostpass.php',
    306 => 'modules/users/funcs/memberlist.php',
    307 => 'modules/users/funcs/register.php',
    308 => 'modules/users/functions.php',
    309 => 'modules/users/global.functions.php',
    310 => 'modules/users/language/admin_en.php',
    311 => 'modules/users/language/admin_fr.php',
    312 => 'modules/users/language/admin_vi.php',
    313 => 'modules/users/language/en.php',
    314 => 'modules/users/language/fr.php',
    315 => 'modules/users/language/vi.php',
    316 => 'modules/users/login/oauth-zalo.php',
    317 => 'modules/users/theme.php',
    318 => 'modules/users/version.php',
    319 => 'modules/voting/admin/content.php',
    320 => 'modules/voting/admin/setting.php',
    321 => 'modules/voting/blocks/global.voting.php',
    322 => 'modules/voting/blocks/global.voting_random.php',
    323 => 'modules/voting/funcs/main.php',
    324 => 'modules/voting/language/admin_en.php',
    325 => 'modules/voting/language/admin_fr.php',
    326 => 'modules/voting/language/admin_vi.php',
    327 => 'modules/voting/version.php',
    328 => 'robots.php',
    329 => 'themes/admin_default/css/authors.css',
    330 => 'themes/admin_default/css/banners.css',
    331 => 'themes/admin_default/css/login.css',
    332 => 'themes/admin_default/css/news.css',
    333 => 'themes/admin_default/css/style.css',
    334 => 'themes/admin_default/js/banners.js',
    335 => 'themes/admin_default/js/main.js',
    336 => 'themes/admin_default/js/news.js',
    337 => 'themes/admin_default/modules/authors/2step.tpl',
    338 => 'themes/admin_default/modules/authors/api-credentials.tpl',
    339 => 'themes/admin_default/modules/authors/api-roles.tpl',
    340 => 'themes/admin_default/modules/banners/b_list.tpl',
    341 => 'themes/admin_default/modules/banners/info_plan.tpl',
    342 => 'themes/admin_default/modules/banners/main.tpl',
    343 => 'themes/admin_default/modules/comment/config.tpl',
    344 => 'themes/admin_default/modules/comment/edit.tpl',
    345 => 'themes/admin_default/modules/contact/config.tpl',
    346 => 'themes/admin_default/modules/contact/supporter-content.tpl',
    347 => 'themes/admin_default/modules/language/check.tpl',
    348 => 'themes/admin_default/modules/news/admin.tpl',
    349 => 'themes/admin_default/modules/news/blockcat_lists.tpl',
    350 => 'themes/admin_default/modules/news/content.tpl',
    351 => 'themes/admin_default/modules/news/main.tpl',
    352 => 'themes/admin_default/modules/news/settings.tpl',
    353 => 'themes/admin_default/modules/news/sources_list.tpl',
    354 => 'themes/admin_default/modules/news/topics_list.tpl',
    355 => 'themes/admin_default/modules/news/voices.tpl',
    356 => 'themes/admin_default/modules/page/config.tpl',
    357 => 'themes/admin_default/modules/seotools/metatags.tpl',
    358 => 'themes/admin_default/modules/settings/security.tpl',
    359 => 'themes/admin_default/modules/settings/system.tpl',
    360 => 'themes/admin_default/modules/statistics/cleardata.tpl',
    361 => 'themes/admin_default/modules/upload/config.tpl',
    362 => 'themes/admin_default/modules/upload/main.tpl',
    363 => 'themes/admin_default/modules/upload/thumbconfig.tpl',
    364 => 'themes/admin_default/modules/upload/uploadconfig.tpl',
    365 => 'themes/admin_default/modules/users/config.tpl',
    366 => 'themes/admin_default/modules/users/config_oauth.tpl',
    367 => 'themes/admin_default/modules/users/config_single-sign-on.tpl',
    368 => 'themes/admin_default/modules/users/fields.tpl',
    369 => 'themes/admin_default/modules/users/getuserid.tpl',
    370 => 'themes/admin_default/modules/users/groups.tpl',
    371 => 'themes/admin_default/modules/users/main.tpl',
    372 => 'themes/admin_default/modules/users/user_oauth.tpl',
    373 => 'themes/admin_default/modules/voting/content.tpl',
    374 => 'themes/admin_default/modules/voting/setting.tpl',
    375 => 'themes/admin_default/modules/zalo/index.html',
    376 => 'themes/admin_default/modules/zalo/settings.tpl',
    377 => 'themes/admin_default/system/header.tpl',
    378 => 'themes/admin_default/system/login.tpl',
    379 => 'themes/admin_default/theme.php',
    380 => 'themes/default/blocks/global.QR_code.php',
    381 => 'themes/default/blocks/global.QR_code.tpl',
    382 => 'themes/default/config.ini',
    383 => 'themes/default/config.php',
    384 => 'themes/default/css/news.css',
    385 => 'themes/default/css/users.css',
    386 => 'themes/default/images/users/zalo.png',
    387 => 'themes/default/js/main.js',
    388 => 'themes/default/js/news.js',
    389 => 'themes/default/js/users.js',
    390 => 'themes/default/modules/menu/global.bootstrap.tpl',
    391 => 'themes/default/modules/news/content.tpl',
    392 => 'themes/default/modules/news/detail.tpl',
    393 => 'themes/default/modules/page/main.tpl',
    394 => 'themes/default/modules/statistics/main.tpl',
    395 => 'themes/default/modules/users/info.tpl',
    396 => 'themes/default/modules/users/openid_login.tpl',
    397 => 'themes/default/system/config.tpl',
    398 => 'themes/mobile_default/blocks/global.QR_code.php',
    399 => 'themes/mobile_default/blocks/global.QR_code.tpl',
    400 => 'themes/mobile_default/config.ini',
    401 => 'themes/mobile_default/config.php',
    402 => 'themes/mobile_default/css/news.css',
    403 => 'themes/mobile_default/css/users.css',
    404 => 'themes/mobile_default/images/users/zalo.png',
    405 => 'themes/mobile_default/js/main.js',
    406 => 'themes/mobile_default/modules/news/detail.tpl',
    407 => 'themes/mobile_default/modules/news/theme.php',
    408 => 'themes/mobile_default/modules/users/info.tpl',
    409 => 'themes/mobile_default/modules/users/openid_login.tpl',
    410 => 'themes/mobile_default/system/config.tpl',
    411 => 'vendor/autoload.php',
    412 => 'vendor/composer/ClassLoader.php',
    413 => 'vendor/composer/InstalledVersions.php',
    414 => 'vendor/composer/LICENSE',
    415 => 'vendor/composer/autoload_classmap.php',
    416 => 'vendor/composer/autoload_psr4.php',
    417 => 'vendor/composer/autoload_real.php',
    418 => 'vendor/composer/autoload_static.php',
    419 => 'vendor/composer/installed.json',
    420 => 'vendor/composer/installed.php',
    421 => 'vendor/composer/platform_check.php',
    422 => 'vendor/phpmailer/phpmailer/VERSION',
    423 => 'vendor/phpmailer/phpmailer/get_oauth_token.php',
    424 => 'vendor/phpmailer/phpmailer/language/phpmailer.lang-fr.php',
    425 => 'vendor/phpmailer/phpmailer/language/phpmailer.lang-zh.php',
    426 => 'vendor/phpmailer/phpmailer/src/Exception.php',
    427 => 'vendor/phpmailer/phpmailer/src/OAuth.php',
    428 => 'vendor/phpmailer/phpmailer/src/OAuthTokenProvider.php',
    429 => 'vendor/phpmailer/phpmailer/src/PHPMailer.php',
    430 => 'vendor/phpmailer/phpmailer/src/POP3.php',
    431 => 'vendor/phpmailer/phpmailer/src/SMTP.php',
    432 => 'vendor/symfony/polyfill-mbstring/Mbstring.php',
    433 => 'vendor/symfony/polyfill-mbstring/Resources/unidata/lowerCase.php',
    434 => 'vendor/symfony/polyfill-mbstring/Resources/unidata/upperCase.php',
    435 => 'vendor/symfony/polyfill-mbstring/bootstrap.php',
    436 => 'vendor/tecnickcom/tc-lib-barcode/LICENSE',
    437 => 'vendor/tecnickcom/tc-lib-barcode/src/Barcode.php',
    438 => 'vendor/tecnickcom/tc-lib-barcode/src/Exception.php',
    439 => 'vendor/tecnickcom/tc-lib-barcode/src/Type/Convert.php',
    440 => 'vendor/tecnickcom/tc-lib-barcode/src/Type/Linear/Codabar.php',
    441 => 'vendor/tecnickcom/tc-lib-barcode/src/Type/Linear/CodeNineThree.php',
    442 => 'vendor/tecnickcom/tc-lib-barcode/src/Type/Linear/CodeOneOne.php',
    443 => 'vendor/tecnickcom/tc-lib-barcode/src/Type/Linear/CodeOneTwoEight/CodeOneTwoEightA.php',
    444 => 'vendor/tecnickcom/tc-lib-barcode/src/Type/Linear/CodeOneTwoEight/CodeOneTwoEightB.php',
    445 => 'vendor/tecnickcom/tc-lib-barcode/src/Type/Linear/CodeOneTwoEight/CodeOneTwoEightC.php',
    446 => 'vendor/tecnickcom/tc-lib-barcode/src/Type/Linear/CodeOneTwoEight/Process.php',
    447 => 'vendor/tecnickcom/tc-lib-barcode/src/Type/Linear/CodeOneTwoEight.php',
    448 => 'vendor/tecnickcom/tc-lib-barcode/src/Type/Linear/CodeThreeNine.php',
    449 => 'vendor/tecnickcom/tc-lib-barcode/src/Type/Linear/CodeThreeNineCheck.php',
    450 => 'vendor/tecnickcom/tc-lib-barcode/src/Type/Linear/CodeThreeNineExt.php',
    451 => 'vendor/tecnickcom/tc-lib-barcode/src/Type/Linear/CodeThreeNineExtCheck.php',
    452 => 'vendor/tecnickcom/tc-lib-barcode/src/Type/Linear/EanEight.php',
    453 => 'vendor/tecnickcom/tc-lib-barcode/src/Type/Linear/EanFive.php',
    454 => 'vendor/tecnickcom/tc-lib-barcode/src/Type/Linear/EanOneThree.php',
    455 => 'vendor/tecnickcom/tc-lib-barcode/src/Type/Linear/EanTwo.php',
    456 => 'vendor/tecnickcom/tc-lib-barcode/src/Type/Linear/Imb.php',
    457 => 'vendor/tecnickcom/tc-lib-barcode/src/Type/Linear/ImbPre.php',
    458 => 'vendor/tecnickcom/tc-lib-barcode/src/Type/Linear/InterleavedTwoOfFive.php',
    459 => 'vendor/tecnickcom/tc-lib-barcode/src/Type/Linear/InterleavedTwoOfFiveCheck.php',
    460 => 'vendor/tecnickcom/tc-lib-barcode/src/Type/Linear/KlantIndex.php',
    461 => 'vendor/tecnickcom/tc-lib-barcode/src/Type/Linear/Msi.php',
    462 => 'vendor/tecnickcom/tc-lib-barcode/src/Type/Linear/MsiCheck.php',
    463 => 'vendor/tecnickcom/tc-lib-barcode/src/Type/Linear/Pharma.php',
    464 => 'vendor/tecnickcom/tc-lib-barcode/src/Type/Linear/PharmaTwoTracks.php',
    465 => 'vendor/tecnickcom/tc-lib-barcode/src/Type/Linear/Planet.php',
    466 => 'vendor/tecnickcom/tc-lib-barcode/src/Type/Linear/Postnet.php',
    467 => 'vendor/tecnickcom/tc-lib-barcode/src/Type/Linear/Raw.php',
    468 => 'vendor/tecnickcom/tc-lib-barcode/src/Type/Linear/RoyalMailFourCc.php',
    469 => 'vendor/tecnickcom/tc-lib-barcode/src/Type/Linear/StandardTwoOfFive.php',
    470 => 'vendor/tecnickcom/tc-lib-barcode/src/Type/Linear/StandardTwoOfFiveCheck.php',
    471 => 'vendor/tecnickcom/tc-lib-barcode/src/Type/Linear/UpcA.php',
    472 => 'vendor/tecnickcom/tc-lib-barcode/src/Type/Linear/UpcE.php',
    473 => 'vendor/tecnickcom/tc-lib-barcode/src/Type/Linear.php',
    474 => 'vendor/tecnickcom/tc-lib-barcode/src/Type/Raw.php',
    475 => 'vendor/tecnickcom/tc-lib-barcode/src/Type/Square/Datamatrix/Data.php',
    476 => 'vendor/tecnickcom/tc-lib-barcode/src/Type/Square/Datamatrix/Encode.php',
    477 => 'vendor/tecnickcom/tc-lib-barcode/src/Type/Square/Datamatrix/EncodeTxt.php',
    478 => 'vendor/tecnickcom/tc-lib-barcode/src/Type/Square/Datamatrix/ErrorCorrection.php',
    479 => 'vendor/tecnickcom/tc-lib-barcode/src/Type/Square/Datamatrix/Modes.php',
    480 => 'vendor/tecnickcom/tc-lib-barcode/src/Type/Square/Datamatrix/Placement.php',
    481 => 'vendor/tecnickcom/tc-lib-barcode/src/Type/Square/Datamatrix/Steps.php',
    482 => 'vendor/tecnickcom/tc-lib-barcode/src/Type/Square/Datamatrix.php',
    483 => 'vendor/tecnickcom/tc-lib-barcode/src/Type/Square/PdfFourOneSeven/Compaction.php',
    484 => 'vendor/tecnickcom/tc-lib-barcode/src/Type/Square/PdfFourOneSeven/Data.php',
    485 => 'vendor/tecnickcom/tc-lib-barcode/src/Type/Square/PdfFourOneSeven/Sequence.php',
    486 => 'vendor/tecnickcom/tc-lib-barcode/src/Type/Square/PdfFourOneSeven.php',
    487 => 'vendor/tecnickcom/tc-lib-barcode/src/Type/Square/QrCode/ByteStream.php',
    488 => 'vendor/tecnickcom/tc-lib-barcode/src/Type/Square/QrCode/Data.php',
    489 => 'vendor/tecnickcom/tc-lib-barcode/src/Type/Square/QrCode/Encode.php',
    490 => 'vendor/tecnickcom/tc-lib-barcode/src/Type/Square/QrCode/Encoder.php',
    491 => 'vendor/tecnickcom/tc-lib-barcode/src/Type/Square/QrCode/EncodingMode.php',
    492 => 'vendor/tecnickcom/tc-lib-barcode/src/Type/Square/QrCode/Estimate.php',
    493 => 'vendor/tecnickcom/tc-lib-barcode/src/Type/Square/QrCode/Init.php',
    494 => 'vendor/tecnickcom/tc-lib-barcode/src/Type/Square/QrCode/InputItem.php',
    495 => 'vendor/tecnickcom/tc-lib-barcode/src/Type/Square/QrCode/Mask.php',
    496 => 'vendor/tecnickcom/tc-lib-barcode/src/Type/Square/QrCode/MaskNum.php',
    497 => 'vendor/tecnickcom/tc-lib-barcode/src/Type/Square/QrCode/Spec.php',
    498 => 'vendor/tecnickcom/tc-lib-barcode/src/Type/Square/QrCode/SpecRs.php',
    499 => 'vendor/tecnickcom/tc-lib-barcode/src/Type/Square/QrCode/Split.php',
    500 => 'vendor/tecnickcom/tc-lib-barcode/src/Type/Square/QrCode.php',
    501 => 'vendor/tecnickcom/tc-lib-barcode/src/Type/Square/Raw.php',
    502 => 'vendor/tecnickcom/tc-lib-barcode/src/Type/Square.php',
    503 => 'vendor/tecnickcom/tc-lib-barcode/src/Type.php',
    504 => 'vendor/tecnickcom/tc-lib-color/LICENSE',
    505 => 'vendor/tecnickcom/tc-lib-color/src/Css.php',
    506 => 'vendor/tecnickcom/tc-lib-color/src/Exception.php',
    507 => 'vendor/tecnickcom/tc-lib-color/src/Model/Cmyk.php',
    508 => 'vendor/tecnickcom/tc-lib-color/src/Model/Gray.php',
    509 => 'vendor/tecnickcom/tc-lib-color/src/Model/Hsl.php',
    510 => 'vendor/tecnickcom/tc-lib-color/src/Model/Rgb.php',
    511 => 'vendor/tecnickcom/tc-lib-color/src/Model/Template.php',
    512 => 'vendor/tecnickcom/tc-lib-color/src/Model.php',
    513 => 'vendor/tecnickcom/tc-lib-color/src/Pdf.php',
    514 => 'vendor/tecnickcom/tc-lib-color/src/Spot.php',
    515 => 'vendor/tecnickcom/tc-lib-color/src/Web.php',
    516 => 'vendor/vinades/nukeviet/Api/Api.php',
    517 => 'vendor/vinades/nukeviet/Api/ApiResult.php',
    518 => 'vendor/vinades/nukeviet/Api/DoApi.php',
    519 => 'vendor/vinades/nukeviet/Cache/Redis.php',
    520 => 'vendor/vinades/nukeviet/Core/Blocker.php',
    521 => 'vendor/vinades/nukeviet/Core/Database.php',
    522 => 'vendor/vinades/nukeviet/Core/Error.php',
    523 => 'vendor/vinades/nukeviet/Core/Optimizer.php',
    524 => 'vendor/vinades/nukeviet/Core/Request.php',
    525 => 'vendor/vinades/nukeviet/Core/Server.php',
    526 => 'vendor/vinades/nukeviet/Core/User.php',
    527 => 'vendor/vinades/nukeviet/Facebook/InstantArticles.php',
    528 => 'vendor/vinades/nukeviet/Files/Download.php',
    529 => 'vendor/vinades/nukeviet/Files/Image.php',
    530 => 'vendor/vinades/nukeviet/Files/Upload.php',
    531 => 'vendor/vinades/nukeviet/Ftp/Ftp.php',
    532 => 'vendor/vinades/nukeviet/Http/Curl.php',
    533 => 'vendor/vinades/nukeviet/Http/Encoding.php',
    534 => 'vendor/vinades/nukeviet/Http/Http.php',
    535 => 'vendor/vinades/nukeviet/Http/Streams.php',
    536 => 'vendor/vinades/nukeviet/Seo/BotManager.php',
    537 => 'vendor/vinades/nukeviet/Xml/Array2XML.php',
    538 => 'vendor/vinades/nukeviet/Zalo/Zalo.php',
  ),
  'data_list' => 
  array (
    'nv_up_modnews4502' => 
    array (
      'langkey' => 'nv_up_modnews4502',
      'require' => 2,
    ),
    'nv_up_sys4502' => 
    array (
      'langkey' => 'nv_up_sys4502',
      'require' => 2,
    ),
    'nv_up_modnews4503' => 
    array (
      'langkey' => 'nv_up_modnews4503',
      'require' => 2,
    ),
    'nv_up_finish' => 
    array (
      'langkey' => 'nv_up_finish',
      'require' => 2,
    ),
  ),
  'substep' => 4,
  'data_passed' => 
  array (
    'nv_up_modnews4502' => 1,
    'nv_up_sys4502' => 1,
    'nv_up_modnews4503' => 1,
    'nv_up_finish' => 1,
  ),
  'is_start_up_db' => 1688980274,
  'starttime' => 1688980274,
  'is_start_move_file' => 1688980297,
);

