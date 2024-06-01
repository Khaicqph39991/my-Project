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
          <a class="app-menu__item active" href="index.php?act=dathang"
            ><i class="app-menu__icon bx bx-task"></i
            ><span class="app-menu__label"
              ><font style="vertical-align: inherit"
                ><font style="vertical-align: inherit">Đặt hàng</font></font
              ></span
            ></a
          >
        </li>
        <li>
          <a class="app-menu__item" href="index.php?act=phantich"
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
      <div class="app-title">
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item active">
            <a href="#"
              ><b
                ><font style="vertical-align: inherit"
                  ><font style="vertical-align: inherit"
                    >Danh sách đặt hàng</font
                  ></font
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
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <!-- <div class="row element-button">
                <div class="col-sm-2">
                  <a
                    class="btn btn-delete btn-sm print-file"
                    type="button"
                    title="In"
                    ><i class="fas fa-print"></i
                    ><font style="vertical-align: inherit"
                      ><font style="vertical-align: inherit">In</font></font
                    ></a
                  >
                </div>
              </div> -->
              <div
                id="sampleTable_wrapper"
                class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer"
              >
                <div class="row">
                  <div class="col-sm-12 col-md-6">
                    <!-- <div class="dataTables_length" id="sampleTable_length">
                      <label
                        ><font style="vertical-align: inherit"
                          ><font style="vertical-align: inherit"
                            >Trình diễn</font
                          ></font
                        ><select
                          name="sampleTable_length"
                          aria-controls="sampleTable"
                          class="form-control form-control-sm"
                          fdprocessedid="itca0e"
                        >
                          <option value="10">10</option>
                          <option value="25">25</option>
                          <option value="50">50</option>
                          <option value="100">100</option></select
                        ><font style="vertical-align: inherit"
                          ><font style="vertical-align: inherit"
                            >Mục</font
                          ></font
                        ></label
                      >
                    </div> -->
                  </div>
                  <!-- <div class="col-sm-12 col-md-6">
                    <div id="sampleTable_filter" class="dataTables_filter">
                      <label
                        ><font style="vertical-align: inherit"
                          ><font style="vertical-align: inherit"
                            >Tìm kiếm:</font
                          ></font
                        ><input
                          type="search"
                          class="form-control form-control-sm"
                          placeholder=""
                          aria-controls="sampleTable"
                      /></label>
                    </div>
                  </div> -->
                  <div class="col-sm-12 col-md-6">
                    <div id="sampleTable_filter" class="dataTables_filter">
                    <form action="index.php?act=dathang" method="post">
                    <input type="text" name="keyw" class="form-control form-control-sm" placeholder="Nhập value cần tìm kiếm">
                    <input type="submit" name="clickOK" value="Lọc đơn hàng" class="loc-sp-list">
                </form>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
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
                          <th
                            class="sorting"
                            tabindex="0"
                            aria-controls="sampleTable"
                            rowspan="1"
                            colspan="1"
                            aria-label=": kích hoạt để sắp xếp cột tăng dần"
                            style="width: 36px"
                          ></th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php 
                        $stt =1;
                        if(empty($listdh)){
                          echo '';
                        }else{
                         foreach ($listdh as $dh) {
                          extract($dh);
                          echo '  <tr role="row" class="odd">
                              <td class="sorting_1">
                                <font style="vertical-align: inherit"
                                  ><font style="vertical-align: inherit"
                                    >'.$stt.'</font
                                  ></font
                                >
                              </td>
                              <td>
                                <font style="vertical-align: inherit"
                                  ><font style="vertical-align: inherit"
                                    >'.$id_dh.'</font
                                  ></font
                                >
                              </td>
                              <td>
                                <font style="vertical-align: inherit"
                                  ><font style="vertical-align: inherit"
                                    >'.$ho_ten.'</font
                                  ></font
                                >
                              </td>
                              <td>
                                <font style="vertical-align: inherit"
                                  ><font style="vertical-align: inherit"
                                    >'.$dia_chi.'</font
                                  ></font
                                >
                              </td>
                              <td>
                                <font style="vertical-align: inherit"
                                  ><font style="vertical-align: inherit"
                                    >'.$email.'</font
                                  ></font
                                >
                              </td>
                              <td>
                                <font style="vertical-align: inherit"
                                  ><font style="vertical-align: inherit"
                                    >'.$sdt.'</font
                                  ></font
                                >
                              </td>
                              <td>
                                <font style="vertical-align: inherit"
                                  ><font style="vertical-align: inherit"
                                    >'.$ghi_chu.'</font
                                  ></font
                                >
                              </td>
                              <td>
                                <font style="vertical-align: inherit"
                                  ><font style="vertical-align: inherit"
                                    >'.$tong_tien_dh.'</font
                                  ></font
                                >
                              </td>
                              <td>
                                <font style="vertical-align: inherit"
                                  ><font style="vertical-align: inherit"
                                    >'.$ngay_dat.'</font
                                  ></font
                                >
                              </td>
                             ';
                              
                             if($trang_thai == 0){
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
                             }elseif($trang_thai == 1){
                              echo ' <td>
                              <span class="badge bg-primary"
                                ><font style="vertical-align: inherit"
                                  ><font style="vertical-align: inherit"
                                    >Chưa thanh toán</font
                                  ></font
                                ></span
                              >
                            </td>';
                              
                             }elseif($trang_thai == 2){
                              echo ' <td>
                              <span class="badge bg-info"
                                ><font style="vertical-align: inherit"
                                  ><font style="vertical-align: inherit"
                                    >Đã thanh toán</font
                                  ></font
                                ></span
                              >
                            </td>';
                              
                             }elseif($trang_thai == 3){
                              echo ' <td>
                              <span class="badge bg-secondary"
                                ><font style="vertical-align: inherit"
                                  ><font style="vertical-align: inherit"
                                    >Đang giao hàng</font
                                  ></font
                                ></span
                              >
                            </td>';
                              
                             }elseif($trang_thai == 4){
                              echo ' <td>
                              <span class="badge bg-success"
                                ><font style="vertical-align: inherit"
                                  ><font style="vertical-align: inherit"
                                    >Xong</font
                                  ></font
                                ></span
                              >
                            </td>';
                              
                             }elseif ($trang_thai == 5) {
                              echo '<td>
                              <span class="badge bg-danger"
                                ><font style="vertical-align: inherit"
                                  ><font style="vertical-align: inherit"
                                    >Hủy bỏ</font
                                  ></font
                                ></span
                              >
                            </td>';
                             }
                             $sua = "index.php?act=suadh&iddh=".$id_dh;
                              echo'
                              <td>
                                <a
                                  href="'.$sua.'"
                                  class="btn btn-primary btn-sm trash"
                                  title="Chỉnh sửa"
                                  ><i
                                    class="fa fa-eye color-"
                                    style="color: red"
                                  ></i
                                ></a>
                              </td>
                            </tr>';
                            $stt++;
                            }
                          }
                          ?>
                      </tbody>
                    </table>
                  </div>
                </div>
                <!-- <div class="row">
                  <div class="col-sm-12 col-md-5">
                    <div
                      class="dataTables_info"
                      id="sampleTable_info"
                      role="status"
                      aria-live="polite"
                    >
                      <font style="vertical-align: inherit"
                        ><font style="vertical-align: inherit"
                          >Hiển thị 1 đến 6 trên 6 mục</font
                        ></font
                      >
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-7">
                    <div
                      class="dataTables_paginate paging_simple_numbers"
                      id="sampleTable_paginate"
                    >
                      <ul class="pagination">
                        <li
                          class="paginate_button page-item previous disabled"
                          id="sampleTable_previous"
                        >
                          <a
                            href="#"
                            aria-controls="sampleTable"
                            data-dt-idx="0"
                            tabindex="0"
                            class="page-link"
                            ><font style="vertical-align: inherit"
                              ><font style="vertical-align: inherit"
                                >Trước</font
                              ></font
                            ></a
                          >
                        </li>
                        <li class="paginate_button page-item active">
                          <a
                            href="#"
                            aria-controls="sampleTable"
                            data-dt-idx="1"
                            tabindex="0"
                            class="page-link"
                            ><font style="vertical-align: inherit"
                              ><font style="vertical-align: inherit"
                                >1</font
                              ></font
                            ></a
                          >
                        </li>
                        <li
                          class="paginate_button page-item next disabled"
                          id="sampleTable_next"
                        >
                          <a
                            href="#"
                            aria-controls="sampleTable"
                            data-dt-idx="2"
                            tabindex="0"
                            class="page-link"
                            ><font style="vertical-align: inherit"
                              ><font style="vertical-align: inherit"
                                >Kế tiếp</font
                              ></font
                            ></a
                          >
                        </li>
                      </ul>
                    </div>
                  </div>
                </div> -->
                <div class="row">
              <div class="col-sm-12 col-md-5">
                <div class="dataTables_info" id="sampleTable_info" role="status" aria-live="polite">
                  <font style="vertical-align: inherit">
                    <font style="vertical-align: inherit">Hiển thị 1 đến <?=$tongbanghi=count($listdh);?> trên <?=$tongtaikhoan=count($tongsodh);?> mục</font>
                  </font>
                </div>
              </div>
              <?php 
              $tranght = $_GET['page'] ?? 1; 
              $lui = max(1, $tranght-1);
              $tiep = min($sotrangdh, $tranght+1);
              ?>
              <div class="col-sm-12 col-md-7">
                <div class="dataTables_paginate paging_simple_numbers" id="sampleTable_paginate">
                  <ul class="pagination">
                    <li class="paginate_button page-item previous" id="sampleTable_previous">
                      <a href="index.php?act=dathang&page=<?=$lui?>" aria-controls="sampleTable" data-dt-idx="0" tabindex="0" class="page-link">
                        <font style="vertical-align: inherit">
                          <font style="vertical-align: inherit">Trước</font>
                        </font>
                      </a>
                    </li>
                    <?php
                      echo $hienthisotrang;
                    ?>
                    <li class="paginate_button page-item next" id="sampleTable_next">
                      <a href="index.php?act=dathang&page=<?=$tiep?>" aria-controls="sampleTable" data-dt-idx="2" tabindex="0" class="page-link">
                        <font style="vertical-align: inherit">
                          <font style="vertical-align: inherit">Kế tiếp</font>
                        </font>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>