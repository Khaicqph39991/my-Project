<div class="model-fom" style="overflow: hidden;">
<?php
  if (is_array($updateuser)) {
    extract($updateuser);
    $hinh = '../' . $img_path . $anh;
  }
?>

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="form-group  col-md-12">
                        <span class="thong-tin-thanh-toan">
                            <h5>Cập nhật người dùng</h5>
                        </span>
                    </div>
                </div>
                <form class="row" action="" method="POST">
                    <div class="form-group col-md-4">
                        <label class="control-label">
                            <font style="vertical-align: inherit">
                                <font style="vertical-align: inherit">ID</font>
                            </font>
                        </label>
                        <input class="form-control" type="text" name="idkh" required="" value="<?= $id_user ?>" readonly/>
                    </div>
                    <div class="form-group col-md-4">
                        <label class="control-label">
                            <font style="vertical-align: inherit">
                                <font style="vertical-align: inherit">Họ và tên</font>
                            </font>
                        </label>
                        <input class="form-control" type="text" required="" name="tenuser" value="<?= $ten_kh ?>" />
                    </div>
                    <div class="form-group col-md-4">
                        <label class="control-label">
                            <font style="vertical-align: inherit">
                                <font style="vertical-align: inherit">Tên tài khoản</font>
                            </font>
                        </label>
                        <input class="form-control" type="text" name="user" value="<?= $user ?>" />
                    </div>
                    <div class="form-group col-md-4">
                        <label class="control-label">
                            <font style="vertical-align: inherit">
                                <font style="vertical-align: inherit">Password</font>
                            </font>
                        </label>
                        <input class="form-control" type="text" name="pass" value="<?= $pass ?>" />
                    </div>

                    <div class="form-group col-md-4">
                        <label class="control-label">
                            <font style="vertical-align: inherit">
                                <font style="vertical-align: inherit">Địa chỉ Email</font>
                            </font>
                        </label>
                        <input class="form-control" type="email" required="" name="email" value="<?= $email ?>" />
                    </div>
                    <div class="form-group col-md-4">
                        <label class="control-label">
                            <font style="vertical-align: inherit">
                                <font style="vertical-align: inherit">Địa chỉ </font>
                            </font>
                        </label>
                        <input class="form-control" type="text" required="" name="diachi" value="<?= $dia_chi ?>" />
                    </div>
                    <div class="form-group col-md-4">
                        <label class="control-label">
                            <font style="vertical-align: inherit">
                                <font style="vertical-align: inherit">Số điện thoại</font>
                            </font>
                        </label>
                        <input class="form-control" type="number" name="sdt" value="<?= $sdt ?>" />
                    </div>


                    <div class="form-group col-md-3">
                        <label for="exampleSelect1" class="control-label">
                            <font style="vertical-align: inherit">
                                <font style="vertical-align: inherit">Vai trò</font>
                            </font>
                        </label>

                        <select name="vaitro" id="" style="padding: 10px 30px 10px 5px;">
                            <?php 
                                if($vai_tro == 0) {
                                    echo '
                                    <option style="font-size: 16px" value="0" selected>User</option>
                                    <option style="font-size: 16px" value="1">Admin</option>
                                    ';
                                  } else {
                                    echo '
                                    <option style="font-size: 16px" value="1" selected>Admin</option>
                                    <option style="font-size: 16px" value="0">User</option>
                                    '; 
                                  }
                            ?>
                        </select>

                        <!-- <select class="form-control" id="exampleSelect1" name="vaitro" value="<?= $vaitro ?>">
                            <option>
                                <font style="vertical-align: inherit">
                                    <font style="vertical-align: inherit">0</font>
                                </font>
                            </option>
                            <option>
                                <font style="vertical-align: inherit">
                                    <font style="vertical-align: inherit">1</font>
                                </font>
                            </option>
                        </select> -->
                    </div>

                    <div class="form-group col-md-12">
                        <label class="control-label">
                            <font style="vertical-align: inherit">
                                <font style="vertical-align: inherit">Nhân viên ảnh 3x4</font>
                            </font>
                        </label>
                        <div id="myfileupload">
                            <input class="form-control" type="file" id="uploadfile" name="ImageUpload" style="max-width: 300px;"/>
                            <img style="height: 80px; margin-top: 20px" src="<?php echo $hinh ?>" alt="">
                        </div>
                        <div id="thumbbox" >
                            <img height="300" width="300" alt="Hình ảnh ngón tay cái" id="thumbimage"
                                style="display: none" />
                            <a class="removeimg" href="javascript:"></a><br>
                    <!-- <form action="" method="post">/ -->
                                <input type="submit" class="btn btn-save" value="Cập nhật" name="capnhat">
                    <!-- </form> -->
                    <a href="index.php?act=nguoidung">
                        <button type="button" class="btn btn-cancel mr-2">
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
    <div class="modal-footer">
    </div>
</div>
</div>
</div>