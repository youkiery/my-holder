<!-- BEGIN: main -->
<style>
  .xxx {
    background-image: linear-gradient(to right, #000, #333);
  }

  .nhapdienthoai {
    background: linear-gradient(180deg, #1c5, #284);
    height: 220px;
    padding: 10px;
    border-radius: 20px;
    margin: 0px 10px;
  }

  .content {
    max-width: 600px;
    margin: auto;
  }

  .avatar {
    height: 100px;
    padding: 10px;
  }

  .avatar-box {
    float: left;
    width: 75px;
    height: 75px;
    border-radius: 50%;
    background: lightblue;
  }

  .avatar-text {
    width: 50%;
    color: white;
    display: inline-block;
    padding-left: 10px;
  }

  .avatar-text-name {
    font-weight: bold;
    font-size: 14pt;
  }

  .avatar-text-desc {
    font-size: 10pt;
  }

  .avatar-tool-box {
    float: right;
    text-align: right;
    color: white;
    border: 1px solid white;
    border-radius: 10px;
    padding: 2px;
  }

  .service {
    background: #eee;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
    overflow: overlay;
    clear: both;
  }

  .service-menu {
    margin: 10px;
  }

  .service-box {
    float: left;
    margin: 5px;
  }

  .service-box-image {
    width: 70px;
    height: 70px;
    background: #ccc;
    border-radius: 50%;
  }

  .service-box-image span {
    font-size: 2em;
    color: black;
    line-height: 70px;
    text-align: center;
    width: 70px;
  }

  .service-box-text {
    text-align: center;
    font-size: 0.9em;
  }

  .footer {
    position: fixed;
    width: 100%;
    max-width: 600px;
    bottom: 0px;
    background: white;
    height: 50px;
    border-top: 1px solid gray;
  }

  .footer div {
    text-align: center;
    font-size: 0.9em;
    line-height: 1.4em;
    cursor: pointer;
  }

  .footer div.fa {
    font-size: 1.5em;
  }

  .footer div:hover {
    color: orange;
  }

  .footer-button {
    background: #333;
    width: 100px;
    height: 100px;
    top: -30px;
    border-radius: 100%;
    padding: 20px;
    color: white;
    font-size: 1.2em !important;
    margin: auto;
    position: relative;
  }
</style>

<div class="xxx">

  <div class="content">
    <div class="avatar">
      <div class="col-xs-16">
        <div class="avatar-box"> </div>
        <div class="avatar-text">
          <div class="avatar-text-name"> Duy Khánh </div>
          <div class="avatar-text-desc"> Hội viên VIP </div>
        </div>
      </div>
      <div class="col-xs-8" style="text-align: right; color: white; font-size: 2em;">
        <span class="fa fa-shopping-cart"></span>
        <span class="fa fa-bell"></span>
      </div>
    </div>

    <div class="service">
      <div class="service-menu">
        <div class="row">
          <div class="col-xs-6">
            <div class="service-box">
              <div class="service-box-image"> <span class="fa fa-calendar"></span> </div>
              <div class="service-box-text"> Đặt lịch </div>
            </div>
          </div>
          <div class="col-xs-6">
            <div class="service-box">
              <div class="service-box-image"> <span class="fa fa-bath"></span> </div>
              <div class="service-box-text"> Lịch sử spa </div>
            </div>
          </div>
          <div class="col-xs-6">
            <div class="service-box">
              <div class="service-box-image"> <span class="fa fa-credit-card"></span> </div>
              <div class="service-box-text"> Bảng giá </div>
            </div>
          </div>
          <div class="col-xs-6">
            <div class="service-box">
              <div class="service-box-image"> <span class="fa fa-dollar"></span> </div>
              <div class="service-box-text"> Khuyến mãi </div>
            </div>
          </div>
          <div class="col-xs-6">
            <div class="service-box">
              <div class="service-box-image"> <span class="fa fa-pencil"></span> </div>
              <div class="service-box-text"> Lịch vaccine </div>
            </div>
          </div>
          <div class="col-xs-6">
            <div class="service-box">
              <div class="service-box-image"> <span class="fa fa-plus-circle"></span> </div>
              <div class="service-box-text"> Lịch điều trị </div>
            </div>
          </div>
          <div class="col-xs-6">
            <div class="service-box">
              <div class="service-box-image"> <span class="fa fa-life-buoy"></span> </div>
              <div class="service-box-text"> Sức khỏe </div>
            </div>
          </div>
          <div class="col-xs-6">
            <div class="service-box">
              <div class="service-box-image"> <span class="fa fa-building-o"></span> </div>
              <div class="service-box-text"> Chi nhánh </div>
            </div>
          </div>
        </div>
      </div>

      <div style="clear: both;"></div>

      <form class="nhapdienthoai" required="" onsubmit="return kiemtradienthoai(event)">
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

      <div class="pw-card">
        <div class="pw-card-content">
          chương trình khuyến mãi
        </div>
      </div>
      <div class="pw-card">
        <div class="pw-card-content">
          thông tin nhanh
        </div>
      </div>
    </div>
    <div class="footer">
      <div class="col-xs-4">
        <div class="fa fa-home"></div>
        <div> Home </div>
      </div>
      <div class="col-xs-5">
        <div class="fa fa-shopping-bag"></div>
        <div> Cửa hàng </div>
      </div>
      <div class="col-xs-6">
        <div class="footer-button">
          <div class="fa fa-calendar"></div>
          <div> Đặt lịch </div>
        </div>
      </div>
      <div class="col-xs-5">
        <div class="fa fa-newspaper-o"></div>
        <div> Tin tức </div>
      </div>
      <div class="col-xs-4">
        <div class="fa fa-user"></div>
        <div> Tài khoản </div>
      </div>
    </div>
  </div>
</div>
<!-- END: main -->