<!-- BEGIN: main -->
</div>
<div class="footer">
  <a href="/">
    <div class="col-xs-4">
      <div class="fa fa-home"></div>
      <div> Home </div>
    </div>
  </a>
  <div class="col-xs-5" onclick="dangbaotri()">
    <div class="fa fa-shopping-bag"></div>
    <div> Cửa hàng </div>
  </div>
  <a href="/khachhang/datlich">
    <div class="col-xs-6">
      <div class="footer-button">
        <div class="fa fa-calendar"></div>
        <div> Đặt lịch </div>
      </div>
    </div>
  </a>
  <div class="col-xs-5" onclick="dangbaotri()">
    <div class="fa fa-newspaper-o"></div>
    <div> Tin tức </div>
  </div>
  <a href="/users/login">
    <div class="col-xs-4">
      <div class="fa fa-user"></div>
      <div> Tài khoản </div>
    </div>
  </a>
</div>

<script>
  $(document).ready(() => {
    vhttp.alert()
  })

  function dangbaotri() {
    vhttp.notify("Chức năng đang được cập nhật xin vui lòng thử lại sau")
  }
</script>
<!-- END: main -->