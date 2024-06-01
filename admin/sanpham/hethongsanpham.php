<!-- modal star -->
<!-- <div class="modal fade " id="myModal">
<div class="modal-dialog">
<div class="modal-content">
  <div class="swal-text p-4">
    <h3>Cảnh báo</h3>
    <h4>Bạn có chắc không?</h4>
  </div>
      <div class="swal-footer">
        <div class="justify-content-center d-flex m-3" >
          <button class="btn btn-cancel mr-2" data-bs-dismiss="modal" >Hủy</button>
          <button class="btn btn-save" >Xóa</button>
        </div>
      </div>
      </div>
</div> -->


</div>
</div>
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
      <a class="app-menu__item active" href="index.php?act=hethongsanpham"
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
                >Hệ thống sản phẩm</font
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
          <div class="row element-button">
            <div class="col-sm-2">
              <a
                class="btn btn-add btn-sm"
                href="index.php?act=addsanpham"
                title="Thêm Mới"
                ><i class="fas fa-plus"></i
                ><font style="vertical-align: inherit"
                  ><font style="vertical-align: inherit">
                    Thêm mới</font
                  ></font
                ></a
              >
            </div>
            <div class="col-sm-2">
              <a
                class="btn btn-delete btn-sm nhap-tu-file"
                type="button"
                title="Danh Mục"
                href="index.php?act=listchuyenmuc"
                ><i class="fa fa-list" aria-hidden="true"></i
                ><font style="vertical-align: inherit"
                  ><font style="margin-left: 10px;">Danh Mục</font></font
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
                      fdprocessedid="3ljsdl"
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
                <form action="index.php?act=hethongsanpham" method="post">
                    <input type="text" name="keyw" class="form-control form-control-sm" placeholder="Nhập tên sản phẩm">
                    <select name="iddm" id="" class="sel-search-listsp ">
                        <option value="0" selected>Tất cả</option>
                        <?php
                        foreach ($danhmuc as $spdm) {
                            extract($spdm);
                            echo '<option value="' . $id_loai . '">' . $ten_loai . '</option>';
                        }
                        ?>
                    </select>
                    <input type="submit" name="clickOK" value="Lọc sản phẩm" class="loc-sp-list">
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
                        aria-label="Id: kích hoạt để sắp xếp cột tăng dần"
                        style="width: 15.2593px"
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
                        aria-label="Danh mục: kích hoạt để sắp xếp cột tăng dần"
                        style="width: 60.2593px"
                      >
                        <font style="vertical-align: inherit"
                          ><font style="vertical-align: inherit"
                            >Danh Mục</font
                          ></font
                        >
                      </th>
                      <th
                        class="sorting"
                        tabindex="0"
                        aria-controls="sampleTable"
                        rowspan="1"
                        colspan="1"
                        aria-label="Tên: kích hoạt để sắp xếp cột tăng dần"
                        style="width: 68.2593px"
                      >
                        <font style="vertical-align: inherit"
                          ><font style="vertical-align: inherit"
                            >Tên</font
                          ></font
                        >
                      </th>
                      <th
                        class="sorting"
                        tabindex="0"
                        aria-controls="sampleTable"
                        rowspan="1"
                        colspan="1"
                        aria-label="Giá: kích hoạt để sắp xếp cột tăng dần"
                        style="width: 63.2593px"
                      >
                        <font style="vertical-align: inherit"
                          ><font style="vertical-align: inherit"
                            >Giá</font
                          ></font
                        >
                      </th>
                      <th
                        class="sorting"
                        tabindex="0"
                        aria-controls="sampleTable"
                        rowspan="1"
                        colspan="1"
                        aria-label="Discout: kích hoạt để sắp xếp cột tăng dần"
                        style="width: 47.2593px"
                      >
                        <font style="vertical-align: inherit"
                          ><font style="vertical-align: inherit"
                            >Giá sale</font
                          ></font
                        >
                      </th>
                      <th
                        class="sorting"
                        tabindex="0"
                        aria-controls="sampleTable"
                        rowspan="1"
                        colspan="1"
                        aria-label="Số lượng: kích hoạt để sắp xếp cột tăng dần"
                        style="width: 53.2593px"
                      >
                        <font style="vertical-align: inherit"
                          ><font style="vertical-align: inherit"
                            >Số lượng</font
                          ></font
                        >
                      </th>
                      <th
                        class="sorting"
                        tabindex="0"
                        aria-controls="sampleTable"
                        rowspan="1"
                        colspan="1"
                        aria-label="Hình ảnh: kích hoạt để sắp xếp cột tăng dần"
                        style="width: 111.259px"
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
                        aria-label="Số lượng: kích hoạt để sắp xếp cột tăng dần"
                        style="width: 75.2593px"
                      >
                        <font style="vertical-align: inherit"
                          ><font style="vertical-align: inherit"
                            >Ngày nhập hàng</font
                          ></font
                        >
                      </th>
                      <th
                        class="sorting"
                        tabindex="0"
                        aria-controls="sampleTable"
                        rowspan="1"
                        colspan="1"
                        aria-label="Số lượng: kích hoạt để sắp xếp cột tăng dần"
                        style="width: 75.2593px"
                      >
                        <font style="vertical-align: inherit"
                          ><font style="vertical-align: inherit"
                            >Mô tả</font
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
                            >Tình trạng </font
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
                        aria-label="Trạng thái: kích hoạt để sắp xếp cột tăng dần"
                        style="width: 76.2593px"
                      >
                        <font style="vertical-align: inherit"
                          ><font style="vertical-align: inherit"
                            >Hành Động</font
                          ></font
                        >
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <!-- ==== Start product row ==== -->

                    <!-- ==== end product row ==== -->
                    <?php
                    $stt = 1;
                    if (empty($dssp)) {
                      echo '';
                    } else {
                      foreach ($dssp as $dscacsp) {
                        extract($dscacsp);
                        $hinh = "../" . $img_path . $anh_chinh;
                        echo '
                        <tr role="row" class="odd">
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
                              >' . $id_sp . '</font
                            ></font
                          >
                        </td>
                        <td>
                        <font style="vertical-align: inherit">
                        ';
                        $tendmsanpham = loadall_loaisptheoid($id_sp);
                        $index = 0;
                        $tongitem = count($tendmsanpham);
                        foreach ($tendmsanpham as $namedm) {
                          extract($namedm);
                          echo $ten_loai;
                          if ($index < $tongitem - 1) {
                            echo ",";
                          }else {
                            echo ".";
                          }
                        }
                      echo'
                      </font>
                      </td>
                        <td>
                          <font style="vertical-align: inherit"
                            ><font style="vertical-align: inherit"
                              >' . $ten_sp . '</font
                            ></font
                          >
                        </td>
                        <td>
                          <font style="vertical-align: inherit"
                            ><font style="vertical-align: inherit"
                              >' . $gia . '</font
                            ></font
                          >
                        </td>
                        <td>
                          <font style="vertical-align: inherit"
                            ><font style="vertical-align: inherit"
                              >' . $gia_sale . '</font
                            ></font
                          >
                        </td>
                        <td>
                          <font style="vertical-align: inherit"
                            ><font style="vertical-align: inherit"
                              >' . $so_luong . '</font
                            ></font
                          >
                        </td>
                        <td>
                          <img
                            src="' . $hinh . '"
                            alt=""
                            height="50px;"
                          />
                        </td>

                        <td>
                          <font style="vertical-align: inherit"
                            ><font style="vertical-align: inherit"
                              >' . $ngay_nhap . '</font
                            ></font
                          >
                        </td>

                        <td>
                          <font style="vertical-align: inherit"
                            ><font style="vertical-align: inherit"
                              >' . $mo_ta . '</font
                            ></font
                          >
                        </td>
                        ';

                        if ($so_luong == 0) {
                          echo '
                          <td>
                          <span class="badge bg-danger"
                            ><font style="vertical-align: inherit"
                              ><font style="vertical-align: inherit"
                                > Hết hàng  </font
                              ></font
                            ></span
                          >
                        </td>
                          ';
                        } else {
                          echo ' <td>
                          <span class="badge bg-success"
                            ><font style="vertical-align: inherit"
                              ><font style="vertical-align: inherit"
                                > Còn hàng</font
                              ></font
                            ></span
                          >
                        </td>';
                        }

                        if ($trang_thai == 0) {
                          echo '
                              <td>
                              <span class="badge bg-info"
                                ><font style="vertical-align: inherit"
                                  ><font style="vertical-align: inherit"
                                    >Còn hoạt động  </font
                                  ></font
                                ></span
                              >
                            </td>
                              ';
                        } elseif ($trang_thai == 1) {
                          echo ' <td>
                              <span class="badge bg-secondary"
                                ><font style="vertical-align: inherit"
                                  ><font style="vertical-align: inherit"
                                    >Không hoạt động </font
                                  ></font
                                ></span
                              >
                            </td>';
                        }


                        echo '
                          <td class="table-td-center">
                          ';
                        $xoa = "index.php?act=xoadssp&id_sp=" . $id_sp;
                        $sua = "index.php?act=suasp&idsp=".$id_sp;
                        echo '
                          <a href="' . $xoa . '">
                          <button type="button" class="btn btn-primary btn-sm trash" data-bs-toggle="modal" data-bs-target="#myModalxoa">
                            <i class="fas fa-trash-alt"></i>
                          </button>
                          </a>
                          
                          
                          <a href="' . $sua . '">
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
                          ><font style="vertical-align: inherit"
                            >53</font
                          ></font
                        >
                      </td>
                      <td></td>
                      <td>
                        <font style="vertical-align: inherit"
                          ><font style="vertical-align: inherit"
                            >Ghế văn phòng chơi game tiện dụng</font
                          ></font
                        >
                      </td>
                      <td>
                        <font style="vertical-align: inherit"
                          ><font style="vertical-align: inherit"
                            >2165400</font
                          ></font
                        >
                      </td>
                      <td>
                        <font style="vertical-align: inherit"
                          ><font style="vertical-align: inherit"
                            >20</font
                          ></font
                        >
                      </td>
                      <td>
                        <font style="vertical-align: inherit"
                          ><font style="vertical-align: inherit"
                            >30</font
                          ></font
                        >
                      </td>
                      <td>
                        <img
                          src="img-sanpham/gaming_chair_7.0.jpg"
                          alt=""
                          height="50px;"
                        />
                      </td>
                      <td>
                        <span class="badge bg-success"
                          ><font style="vertical-align: inherit"
                            ><font style="vertical-align: inherit"
                              >Có sẵn</font
                            ></font
                          ></span
                        >
                      </td>
                      <td>

                        
                        <button 
                          class="btn btn-primary btn-sm trash  "
                          type="button"
                          title="Xóa"
                          fdprocessedid="kcoi2p 
                          "
                          data-bs-toggle="modal" data-bs-target="#myModal"
                        >
                          <i class="fas fa-trash-alt" ></i>
                        </button>


                        <a
                          href="index.php?act=editsanpham"
                          class="btn btn-primary btn-sm edit"
                          type="button"
                          title="Chỉnh sửa"
                          style="color: rgb(245 157 57)"
                          ><i class="fas fa-edit"></i
                        ></a>
                      </td>
                    </tr> -->

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
                          ><font style="vertical-align: inherit"
                            >53</font
                          ></font
                        >
                      </td>
                      <td></td>
                      <td>
                        <font style="vertical-align: inherit"
                          ><font style="vertical-align: inherit"
                            >Ghế văn phòng chơi game tiện dụng</font
                          ></font
                        >
                      </td>
                      <td>
                        <font style="vertical-align: inherit"
                          ><font style="vertical-align: inherit"
                            >2165400</font
                          ></font
                        >
                      </td>
                      <td>
                        <font style="vertical-align: inherit"
                          ><font style="vertical-align: inherit"
                            >20</font
                          ></font
                        >
                      </td>
                      <td>
                        <font style="vertical-align: inherit"
                          ><font style="vertical-align: inherit"
                            >30</font
                          ></font
                        >
                      </td>
                      <td>
                        <img
                          src="img-sanpham/gaming_chair_7.0.jpg"
                          alt=""
                          height="50px;"
                        />
                      </td>
                      <td>
                        <span class="badge bg-success"
                          ><font style="vertical-align: inherit"
                            ><font style="vertical-align: inherit"
                              >Có sẵn</font
                            ></font
                          ></span
                        >
                      </td>
                      <td>
                        <button 
                          class="btn btn-primary btn-sm trash  "
                          type="button"
                          title="Xóa"
                          fdprocessedid="kcoi2p 
                          "
                          data-bs-toggle="modal" data-bs-target="#myModal"
                        >
                          <i class="fas fa-trash-alt" ></i>
                        </button>
                        <a
                          href="index.php?act=editsanpham"
                          class="btn btn-primary btn-sm edit"
                          type="button"
                          title="Chỉnh sửa"
                          style="color: rgb(245 157 57)"
                          ><i class="fas fa-edit"></i
                        ></a>
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
                    <font style="vertical-align: inherit">Hiển thị 1 đến <?=$tongbanghi=count($dssp);?> trên <?=$tongtaikhoan=count($tongsosp);?> mục</font>
                  </font>
                </div>
              </div>
              <?php 
              $tranght = $_GET['page'] ?? 1; 
              $lui = max(1, $tranght-1);
              $tiep = min($sotrangsp, $tranght+1);
              ?>
              <div class="col-sm-12 col-md-7">
                <div class="dataTables_paginate paging_simple_numbers" id="sampleTable_paginate">
                  <ul class="pagination">
                    <li class="paginate_button page-item previous" id="sampleTable_previous">
                      <a href="index.php?act=hethongsanpham&page=<?=$lui?>" aria-controls="sampleTable" data-dt-idx="0" tabindex="0" class="page-link">
                        <font style="vertical-align: inherit">
                          <font style="vertical-align: inherit">Trước</font>
                        </font>
                      </a>
                    </li>
                    <?php
                      echo $hienthisotrang;
                    ?>
                    <li class="paginate_button page-item next" id="sampleTable_next">
                      <a href="index.php?act=hethongsanpham&page=<?=$tiep?>" aria-controls="sampleTable" data-dt-idx="2" tabindex="0" class="page-link">
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