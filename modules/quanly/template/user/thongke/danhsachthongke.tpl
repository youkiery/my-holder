<!-- BEGIN: main -->
<table class="table table-bordered">
  <thead>
    <tr>
      <th> Tên thú cưng </th>
      <th> Giống loài </th>
      <th> Microchip </th>
      <th> Chủ hộ </th>
      <th> Điện thoại </th>
      <th> Địa chỉ </th>
      <th> Phường </th>
      <th> Tiêm phòng </th> 
      <th> Chức năng </th>
    </tr>
  </thead>
  <!-- BEGIN: thucung -->
  <tr>
    <td> {tenthucung} </td>
    <td> {giongloai} </td>
    <td> {micro} </td>
    <td> {chuho} </td>
    <td> {dienthoai} </td>
    <td> {diachi} </td>
    <td> {phuong} </td>
    <!-- BEGIN: chuatiem -->
    <td style="color: red"> Chưa tiêm phòng </td>
    <!-- END: chuatiem -->
    <!-- BEGIN: datiem -->
    <td style="color: green"> Đã tiêm phòng </td>
    <!-- END: datiem -->
    <td> <button class="btn btn-info btn-xs" onclick="chitiet({id})"> chi tiết </button> </td>
  </tr>
  <!-- END: thucung -->
  <!-- BEGIN: trong -->
  <tr>
    <td colspan="9" class="text-center"> Không có dữ liệu </td>
  </tr>
  <!-- END: trong -->
</table>
{phantrang}
<!-- END: main -->