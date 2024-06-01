    <!-- modal xoa start -->
    <!-- <div class="modal fade" id="myModalxoa">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="swal-text p-4">
            <h3>Cảnh báo</h3>
            <h4>Bạn có chắc không?</h4>
          </div>
          <div class="swal-footer">
            <div class="justify-content-center d-flex m-3">
              <button class="btn btn-cancel mr-2" data-bs-dismiss="modal">
                Hủy
              </button>
              <button class="btn btn-save">Xóa</button>
            </div>
          </div>
        </div>
      </div>
    </div> -->

    <!-- modal xoa end -->

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
          <a class="app-menu__item active" href="index.php?act=quanlyblog"
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
                    >Quản lý blog</font
                  ></font
                ></b
              ></a
            >
          </li>
        </ul>
        <div id="clock">
          <span class="date">
            </span
          >
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="row element-button">
                <div class="col-sm-2">
                  <a
                    class="btn btn-add btn-sm"
                    href="index.php?act=addblog"
                    title="Thêm mới"
                    ><i class="fas fa-plus"></i
                    ><font style="vertical-align: inherit"
                      ><font style="vertical-align: inherit">
                        Thêm mới</font
                      ></font
                    ></a
                  >
                </div>
              </div>
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
                        >
                          <option value="10">
                            <font style="vertical-align: inherit"
                              ><font style="vertical-align: inherit"
                                >10</font
                              ></font
                            >
                          </option>
                          <option value="25">
                            <font style="vertical-align: inherit"
                              ><font style="vertical-align: inherit"
                                >25</font
                              ></font
                            >
                          </option>
                          <option value="50">
                            <font style="vertical-align: inherit"
                              ><font style="vertical-align: inherit"
                                >50</font
                              ></font
                            >
                          </option>
                          <option value="100">
                            <font style="vertical-align: inherit"
                              ><font style="vertical-align: inherit"
                                >100</font
                              ></font
                            >
                          </option></select
                        ><font style="vertical-align: inherit"
                          ><font style="vertical-align: inherit"
                            >Mục</font
                          ></font
                        ></label
                      >
                    </div> -->
                  </div>
                  <div class="col-sm-12 col-md-6">
                <div id="sampleTable_filter" class="dataTables_filter">
                <form action="index.php?act=quanlyblog" method="post" >
                    <input type="text" name="keyw" class="form-control form-control-sm" placeholder="Nhập value tìm kiếm">
      
                    <input type="submit" name="clickOK" value="Lọc blog" class="loc-sp-list">
                </form>
                </div>
              </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <table
                      class="table table-hover table-bordered table-responsive-lg dataTable no-footer"
                      cellpadding="0"
                      cellspacing="0"
                      border="0"
                      id="sampleTable"
                      role="grid"
                      aria-describedby="sampleTable_info"
                    >
                      <thead>
                        <tr role="row">
                          <th
                            width="15"
                            class="sorting_asc"
                            tabindex="0"
                            aria-controls="sampleTable"
                            rowspan="1"
                            colspan="1"
                            aria-sort="ascending"
                            aria-label="STT: kích hoạt để sắp xếp cột giảm dần"
                            style="width: 26px"
                          >
                            <font style="vertical-align: inherit"
                              ><font style="vertical-align: inherit"
                                >STT</font
                              ></font
                            >
                          </th>
                          <th
                            width="15"
                            class="sorting_asc"
                            tabindex="0"
                            aria-controls="sampleTable"
                            rowspan="1"
                            colspan="1"
                            aria-sort="ascending"
                            aria-label="STT: kích hoạt để sắp xếp cột giảm dần"
                            style="width: 26px"
                          >
                            <font style="vertical-align: inherit"
                              ><font style="vertical-align: inherit"
                                >ID</font
                              ></font
                            >
                          </th>
                          <th
                            width="300"
                            class="sorting"
                            tabindex="0"
                            aria-controls="sampleTable"
                            rowspan="1"
                            colspan="1"
                            aria-label="Tiêu đề: kích hoạt để sắp xếp cột tăng dần"
                            style="width: 300px"
                          >
                            <font style="vertical-align: inherit"
                              ><font style="vertical-align: inherit"
                                >Tiêu đề</font
                              ></font
                            >
                          </th>
                          <th
                            width="80"
                            class="sorting"
                            tabindex="0"
                            aria-controls="sampleTable"
                            rowspan="1"
                            colspan="1"
                            aria-label="Tác giả: kích hoạt để sắp xếp cột tăng dần"
                            style="width: 80px"
                          >
                            <font style="vertical-align: inherit"
                              ><font style="vertical-align: inherit"
                                >Tác giả</font
                              ></font
                            >
                          </th>
                          <th
                            width="50"
                            class="sorting"
                            tabindex="0"
                            aria-controls="sampleTable"
                            rowspan="1"
                            colspan="1"
                            aria-label="Hình ảnh: kích hoạt để sắp xếp cột tăng dần"
                            style="width: 50px"
                          >
                            <font style="vertical-align: inherit"
                              ><font style="vertical-align: inherit"
                                >Hình ảnh</font
                              ></font
                            >
                          </th>
                          <th
                            class="sorting"
                            tabindex="0"
                            aria-controls="sampleTable"
                            rowspan="1"
                            colspan="1"
                            aria-label="Nội dung: kích hoạt để sắp xếp cột tăng dần"
                            style="width: 216px"
                          >
                            <font style="vertical-align: inherit"
                              ><font style="vertical-align: inherit"
                                >Nội dung</font
                              ></font
                            >
                          </th>
                          <th
                            class="sorting"
                            tabindex="0"
                            aria-controls="sampleTable"
                            rowspan="1"
                            colspan="1"
                            aria-label="Ngày: kích hoạt để sắp xếp cột tăng dần"
                            style="width: 71px"
                          >
                            <font style="vertical-align: inherit"
                              ><font style="vertical-align: inherit"
                                >Ngày</font
                              ></font
                            >
                          </th>
                          <th
                            width="100"
                            class="sorting"
                            tabindex="0"
                            aria-controls="sampleTable"
                            rowspan="1"
                            colspan="1"
                            aria-label=": kích hoạt để sắp xếp cột tăng dần"
                            style="width: 101px"
                          ></th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                   $stt=1;
                    if (empty($listblog)) {
                      echo '';
                    } else {
                      foreach ( $listblog as $dscacblog){
                        extract($dscacblog);
                        $hinh = "../" . $img_path . $anh_blog;
                        echo '
                        <tr role="row" class="odd">
                        <td class="sorting_1">
                          <font style="vertical-align: inherit"
                            ><font style="vertical-align: inherit"
                              >'.$stt.'</font
                            ></font
                          >
                        </td>
                        <td class="sorting_1">
                          <font style="vertical-align: inherit"
                            ><font style="vertical-align: inherit"
                              >'.$id_blog.'</font
                            ></font
                          >
                        </td>
                        <td>
                          <font style="vertical-align: inherit"
                            >'.$tieu_de.'</font>
                        </td>
                        <td>
                          <font style="vertical-align: inherit">'.$tac_gia.'</font>
                        </td>
                        <td>
                          <img src="'.$hinh.'" width="100px" height="100px" />
                        </td>
                        <td>
                          <p>'.$noi_dung.'</p>
                        </td>
                        <td>
                          <font style="vertical-align: inherit"
                            >'.$ngay_them.'</font
                          >
                        </td>
                        <td class="table-td-center">
                        ';
                        $xoa= "index.php?act=xoablog&id_blog=".$id_blog;
                        $sua = "index.php?act=editblog&idblog=".$id_blog;
                        echo'
                        <a href="'.$xoa.'">
                        <button type="button" class="btn btn-primary btn-sm trash" data-bs-toggle="modal" data-bs-target="#myModalxoa">
                          <i class="fas fa-trash-alt"></i>
                        </button>
                        </a>


                        <a href="'.$sua.'">
                        <button
                        type="button" class="btn btn-primary btn-sm edit" data-bs-toggle="modal" data-bs-target="#myModal"
                        >
                        <i class="fas fa-edit"></i>
                        </button>
                        </a>


                        </td>
                      </tr>
                      ';
                      $stt++;
                      }
                    }
                    ?>
                        <!-- <tr role="row" class="odd">
                          <td class="sorting_1">
                            <font style="vertical-align: inherit"
                              ><font style="vertical-align: inherit"
                                >1</font
                              ></font
                            >
                          </td>
                          <td>
                            <font style="vertical-align: inherit"
                              >Báo cáo doanh thu tháng
                            </font>
                          </td>
                          <td>
                            <font style="vertical-align: inherit">Admin</font>
                          </td>
                          <td>
                            <img src="" width="50px" />
                          </td>
                          <td>
                            <p>Báo cáo</p>
                          </td>
                          <td>
                            <font style="vertical-align: inherit"
                              >Ngày 29 tháng 8 năm 2023, 2:46 chiều</font
                            >
                          </td>
                          <td class="table-td-center">
                            <button
                              type="button"
                              class="btn btn-primary btn-sm trash"
                              data-bs-toggle="modal"
                              data-bs-target="#myModalxoa"
                            >
                              <i class="fas fa-trash-alt"></i>
                            </button>
                            <a
                              href="index.php?act=editblog"
                              class="btn btn-primary btn-sm edit"
                              type="button"
                              title="Chỉnh sửa"
                              ><i class="fas fa-edit"></i>
                            </a>
                          </td>
                        </tr> -->
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
                              >Báo vlog</font
                            >
                          </td>
                          <td>
                            <font style="vertical-align: inherit">admin2</font>
                          </td>
                          <td>
                            <img src="" width="50px" />
                          </td>
                          <td>
                            <p>Báo cáo</p>
                          </td>
                          <td>
                            <font style="vertical-align: inherit"
                              >29 tháng 8 năm 2023, 2:40 chiều</font
                            >
                          </td>
                          <td class="table-td-center">
                            <button
                              type="button"
                              class="btn btn-primary btn-sm trash"
                              data-bs-toggle="modal"
                              data-bs-target="#myModalxoa"
                            >
                              <i class="fas fa-trash-alt"></i>
                            </button>
                            <a
                              href="index.php?act=editblog"
                              class="btn btn-primary btn-sm edit"
                              type="button"
                              title="Chỉnh sửa"
                              ><i class="fas fa-edit"></i>
                            </a>
                          </td>
                        </tr> -->

                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="row">
              <div class="col-sm-12 col-md-5">
                <div class="dataTables_info" id="sampleTable_info" role="status" aria-live="polite">
                  <font style="vertical-align: inherit">
                    <font style="vertical-align: inherit">Hiển thị 1 đến <?=$tongbanghi=count($listblog);?> trên <?=$tongbl=count($tongsobl);?> mục</font>
                  </font>
                </div>
              </div>
              <?php 
              $tranght = $_GET['page'] ?? 1; 
              $lui = max(1, $tranght-1);
              $tiep = min($sotrangbl, $tranght+1);
              ?>
              <div class="col-sm-12 col-md-7">
                <div class="dataTables_paginate paging_simple_numbers" id="sampleTable_paginate">
                  <ul class="pagination">
                    <li class="paginate_button page-item previous" id="sampleTable_previous">
                      <a href="index.php?act=quanlyblog&page=<?=$lui?>" aria-controls="sampleTable" data-dt-idx="0" tabindex="0" class="page-link">
                        <font style="vertical-align: inherit">
                          <font style="vertical-align: inherit">Trước</font>
                        </font>
                      </a>
                    </li>
                    <?php
                      echo $hienthisotrang;
                    ?>
                    <li class="paginate_button page-item next" id="sampleTable_next">
                      <a href="index.php?act=quanlyblog&page=<?=$tiep?>" aria-controls="sampleTable" data-dt-idx="2" tabindex="0" class="page-link">
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