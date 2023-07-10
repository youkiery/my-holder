<!-- BEGIN: main -->
<style>
  .taman {
    display: none;
  }

  .nhapdienthoai {
    background: linear-gradient(180deg, #1c5, #284);
    width: 400px;
    margin: auto;
    height: 220px;
    padding: 10px;
    border-radius: 20px;
  }
</style>

<!-- <div id="tiendo-1">
  <form class="nhapdienthoai" required onsubmit="return kiemtradienthoai(event)">
    <div style="color: white; font-size: 1.5em;">
      Đặt lịch giữ chỗ ngay <br>
      Không cần thanh toán trước!
    </div>
    <div class="form-group">
      <input style="width: 100%;" type="number" class="form-control" id="dienthoai"
        placeholder="Xin hãy nhập số điện thoại" onkeyup="kiemtrakhachhang()">
    </div>
    <div class="form-group">
      <input class="form-control" id="tenkhachhang" placeholder="Tên khách">
    </div>
    <button class="btn btn-info"> Tiếp tục </button>
  </form>
</div> -->

<!-- <div class="form-group" id="tiendo-1">
  <div style="width: 33%; display: inline-flex;">
    <label>
      <input type="radio" name="chinhanh" value="1" onchange="chonchinhanh()">
      <img src="/uploads/khachhang/1.jpg" style="width: 300px; height: 200px;">
      <br>
      Chi nhánh Đăk Lăk <br>
      14 Lê Đại Hành, P. Thắng Lợi, TP. Buôn Ma Thuột
    </label> <br>
  </div>
  <div style="width: 32%; display: inline-flex;">
    <label>
      <input type="radio" name="chinhanh" value="2" onchange="chonchinhanh()">
      <img src="/uploads/khachhang/2.jpg" style="width: 300px; height: 200px;">
      <br>
      Chi nhánh Nha Trang <br>
      142 Ngô Gia Tự, P. Phước Tiến, TP. Nha Trang
    </label> <br>
  </div>
  <div style="width: 32%; display: inline-flex;">
    <label>
      <input type="radio" name="chinhanh" value="3" onchange="chonchinhanh()">
      <img src="/uploads/khachhang/3.jpg" style="width: 300px; height: 200px;">
      <br>
      Chi nhánh Nha Trang 2 <br>
      602 đường 2 tháng 4, P. Vĩnh Phước, TP. Nha Trang
    </label> <br>
  </div>
</div> -->

<div class="form-group" id="tiendo-1">
  <div style="width: 33%; display: inline-flex;">
    <label>
      <input type="radio" name="dichvu" value="1" onchange="chondichvu()">
      Spa
    </label>
  </div>
  <div style="width: 33%; display: inline-flex;">
    <label>
      <input type="radio" name="dichvu" value="2" onchange="chondichvu()">
      Điều trị
    </label>
  </div>
  <div style="width: 33%; display: inline-flex;">
    <label>
      <input type="radio" name="dichvu" value="3" onchange="chondichvu()">
      Bán hàng
    </label>
  </div>
</div>

<div class="taman form-group" id="tiendo-2"></div>

<div class="taman form-group" id="tiendo-3">
  <!-- chọn  -->
  <form onsubmit="return datlich(event)">
    <div style="font-size: 1.5em; font-weight: bold; text-align: center;">
      Xin hãy chọn dịch vụ
    </div>
    <div id="dichvu"></div>
    <input class="form-control" id="ghichu" placeholder="Lời nhắc nhân viên">
  </form>
</div>
<div class="taman" id="tiendo-4">
  <div class="form-group">
    <input type="text" class="form-control date" id="thoigiandatlich" placeholder="Thời gian đặt lịch" onchange="kiemtrathoigian()" readonly>
  </div>
  <div class="text-center taman" id="nutdatlich">
    <button class="btn btn-success btn" onclick="datlich()">
      Hoàn tất đặt lịch
    </button>
  </div>
</div>
<div class="taman" id="tiendo-5">

</div>

<script>
  var global = {
    danhsach: [
      {ten: 'Anh Thành', hinhanh: '/uploads/khachhang/anhthanh.jpg', dichvu: [3, 2, 1]},
      {ten: 'Bảo Quốc', hinhanh: '/uploads/khachhang/baoquoc.jpg', dichvu: [3, 2, 1]},
      {ten: 'Công Chánh', hinhanh: '/uploads/khachhang/congchanh.jpg', dichvu: [3, 2, 1]},
      {ten: 'Công Minh', hinhanh: '/uploads/khachhang/congminh.jpg', dichvu: [3, 1]},
      {ten: 'Duy Khánh', hinhanh: '/uploads/khachhang/duykhanh.jpg', dichvu: [3]},
      {ten: 'Hồng Nhung', hinhanh: '/uploads/khachhang/hongnhung.jpg', dichvu: [3, 2, 1]},
      {ten: 'Minh Thư', hinhanh: '/uploads/khachhang/minhthu.jpg', dichvu: [3, 2, 1]},
      {ten: 'Mỹ Hương', hinhanh: '/uploads/khachhang/myhuong.jpg', dichvu: [3, 2, 1]},
      {ten: 'Thị Bích', hinhanh: '/uploads/khachhang/thibich.jpg', dichvu: [3]},
      {ten: 'Thị Dịu', hinhanh: '/uploads/khachhang/thidiu.jpg', dichvu: [3, 2, 1]},
      {ten: 'Thị Hương', hinhanh: '/uploads/khachhang/thihuong.jpg', dichvu: [3, 2, 1]},
      {ten: 'Thị Tâm', hinhanh: '/uploads/khachhang/thitam.jpg', dichvu: [3, 2, 1]},
      {ten: 'Thu Huyền', hinhanh: '/uploads/khachhang/thuhuyen.jpg', dichvu: [3]},
    ]
  };
  var html = "";

  $(document).ready(() => {
    vhttp.alert()
  })

  function chondichvu() {
    // lọc nhân viên từ danh sách
    // lấy hình ảnh 
    var dichvu = Number($("[name=dichvu]:checked").val())
    var html = ""
    global.danhsach.forEach(nhanvien => {
      if (nhanvien.dichvu.indexOf(dichvu) >= 0) html += `
      <div style="display: inline-block; width: 200px; height: 300px;">
        <img width="200px" height="200px" src="`+ nhanvien.hinhanh +`">  <br>
        <div class="text-center"> `+ nhanvien.ten +` </div>
      </div>`
    })
    $("#tiendo-2").html(html)
    $("#tiendo-2").fadeIn(html)
  }

  function kiemtrathoigian() {
    // nếu thời gian đã chọn hợp lệ thì hiện nút đặt lịch
    if ($('#thoigiandatlich').val().length) {
      $('#nutdatlich').fadeIn()
    }
    else {
      $('#nutdatlich').fadeOut()
    }
  }

  function kiemtradienthoai(e) {
    e.preventDefault();
    var dienthoai = $('#dienthoai').val()
    var khachhang = $("#tenkhachhang").val()
    if (!dienthoai.length) {
      vhttp.notify('Xin quý khách nhập số điện thoại')
    }
    else if (!khachhang.length) {
      vhttp.notify('Xin quý khách nhập tên')
    }
    else {
      $('#tiendo-1').fadeOut()
      $('#tiendo-2').fadeIn()
      kiemtravitri()
    }
  }

  function kiemtrakhachhang() {
    vhttp.post("khachhang/api/", {
      action: "kiemtrakhachhang",
      dienthoai: $("#dienthoai").val()
    }).then(phanhoi => {
      if (!phanhoi.ten) phanhoi.ten = ""
      $('#tenkhachhang').val(phanhoi.ten)
    })
  }

  function datlich() {
    let dichvu = []
    $("[name=dichvu]:checked").each((index, checkboxdichvu) => {
      dichvu.push(checkboxdichvu.value)
    })
    vhttp.post("khachhang/api/", {
      action: "datlich",
      dulieu: {
        dienthoai: $("#dienthoai").val(),
        khachhang: $("#tenkhachhang").val(),
        chinhanh: $("[name=chinhanh]:checked").val(),
        dichvu: dichvu,
        ghichu: $("#ghichu").val(),
        thoigian: $("#thoigiandatlich").val()
      }
    }).then(phanhoi => {
      
      $("#tiendo-1").hide()
      $("#tiendo-2").hide()
      $("#tiendo-3").hide()
      $("#tiendo-4").hide()
      $("#tiendo-5").html(`
      <span> Quý khách đã thành công đặt trước dịch vụ spa vào lúc `+ $("#thoigiandatlich").val() +` tại chi nhánh `+ global.diachi[$("[name=chinhanh]:checked").val()] +` </span>`)
      $("#tiendo-5").fadeIn()
    })
  }
</script>
<!-- END: main -->