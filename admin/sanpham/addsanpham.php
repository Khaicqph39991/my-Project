
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
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.php?act=hethongsanpham"
              ><font style="vertical-align: inherit"
                ><font style="vertical-align: inherit"
                  >Hệ thống sản phẩm</font
                ></font
              ></a
            >
          </li>
          <li class="breadcrumb-item">
            <a href="#"
              ><font style="vertical-align: inherit"
                ><font style="vertical-align: inherit"
                  >Thêm sản phẩm</font
                ></font
              ></a
            >
          </li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">
              <font style="vertical-align: inherit"
                ><font style="vertical-align: inherit"
                  >Tạo sản phẩm mới</font
                ></font
              >
            </h3>
            <div class="tile-body">

            <form class="row" action="index.php?act=addsanpham" method="POST" enctype="multipart/form-data">
                <div class="form-group col-md-12 row">
                  <div div="" class="form-group col-md-3">
                    <label for="exampleSelect1" class="control-label"
                      ><font style="vertical-align: inherit"
                        ><font style="vertical-align: inherit"
                          >Danh Mục</font
                        ></font
                      ></label
                    >
                    <select style="height: 100px;"
                      class="form-control"
                      id="select_category"
                      name="danhmuc[]" multiple
                    >
                      <?php
                      $check = false;
                          foreach ($dmsp as $dms) {
                            extract($dms);
                            echo '<option value="'.$id_loai.'">'.$ten_loai.'</option>' ;
                          }
                      ?>
                    </select>
                  </div>
                 
                </div>
                <div class="form-group col-md-12 row">
                  <div class="form-group col-md-3">
                    <label class="control-label"
                      ><font style="vertical-align: inherit"
                        ><font style="vertical-align: inherit"
                          >Tên sản phẩm</font
                        ></font
                      ></label
                    >
                    <input
                      class="form-control"
                      type="text"
                      name="tensanpham"
                    />
                  </div>
                  <div class="form-group col-md-3">
                    <label class="control-label"
                      ><font style="vertical-align: inherit"
                        ><font style="vertical-align: inherit"
                          >Số lượng</font
                        ></font
                      ></label
                    >
                    <input
                      class="form-control"
                      type="number"
                      name="soluong" min="0"
                    />
                  </div>
                  <div class="form-group col-md-3">
                    <label class="control-label"
                      ><font style="vertical-align: inherit"
                        ><font style="vertical-align: inherit">Giá</font></font
                      ></label
                    >
                    <input
                      class="form-control"
                      type="number"
                      name="gia" min="0"
                    />
                  </div>
                  <div class="form-group col-md-3">
                    <label class="control-label"
                      ><font style="vertical-align: inherit"
                        ><font style="vertical-align: inherit">Giá sale</font></font
                      ></label
                    >
                    <input
                      class="form-control"
                      type="number"
                      name="giasale" min="0"
                    />
                  </div>
                </div>
                <div class="form-group col-md-12">
                  <label class="control-label"
                    ><font style="vertical-align: inherit"
                      ><font style="vertical-align: inherit"
                        >Hình ảnh chính</font
                      ></font
                    ></label
                  >
                  <div id="myfileupload">
                    <input
                      type="file"
                      id="uploadfile"
                      name="anhsanpham"
                    />
                  </div>
                  <div id="thumbbox">
                    <img
                      height="200"
                      alt="Hình ảnh ngón tay cái"
                      id="thumbimage"
                      style="display: none"
                    />
                    <a class="removeimg" href="javascript:"></a>
                  </div>
                </div>
                <!-- upload nhieu anh -->
                <div class="form-group col-md-12">
                  <label class="control-label"
                    ><font style="vertical-align: inherit"
                      ><font style="vertical-align: inherit"
                        >Hình ảnh mô tả</font
                      ></font
                    ></label
                  >
                  <div id="myfileupload">
                    <input
                      type="file"
                      name="files[]"
                      multiple
                    />
                  </div>
                </div>
                <div class="form-group col-md-12">
                  <label class="control-label"
                    ><font style="vertical-align: inherit"
                      ><font style="vertical-align: inherit">Mô tả</font></font
                    ></label
                  >
                  <div class="box-nd-blog">
                    <textarea
                      name="mota"
                      id="nd-blog"
                      cols="70"
                      rows="50"
                    ></textarea>
                  </div>
                </div>
                <div class="form-group col-md-3">
                <input type="submit" class="btn btn-save" value="Thêm mới"name="themmoi">      
                <a class="btn btn-cancel"  href="index.php?act=hethongsanpham"
              ><font style="vertical-align: inherit"
                ><font style="vertical-align: inherit">Hủy</font></font
              ></a
            >
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </main>