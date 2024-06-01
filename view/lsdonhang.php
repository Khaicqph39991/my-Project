<div class="tong container"  style=" display: flex;  margin-top: 70px;">
<div class="row col-2">
<div class="list-group" style="justify-content: center;">
<a href="index.php?act=thongtintk"><button type="button" class="list-group-item list-group-item-action">
  Tài khoản
  </button></a>
  <a href="index.php?act=donhang"><button type="button" class="list-group-item list-group-item-action">Đơn hàng đang xử lý</button></a>
  <a href="index.php?act=lsdonhang"><button type="button" class="list-group-item list-group-item-action active">Lịch sử mua hàng</button></a>
  <a href="index.php?act=capnhaptk"><button type="button" class="list-group-item list-group-item-action">Cài đặt tài khoản</button></a>
  <a href="index.php?act=dangxuat"><button type="button" class="list-group-item list-group-item-action">Đăng xuất</button></a>
</div>

  </div>
  <div class="row col-1"></div>
  <div class="row col-9">
    <div class="col-md-12" style="text-align: center;">
    <table class="table table-hover">
  <thead>
    <tr class="tr-dh">
      <th class="text-center">Mã đơn hàng</th>
      <th class="text-center">Tên sản phẩm</th>
      <th class="text-center">Ảnh sản phẩm</th>
      <th class="text-center">Số lượng</th>
      <th class="text-center" style="width: 100px;">Giá</th>
      <th class="text-center">Thành tiền</th>
      <th class="text-center">Trạng thái</th>
      <th class="text-center" style="width: 200px;">Ngày đặt</th>
    </tr>
  </thead>
  <tbody>
  <?php 
      foreach($lsdonhang as $lsdh){
         extract($lsdh);
         $hinh = $img_path.$anh_chinh;
        if($trang_thai == 2 || $trang_thai == 3){  
        echo  ' <tr><td class="text-center">#'.$id_ctdh.'</td>
        <td>'.$ten_sp.'</td>
        <td><img src="'.$hinh.'" alt="" style="height: 50px;"></td>
        <td class="text-center">'.$soluong.'</td>
        <td class="text-center">'.$gia_sp.'</td>
        <td class="text-center">'.$tien_spdh.'</td>
        ';
        if($trang_thai == 2 ){
        echo '<td class="text-center">Xong</td>';
        }elseif($trang_thai == 3){
          echo '<td class="text-center">Hủy</td>';
        }
        echo '
        <td class="text-center">'.$ngay_dat.'</td></tr>
        ';
      }
    }
    // if(!empty($trang_thai) && $trang_thai == 2 || $trang_thai == 5){
    //   echo 'Lịch sử đơn hàng trống';
    // }
      ?>

    <!-- <tr>
      <td class="text-center">1</td>
      <td>Nước lèo</td>
      <td><img src="../du-an1/upload/mota_caphe.jpg" alt="" style="height: 50px;"></td>
      <td class="text-center">5</td>
      <td class="text-center">20000</td>
      <td class="text-center">100000</td>
      <td class="text-center">Đang giao</td>
      <td class="text-center">11/12/2023</td>
    </tr>
    <tr>
      <td class="text-center">1</td>
      <td>Nước lèo</td>
      <td><img src="../du-an1/upload/mota_caphe.jpg" alt="" style="height: 50px;"></td>
      <td class="text-center">5</td>
      <td class="text-center">20000</td>
      <td class="text-center">100000</td>
      <td class="text-center">Đang giao</td>
      <td class="text-center">11/12/2023</td>
    </tr>
    <tr>
      <td class="text-center">1</td>
      <td>Nước lèo</td>
      <td><img src="../du-an1/upload/mota_caphe.jpg" alt="" style="height: 50px;"></td>
      <td class="text-center">5</td>
      <td class="text-center">20000</td>
      <td class="text-center">100000</td>
      <td class="text-center">Đang giao</td>
      <td class="text-center">11/12/2023</td>
    </tr> -->
  </tbody>
</table>
    </div>
  </div>



</div>
</div>