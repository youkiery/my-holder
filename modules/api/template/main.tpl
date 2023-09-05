<!-- BEGIN: main  -->

<body class="home">
  <div class="container-fluid display-table">
    <div class="row display-table-row">
      <div class="col-md-4 col-sm-2 hidden-xs display-table-cell v-align box" id="navigation">
        <div class="logo">
          <a hef="/"><img src="/uploads/logo.png" alt="merkery_logo" class="hidden-xs hidden-sm">
            <img src="/uploads/logo.png" alt="merkery_logo" class="visible-xs visible-sm circle-logo">
          </a>
        </div>
        <div class="navi">
          <ul>
            <li class="active"><a href="#"><i class="fa fa-home" aria-hidden="true"></i><span
                  class="hidden-xs hidden-sm">Home</span></a></li>
            <li><a href="#"><i class="fa fa-tasks" aria-hidden="true"></i><span
                  class="hidden-xs hidden-sm">Workflow</span></a></li>
            <li><a href="#"><i class="fa fa-bar-chart" aria-hidden="true"></i><span
                  class="hidden-xs hidden-sm">Statistics</span></a></li>
            <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i><span
                  class="hidden-xs hidden-sm">Calender</span></a></li>
            <li><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i><span
                  class="hidden-xs hidden-sm">Users</span></a></li>
            <li><a href="#"><i class="fa fa-cog" aria-hidden="true"></i><span
                  class="hidden-xs hidden-sm">Setting</span></a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-20 col-sm-22 display-table-cell v-align">
        <!--<button type="button" class="slide-toggle">Slide Toggle</button> -->
        <div class="row">
          <header>
            <div class="col-md-14">
              <nav class="navbar-default pull-left">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="offcanvas" data-target="#side-menu"
                    aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                </div>
              </nav>
              <div>
                <form onsubmit="return timkiem(event)">
                  <div class="input-group">
                    <input style="width: 100%; height: 35px;" type="text" placeholder="Tìm kiếm chủ đề" id="tukhoa">
                    <div class="input-group-btn">
                      <button style="height: 35px; width: 40px;" class="btn btn-info"> <span class="fa fa-search"> </span> </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-md-10">
              <div class="header-rightside">
                <ul class="list-inline header-top pull-right">
                  <li class="hidden-xs"><a href="#" class="add-project" data-toggle="modal"
                      data-target="#themchude">Thêm chủ đề</a></li>
                  <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                  <li>
                    <a href="#" class="icon-info">
                      <i class="fa fa-bell" aria-hidden="true"></i>
                      <span class="label label-primary">3</span>
                    </a>
                  </li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                      <i class="fa fa-user" aria-hidden="true"></i>
                      <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                      <li>
                        <div class="navbar-content">
                          <span>JS Krishna</span>
                          <p class="text-muted small">
                            me@jskrishna.com
                          </p>
                          <div class="divider">
                          </div>
                          <a href="#" class="view btn-sm active">View Profile</a>
                        </div>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </header>
        </div>
        <div class="user-dashboard">

          <div id="danhsach">

          </div>

        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div id="themchude" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header login-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4 class="modal-title">Lưu chủ đề</h4>
        </div>
        <div class="modal-body">
          <input type="text" placeholder="Tiêu đề" id="tieude" maxlength="100" required>
          <input type="text" placeholder="Phân loại" id="phanloai" maxlength="100" required>
          <textarea id="noidung" placeholder="Nội dung" required></textarea>
        </div>
        <div class="modal-footer">
          <button type="button" class="cancel" data-dismiss="modal">Đóng</button>
          <button type="button" class="add-project" onclick="luuchude()">Lưu</button>
        </div>
      </div>

    </div>
  </div>

  
  <div id="chitiet" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header login-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4 class="modal-title" id="chitiet-tieude"></h4>
        </div>
        <div class="modal-body">
          <pre id="chitiet-noidung"></pre>
        </div>
        <div class="modal-footer">
          <button type="button" class="cancel" data-dismiss="modal">Đóng</button>
        </div>
      </div>

    </div>
  </div>

</body>

<script>
  $(document).ready(function () {
    $('[data-toggle="offcanvas"]').click(function () {
      $("#navigation").toggleClass("hidden-xs");
    });
  });

  function luuchude() {
    var dulieu = {
      tieude: $("#tieude").val(),
      phanloai: $("#phanloai").val(),
      noidung: $("#noidung").val()
    }
    vhttp.post("/api/api/", {
      action: "luuchude",
      dulieu: dulieu
    }).then((phanhoi) => {
      $("#themchude").modal("hide")
    }, (loi) => {})
  }

  function timkiem(e) {
    e.preventDefault()
    vhttp.post("/api/api/", {
      action: "timkiem",
      tukhoa: $("#tukhoa").val()
    }).then((phanhoi) => {
      $("#danhsach").html(phanhoi.danhsach)
    }, (loi) => {})
    return false
  }

  function chitiet(tieude, noidung) {
    $("#chitiet-tieude").text(tieude)
    $("#chitiet-noidung").text(noidung)
    $("#chitiet").modal("show")
  }

</script>
<!-- END: main  -->