<?php

/**
 * @Project Petcoffee-tech
 * @Chistua (hchieuthua@gmail.com)
 * @Copyright (C) 2019
 * @Createdate 21-03-2019 13:15
 */

if (!defined('PREFIX')) {
  die('Stop!!!');
}

define('GIOIHAN', 12);
function chenfooter() {
  global $db, $nv_Request, $module_file;

  $xtpl = new XTemplate("footer.tpl", PATH);
  $xtpl->parse("main");
  return $xtpl->text();
}

function chenheader() {
  global $db, $nv_Request, $module_file;

  $xtpl = new XTemplate("header.tpl", PATH);
  $xtpl->parse("main");
  return $xtpl->text();
}

function thongtinchitiet() {
  global $db, $nv_Request, $module_file;

  $xtpl = new XTemplate("chitiet.tpl", PATH .'/main/');
  $id = $nv_Request->get_string('id', 'post', '0');
  
  $sql = "select b.ten, b.id as idthucung, b.micro, b.idgiong, b.idchu, b.hinhanh, c.ten as tenchu, c.diachi, c.dienthoai, d.ten as tenphuong from ". PREFIX ."_tiemphong_thucung b inner join ". PREFIX ."_tiemphong_chuho c on b.idchu = c.id inner join ". PREFIX ."_danhmuc_phuong d on c.idphuong = d.id where b.id = $id";
  $thucung = $db->fetch($sql);
  $phanquyen = kiemtraphanquyen();
  
  $hinhanh = kiemtrahinhanh($thucung['hinhanh']);
  $xtpl->assign('hinhanh', $hinhanh);
  $xtpl->assign('tenthucung', $thucung['ten']);
  $xtpl->assign('micro', $thucung['micro']);
  $xtpl->assign('giongloai', laytengiongloai($thucung['idgiong']));
  $xtpl->assign('tenchu', $thucung['tenchu']);
  if ($phanquyen == 2) {
    $xtpl->assign('diachi', $thucung['diachi']);
    $xtpl->assign('dienthoai', $thucung['dienthoai']);
    $xtpl->assign('tenphuong', $thucung['tenphuong']);
    $xtpl->parse("main.thongtin");
  }
  
  $sql = "select * from ". PREFIX ."_tiemphong where idthucung = $thucung[idthucung] order by thoigiantiem desc";
  $danhsach = $db->all($sql);
  
  foreach ($danhsach as $tiemphong) {
    $xtpl->assign('thoigian', date('d/m/Y', $tiemphong['thoigiantiem']));
    $xtpl->parse("main.row");
  }
  
  $xtpl->parse("main");
  return $xtpl->text();
}

function phantrang($trang, $tong, $gioihan, $chucnang = '') {
  $xtpl = new XTemplate('phantrang.tpl', PATH);
  $tongtrang = floor($tong / $gioihan) + (fmod($tong, $gioihan) ? 1 : 0);
  if (!$tongtrang) $tongtrang = 1;
  for ($i = 1; $i <= $tongtrang; $i++) {
    if ($trang == $i) $xtpl->assign('active', 'btn-info');
    else $xtpl->assign('active', 'btn-default');
    if (!empty($chucnang)) $xtpl->assign('chucnang', 'onclick="'. $chucnang .'('. $i .')"');
    else $xtpl->assign('chucnang', '');
    $xtpl->assign('trang', $i);
    $xtpl->parse('main.row');
  }
  $xtpl->parse('main');
  return $xtpl->text();
}