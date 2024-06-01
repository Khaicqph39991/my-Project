<form action="" method="post">
  <div class="model-fom">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="swal-text p-4">
          <h3>Cảnh báo</h3>
          <h4> Bạn có chắc không?</h4>
        </div>
        <div class="swal-footer">
          <div class="justify-content-center d-flex m-3">
          <?php $huy = "index.php?act=suadh&iddh=".$id_dh; 
          echo '
            <a href="'.$huy.'">
              <button type="button" class="btn btn-cancel mr-2">
                Hủy
              </button>
              <button type="submit" class="btn btn-save" name="xoactdh">Xóa</button>
            </a>
            ';
          ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>