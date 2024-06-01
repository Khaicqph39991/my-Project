 
 <?php
    if (is_array($updateblog)) {
        extract($updateblog);
        $hinh = '../'.$img_path . $anh_blog;
    }
    ?>
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
          <p class="app-sidebar__user-name"><b><?= $_SESSION['user']?></b></p>
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
      <div class="row">
        <div class="col-md-12">
          <div class="app-title">
            <ul class="app-breadcrumb breadcrumb">
              <li class="breadcrumb-item">
                <a href="#"
                  ><b
                    ><font style="vertical-align: inherit"
                      ><font style="vertical-align: inherit"
                        >Quản lý Blog - Sửa Blog</font
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
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">
              <font style="vertical-align: inherit"
                ><font style="vertical-align: inherit">Sửa Blog</font></font
              >
            </h3>
            <div class="tile-body">
              <form
                class="row"
                action=""
                method="post"
                enctype="multipart/form-data"
              >
                <div class="form-group col-md-12 row">
                <div class="form-group col-md-3">
                    <label for="exampleSelect1" class="control-label"
                      ><font style="vertical-align: inherit"
                        ><font style="vertical-align: inherit"
                          >ID</font
                        ></font
                      ></label
                    >
                    <input
                      class="form-control"
                      type="text"
                      name="id_blog"
                      id="title"
                      value="<?= $id_blog ?>" readonly
                    />
                  </div>
                  <div class="form-group col-md-3">
                    <label for="exampleSelect1" class="control-label"
                      ><font style="vertical-align: inherit"
                        ><font style="vertical-align: inherit"
                          >Tiêu đề</font
                        ></font
                      ></label
                    >
                    <input
                      class="form-control"
                      type="text"
                      name="tieu_de"
                      id="title"
                      value="<?= $tieu_de ?>"
                    />
                  </div>
                  <div class="form-group col-md-3">
                    <label class="control-label"
                      ><font style="vertical-align: inherit"
                        ><font style="vertical-align: inherit"
                          >Tác giả</font
                        ></font
                      ></label
                    >
                    <input class="form-control" type="text" name="tac_gia"  value="<?= $tac_gia ?>" />
                  </div>
                </div>
                <div class="form-group col-md-12">
                  <label class="control-label"
                    ><font style="vertical-align: inherit"
                      ><font style="vertical-align: inherit"
                        >Nội dung</font
                      ></font
                    ></label
                  >
                  <div class="box-nd-blog">
                    <textarea
                      name="noi_dung"
                      id="nd-blog"
                      cols="70"
                      rows="50"
                    
                    > <?= $noi_dung ?>
                  </textarea>
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
                      name="ImageUpload"
                      onchange="readURL(this);"
                    />
                  </div>
                  <div id="thumbbox">
                    <img
                      height="200"
                      alt="Hình ảnh ngón tay cái"
                      id="thumbimage"
                      style="display: none"
                    />
                    <img style="height: 80px" src="<?php echo $hinh ?>" alt="">
                    <a class="removeimg" href="javascript:"></a>
                  </div>
                </div>
                
                <div class="form-group col-md-3">
                  <button class="btn btn-save" type="submit" name="capnhatblog">
                    <font style="vertical-align: inherit"
                      ><font style="vertical-align: inherit"
                        >Cập nhật</font
                      ></font
                    >
                  </button>
                  <a class="btn btn-cancel" href="index.php?act=quanlyblog"
                    ><font style="vertical-align: inherit"
                      ><font style="vertical-align: inherit">Hủy bỏ</font></font
                    ></a
                  >
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </main>