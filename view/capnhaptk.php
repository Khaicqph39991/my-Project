<div class="tong container" style=" display: flex;  margin-top: 70px;">
<div class="row col-2">
<div class="list-group" style="justify-content: center;">
<a href="index.php?act=thongtintk"><button type="button" class="list-group-item list-group-item-action">
  Tài khoản
  </button></a>
  <a href="index.php?act=donhang"><button type="button" class="list-group-item list-group-item-action">Đơn hàng đang xử lý</button></a>
  <a href="index.php?act=lsdonhang"><button type="button" class="list-group-item list-group-item-action">Lịch sử mua hàng</button></a>
  <a href="index.php?act=capnhaptk"><button type="button" class="list-group-item list-group-item-action active">Cài đặt tài khoản</button></a>
  <a href="index.php?act=dangxuat"><button type="button" class="list-group-item list-group-item-action">Đăng xuất</button></a>
</div>
<?php
    if (is_array($capnhaptknguoi)){
        extract($capnhaptknguoi);
        $hinh = '../du-an1/'.$img_path.$anh;
    }
    ?>
  </div>
  <div class="row col-1"></div>
  <div class="row col-9">
    <div class="col-md-12">
      <div class="tile">
        <h3 class="tile-title">
          <font style="vertical-align: inherit">
            <font style="vertical-align: inherit">Cập nhập thông tin tài khoản </font>
          </font>
        </h3>
        <div class="tile-body">
          <form class="row" action="index.php?act=capnhaptk" method="POST" enctype="multipart/form-data">
            <div class="form-group col-md-4">
              <label class="control-label">
                <font style="vertical-align: inherit">
                  <font style="vertical-align: inherit">Họ và tên</font>
                </font>
              </label>
              <input class="form-control" type="text" required="" name="tenuser" value="<?=$ten_kh?>">
            </div>
            <div class="form-group col-md-4">
              <label class="control-label">
                <font style="vertical-align: inherit">
                  <font style="vertical-align: inherit">Tên tài khoản</font>
                </font>
              </label>
              <input class="form-control" type="text"  value="<?=$user?>" readonly>
            </div>
            <div class="form-group col-md-4">
              <label class="control-label">
                <font style="vertical-align: inherit">
                  <font style="vertical-align: inherit">Password</font>
                </font>
              </label>
              <input class="form-control" type="text" name="pass" value="<?=$pass?>">
            </div>
            <div class="form-group col-md-4">
              <label class="control-label">
                <font style="vertical-align: inherit">
                  <font style="vertical-align: inherit">Địa chỉ Email</font>
                </font>
              </label>
              <input class="form-control" type="email" required="" name="email" value="<?=$email?>">
            </div>
            <div class="form-group col-md-4">
              <label class="control-label">
                <font style="vertical-align: inherit">
                  <font style="vertical-align: inherit">Địa chỉ </font>
                </font>
              </label>
              <input class="form-control" type="text" required="" name="diachi" value="<?=$dia_chi?>">
            </div>
            <div class="form-group col-md-4">
              <label class="control-label">
                <font style="vertical-align: inherit">
                  <font style="vertical-align: inherit">Số điện thoại</font>
                </font>
              </label>
              <input class="form-control" type="number" required="" name="sdt" value="<?=$sdt?>">
            </div>
            <div class="form-group col-md-12">
              <img src="<?php echo $hinh ?>" alt="" style="width: 200px; height: 200px;"> <br>
              <label class="control-label">
                <font style="vertical-align: inherit">
                  <font style="vertical-align: inherit">Ảnh người dùng</font>
                </font>
              </label>
              <div id="myfileupload">
                <input type="file" id="uploadfile" name="ImageUpload">
              </div>
              <div id="thumbbox" style="margin-top: 30px;">
                <input type="submit" class="btn btn-save" value="Cập nhập" name="capnhat" style="cursor: pointer; background-color: rgb(166 236 171); color: rgb(1 123 10);">
                <a class="btn btn-cancel" href="index.php?act=" style="cursor: pointer;background-color: rgb(255 197 197); color: rgb(190, 40, 40);">
                    <font style="vertical-align: inherit">Hủy</font>
                </a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>