<aside class="app-sidebar">
  <div class="app-sidebar__user">
  <img
          class="app-sidebar__user-avatar"
          <?php 
          $hinhtk = '../' . $img_path . $_SESSION['anhtk'];
          ?>
          src="<?php
           echo $hinhtk; 
          ?>"
          style="height: 70px; width: 70px; background-repeat: no-repeat; background-size: cover;"
          alt="Hình ảnh người dùng"
        />
    <div>
      <p class="app-sidebar__user-name">
        <b>
          <font style="vertical-align: inherit">
            <font style="vertical-align: inherit"><?= $_SESSION['user']?></font>
          </font>
        </b>
      </p>
      <p class="app-sidebar__user-designation">
        <font style="vertical-align: inherit">
          <font style="vertical-align: inherit">Chào mừng trở lại</font>
        </font>
      </p>
    </div>
  </div>
  <hr />
  <ul class="app-menu">
    <li>
      <a class="app-menu__item active" href="index.php?act=bangdieukhien"><i
          class="app-menu__icon bx bx-tachometer"></i><span class="app-menu__label">
          <font style="vertical-align: inherit">
            <font style="vertical-align: inherit">Bảng điều khiển</font>
          </font>
        </span></a>
    </li>
    <li>
      <a class="app-menu__item" href="index.php?act=nguoidung"><i class="app-menu__icon bx bx-user-voice"></i><span
          class="app-menu__label">
          <font style="vertical-align: inherit">
            <font style="vertical-align: inherit">Người dùng</font>
          </font>
        </span></a>
    </li>
    <li>
      <a class="app-menu__item" href="index.php?act=hethongsanpham"><i
          class="app-menu__icon bx bx-purchase-tag-alt"></i><span class="app-menu__label">
          <font style="vertical-align: inherit">
            <font style="vertical-align: inherit">Hệ thống sản phẩm</font>
          </font>
        </span></a>
    </li>
    <li>
      <a class="app-menu__item" href="index.php?act=dathang"><i class="app-menu__icon bx bx-task"></i><span
          class="app-menu__label">
          <font style="vertical-align: inherit">
            <font style="vertical-align: inherit">Đặt hàng</font>
          </font>
        </span></a>
    </li>
    <li>
      <a class="app-menu__item" href="index.php?act=phantich"><i class="app-menu__icon bx bx-pie-chart-alt-2"></i><span
          class="app-menu__label">
          <font style="vertical-align: inherit">
            <font style="vertical-align: inherit">Phân tích</font>
          </font>
        </span></a>
    </li>
    <li>
      <a class="app-menu__item" href="index.php?act=quanlyblog"><i class="app-menu__icon bx bx-news"></i><span
          class="app-menu__label">
          <font style="vertical-align: inherit">
            <font style="vertical-align: inherit">Quản lý blog</font>
          </font>
        </span></a>
    </li>
    <li>
          <a class="app-menu__item" href="index.php?act=quanlybinhluan"
            ><i class="fas fa-comments"></i>
            <span class="app-menu__label"
              ><font style="vertical-align: inherit"
                ><font style="margin-left: 20px;">Quản lý bình luận</font></font
              ></span
            ></a
          >
        </li>
    <li>
      <a class="app-menu__item" href="../index.php?act="><i class="fas fa-home" style="color: #ffffff; font-size: 20px; margin-right: 10px;"></i></i><span
          class="app-menu__label">
          <font style="vertical-align: inherit">
            <font style="vertical-align: inherit">Quay lại trang chủ user</font>
          </font>
        </span></a>
    </li>
    <li>
          <a class="app-menu__item" href="index.php?act=thungrac"
            ><i style="margin-right: 20px;" class="fas fa-trash"></i><span class="app-menu__label"
              ><font style="vertical-align: inherit"
                ><font style="vertical-align: inherit">Thùng rác</font></font
              ></span
            ></a
          >
        </li>
  </ul>
</aside>
<main class="app-content">
  <div class="row">
    <div class="col-md-12">
      <div class="app-title">
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item">
            <a href="#"><b>
                <font style="vertical-align: inherit">
                  <font style="vertical-align: inherit">Bảng điều khiển</font>
                </font>
              </b></a>
          </li>
        </ul>
        <div id="clock">
          <span class="date">
            <font style="vertical-align: inherit">
              <font style="vertical-align: inherit"></font>
            </font>
          </span>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <!--Left-->
    <div class="col-md-12 col-lg-6">
      <div class="row">
        <!-- col-6 -->
        <a href="index.php?act=nguoidung" class="col-md-6">
          <div class="widget-small primary coloured-icon">
            <i class="icon bx bxs-user-account fa-3x"></i>
            <div class="info">
              <h4>
                <font style="vertical-align: inherit">
                  <font style="vertical-align: inherit">Người dùng</font>
                </font>
              </h4>
              <?php
              if (empty($demuser)) {
                echo '';
              } else {
                foreach ($demuser as $us) {
                  extract($us);
                  echo '    <p>
                  <b
                    ><font style="vertical-align: inherit"
                      ><font style="vertical-align: inherit">
                        ' . $id_user . ' người dùng
                      </font></font
                    ></b
                  >
                </p>';
                }
              }
              ?>

              <p class="info-tong">
                <font style="vertical-align: inherit">
                  <font style="vertical-align: inherit">Tổng số khách hàng</font>
                </font>
              </p>
            </div>
          </div>
        </a>
        <!-- col-6 -->
        <a href="index.php?act=hethongsanpham" class="col-md-6">
          <div class="widget-small info coloured-icon">
            <i class="icon bx bxs-data fa-3x"></i>
            <div class="info">
              <h4>
                <font style="vertical-align: inherit">
                  <font style="vertical-align: inherit">TỔNG SẢN PHẨM</font>
                </font>
              </h4>
              <?php
              if (empty($demsp)) {
                echo '';
              } else {
                foreach ($demsp as $sp) {
                  extract($sp);
                  echo '  <p>
                <b
                  ><font style="vertical-align: inherit"
                    ><font style="vertical-align: inherit"
                      >' . $id_sp . ' sản phẩm</font
                    ></font
                  ></b
                >
              </p>';
                }
              }
              ?>

              <p class="info-tong">
                <font style="vertical-align: inherit">
                  <font style="vertical-align: inherit">Tổng số sản phẩm còn hoạt động</font>
                </font>
              </p>
            </div>
          </div>
        </a>
        <!-- col-6 -->
        <a href="index.php?act=dathang" class="col-md-6">
          <div class="widget-small warning coloured-icon">
            <i class="icon bx bxs-shopping-bags fa-3x"></i>
            <div class="info">
              <h4>
                <font style="vertical-align: inherit">
                  <font style="vertical-align: inherit">Tổng số đơn hàng</font>
                </font>
              </h4>
              <?php
              if (empty($demdh)) {
                echo '';
              } else {
                foreach ($demdh as $dh) {
                  extract($dh);
                  echo '  <p>
                <b
                  ><font style="vertical-align: inherit"
                    ><font style="vertical-align: inherit"
                      >' . $id_dh . ' đơn hàng</font
                    ></font
                  ></b
                >
              </p> ';
                }
              }
              ?>

              <p class="info-tong">
                <font style="vertical-align: inherit">
                  <font style="vertical-align: inherit">Tổng số đơn đặt hàng</font>
                </font>
              </p>
            </div>
          </div>
        </a>
        <!-- col-6 -->
        <a href="index.php?act=hethongsanpham" class="col-md-6">
          <div class="widget-small danger coloured-icon">
            <i class="icon bx bxs-error-alt fa-3x"></i>
            <div class="info">
              <h4>
                <font style="vertical-align: inherit">
                  <font style="vertical-align: inherit">Sản phẩm không hoạt động</font>
                </font>
              </h4>
              <?php
              if (empty($demspkhonghd)) {
                echo '';
              } else {
                foreach ($demspkhonghd as $spkhd) {
                  extract($spkhd);
                  echo ' <p>
                <b
                  ><font style="vertical-align: inherit"
                    ><font style="vertical-align: inherit"
                      >' . $id_sp . ' sản phẩm</font
                    ></font
                  ></b
                >
              </p> ';
                }
              }
              ?>

              <p class="info-tong">
                <font style="vertical-align: inherit">
                  <font style="vertical-align: inherit">Sản phẩm không hoạt động</font>
                </font>
              </p>
            </div>
          </div>
        </a>
        <!-- col-12 -->
        <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">
              <a href="index.php?act=dathang">
                <font style="vertical-align: inherit">
                  <font style="vertical-align: inherit">Những đơn đặt hàng gần đây</font>
                </font>
              </a>
            </h3>
            <div>
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>
                      <font style="vertical-align: inherit">
                        <font style="vertical-align: inherit">ID</font>
                      </font>
                    </th>
                    <th>
                      <font style="vertical-align: inherit">
                        <font style="vertical-align: inherit">KHÁCH HÀNG</font>
                      </font>
                    </th>
                    <th>
                      <font style="vertical-align: inherit">
                        <font style="vertical-align: inherit">TỔNG GIÁ</font>
                      </font>
                    </th>
                    <th>
                      <font style="vertical-align: inherit">
                        <font style="vertical-align: inherit">TRẠNG THÁI</font>
                      </font>
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  if (empty($listdh)) {
                    echo '';
                  } else {
                    foreach ($listdh as $dh) {
                      extract($dh);
                      echo '  <tr>
                            <td>
                              <font style="vertical-align: inherit"
                                ><font style="vertical-align: inherit">
                                ' . $id_dh . '
                                </font></font
                              >
                            </td>
                            <td>
                              <font style="vertical-align: inherit"
                                ><font style="vertical-align: inherit">
                                ' . $ho_ten . '
                                </font></font
                              >
                            </td>
                            <td>
                              <font style="vertical-align: inherit"
                                ><font style="vertical-align: inherit">
                                 ' . $tong_tien_dh . '
                                </font></font
                              >
                            </td>';
                      if ($trang_thai == 0) {
                        echo '
                              <td>
                              <span class="badge bg-warning"
                                ><font style="vertical-align: inherit"
                                  ><font style="vertical-align: inherit"
                                    >Chưa giải quyết</font
                                  ></font
                                ></span
                              >
                            </td>
                              ';
                      } elseif ($trang_thai == 1) {
                        echo ' <td>
                              <span class="badge bg-primary"
                                ><font style="vertical-align: inherit"
                                  ><font style="vertical-align: inherit"
                                    >Chưa thanh toán</font
                                  ></font
                                ></span
                              >
                            </td>';

                      } elseif ($trang_thai == 2) {
                        echo ' <td>
                              <span class="badge bg-info"
                                ><font style="vertical-align: inherit"
                                  ><font style="vertical-align: inherit"
                                    >Đã thanh toán</font
                                  ></font
                                ></span
                              >
                            </td>';

                      } elseif ($trang_thai == 3) {
                        echo ' <td>
                              <span class="badge bg-secondary"
                                ><font style="vertical-align: inherit"
                                  ><font style="vertical-align: inherit"
                                    >Đang giao hàng</font
                                  ></font
                                ></span
                              >
                            </td>';

                      } elseif ($trang_thai == 4) {
                        echo ' <td>
                              <span class="badge bg-success"
                                ><font style="vertical-align: inherit"
                                  ><font style="vertical-align: inherit"
                                    >Xong</font
                                  ></font
                                ></span
                              >
                            </td>';

                      } elseif ($trang_thai == 5) {
                        echo '<td>
                              <span class="badge bg-danger"
                                ><font style="vertical-align: inherit"
                                  ><font style="vertical-align: inherit"
                                    >Hủy bỏ</font
                                  ></font
                                ></span
                              >
                            </td>';
                        ;
                      }
                    }
                  }
                  ?>

                  <!-- <tr>
                        <td>
                          <font style="vertical-align: inherit"
                            ><font style="vertical-align: inherit">
                              21
                            </font></font
                          >
                        </td>
                        <td>
                          <font style="vertical-align: inherit"
                            ><font style="vertical-align: inherit">
                              Trần Đông Pha
                            </font></font
                          >
                        </td>
                        <td>
                          <font style="vertical-align: inherit"
                            ><font style="vertical-align: inherit">
                              7.632.240đ
                            </font></font
                          >
                        </td>
                        <td>
                          <span class="badge bg-warning"
                            ><font style="vertical-align: inherit"
                              ><font style="vertical-align: inherit"
                                >Chưa giải quyết</font
                              ></font
                            ></span
                          >
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <font style="vertical-align: inherit"
                            ><font style="vertical-align: inherit">
                              20
                            </font></font
                          >
                        </td>
                        <td>
                          <font style="vertical-align: inherit"
                            ><font style="vertical-align: inherit">
                              Trần Hải Hoàng
                            </font></font
                          >
                        </td>
                        <td>
                          <font style="vertical-align: inherit"
                            ><font style="vertical-align: inherit">
                              17.010.840đ
                            </font></font
                          >
                        </td>
                        <td>
                          <span class="badge bg-warning"
                            ><font style="vertical-align: inherit"
                              ><font style="vertical-align: inherit"
                                >Chưa giải quyết</font
                              ></font
                            ></span
                          >
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <font style="vertical-align: inherit"
                            ><font style="vertical-align: inherit">
                              19
                            </font></font
                          >
                        </td>
                        <td>
                          <font style="vertical-align: inherit"
                            ><font style="vertical-align: inherit">
                              Cao Quốc Khải
                            </font></font
                          >
                        </td>
                        <td>
                          <font style="vertical-align: inherit"
                            ><font style="vertical-align: inherit">
                              22,472,940đ
                            </font></font
                          >
                        </td>
                        <td>
                          <span class="badge bg-info"
                            ><font style="vertical-align: inherit"
                              ><font style="vertical-align: inherit"
                                >Đã thanh toán</font
                              ></font
                            ></span
                          >
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <font style="vertical-align: inherit"
                            ><font style="vertical-align: inherit">
                              18
                            </font></font
                          >
                        </td>
                        <td>
                          <font style="vertical-align: inherit"
                            ><font style="vertical-align: inherit">
                              Hoàng Tiến Thành
                            </font></font
                          >
                        </td>
                        <td>
                          <font style="vertical-align: inherit"
                            ><font style="vertical-align: inherit">
                              38.917.500đ
                            </font></font
                          >
                        </td>
                        <td>
                          <span class="badge bg-success"
                            ><font style="vertical-align: inherit"
                              ><font style="vertical-align: inherit"
                                >Xong</font
                              ></font
                            ></span
                          >
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <font style="vertical-align: inherit"
                            ><font style="vertical-align: inherit">
                              17
                            </font></font
                          >
                        </td>
                        <td>
                          <font style="vertical-align: inherit"
                            ><font style="vertical-align: inherit">
                              ngân côn
                            </font></font
                          >
                        </td>
                        <td>
                          <font style="vertical-align: inherit"
                            ><font style="vertical-align: inherit">
                              43.636.500đ
                            </font></font
                          >
                        </td>
                        <td>
                          <span class="badge bg-success"
                            ><font style="vertical-align: inherit"
                              ><font style="vertical-align: inherit"
                                >Xong</font
                              ></font
                            ></span
                          >
                        </td>
                      </tr> -->
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <!-- / col-12 -->
      </div>
    </div>
    <!--END left-->
    <!--Right-->
    <div class="col-md-12 col-lg-6">
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title" >
              <font style="vertical-align: inherit">
                <font style="vertical-align: inherit">Thống kê sản phẩm danh mục</font>
              </font>
            </h3>
            <div id="donutchart" style="width: 450px; height: 300px;"></div>
            <!-- <div class="embed-responsive embed-responsive-16by9">
              <canvas class="embed-responsive-item" id="lineChartDemo" width="677" height="380"
                style="width: 502px; height: 282px">
              </canvas>
            </div> -->
          </div>
        </div>

        <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">
              <font style="vertical-align: inherit">
                <font style="vertical-align: inherit">Thống kê đơn hàng </font>
              </font>
             
            </h3>
            <div
              id="myChart" style="width:100%; width:500px; height:450px; align-items: center">
      </div>
            <!-- <div class="embed-responsive embed-responsive-16by9">
              
              <canvas class="embed-responsive-item" id="barChartDemo" width="677" height="380"
                style="width: 502px; height: 282px"></canvas>
               
            </div> -->
          </div>
        </div>
      </div>
    </div>
    <!--END right-->
  </div>
  <div class="text-center" style="font-size: 13px">
    <p>
      <b>
        <font style="vertical-align: inherit">Bản Quyền &copy; 2023 . Thuộc Về Nhóm Duy Dự Án 1 FPT Poly.</font>
      </b>
    </p>
  </div>

</main>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        // var data = google.visualization.arrayToDataTable([
        //   ['Task', 'Hours per Day'],
        //   ['Work',     11],
        //   ['Eat',      2],
        //   ['Commute',  2],
        //   ['Watch TV', 2],
        //   ['Sleep',    7]
        // ]);

        const data= google.visualization.arrayToDataTable([
          ['Danh muc', 'so luong'],

          <?php
          foreach ( $thongkesp as $thongke) {
            extract($thongke);
            echo "['$ten_loai', $so_luong],";
          }
          ?>
          
        ]);

        var options = {
          title: 'Thống kê danh mục sản phẩm ',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>


    <!-- //dgang -->
    <script>
        google.charts.load('current',{'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

// Set Data
          const data = google.visualization.arrayToDataTable([
            ['Đơn hàng', 'Số lượng '],
            <?php 
              foreach ( $trangthaidonghang as $tongkedh) {
                extract($tongkedh);
                echo "['$trang_thai', $so_don],";
              }
            ?>
          ]);

// Set Options
          const options = {
            title:'BIỂU ĐỒ THÔNG KÊ ĐƠN HÀNG ',
            is3D:true
          };

// Draw
          const chart = new google.visualization.BarChart(document.getElementById('myChart'));
          chart.draw(data, options);

        }
      </script>

    



    
