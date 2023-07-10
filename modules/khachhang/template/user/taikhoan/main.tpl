<!-- BEGIN: main -->
{header}
<div class="form-group input-group">
  <div class="input-group-addon"> <span class="fa fa-user"></span> </div>
  <input class="form-control" id="taikhoan" placeholder="Số điện thoại (*)">
</div>
<div class="form-group input-group dangky" style="display: none;">
  <div class="input-group-addon"> <span class="fa fa-address-card"></span> </div>
  <input class="form-control" id="hoten" placeholder="Họ tên (*)">
</div>
<div class="form-group input-group dangky" style="display: none;">
  <div class="input-group-addon"> <span class="fa fa-bandcamp"></span> </div>
  <input class="form-control" id="diachi" placeholder="Địa chỉ">
</div>
<div class="form-group input-group">
  <div class="input-group-addon"> <span class="fa fa-lock"></span> </div>
  <input class="form-control" type="password" id="matkhau" placeholder="Mật khẩu đăng nhập (*)">
</div>
<div class="form-group input-group dangky" style="display: none;">
  <div class="input-group-addon"> <span class="fa fa-lock"></span> </div>
  <input class="form-control" type="password" id="xacnhanmatkhau" placeholder="Xác nhận mật khẩu (*)">
</div>
<div class="text-center">
  <div class="form-group">
    <button class="btn btn-info dangnhap" onclick="xacnhandangnhap()">
      Đăng nhập
    </button>
    <button class="btn btn-info dangky" style="display: none;" onclick="xacnhandangky()">
      Đăng ký
    </button>
  </div>
  <button class="btn btn-default"> <a href="/">Trang chủ</a> </button>
  <button class="btn btn-info dangnhap" onclick="dangky()"> Đăng ký </button>
  <button class="btn btn-info dangky" onclick="dangnhap()" style="display: none;"> Đăng nhập </button>
</div>
{footer}
<script>
  $(document).ready(() => {
    vhttp.alert()
  })

  function dangky() {
    $('.dangky').show()
    $('.dangnhap').hide()
  }
  function dangnhap() {
    $('.dangnhap').show()
    $('.dangky').hide()
  }

  function xacnhandangnhap() {
    var dulieu = {
      taikhoan: $("#taikhoan").val(),
      matkhau: $("#matkhau").val(),
    }
    if (!dulieu.taikhoan.length) vhttp.notify("Không được để trống số diện thoại đăng nhập")
    else if (!dulieu.matkhau.length) vhttp.notify("Không được để trống mật khẩu đăng nhập")
    else {
      vhttp.post("/khachhang/api/", {
        action: "dangnhap",
        dulieu: dulieu
      }).then(phanhoi => {
        window.reload()
      })
    }
  }

  function xacnhandangnhap() {
    var dulieu = {
      taikhoan: $("#taikhoan").val(),
      hoten: $("#hoten").val(),
      diachi: $("#diachi").val(),
      matkhau: $("#matkhau").val(),
      xacnhanmatkhau: $("#xacnhanmatkhau").val(),
    }
    if (!dulieu.taikhoan.length) vhttp.notify("Không được để trống số diện thoại đăng nhập")
    else if (!dulieu.matkhau.length) vhttp.notify("Không được để trống mật khẩu đăng nhập")
    else if (!dulieu.hoten.length) vhttp.notify("Không được để trống họ tên")
    else if (dulieu.matkhau !== dulieu.xacnhanmatkhau) vhttp.notify("Mật khẩu xác nhận không trùng nhau")
    else {
      vhttp.post("/khachhang/api/", {
        action: "dangky",
        dulieu: dulieu
      }).then(phanhoi => {
        window.reload()
      })
    }
  }
</script>
<!-- END: main -->