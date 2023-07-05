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

<div id="tiendo-1">
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
</div>

<div class="taman form-group" id="tiendo-2">
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
</div>
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
    chinhanh: [[12.6854837, 108.0455259], [12.2417675, 109.1886364], [12.2751766, 109.1977462]],
    diachi: {1: '14 Lê Đại Hành, P. Thắng Lợi, TP. Buôn Ma Thuột', 2: '142 Ngô Gia Tự, P. Phước Tiến, TP. Nha Trang', 3: '602 đường 2 tháng 4, P. Vĩnh Phước, TP. Nha Trang' },
    danhsach: [
      { id: 2, loai: "Combo", thoigian: 120 }, 
      { id: 3, loai: "Tắm", thoigian: 20 }, 
      { id: 12, loai: "Tỉa lông", thoigian: 60 }, 
      { id: 10, loai: "Cắt lông chân", thoigian: 10 }, 
      { id: 11, loai: "Cạo lông", thoigian: 30 }, 
      { id: 6, loai: "Cắt dũa móng", thoigian: 10 }, 
      { id: 13, loai: "Cắt lông rối", thoigian: 30 }, 
      { id: 7, loai: "Vệ sinh tai", thoigian: 10 }, 
      { id: 9, loai: "Vệ sinh răng miệng", thoigian: 10 }, 
      { id: 14, loai: "Nhuộm chân + tai", thoigian: 30 }, 
      { id: 15, loai: "Nhuộm toàn thân", thoigian: 60 }, 
      { id: 16, loai: "Bấm lỗ tai", thoigian: 10 }, 
      { id: 17, loai: "Cắt lông tai", thoigian: 10 }, 
      { id: 8, loai: "Vắt tuyết hôi", thoigian: 10 }, 
    ], 
  };
  var html = "";

  $(document).ready(() => {
    global.danhsach.forEach(i => {
      html += '<label style="width: 24%; display: inline-flex;"><input type="checkbox" name="dichvu" thoigian="'+ i.thoigian +'" value="' + i.loai + '" onchange="kiemtradichvu()"> ' + i.loai + " </label>"
    })
    $("#dichvu").html(html)
    vhttp.alert()
  })

  function kiemtradichvu() {
    var tongthoigian = 0
    document.getElementsByName("dichvu").forEach(t => {
      if (t.checked) tongthoigian += Number(t.getAttribute("thoigian"))
    })
    if (tongthoigian) {
      // tính toán dịch vụ
      var thoigiangioihan = 17 - Math.round(tongthoigian / 60)
      var khoangthoigianchophep = []
      for (let i = 7; i <= thoigiangioihan; i++) {
        khoangthoigianchophep.push(i +":00")        
      }
      // hiển thị thời gian cho phép
      $('#tiendo-4').fadeIn()
      $('.date').datetimepicker({
        format: 'd/m/Y H:i',
        allowTimes: khoangthoigianchophep,
        minDate: '+1970/01/02' //chỉ được chọn từ ngày mai
      })
      $("#thoigiandatlich").val('')
    }
    else $('#tiendo-4').fadeOut()
  }

  function chonchinhanh() {
    $("#tiendo-3").fadeIn()
  }

  function kiemtravitri() { 
    var e = 100, t = 0; 
    navigator.geolocation.getCurrentPosition(n => { 
      global.chinhanh.forEach((a, o) => { 
        var h = Math.sqrt(Math.pow(n.coords.latitude - a[0], 2) + Math.pow(n.coords.longitude - a[1], 2)); h < e && (e = h, t = o) }); 
        var a = !1; 
        document.getElementsByName("chinhanh").forEach(e => { 
          e.checked && (a = !0) 
        }), 
        a || (document.getElementsByName("chinhanh")[t].checked = !0, chonchinhanh()) 
    }) 
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