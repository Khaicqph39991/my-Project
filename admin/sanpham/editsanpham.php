<?php 
  if(is_array ($listonesp)){
    extract( $listonesp);
    $hinh = '../'.$img_path . $anh_chinh;
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
                ><font style="vertical-align: inherit">Sửa sản phẩm</font></font
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
                ><font style="vertical-align: inherit">Sửa sản phẩm</font></font
              >
            </h3>
            <div class="tile-body">
            <div class="form-group col-md-3">
                    <label class="control-label"
                      ><font style="vertical-align: inherit"
                        ><font style="vertical-align: inherit"
                          >Danh mục sản phẩm hiện có</font
                        ></font
                      ></label
                    >
                    <input
                      class="form-control"
                      type="text"
                      value="<?php
                      $index = 0;
                      $totalItems = count($danhmuc);
                      foreach($danhmuc as $dm){
                        extract($dm);
                        if($_GET['idsp']==$id_sp){
                          $check = true;
                          echo $ten_loai;
                          }
                        if ($index < $totalItems - 1) {
                          echo ",";
                        }else{
                          echo ".";
                        }
                        $index++;
                        }
                      ?>"
                      readonly
                    />
                  </div>
              <form
                class="row"
                action="index.php?act=editsanpham"
                method="post"
                enctype="multipart/form-data"
              >
              <div class="form-group col-md-12 row">
                  <div div="" class="form-group col-md-3">
                    <label for="iddm" class="control-label"
                      ><font style="vertical-align: inherit"
                        ><font style="vertical-align: inherit"
                          >Danh Mục</font
                        ></font
                      ></label
                    >
                      <select  class="form-control"
                      name="iddm[]"
                      id="select_category"
                      style="height: 100px;"
                      multiple>
                      <?php
                      $check = false;
                          foreach ($dmsp as $dms) {
                            extract($dms);
                            echo '<option value="'.$id_loai.'">'.$ten_loai.'</option>' ;
                          }
                      ?>
                      </select>

                    <!-- <select
                      class="form-control"
                      name="categoryid"
                      id="select_category"
                      onchange="get_productType(this.value);"
                    >
                      <option>
                        <font style="vertical-align: inherit"
                          ><font style="vertical-align: inherit"
                            >-- Chọn danh mục --</font
                          ></font
                        >
                      </option>
                      <option value="1">
                        <font style="vertical-align: inherit"
                          ><font style="vertical-align: inherit"
                            >Cafe</font
                          ></font
                        >
                      </option>
                      <option value="2">
                        <font style="vertical-align: inherit"
                          ><font style="vertical-align: inherit"
                            >Trà sữa</font
                          ></font
                        >
                      </option>
                      <option value="3">
                        <font style="vertical-align: inherit"
                          ><font style="vertical-align: inherit"
                            >Nước trái cây</font
                          ></font
                        >
                      </option>
                    </select> -->
                  </div>
                </div>
                
                <div class="form-group col-md-12 row">
                  <div class="form-group col-md-3">
                    <label class="control-label"
                      ><font style="vertical-align: inherit"
                        ><font style="vertical-align: inherit"
                          >ID sản phẩm</font
                        ></font
                      ></label
                    >
                    <input
                      class="form-control"
                      type="number"
                      name="id_sp"
                      value="<?= $id_sp ?>"
                      readonly
                    />
                  </div>
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
                      name="ten_sp"
                      value="<?= $ten_sp ?>"
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
                      name="so_luong"
                      value="<?= $so_luong ?>" min="0"
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
                      name="gia"
                      value="<?= $gia ?>" min="0"
                    />
                  </div>
                  <div class="form-group col-md-3">
                    <label class="control-label"
                      ><font style="vertical-align: inherit"
                        ><font style="vertical-align: inherit">Giá Sale</font></font
                      ></label
                    >
                    <input
                      class="form-control"
                      type="number"
                      name="gia_sale"
                      value="<?= $gia_sale ?>" min="0"
                    />
                  </div>



                  <div class="form-group col-md-3">
                    <label for="status" class="control-label"
                      ><font style="vertical-align: inherit"
                        ><font style="vertical-align: inherit"
                          >Trạng thái</font
                        ></font
                      ></label
                    >
                    <select
                      class="form-control"
                      name="trang_thai"
                      id="status"
                    >
                    <?php
                     if($trang_thai== 0) {
                      echo '
                      <option style="font-size: 16px" value="0" selected>Còn hoạt động</option>
                      <option style="font-size: 16px" value="1">Không hoạt động</option>
                      ';
                    } else {
                      echo '
                      <option style="font-size: 16px" value="0" >Có sẵn</option>
                      <option style="font-size: 16px" value="1" selected>Không có sẵn </option>
                      '; 
                    }
                    ?>
                      
                      <!-- <option value="Available">
                        <font style="vertical-align: inherit"
                          ><font style="vertical-align: inherit"
                            >Có sẵn</font
                          ></font
                        >
                      </option>
                      <option value="Unavailable">
                        <font style="vertical-align: inherit"
                          ><font style="vertical-align: inherit"
                            >Không có sẵn</font
                          ></font
                        >
                      </option> -->
                    </select>
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
                    />
                    <img style="height: 80px" src="<?php echo $hinh ?>" alt="">
                  </div>
                </div>
                <div class="form-group col-md-12">
                  <label class="control-label"
                    ><font style="vertical-align: inherit"
                      ><font style="vertical-align: inherit"
                        >Hình ảnh phụ</font
                      ></font
                    ></label
                  >
                  <div id="myfileupload">
                  <input type="file" name="files[]" multiple>
                  <?php
                    foreach ($anhmt as $anhmota) {
                      extract($anhmota);
                      $hinhmota = '../'.$img_path . $anh_mota;
                    ?>
                      <img style="height: 80px" src="<?php echo $hinhmota ?>" alt="">
                    <?php
                      }
                    ?>
                  </div>
                </div>
                <!-- upload nhieu anh -->
                <!-- <div class="form-group col-md-12">
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
                      name="productImgs[]"
                      multiple="multiple"
                    />
                  </div>
                </div> -->
                <div class="form-group col-md-12">
                  <label class="control-label"
                    ><font style="vertical-align: inherit"
                      ><font style="vertical-align: inherit">Mô tả</font></font
                    ></label
                  >
                  <div class="box-nd-blog">
                    <textarea
                      name="mo_ta"
                      id="nd-blog"
                      cols="70"
                      rows="50"
                    ><?php echo $mo_ta ?>
                  </textarea>
                    
                  </div>
                </div>

            
                
                <div class="form-group col-md-3">
                <input class="btn btn-save" type="submit" name="capnhapsanpham" value="Cập nhật">

                  <a class="btn btn-cancel" href="index.php?act=hethongsanpham"
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