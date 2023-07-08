<!-- BEGIN: main -->
</div>
<div class="footer">
  <div class="col-xs-4">
    <a href="/">
      <div class="fa fa-home"></div>
      <div> Home </div>
    </a>
  </div>
  <div class="col-xs-5" onclick="dangbaotri()">
    <div class="fa fa-shopping-bag"></div>
    <div> Cửa hàng </div>
  </div>
  <div class="col-xs-6">
    <a href="/khachhang/datlich">
      <div class="footer-button">
        <div class="fa fa-calendar"></div>
        <div> Đặt lịch </div>
      </div>
    </a>
  </div>
  <div class="col-xs-5" onclick="dangbaotri()">
    <div class="fa fa-newspaper-o"></div>
    <div> Tin tức </div>
  </div>
  <div class="col-xs-4">
    <a href="/users/login">
      <div class="fa fa-user"></div>
    <div> Tài khoản </div>
    </a>
  </div>
</div>
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