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
            <b
              ><font style="vertical-align: inherit"
                ><font style="vertical-align: inherit"
                  ><?= $_SESSION['user']?></font
                ></font
              ></b
            >
          </p>
          <p class="app-sidebar__user-designation">
            <font style="vertical-align: inherit"
              ><font style="vertical-align: inherit"
                >Chào mừng trở lại</font
              ></font
            >
          </p>
        </div>
      </div>
      <hr />
      <ul class="app-menu">
        <li>
          <a class="app-menu__item" href="index.php?act=bangdieukhien"
            ><i class="app-menu__icon bx bx-tachometer"></i
            ><span class="app-menu__label"
              ><font style="vertical-align: inherit"
                ><font style="vertical-align: inherit"
                  >Bảng điều khiển</font
                ></font
              ></span
            ></a
          >
        </li>
        <li>
          <a class="app-menu__item" href="index.php?act=nguoidung"
            ><i class="app-menu__icon bx bx-user-voice"></i
            ><span class="app-menu__label"
              ><font style="vertical-align: inherit"
                ><font style="vertical-align: inherit">Người dùng</font></font
              ></span
            ></a
          >
        </li>
        <li>
          <a class="app-menu__item" href="index.php?act=hethongsanpham"
            ><i class="app-menu__icon bx bx-purchase-tag-alt"></i
            ><span class="app-menu__label"
              ><font style="vertical-align: inherit"
                ><font style="vertical-align: inherit"
                  >Hệ thống sản phẩm</font
                ></font
              ></span
            ></a
          >
        </li>
        <li>
          <a class="app-menu__item" href="index.php?act=dathang"
            ><i class="app-menu__icon bx bx-task"></i
            ><span class="app-menu__label"
              ><font style="vertical-align: inherit"
                ><font style="vertical-align: inherit">Đặt hàng</font></font
              ></span
            ></a
          >
        </li>
        <li>
          <a class="app-menu__item active" href="index.php?act=phantich"
            ><i class="app-menu__icon bx bx-pie-chart-alt-2"></i
            ><span class="app-menu__label"
              ><font style="vertical-align: inherit"
                ><font style="vertical-align: inherit">Phân tích</font></font
              ></span
            ></a
          >
        </li>
        <li>
          <a class="app-menu__item" href="index.php?act=quanlyblog"
            ><i class="app-menu__icon bx bx-news"></i
            ><span class="app-menu__label"
              ><font style="vertical-align: inherit"
                ><font style="vertical-align: inherit">Quản lý blog</font></font
              ></span
            ></a
          >
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
                <a href="#"
                  ><b
                    ><font style="vertical-align: inherit"
                      ><font style="vertical-align: inherit"
                        >Phân tích
                      </font></font
                    ></b
                  ></a
                >
              </li>
            </ul>
            <div id="clock">
              <span class="date"
                ><font style="vertical-align: inherit"
                  ><font style="vertical-align: inherit"
                    ></font
                  ></font
                ></span
              >
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-3">
          <a href="index.php?act=nguoidung">
          <div class="widget-small primary coloured-icon">
            <i class="icon bx bxs-user fa-3x"></i>
            <div class="info">
            
              <h4>
                  <font style="vertical-align: inherit"
                    ><font style="vertical-align: inherit"
                      >Người dùng</font
                    ></font
                  >
                </h4>
                <?php
                if (empty($demuser)) {
                  echo '';
                } else {
                  foreach ($demuser as $us) {
                    extract($us);
                    echo '  <p>
                  <b
                    ><font style="vertical-align: inherit"
                      ><font style="vertical-align: inherit">' . $id_user . ' người</font></font
                    ></b
                  >
                </p>';
                  }
                }
                ?>
            
            </div>
          </div>
        </a>
        </div>
        <div class="col-md-6 col-lg-3">
          <a href="index.php?act=hethongsanpham">
          <div class="widget-small info coloured-icon">
            <i class="icon bx bxs-purchase-tag-alt fa-3x"></i>
            <div class="info">
              <h4>
                <font style="vertical-align: inherit"
                  ><font style="vertical-align: inherit"
                    >Tổng sản phẩm</font
                  ></font
                >
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
            </div>
          </div>
        </a>
        </div>
        <div class="col-md-6 col-lg-3">
          <a href="index.php?act=dathang">
          <div class="widget-small warning coloured-icon">
            <i class="icon fa-3x bx bxs-shopping-bag-alt"></i>
            <div class="info">
              <h4>
                <font style="vertical-align: inherit"
                  ><font style="vertical-align: inherit"
                    >Tổng số đơn hàng</font
                  ></font
                >
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
            </div>
          </div>
        </a>
        </div>
        <div class="col-md-6 col-lg-3">
          <a href="index.php?act=hethongsanpham">
          <div class="widget-small danger coloured-icon">
            <i class="icon fa-3x bx bxs-info-circle"></i>
            <div class="info">
            <h4>
                    <font style="vertical-align: inherit"
                      ><font style="vertical-align: inherit"
                        >Sản phẩm không hoạt động</font
                      ></font
                    >
                  </h4>
                  <?php
                  if (empty($demspkhonghd)) {
                    echo '';
                  } else {
                    foreach ($demspkhonghd as $spkhd) {
                      extract($spkhd);
                      echo '  <p>
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
            </div>
          </div>
        </a>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-3">
          <div class="widget-small primary coloured-icon">
            <i class="icon fa-3x bx bxs-chart"></i>
            <div class="info">
              <h4>
                <font style="vertical-align: inherit"
                  ><font style="vertical-align: inherit"
                    >Tổng Thu Nhập</font
                  ></font
                >
              </h4>
              <?php
              if (empty($tongtiendh)) {
                echo '';
              } else {
                json_encode($tongtiendh);
                foreach ($tongtiendh as $item) {
                  echo '<p>
                <b
                  ><font style="vertical-align: inherit"
                    ><font style="vertical-align: inherit">
                      ' . $item . ' VNĐ
                    </font></font
                  ></b
                >
              </p>';
                }
              }
              ?>
          
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <a href="index.php?act=listchuyenmuc">
          <div class="widget-small info coloured-icon">
          <i class="fas fa-bookmark icon fa-3x" style="color: #254b8e;"></i>
            <div class="info">
              <h4>
                <font style="vertical-align: inherit"
                  ><font style="vertical-align: inherit"
                    >Danh mục</font
                  ></font
                >
              </h4>
              <?php
              if (empty($demdanhmuc)) {
                echo '';
              } else {
                foreach ($demdanhmuc as $dm) {
                  extract($dm);
                  echo '   <p>
                <b
                  ><font style="vertical-align: inherit"
                    ><font style="vertical-align: inherit"
                      >' . $id_loai . ' danh mục</font
                    ></font
                  ></b
                >
              </p> ';
                }
              }
              ?>
            </div>
          </div>
        </a>
        </div>
        <div class="col-md-6 col-lg-3">
          <a href="index.php?act=hethongsanpham">
          <div class="widget-small warning coloured-icon">
            <i class="icon fa-3x bx bxs-tag-x"></i>
            <div class="info">
              <h4>
                <font style="vertical-align: inherit"
                  ><font style="vertical-align: inherit">hết hàng</font></font
                >
              </h4>
              <?php
              if (empty($demsphethang)) {
                echo '';
              } else {
                foreach ($demsphethang as $sphh) {
                  extract($sphh);
                  echo '   <p>
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
            </div>
          </div>
        </a>
        </div>
        <div class="col-md-6 col-lg-3">
          <a href="index.php?act=dathang">
          <div class="widget-small danger coloured-icon">
            <i class="icon fa-3x bx bxs-receipt"></i>
            <div class="info">
              <h4>
                <font style="vertical-align: inherit"
                  ><font style="vertical-align: inherit"
                    >Đơn hàng bị hủy</font
                  ></font
                >
              </h4>
              <?php
              if (empty($demdhhuy)) {
                echo '';
              } else {
                foreach ($demdhhuy as $dhhuy) {
                  extract($dhhuy);
                  echo '     <p>
                <b
                  ><font style="vertical-align: inherit"
                    ><font style="vertical-align: inherit">
                      ' . $id_dh . ' đơn hàng
                    </font></font
                  ></b
                >
              </p> ';
                }
              }
              ?>
            </div>
          </div>
        </a>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div>
              <h3 class="tile-title">
                <font style="vertical-align: inherit"
                  ><font style="vertical-align: inherit"
                    >ĐƠN HÀNG BỊ HỦY </font
                  ></font
                >
              </h3>
            </div>
            <div class="tile-body">
              <?php 
              if (isset($dsbihuy) && !empty($dsbihuy)) {
                echo'
            <table
                      class="table table-hover table-bordered table-responsive-lg dataTable no-footer"
                      id="sampleTable"
                      role="grid"
                      aria-describedby="sampleTable_info"
                    >
                      <thead>
                        <tr role="row">
                          <th
                            class="sorting_asc"
                            tabindex="0"
                            aria-controls="sampleTable"
                            rowspan="1"
                            colspan="1"
                            aria-sort="ascending"
                            aria-label="STT: kích hoạt để sắp xếp cột giảm dần"
                            style="width: 26.2593px"
                          >
                            <font style="vertical-align: inherit"
                              ><font style="vertical-align: inherit"
                                >STT</font
                              ></font
                            >
                          </th>
                          <th
                            class="sorting"
                            tabindex="0"
                            aria-controls="sampleTable"
                            rowspan="1"
                            colspan="1"
                            aria-label="Mã: kích hoạt để sắp xếp cột tăng dần"
                            style="width: 32.2593px"
                          >
                            <font style="vertical-align: inherit"
                              ><font style="vertical-align: inherit"
                                >ID</font
                              ></font
                            >
                          </th>
                          <th
                            class="sorting"
                            tabindex="0"
                            aria-controls="sampleTable"
                            rowspan="1"
                            colspan="1"
                            aria-label="Khách hàng: kích hoạt để sắp xếp cột tăng dần"
                            style="width: 61.2593px"
                          >
                            <font style="vertical-align: inherit"
                              ><font style="vertical-align: inherit"
                                >Khách hàng</font
                              ></font
                            >
                          </th>
                          <th
                            class="sorting"
                            tabindex="0"
                            aria-controls="sampleTable"
                            rowspan="1"
                            colspan="1"
                            aria-label="Địa chỉ: kích hoạt để sắp xếp cột tăng dần"
                            style="width: 52.2593px"
                          >
                            <font style="vertical-align: inherit"
                              ><font style="vertical-align: inherit"
                                >Địa chỉ</font
                              ></font
                            >
                          </th>
                          <th
                            class="sorting"
                            tabindex="0"
                            aria-controls="sampleTable"
                            rowspan="1"
                            colspan="1"
                            aria-label="Email: kích hoạt để sắp xếp cột tăng dần"
                            style="width: 171.259px"
                          >
                            <font style="vertical-align: inherit"
                              ><font style="vertical-align: inherit"
                                >E-mail</font
                              ></font
                            >
                          </th>
                          <th
                            class="sorting"
                            tabindex="0"
                            aria-controls="sampleTable"
                            rowspan="1"
                            colspan="1"
                            aria-label="Số điện thoại: kích hoạt để sắp xếp cột tăng dần"
                            style="width: 78.2593px"
                          >
                            <font style="vertical-align: inherit"
                              ><font style="vertical-align: inherit"
                                >Số điện thoại</font
                              ></font
                            >
                          </th>
                          <th
                            class="sorting"
                            tabindex="0"
                            aria-controls="sampleTable"
                            rowspan="1"
                            colspan="1"
                            aria-label="Thông báo: kích hoạt để sắp xếp cột tăng dần"
                            style="width: 57.2593px"
                          >
                            <font style="vertical-align: inherit"
                              ><font style="vertical-align: inherit"
                                >Ghi chú</font
                              ></font
                            >
                          </th>
                          <th
                            class="sorting"
                            tabindex="0"
                            aria-controls="sampleTable"
                            rowspan="1"
                            colspan="1"
                            aria-label="Tổng hóa đơn: kích hoạt để sắp xếp cột tăng dần"
                            style="width: 76.2593px"
                          >
                            <font style="vertical-align: inherit"
                              ><font style="vertical-align: inherit"
                                >Hóa đơn tổng cộng</font
                              ></font
                            >
                          </th>
                          <th
                            class="sorting"
                            tabindex="0"
                            aria-controls="sampleTable"
                            rowspan="1"
                            colspan="1"
                            aria-label="Ngày đặt hàng: kích hoạt để sắp xếp cột tăng dần"
                            style="width: 54.2593px"
                          >
                            <font style="vertical-align: inherit"
                              ><font style="vertical-align: inherit"
                                >Ngày đặt hàng</font
                              ></font
                            >
                          </th>
                          <th
                            class="sorting"
                            tabindex="0"
                            aria-controls="sampleTable"
                            rowspan="1"
                            colspan="1"
                            aria-label="Trạng thái: kích hoạt để sắp xếp cột tăng dần"
                            style="width: 80.2593px"
                          >
                            <font style="vertical-align: inherit"
                              ><font style="vertical-align: inherit"
                                >Trạng thái</font
                              ></font
                            >
                          </th>
                        </tr>
                      </thead>';}?>
                      <tbody>
                      <?php
                      $stt = 1;
                      if (empty($dsbihuy)) {
                        echo '';
                      } else {
                        foreach ($dsbihuy as $dhhuy) {
                          extract($dhhuy);
                          echo '  <tr role="row" class="odd">
                         
                              <td class="sorting_1">
                                <font style="vertical-align: inherit"
                                  ><font style="vertical-align: inherit"
                                    >' . $stt . '</font
                                  ></font
                                >
                              </td>
                              <td>
                                <font style="vertical-align: inherit"
                                  ><font style="vertical-align: inherit"
                                    >' . $id_dh . '</font
                                  ></font
                                >
                              </td>
                              <td>
                                <font style="vertical-align: inherit"
                                  ><font style="vertical-align: inherit"
                                    >' . $ho_ten . '</font
                                  ></font
                                >
                              </td>
                              <td>
                                <font style="vertical-align: inherit"
                                  ><font style="vertical-align: inherit"
                                    >' . $dia_chi . '</font
                                  ></font
                                >
                              </td>
                              <td>
                                <font style="vertical-align: inherit"
                                  ><font style="vertical-align: inherit"
                                    >' . $email . '</font
                                  ></font
                                >
                              </td>
                              <td>
                                <font style="vertical-align: inherit"
                                  ><font style="vertical-align: inherit"
                                    >' . $sdt . '</font
                                  ></font
                                >
                              </td>
                              <td>
                                <font style="vertical-align: inherit"
                                  ><font style="vertical-align: inherit"
                                    >' . $ghi_chu . '</font
                                  ></font
                                >
                              </td>
                              <td>
                                <font style="vertical-align: inherit"
                                  ><font style="vertical-align: inherit"
                                    >' . $tong_tien_dh . '</font
                                  ></font
                                >
                              </td>
                              <td>
                                <font style="vertical-align: inherit"
                                  ><font style="vertical-align: inherit"
                                    >' . $ngay_dat . '</font
                                  ></font
                                >
                              </td>
                              <td>
                              <span class="badge bg-danger"
                                ><font style="vertical-align: inherit"
                                  ><font style="vertical-align: inherit"
                                    >Hủy bỏ</font
                                  ></font
                                ></span
                              >
                            </td>
                            </tr>';
                          $stt++;
                        }
                      }
                      ?>
                      
                        <!-- <tr role="row" class="even">
                          <td class="sorting_1">
                            <font style="vertical-align: inherit"
                              ><font style="vertical-align: inherit"
                                >2</font
                              ></font
                            >
                          </td>
                          <td>
                            <font style="vertical-align: inherit"
                              ><font style="vertical-align: inherit"
                                >21</font
                              ></font
                            >
                          </td>
                          <td>
                            <font style="vertical-align: inherit"
                              ><font style="vertical-align: inherit"
                                >Cao Quốc Khải</font
                              ></font
                            >
                          </td>
                          <td>
                            <font style="vertical-align: inherit"
                              ><font style="vertical-align: inherit"
                                >Hà Nội</font
                              ></font
                            >
                          </td>
                          <td>
                            <font style="vertical-align: inherit"
                              ><font style="vertical-align: inherit"
                                >hdksagfd@gmail.com</font
                              ></font
                            >
                          </td>
                          <td>
                            <font style="vertical-align: inherit"
                              ><font style="vertical-align: inherit"
                                >09123462</font
                              ></font
                            >
                          </td>
                          <td>
                            <font style="vertical-align: inherit"
                              ><font style="vertical-align: inherit"
                                >1</font
                              ></font
                            >
                          </td>
                          <td>
                            <font style="vertical-align: inherit"
                              ><font style="vertical-align: inherit"
                                >3.440.000đ</font
                              ></font
                            >
                          </td>
                          <td>
                            <font style="vertical-align: inherit"
                              ><font style="vertical-align: inherit"
                                >2023-08-31 01:53:53</font
                              ></font
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
                          <td>
                            <a
                              href="index.php?act=chitietdonhang"
                              class="btn btn-primary btn-sm trash"
                              title="Chỉnh sửa"
                              ><i
                                class="fa fa-eye color-"
                                style="color: red"
                              ></i
                            ></a>
                          </td>
                        </tr>
                        <tr role="row" class="odd">
                          <td class="sorting_1">
                            <font style="vertical-align: inherit"
                              ><font style="vertical-align: inherit"
                                >4</font
                              ></font
                            >
                          </td>
                          <td>
                            <font style="vertical-align: inherit"
                              ><font style="vertical-align: inherit"
                                >19</font
                              ></font
                            >
                          </td>
                          <td>
                            <font style="vertical-align: inherit"
                              ><font style="vertical-align: inherit"
                                >Mai Tuấn Hà</font
                              ></font
                            >
                          </td>
                          <td>
                            <font style="vertical-align: inherit"
                              ><font style="vertical-align: inherit"
                                >Thạch Thất - Hà Nội</font
                              ></font
                            >
                          </td>
                          <td>
                            <font style="vertical-align: inherit"
                              ><font style="vertical-align: inherit"
                                >kudsahgfu@gmail.com</font
                              ></font
                            >
                          </td>
                          <td>
                            <font style="vertical-align: inherit"
                              ><font style="vertical-align: inherit"
                                >02343247654</font
                              ></font
                            >
                          </td>
                          <td>
                            <font style="vertical-align: inherit"
                              ><font style="vertical-align: inherit"
                                >0</font
                              ></font
                            >
                          </td>
                          <td>
                            <font style="vertical-align: inherit"
                              ><font style="vertical-align: inherit"
                                >5,462,100đ</font
                              ></font
                            >
                          </td>
                          <td>
                            <font style="vertical-align: inherit"
                              ><font style="vertical-align: inherit"
                                >2023-08-30 02:18:24</font
                              ></font
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
                          <td>
                            <a
                              href="index.php?act=chitietdonhang"
                              class="btn btn-primary btn-sm trash"
                              title="Chỉnh sửa"
                              ><i
                                class="fa fa-eye color-"
                                style="color: red"
                              ></i
                            ></a>
                          </td>
                        </tr>
                        <tr role="row" class="even">
                          <td class="sorting_1">
                            <font style="vertical-align: inherit"
                              ><font style="vertical-align: inherit"
                                >5</font
                              ></font
                            >
                          </td>
                          <td>
                            <font style="vertical-align: inherit"
                              ><font style="vertical-align: inherit"
                                >18</font
                              ></font
                            >
                          </td>
                          <td>
                            <font style="vertical-align: inherit"
                              ><font style="vertical-align: inherit"
                                >Hoàng Tiến Thành</font
                              ></font
                            >
                          </td>
                          <td>
                            <font style="vertical-align: inherit"
                              ><font style="vertical-align: inherit"
                                >Hà Nội</font
                              ></font
                            >
                          </td>
                          <td>
                            <font style="vertical-align: inherit"
                              ><font style="vertical-align: inherit"
                                >sd9ie9iw@gmail.com</font
                              ></font
                            >
                          </td>
                          <td>
                            <font style="vertical-align: inherit"
                              ><font style="vertical-align: inherit"
                                >0123456789</font
                              ></font
                            >
                          </td>
                          <td>
                            <font style="vertical-align: inherit"
                              ><font style="vertical-align: inherit"
                                >0</font
                              ></font
                            >
                          </td>
                          <td>
                            <font style="vertical-align: inherit"
                              ><font style="vertical-align: inherit"
                                >16,444,560đ</font
                              ></font
                            >
                          </td>
                          <td>
                            <font style="vertical-align: inherit"
                              ><font style="vertical-align: inherit"
                                >2023-08-30 00:27:51</font
                              ></font
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
                          <td>
                            <a
                              href="index.php?act=chitietdonhang"
                              class="btn btn-primary btn-sm trash"
                              title="Chỉnh sửa"
                              ><i
                                class="fa fa-eye color-"
                                style="color: red"
                              ></i
                            ></a>
                          </td>
                        </tr> -->
                      </tbody>
                      <?php
                      if (isset($dsbihuy) && !empty($dsbihuy)) {
                      echo'
             </table>';}?>
            </div
            >
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">
              <font style="vertical-align: inherit"
                ><font style="vertical-align: inherit"
                  >DỮ LIỆU HÀNG THÁNG</font
                ></font
              >
            </h3>
            <div id="donutchart" style="width: 450px; height: 300px;"></div>

            <!-- <div class="embed-responsive embed-responsive-16by9">
              <canvas
                class="embed-responsive-item"
                id="lineChartDemo"
                width="184"
                height="103"
                style="width: 184px; height: 103px"
              ></canvas>
            </div> -->
          </div>
        </div>
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">
          
              <font style="vertical-align: inherit"
                ><font style="vertical-align: inherit"
                  >THỐNG KÊ BÁN HÀNG</font
                ></font
              >
            </h3>
            <div
              id="myChart" style="width:100%; width:500px; height:450px; align-items: center">
      </div>
            <!-- <div class="embed-responsive embed-responsive-16by9">
              <canvas
                class="embed-responsive-item"
                id="barChartDemo"
                width="184"
                height="103"
                style="width: 184px; height: 103px"
              ></canvas>
            </div> -->
          </div>
        </div>
      </div>

      <div class="text-center" style="font-size: 13px">
        <p>
          <b>
            <font style="vertical-align: inherit"
              >Bản Quyền &copy; 2023 . Thuộc Về Nhóm Duy Dự Án 1 FPT Poly.</font
            ></b>
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

