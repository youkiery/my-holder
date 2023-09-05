<?php

if (!defined('NV_IS_API')) {
    exit('Stop!!!');
}

$action = $nv_Request->get_string("action", "post", "");
$phanhoi = [ "status" => 0 ];
if (!empty($action)) {
  if (function_exists($action)) $action();
}

function luuchude() {
  global $db, $phanhoi, $nv_Request;

  $dulieu = $nv_Request->get_array("dulieu", "post", "");

  $idphanloai = kiemtraphanloai("chude", $dulieu["phanloai"]);
  $sql = "insert into a_chude(idphanloai, tieude, noidung) values($idphanloai, '$dulieu[tieude]', '$dulieu[noidung]')";
  $db->query($sql);

  $phanhoi['messenger'] = "Đã thêm phân loại";
  $phanhoi['status'] = 1;
}

function timkiem() {
  global $db, $phanhoi, $nv_Request;

  $tukhoa = $nv_Request->get_string("tukhoa", "post", "");

  $sql = "select a.id, a.tieude, a.noidung, b.tenphanloai from a_chude a inner join a_phanloai b on a.idphanloai = b.id where a.tieude like '%$tukhoa%' or b.tenphanloai like '%$tukhoa%' order by id desc limit 10";
  $danhsach = $db->all($sql);

  $xtpl = new XTemplate("danhsach.tpl", NV_ROOTDIR ."/modules/api/template/");

  foreach ($danhsach as $chude) {
    $xtpl->assign("tieude", $chude["tieude"]);
    $xtpl->assign("phanloai", $chude["tenphanloai"]);
    $xtpl->assign("noidung", str_replace("<br />", "\n", $chude["noidung"]));
    $xtpl->parse("main.chude");
  }

  if (!count($danhsach)) $xtpl->parse("main.khongchude");

  $xtpl->parse("main");

  $phanhoi['danhsach'] = $xtpl->text();
  $phanhoi['status'] = 1;
}

echo json_encode($phanhoi);