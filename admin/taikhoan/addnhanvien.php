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
          <a class="app-menu__item active" href="index.php?act=nguoidung"
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
            <a href="index.php?act=nguoidung">
              <font style="vertical-align: inherit">
                Danh sách người dùng
              </font>
            </a>
          </li>
          <li class="breadcrumb-item">
            <a href="#"
              ><font style="vertical-align: inherit"
                ><font style="vertical-align: inherit"
                  >Thêm người dùng</font
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
                  >Tạo nhân viên mới</font
                ></font
              >
            </h3>
            <div class="tile-body">
              <form class="row" action="index.php?act=addnhanvien" method="POST" enctype="multipart/form-data">
              <div class="form-group col-md-4">
                  <label class="control-label"
                    ><font style="vertical-align: inherit"
                      ><font style="vertical-align: inherit"
                        >Họ và tên</font
                      ></font
                    ></label
                  >
                  <input class="form-control" type="text" required="" name="tenuser" />
                </div>
              <div class="form-group col-md-4">
                  <label class="control-label"
                    ><font style="vertical-align: inherit"
                      ><font style="vertical-align: inherit"
                        >Tên tài khoản</font
                      ></font
                    ></label
                  >
                  <input class="form-control" type="text" name="user" />
                </div>
                <div class="form-group col-md-4">
                  <label class="control-label"
                    ><font style="vertical-align: inherit"
                      ><font style="vertical-align: inherit"
                        >Password</font
                      ></font
                    ></label
                  >
                  <input class="form-control" type="text" name="pass" />
                </div>
              
                <div class="form-group col-md-4">
                  <label class="control-label"
                    ><font style="vertical-align: inherit"
                      ><font style="vertical-align: inherit"
                        >Địa chỉ Email</font
                      ></font
                    ></label
                  >
                  <input class="form-control" type="email" required="" name="email" />
                </div>
                <div class="form-group col-md-4">
                  <label class="control-label"
                    ><font style="vertical-align: inherit"
                      ><font style="vertical-align: inherit"
                        >Địa chỉ </font
                      ></font
                    ></label
                  >
                  <input class="form-control" type="text" required="" name="diachi" />
                </div>
                <div class="form-group col-md-4">
                  <label class="control-label"
                    ><font style="vertical-align: inherit"
                      ><font style="vertical-align: inherit"
                        >Số điện thoại</font
                      ></font
                    ></label
                  >
                  <input class="form-control" type="number" required="" name="sdt" min="0"/>
                </div>
             

                <div class="form-group col-md-3">
                  <label for="exampleSelect1" class="control-label"
                    ><font style="vertical-align: inherit"
                      ><font style="vertical-align: inherit"
                        >Vai trò</font
                      ></font
                    ></label
                  >
                  <select class="form-control" id="exampleSelect1" name="vaitro">
                    <option >
                      <font style="vertical-align: inherit"
                        ><font style="vertical-align: inherit"
                          >User</font
                        ></font
                      >
                    </option>
                    <option  >
                      <font style="vertical-align: inherit"
                        ><font style="vertical-align: inherit"
                          >Admin</font
                        ></font
                      >
                    </option>
                  </select>
                </div>
             
                <div class="form-group col-md-12">
                  <label class="control-label"
                    ><font style="vertical-align: inherit"
                      ><font style="vertical-align: inherit"
                        >Nhân viên ảnh 3x4</font
                      ></font
                    ></label
                  >
                  <div id="myfileupload">
                    <input
                    class="form-control"
                      type="file"
                      id="uploadfile"
                      name="ImageUpload"
                      style="width: 400px;"
                    />
                  </div>
                  <div id="thumbbox">
                    <img
                      height="300"
                      width="300"
                      alt="Hình ảnh ngón tay cái"
                      id="thumbimage"
                      style="display: none"
                    />
                    
                    <a class="removeimg" href="javascript:"></a><br>
                    
                    <input type="submit" class="btn btn-save" value="Thêm mới"name="themmoi">
                    <!-- <button class="btn btn-save" type="submit" name="themmoi">
              <font style="vertical-align: inherit"
                ><font style="vertical-align: inherit">Thêm Mới</font></font
              >
            </button> -->
            <a class="btn btn-cancel"  href="index.php?act=nguoidung"
              ><font style="vertical-align: inherit"
                ><font style="vertical-align: inherit">Hủy</font></font
              ></a
            >
            <?php
              if(isset($thanhcong)&& ($thanhcong!="")){
                  echo $thanhcong;
              }

              ?>
              
                  </div>
                </div>
              </form>
            </div>
            
          </div>
        </div>
      </div>
    </main>