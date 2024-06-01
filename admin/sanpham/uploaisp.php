


<?php
    if (is_array($uploaihang)) {
        extract($uploaihang);
        $hinh = '../'.$img_path . $anh_loai;
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
                            <h5>Cập nhật Danh Muc</h5>
                        </span>
                    </div>
                </div>
                <form class="row" action="" method="POST" enctype="multipart/form-data" >
                    <div class="form-group col-md-4">
                        <label class="control-label">
                            <font style="vertical-align: inherit">
                                <font style="vertical-align: inherit">ID</font>
                            </font>
                        </label>
                        <input class="form-control" type="text" name="id_loai" required="" value="<?= $id_loai ?>" readonly />
                    </div>
                    <div class="form-group col-md-4">
                        <label class="control-label">
                            <font style="vertical-align: inherit">
                                <font style="vertical-align: inherit">Ten  danh  muc</font>
                            </font>
                        </label>
                        <input class="form-control" type="text" required="" name="ten_loai" value="<?= $ten_loai ?>" />
                    </div>


                    <div class="form-group col-md-12">
                  <label class="control-label"
                    ><font style="vertical-align: inherit"
                      ><font style="vertical-align: inherit"
                        >Hình ảnh Loại </font
                      ></font
                    ></label
                  >
                  <div id="myfileupload">
                    <input
                      type="file"
                      id="uploadfile"
                      name="productImg"
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
                    <img style="height: 80px; margin-top: 20px;" src="<?php echo $hinh ?>" alt="">
                    <a class="removeimg" href="javascript:"></a>
                  </div>
                </div>
                        <input type="submit" class="btn btn-save" value="Cập nhật" name="capnhaploai" style="margin-left: 20px;">
                        <a href="index.php?act=listchuyenmuc">
                            <button type="button" class="btn btn-cancel mr-2" style="margin-left: 10px;">
                                Hủy
                            </button>
                        </a>
                </form>
            </div>
        </div>
        <!-- <br>
            <br>
            <br>
              <button class="btn btn-save" type="button">Lưu</button>
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Hủy</button> -->
    </div>
</div>
</div>
</div>