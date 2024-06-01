<!-- <div class="model-fom" style="overflow: hidden;"> -->
<?php
if (is_array($updatectdh)) {
  extract($updatectdh);
  $hinh = '../' . $img_path . $anh_chinh;
}
?>
<div class="khai" style="
    overflow-x: hidden;
    overflow-y: auto;
    display: block;
    position: fixed;
    z-index: 1;
    padding-top: 100px;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    right: 0;
    bottom: 0;
    outline: 0;
    transition: opacity 0.15s linear;

">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-body">
      <div class="row">
        <div class="form-group  col-md-12">
          <span class="thong-tin-thanh-toan">
            <h5>Cập nhật chi tiết đơn hàng</h5>
          </span>
        </div>
      </div>
      <form class="row" action="" method="POST">
        <div class="form-group col-md-6">
          <label class="control-label">ID</label>
          <input class="form-control" type="text" name="idctdh" required="" value="<?= $id_ctdh ?>" readonly/>
        </div>
        <div class="form-group col-md-6">
          <label for="exampleSelect1" class="control-label">Trạng thái</label>
          <select name="trangthai" id="" style="padding: 10px 30px 10px 5px;">
                            <?php 
                                 if ($trang_thai == 0) {
                                  echo '
                                    <option value="0" selected="">Đang chuẩn bị hàng</option>
                                    <option value="1">Đang giao hàng</option>
                                    <option value="2">Xong</option>
                                    <option value="3" >Hủy bỏ</option>
                                    ';
                                } elseif ($trang_thai == 1) {
                                  echo '
                                  <option value="0">Đang chuẩn bị hàng</option>
                                  <option value="1" selected="">Đang giao hàng</option>
                                  <option value="2">Xong</option>
                                  <option value="3" >Hủy bỏ</option>
                                    ';
                                } elseif ($trang_thai == 2) {
                                  echo '
                                  <option value="0" >Đang chuẩn bị hàng</option>
                                  <option value="1">Đang giao hàng</option>
                                  <option value="2"selected="">Xong</option>
                                  <option value="3" >Hủy bỏ</option>
                                    ';
                                } elseif ($trang_thai == 3) {
                                  echo '
                                  <option value="0" >Đang chuẩn bị hàng</option>
                                  <option value="1">Đang giao hàng</option>
                                  <option value="2">Xong</option>
                                  <option value="3" selected="">Hủy bỏ</option>
                                    ';
                                }
                            ?>
                        </select>
        </div>
    </div>
    <div id="thumbbox" >
    <input type="submit" class="btn btn-save" value="Cập nhật" name="capnhapctdh" style="margin-left: 18px;">
    <?php $huy = "index.php?act=suadh&iddh=".$id_dh; 
    echo '
    <a href="'.$huy.'">
      <button type="button" class="btn btn-cancel mr-2">
        Hủy
      </button>
    </a>
    ';
    ?>
    </form>
  </div>
</div>
</div>
<!-- <br>
            <br>
            <br>
              <button class="btn btn-save" type="button">Lưu</button>
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Hủy</button> -->
</div>
</div>