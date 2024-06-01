<div class="tong container" style=" display: flex; margin-top: 70px;">
<div class="row col-2">
<div class="list-group" style="justify-content: center;">
<a href="index.php?act=thongtintk"><button type="button" class="list-group-item list-group-item-action active">
  Tài khoản
  </button></a>
  <a href="index.php?act=donhang"><button type="button" class="list-group-item list-group-item-action">Đơn hàng đang xử lý</button></a>
  <a href="index.php?act=lsdonhang"><button type="button" class="list-group-item list-group-item-action">Lịch sử mua hàng</button></a>
  <a href="index.php?act=capnhaptk"><button type="button" class="list-group-item list-group-item-action">Cài đặt tài khoản</button></a>
  <a href="index.php?act=dangxuat"><button type="button" class="list-group-item list-group-item-action">Đăng xuất</button></a>
</div>
<?php
    if (is_array($tk)){
        extract($tk);
        $hinh = '../du-an1/'.$img_path.$anh;
    }
    ?>
  </div>
  <div class="row col-1"></div>
  <div class="row col-9">
    <div class="col-md-12">
      <div class="tile">
        <div style="display:flex; justify-content: space-between;">
          <h3 class="tile-title">
              <font style="vertical-align: inherit">Thông tin tài khoản</font>
          </h3>
            <a href="index.php?act=capnhaptk">Thay đổi thông tin tài khoản</a>
        </div>

        <div class="tile-body">
          <form class="row" action="index.php?act=addnhanvien" method="POST" enctype="multipart/form-data">
            <div class="form-group col-md-4">
              <label class="control-label">
                <font style="vertical-align: inherit">
                  <font style="vertical-align: inherit">Họ và tên</font>
                </font>
              </label>
              <input class="form-control" type="text" required="" name="tenuser" value="<?=$ten_kh?>" readonly>
            </div>
            <div class="form-group col-md-4">
              <label class="control-label">
                <font style="vertical-align: inherit">
                  <font style="vertical-align: inherit">Tên tài khoản</font>
                </font>
              </label>
              <input class="form-control" type="text" name="user" value="<?=$user?>" readonly>
            </div>
            <div class="form-group col-md-4">
              <label class="control-label">
                <font style="vertical-align: inherit">
                  <font style="vertical-align: inherit">Password</font  >
                </font>
              </label>
              <input class="form-control" type="text" name="pass" value="<?=$pass?>" readonly>
            </div>
            <div class="form-group col-md-4">
              <label class="control-label">
                <font style="vertical-align: inherit">
                  <font style="vertical-align: inherit">Địa chỉ Email</font>
                </font>
              </label>
              <input class="form-control" type="email" required="" name="email" value="<?=$email?>" readonly>
            </div>
            <div class="form-group col-md-4">
              <label class="control-label">
                <font style="vertical-align: inherit">
                  <font style="vertical-align: inherit">Địa chỉ </font>
                </font>
              </label>
              <input class="form-control" type="text" required="" name="diachi" value="<?=$dia_chi?>" readonly>
            </div>
            <div class="form-group col-md-4">
              <label class="control-label">
                <font style="vertical-align: inherit">
                  <font style="vertical-align: inherit">Số điện thoại</font>
                </font>
              </label>
              <input class="form-control" type="number" required="" name="sdt" value="<?=$sdt?>" readonly>
            </div>
            <div class="form-group col-md-12" style="display: inline-grid;">
            <label class="control-label">
                <font style="vertical-align: inherit">
                  <font style="vertical-align: inherit">Ảnh người dùng</font>
                </font>
              </label>
              <img src="<?php echo $hinh ?>" alt="" style="width: 200px; height: 200px;"> <br>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>