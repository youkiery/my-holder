<!-- BEGIN: main -->
<div class="modal fade" id="modal-danhsachchinhanh" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        Xin hãy chọn chi nhánh bên dưới
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <img src="/uploads/khachhang/1.jpg" style="width: 100%; height: auto;" onclick="chonchinhanh(0)">
        <img src="/uploads/khachhang/2.jpg" style="width: 100%; height: auto;" onclick="chonchinhanh(1)">
        <img src="/uploads/khachhang/3.jpg" style="width: 100%; height: auto;" onclick="chonchinhanh(2)">
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modal-danhsachdichvu" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        Xin hãy chọn ít nhất 1 dịch vụ bên dưới
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <div class="form-group" id="dichvu"></div>
        <div class="form-group">
          <input class="form-control" placeholder="Ghi chú thêm">
        </div>
        <div class="form-group" id="thoigianthuchien"></div>
        <button class="btn btn-info btn-block" onclick="chondichvu()"> Xác nhận </button>
      </div>
    </div>
  </div>
</div>

{header}

<div class="lefto">

  <div id="tiendo-1">
    <div class="step active"> <b> 1. Nhập thông tin liên hệ </b> </div>
    <form required onsubmit="return kiemtradienthoai(event)">
      <div class="row">
        <div class="col-xs-12">
          <div class="form-group input-group">
            <div class="input-group-addon"> <span class="fa fa-phone"></span> </div>
            <input type="number" class="form-control" id="dienthoai" placeholder="Số điện thoại"
              onkeyup="kiemtrakhachhang()">
          </div>
        </div>
        <div class="col-xs-12">
          <div class="form-group input-group">
            <div class="input-group-addon"> <span class="fa fa-user"></span> </div>
            <input class="form-control" id="tenkhachhang" placeholder="Họ tên">
          </div>
        </div>
      </div>
    </form>
  </div>

  <div class="form-group" id="tiendo-2">
    <div class="step"> <b> 2. Chọn chi nhánh </b> </div>
    <div class="form-group input-group" onclick="hienchonchinhanh()">
      <div class="input-group-addon"> <span class="fa fa-user"></span> </div>
      <input class="form-control" placeholder="Xem tất cả chi nhánh">
    </div>
    <div style="margin-bottom: 10px;">
      <button class="btn btn-default" onclick="kiemtravitri()"> Tìm chi nhánh gần nhất </button>
    </div>
    <button class="btn btn-default" id="chinhanhdachon"> Chưa chọn </button>
    <!-- <div style="width: 33%; display: inline-flex;">
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
    </div> -->
  </div>
  <div class="form-group" id="tiendo-3">
    <div class="step"> <b> 3. Chọn dịch vụ </b> </div>
    <div class="form-group input-group" onclick="hienchondichvu()">
      <div class="input-group-addon"> <span class="fa fa-user"></span> </div>
      <input class="form-control" placeholder="Xem tất cả dịch vụ">
    </div>
    <!-- <form onsubmit="return datlich(event)">
      <div style="font-size: 1.5em; font-weight: bold; text-align: center;">
        Xin hãy chọn dịch vụ
      </div>
      <div id="dichvu"></div>
      <input class="form-control" id="ghichu" placeholder="Lời nhắc nhân viên">
    </form> -->
  </div>
  <div id="tiendo-4">
    <div class="step"> <b> 4. Chọn thời gian đặt lịch </b> </div>
    <div class="form-group">
      <input type="text" class="form-control date" id="thoigiandatlich" placeholder="Thời gian đặt lịch" readonly>
    </div>
  </div>
  <div id="tiendo-5">
    <button class="btn btn-success btn" onclick="datlich()">
      Hoàn tất đặt lịch
    </button>
  </div>
</div>
<div id="tiendo-6"></div>
{footer}

<script>
  var global = {
    chinhanh: [[12.6854837, 108.0455259, '14 Lê Đại Hành, P. Thắng Lợi, TP. Buôn Ma Thuột'], [12.2417675, 109.1886364, '142 Ngô Gia Tự, P. Phước Tiến, TP. Nha Trang'], [12.2751766, 109.1977462, '602 đường 2 tháng 4, P. Vĩnh Phước, TP. Nha Trang']],
    chinhanhdachon: 0,
    thoigiangioihan: 0,
    tiendo: 1,
    ngaymai: '{ngaymai}',
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

  $(document).ready(() => {
    var html = "";
    global.danhsach.forEach(i => {
      html += '<label style="width: 100%;"><input type="checkbox" name="dichvu" thoigian="' + i.thoigian + '" value="' + i.loai + '" onchange="kiemtradichvu()"> ' + i.loai + '</label>'
    })
    $("#dichvu").html(html)
    vhttp.alert()
    denbuoc(1)
  })

  function hienchonchinhanh() {
    if (global.tiendo > 1) $('#modal-danhsachchinhanh').modal('show')
  }

  function kiemtradichvu() {
    var tongthoigian = 0
    document.getElementsByName("dichvu").forEach(t => {
      if (t.checked) tongthoigian += Number(t.getAttribute("thoigian"))
    })
    if (tongthoigian) {
      // tính toán dịch vụ
      var thoigiangioihan = 17 - Math.round(tongthoigian / 60)
      var khoangthoigianchophep = []
      var gio = Math.floor(tongthoigian / 60)
      var phut = tongthoigian - gio * 60
      global.thoigiangioihan = thoigiangioihan
      for (let i = 7; i <= thoigiangioihan; i++) {
        khoangthoigianchophep.push(i + ":00")
      }
      // hiển thị thời gian cho phép
      $('#tiendo-4').fadeIn()
      $('.date').datetimepicker({
        format: 'd/m/Y H:i',
        allowTimes: khoangthoigianchophep,
        minDate: '+1970/01/02' //chỉ được chọn từ ngày mai
      })
      $("#thoigianthuchien").text('Thời gian dự kiến: ' + (gio > 0 ? gio + ' giờ ' : '') + phut + ' phút')
    }
  }

  function kiemtravitri() {
    var khoangcachgannhat = 100, chinhanhdachon = 0;
    navigator.geolocation.getCurrentPosition(n => {
      global.chinhanh.forEach((toadochinhanh, vitrichinhanh) => {
        var khoangcach = Math.sqrt(Math.pow(n.coords.latitude - toadochinhanh[0], 2) + Math.pow(n.coords.longitude - toadochinhanh[1], 2));
        if (khoangcach < khoangcachgannhat) {
          khoangcachgannhat = khoangcach
          chinhanhdachon = vitrichinhanh
        }
      });
    })
    chonchinhanh(chinhanhdachon)
  }

  function chondichvu() {
    $('#modal-danhsachdichvu').modal('hide')
    $("#thoigiandatlich").val(global.ngaymai)
    denbuoc(5)
  }

  function chonchinhanh(vitri) {
    global.chinhanhdachon = vitri
    $('#chinhanhdachon').text(global.chinhanh[vitri][2])
    $('#modal-danhsachchinhanh').modal('hide')
    denbuoc(3)
  }

  function hienchondichvu() {
    if (global.tiendo > 2) $("#modal-danhsachdichvu").modal('show')
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
    }
  }

  function denbuoc(buoc = 1) {
    // disable các bước trước đó
    global.tiendo = buoc
    for (let i = 0; i <= buoc; i++) {
      $('#tiendo-' + i + ' input').attr('disabled', false)
      $('#tiendo-' + i + ' button').attr('disabled', false)
      $('#tiendo-' + i + ' .step').removeClass('active')
    }
    for (let i = buoc + 1; i <= 5; i++) {
      $('#tiendo-' + i + ' input').attr('disabled', true)
      $('#tiendo-' + i + ' button').attr('disabled', true)
      $('#tiendo-' + i + ' .step').removeClass('active')
    }
    $('#tiendo-' + buoc + ' .step').addClass('active')
  }

  function kiemtrakhachhang() {
    var dienthoai = $("#dienthoai").val()
    if (dienthoai.length < 8) {
      denbuoc(1)
      // rút step lại 1
      // viết hàm disable
    }
    else {
      vhttp.post("/khachhang/api/", {
        action: "kiemtrakhachhang",
        dienthoai: dienthoai
      }).then(phanhoi => {
        if (!phanhoi.ten) phanhoi.ten = ""
        $('#tenkhachhang').val(phanhoi.ten)
        denbuoc(2)
      })
    }
  }

  function datlich() {
    let dichvu = []
    $("[name=dichvu]:checked").each((index, checkboxdichvu) => {
      dichvu.push(checkboxdichvu.value)
    })
    vhttp.post("/khachhang/api/", {
      action: "datlich",
      dulieu: {
        dienthoai: $("#dienthoai").val(),
        khachhang: $("#tenkhachhang").val(),
        chinhanh: global.chinhanhdachon,
        dichvu: dichvu,
        ghichu: $("#ghichu").val(),
        thoigian: $("#thoigiandatlich").val()
      }
    }).then(phanhoi => {
      $("#tiendo-1").hide()
      $("#tiendo-2").hide()
      $("#tiendo-3").hide()
      $("#tiendo-4").hide()
      $("#tiendo-5").hide()
      $("#tiendo-6").html(`
      <span> Quý khách đã thành công đặt trước dịch vụ spa vào lúc `+ $("#thoigiandatlich").val() + ` tại chi nhánh ` + global.chinhanh[global.chinhanhdachon][2] + ` </span>`)
      $("#tiendo-6").fadeIn()
    })
  }
</script>
<!-- END: main -->