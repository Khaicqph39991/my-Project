<?php
if (is_array($listonedh)) {
  extract($listonedh);
}
?>
<!-- modal xoa star -->
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
<!-- model xoa end -->
<!-- model sua start -->
<!-- <div class="modal fade" id="myModalsua">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <div class="row">
          <div class="form-group col-md-12">
            <span class="thong-tin-thanh-toan">
              <h5>Chỉnh sửa chi tiết đơn hàng:</h5>
            </span>
          </div>
        </div>
        <div class="row">
          <div class="form-group col-md-6">
            <label class="control-label">Số lượng</label>
            <input class="form-control" type="number" name="quantity" required="" value="4" />
          </div>
          <div class="form-group col-md-6">
            <label for="exampleSelect1" class="control-label">Trạng thái</label>
            <select class="form-control" id="exampleSelect1" name="warranty">
              <option value="1" selected="">Còn hàng</option>
              <option value="2">Hết hàng</option>
            </select>
          </div>
        </div>
        <button class="btn btn-save" type="submit">Lưu lại</button>
        <button class="btn btn-cancel mr-2" data-bs-dismiss="modal">
          Hủy
        </button>
      </div>
    </div>
  </div>
</div> -->
<!-- model sua end -->


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
      <a class="app-menu__item" href="index.php?act=bangdieukhien"><i class="app-menu__icon bx bx-tachometer"></i><span
          class="app-menu__label">
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
      <a class="app-menu__item active" href="index.php?act=dathang"><i class="app-menu__icon bx bx-task"></i><span
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
  <div class="app-title">
    <ul class="app-breadcrumb breadcrumb side">
      <li class="breadcrumb-item active">
        <a href="index.php?act=dathang"><b>Danh sách đặt Hàng</b></a>
      </li>
      <li class="breadcrumb-item active">
        <a href="#"><b>Đặt Hàng Chi Tiết</b></a>
      </li>
    </ul>
    <div id="clock">
      <span class="date">
        </span>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="tile">
        <div class="tile-body">
          <!-- <div class="row element-button"> -->
            <!-- <div class="col-sm-2">
                            <a class="btn btn-add btn-sm" title="viewOdd"><i class="fas fa-search"></i>
                              Order Details</a>
                          </div> -->
            <!-- <div class="col-sm-2">
              <a class="btn btn-delete btn-sm print-file" type="button" title="In" onclick="myApp.printTable()"><i
                  class="fas fa-print"></i> Print</a>
            </div>
          </div> -->

          <form class="row" action="index.php?act=chitietdonhang" method="post">
            <div class="form-group col-md-12 row">
              <div class="form-group col-md-3">
                <label class="control-label">ID</label>
                <input class="form-control" type="text" name="iddh" value="<?= $id_dh ?>" readonly />
              </div>
              <div class="form-group col-md-3">
                <label for="exampleSelect1" class="control-label">Trạng thái</label>

                <select class="form-control" id="exampleSelect1" name="trangthai">
                  <?php
                  if ($trang_thai == 0) {
                    echo '
                      <option value="0" selected="">Chưa giải quyết</option>
                      <option value="1">Chưa thanh toán</option>
                      <option value="2">Đã thanh toán</option>
                      <option value="3">Đang giao hàng</option>
                      <option value="4">Xong</option>
                      <option value="5" >Hủy bỏ</option>
                      ';
                  } elseif ($trang_thai == 1) {
                    echo '
                      <option value="0" >Chưa giải quyết</option>
                      <option value="1" selected="">Chưa thanh toán</option>
                      <option value="2">Đã thanh toán</option>
                      <option value="3">Đang giao hàng</option>
                      <option value="4">Xong</option>
                      <option value="5" >Hủy bỏ</option>
                      ';
                  } elseif ($trang_thai == 2) {
                    echo '
                      <option value="0" >Chưa giải quyết</option>
                      <option value="1">Chưa thanh toán</option>
                      <option value="2" selected="">Đã thanh toán</option>
                      <option value="3">Đang giao hàng</option>
                      <option value="4">Xong</option>
                      <option value="5" >Hủy bỏ</option>
                      ';
                  } elseif ($trang_thai == 3) {
                    echo '
                      <option value="0" >Chưa giải quyết</option>
                      <option value="1">Chưa thanh toán</option>
                      <option value="2">Đã thanh toán</option>
                      <option value="3" selected="">Đang giao hàng</option>
                      <option value="4">Xong</option>
                      <option value="5" >Hủy bỏ</option>
                      ';
                  } elseif ($trang_thai == 4) {
                    echo '
                      <option value="0" >Chưa giải quyết</option>
                      <option value="1">Chưa thanh toán</option>
                      <option value="2">Đã thanh toán</option>
                      <option value="3">Đang giao hàng</option>
                      <option value="4" selected="">Xong</option>
                      <option value="5" >Hủy bỏ</option>
                      ';
                  } elseif ($trang_thai == 5) {
                    echo '
                      <option value="0" >Chưa giải quyết</option>
                      <option value="1">Chưa thanh toán</option>
                      <option value="2">Đã thanh toán</option>
                      <option value="3">Đang giao hàng</option>
                      <option value="4">Xong</option>
                      <option value="5" selected="">Hủy bỏ</option>
                      ';
                  }

                  ?>
                </select>


              </div>
              <div class="form-group col-md-3">
                <label class="control-label">Tên khách hàng</label>
                <input class="form-control" type="text" name="tenkh" value="<?= $ho_ten ?> " readonly />
              </div>
              <div class="form-group col-md-3">
                <label class="control-label">Địa chỉ giao hàng</label>
                <input class="form-control" type="text" name="diachi" value="<?= $dia_chi ?>" />
              </div>
              <div class="form-group col-md-3">
                <label class="control-label">Số điện thoại</label>
                <input class="form-control" type="number" name="sdt" value="<?= $sdt ?>" min="0"/>
              </div>
            </div>
            <div class="form-group col-md-3">
              <input class="btn btn-save" type="submit" name="capnhapdh" value="Cập nhật">

              <a class="btn btn-cancel" href="index.php?act=dathang">Hủy</a>
            </div>
          </form>

          <div id="sampleTable_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
            <!-- <div class="row">
              <div class="col-sm-12 col-md-6">
                <div class="dataTables_length" id="sampleTable_length">
                  <label>Mở<select name="sampleTable_length" aria-controls="sampleTable"
                      class="form-control form-control-sm">
                      <option value="10">10</option>
                      <option value="25">25</option>
                      <option value="50">50</option>
                      <option value="100">100</option>
                    </select>Mục Lục</label>
                </div>
              </div>
              <div class="col-sm-12 col-md-6">
                <div id="sampleTable_filter" class="dataTables_filter">
                  <label>Search:<input type="search" class="form-control form-control-sm" placeholder=""
                      aria-controls="sampleTable" /></label>
                </div>
              </div>
            </div> -->
            <div class="row">
              <div class="col-sm-12">
                <table class="table table-hover table-bordered table-responsive-lg dataTable no-footer" id="sampleTable"
                  role="grid" aria-describedby="sampleTable_info">
                  <thead>
                    <tr role="row">
                      <th width="25" class="sorting_asc" tabindex="0" aria-controls="sampleTable" rowspan="1"
                        colspan="1" aria-sort="ascending" aria-label="STT: activate to sort column descending"
                        style="width: 26px">
                        STT
                      </th>
                      <th width="30" class="sorting" tabindex="0" aria-controls="sampleTable" rowspan="1" colspan="1"
                        aria-label="Order Code: activate to sort column ascending" style="width: 35px">
                        Mã đơn hàng
                      </th>
                      <th class="sorting" tabindex="0" aria-controls="sampleTable" rowspan="1" colspan="1"
                        aria-label="Product: activate to sort column ascending" style="width: 147px">
                        Tên sản phẩm
                      </th>
                      <th width="35" class="sorting" tabindex="0" aria-controls="sampleTable" rowspan="1" colspan="1"
                        aria-label="Image: activate to sort column ascending" style="width: 50px">
                        Ảnh
                      </th>
                      <th class="sorting" tabindex="0" aria-controls="sampleTable" rowspan="1" colspan="1"
                        aria-label="Price: activate to sort column ascending" style="width: 88px">
                        Giá
                      </th>
                      <th width="25" class="sorting" tabindex="0" aria-controls="sampleTable" rowspan="1" colspan="1"
                        aria-label="Quantity: activate to sort column ascending" style="width: 53px">
                        Số lượng
                      </th>
                      <th class="sorting" tabindex="0" aria-controls="sampleTable" rowspan="1" colspan="1"
                        aria-label="Subtotal: activate to sort column ascending" style="width: 88px">
                        Thành tiền
                      </th>
                      <th class="sorting" tabindex="0" aria-controls="sampleTable" rowspan="1" colspan="1"
                        aria-label="Warranty Cost: activate to sort column ascending" style="width: 112px">
                        Trạng thái
                      </th>
                      <th class="sorting" tabindex="0" aria-controls="sampleTable" rowspan="1" colspan="1"
                        aria-label=": activate to sort column ascending" style="width: 90px"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $stt = 1;
                    if(empty($chitietdh)){
                      echo '';
                    }else{
                      foreach($chitietdh as $dh){
                        extract($dh);
                        $hinh = '../'.$img_path.$anh_chinh;
                        echo '  <tr role="row" class="odd">
                        <td class="sorting_1">'.$stt.'</td>
                        <td>'.$id_dh.'</td>
                        <td>'.$ten_sp.'</td>
                        <td>
                          <img src="'.$hinh.'" style="width: 60px;height: 60px;";/>
                        </td>
                        <td>'.$gia_sp.'</td>
                        <td>'.$soluong.'</td>
                        <td>'.$tien_spdh.'</td>';
                        if($trang_thai == 0){
                          echo '
                          <td>
                          <span class="badge bg-warning"
                            ><font style="vertical-align: inherit"
                              ><font style="vertical-align: inherit"
                                >Đang chuẩn bị hàng</font
                              ></font
                            ></span
                          >
                        </td>
                          ';
                         }elseif($trang_thai == 1){
                          echo ' <td>
                          <span class="badge bg-secondary"
                            ><font style="vertical-align: inherit"
                              ><font style="vertical-align: inherit"
                                >Đang giao hàng</font
                              ></font
                            ></span
                          >
                        </td>';
                          
                         }elseif($trang_thai == 2){
                          echo ' <td>
                          <span class="badge bg-success"
                            ><font style="vertical-align: inherit"
                              ><font style="vertical-align: inherit"
                                >Xong</font
                              ></font
                            ></span
                          >
                        </td>';
                          
                         }elseif($trang_thai == 3){
                          echo ' <td>
                          <span class="badge bg-danger"
                            ><font style="vertical-align: inherit"
                              ><font style="vertical-align: inherit"
                                >Hủy</font
                              ></font
                            ></span
                          >
                        </td>';     
                         }
                         $id_dh = $_GET['iddh'];
                         $sua = "index.php?act=suachitietdonhang&id_ctdh=".$id_ctdh."&iddh=".$id_dh;
                         $xoa = "index.php?act=xoachitietdonhang&id_ctdh=".$id_ctdh."&iddh=".$id_dh;
                   
                        echo '    
                        <td>
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
                      </tr>';
                      $stt++;
                      }
                      
                    }
                    ?>
                  
                    <!-- <tr role="row" class="even">
                      <td class="sorting_1">2</td>
                      <td>23</td>
                      <td>Pinnstol G? Cao Su</td>
                      <td>
                        <img src="img-sanpham/ghego.jpg" height="50px" />
                      </td>
                      <td>378,000đ</td>
                      <td>1</td>
                      <td>Basic( 8%)</td>
                      <td>30,240đ</td>
                      <td>408,240đ</td>
                      <td>
                        <button class="btn btn-primary btn-sm trash" type="button" title="Xóa" fdprocessedid="kcoi2p 
                              " data-bs-toggle="modal" data-bs-target="#myModalxoa">
                          <i class="fas fa-trash-alt"></i>
                        </button>

                        <button type="button" class="btn btn-primary btn-sm edit" data-bs-toggle="modal"
                          data-bs-target="#myModalsua">
                          <i class="fas fa-edit"></i>
                        </button>
                      </td>
                    </tr> -->
                  </tbody>
                </table>
              </div>
            </div>
            <!-- <div class="row" >
              <div class="col-sm-12 col-md-5">
                <div class="dataTables_info" id="sampleTable_info" role="status" aria-live="polite">
                  Hiển thị 1 đến 2 trong 2 mục
                </div>
              </div>
              <div class="col-sm-12 col-md-7">
                <div class="dataTables_paginate paging_simple_numbers" id="sampleTable_paginate">
                  <ul class="pagination">
                    <li class="paginate_button page-item previous disabled" id="sampleTable_previous">
                      <a href="#" aria-controls="sampleTable" data-dt-idx="0" tabindex="0" class="page-link">Trước</a>
                    </li>
                    <li class="paginate_button page-item active">
                      <a href="#" aria-controls="sampleTable" data-dt-idx="1" tabindex="0" class="page-link">1</a>
                    </li>
                    <li class="paginate_button page-item next disabled" id="sampleTable_next">
                      <a href="#" aria-controls="sampleTable" data-dt-idx="2" tabindex="0" class="page-link">Sau</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div> -->
          </div>
        </div>
      </div>
    </div>
  </div>
</main>