<?php
function loadall_donhangtk($keyw,$page,$soluongdh){
    $batdau=($page-1)*$soluongdh;
    $sql = "SELECT * FROM donhang";
    if(!empty($keyw)) {
      $sql .= " WHERE ho_ten LIKE '%$keyw%'";
    }
    $sql .= " ORDER BY id_dh DESC";
    $sql .= " LIMIT ".$batdau.",".$soluongdh;
    $listdh = pdo_query($sql);
    return $listdh;
}
function get_dh(){
    $sql = "SELECT * FROM donhang ORDER BY id_dh DESC";
        return pdo_query($sql);
}
function hien_thi_so_trang_dh($tongsodh,$soluongdh){
    $tongsanpham=count($tongsodh);
    global $sotrangdh;
    $sotrangdh=ceil($tongsanpham/$soluongdh);
    $tranght = $_GET['page'] ?? 1;
    $html_sotrang="";
    for ($i=1; $i <=$sotrangdh ; $i++) { 
      if($i == $tranght){
        $html_sotrang.='
        <li class="paginate_button page-item active">
          <a href="index.php?act=dathang&page='.$i.'" aria-controls="sampleTable" data-dt-idx="1" tabindex="0" class="page-link">
            <font style="vertical-align: inherit">
              <font style="vertical-align: inherit">'.$i.'</font>
            </font>
          </a>
        </li>        
        ';
      } else {
        $html_sotrang.='
        <li class="paginate_button page-item">
          <a href="index.php?act=dathang&page='.$i.'" aria-controls="sampleTable" data-dt-idx="1" tabindex="0" class="page-link">
            <font style="vertical-align: inherit">
              <font style="vertical-align: inherit">'.$i.'</font>
            </font>
          </a>
        </li>        
        ';
      }
        
    }
    return $html_sotrang;
}
function loadall_donhangbdk(){
    $sql = "select * from donhang order by id_dh desc limit 10";
    $listdh = pdo_query($sql);
    return $listdh;
}
function loadall_donhang(){
    $sql = "select * from donhang order by id_dh asc";
    $listdh = pdo_query($sql);
    return $listdh;
}
function update_ctdh($id, $diachi, $sdt, $trangthai)
{
    $sql = "Update donhang Set   dia_chi = '$diachi', sdt = '$sdt',trang_thai = '$trangthai'
            Where id_dh = $id";
    pdo_execute($sql);
}

function loadone_donhang($id)
{
    $sql = "select * from donhang where id_dh = $id ";
    $listdh = pdo_query_one($sql);
    return $listdh;
}
function loadall_donhanghuy(){
    $sql=" SELECT *  
    FROM donhang  
    WHERE trang_thai = 5
    ORDER BY id_dh";
     $listhuydonhang = pdo_query($sql);
     return $listhuydonhang;
}
function loaddonhang_xuly($user)
{
    $sql = "SELECT 
    ctdh.id_ctdh, ctdh.gia_sp, ctdh.tien_spdh, ctdh.soluong,
    sp.ten_sp, sp.anh_chinh, 
    dh.ngay_dat, ctdh.trang_thai
FROM chitietdonhang ctdh
JOIN donhang dh ON ctdh.id_dh = dh.id_dh
JOIN taikhoan tk ON dh.id_user = tk.id_user 
JOIN sanpham sp ON ctdh.id_sp = sp.id_sp
WHERE tk.user = '$user' AND ctdh.trang_thai != 2 AND ctdh.trang_thai != 3";
    $dhxl = pdo_query($sql);
    return $dhxl;
}
function loadlichsu_donhang($user)
{
    $sql = "SELECT 
    ctdh.id_ctdh, ctdh.gia_sp, ctdh.tien_spdh, ctdh.soluong,
    sp.ten_sp, sp.anh_chinh, 
    dh.ngay_dat, ctdh.trang_thai
FROM chitietdonhang ctdh
JOIN donhang dh ON ctdh.id_dh = dh.id_dh
JOIN taikhoan tk ON dh.id_user = tk.id_user 
JOIN sanpham sp ON ctdh.id_sp = sp.id_sp
WHERE tk.user = '$user' AND ctdh.trang_thai != 0 AND ctdh.trang_thai != 1";
    $dhxl = pdo_query($sql);
    return $dhxl;
}
//Thêm đơn hàng
function themdonhang($iduser,$hoten,$email,$diachi,$sdt,$ghichu,$tongtiendonhang,$pttt){
    if (is_null($ghichu)) {
        $sql = "
    INSERT INTO `donhang`
    (id_user, ho_ten, email, dia_chi, sdt, trang_thai, tong_tien_dh, ngay_dat)
    VALUES
    ($iduser, '$hoten', '$email', '$diachi', '$sdt', $pttt, $tongtiendonhang, NOW());
    ";
    }else{
    $sql = "
    INSERT INTO `donhang`
    (id_user, ho_ten, email, dia_chi, sdt, ghi_chu, trang_thai, tong_tien_dh, ngay_dat)
    VALUES
    ($iduser, '$hoten', '$email', '$diachi', '$sdt', '$ghichu', $pttt, $tongtiendonhang, NOW());
    ";
    }
    pdo_execute($sql);
}

function timkiemiddh(){
    $sql = "SELECT * FROM `donhang` order by id_dh DESC limit 1;";
    $iddh = pdo_query_one($sql);
    return $iddh;
}
function timkiemidsp($tensp){
    $sql = "SELECT id_sp 
    FROM sanpham
    WHERE ten_sp LIKE '$tensp'";
    $idsp = pdo_query_one($sql);
    return $idsp;
}
function themchitietdh($iddh,$idsp,$giasp,$soluong,$thanhtien){
    $sql = "INSERT INTO chitietdonhang 
        (id_dh, id_sp, gia_sp, soluong, tien_spdh, trang_thai)
      VALUES
        ($iddh, $idsp, '$giasp', $soluong, $thanhtien, 0)";
    pdo_execute($sql);
}
function ct_donhang($id) {
    // Truy vấn SQL để lấy thông tin chi tiết về đơn hàng
    $sql = "SELECT 
      ctdh.id_ctdh,  dh.id_dh, ctdh.gia_sp, ctdh.tien_spdh, ctdh.soluong,
        sp.ten_sp, sp.anh_chinh, ctdh.trang_thai
    FROM chitietdonhang ctdh
    JOIN donhang dh ON ctdh.id_dh = dh.id_dh 
    JOIN sanpham sp ON ctdh.id_sp = sp.id_sp
    WHERE dh.id_dh = $id";

    // Thực thi truy vấn SQL và lưu kết quả
    $ctdh = pdo_query($sql);

    // Trả về kết quả
    return $ctdh;
}
function loadone_ctdonhang($id) {
    // Truy vấn SQL để lấy thông tin chi tiết về đơn hàng
    $sql = "SELECT 
      ctdh.id_ctdh,  dh.id_dh, ctdh.gia_sp, ctdh.tien_spdh, ctdh.soluong,
        sp.ten_sp, sp.anh_chinh, ctdh.trang_thai
    FROM chitietdonhang ctdh
    JOIN donhang dh ON ctdh.id_dh = dh.id_dh 
    JOIN sanpham sp ON ctdh.id_sp = sp.id_sp
    WHERE ctdh.id_ctdh = $id";

    // Thực thi truy vấn SQL và lưu kết quả
    $ctdh = pdo_query_one($sql);

    // Trả về kết quả
    return $ctdh;
}
function update_ctdonhang($id,$trangthai){
    $sql = "Update chitietdonhang Set   trang_thai = '$trangthai'
    Where id_ctdh = $id";
pdo_execute($sql);
}
function delete_ctdonhang($id){
    $sql = "DELETE FROM chitietdonhang WHERE id_ctdh= $id";
    pdo_execute($sql);
}
function update_tongtiendh($id_dh,$tongtiendonhang){
    $sql = "Update donhang Set tong_tien_dh = '$tongtiendonhang'
    Where id_dh = $id_dh";
    pdo_execute($sql);
}
function update_slsp($id_sp){
    $sql = "UPDATE sanpham
    SET so_luong = so_luong - 1
    WHERE id_sp = $id_sp";
    pdo_execute($sql);
}
function ktraspxong($id_sp,$id_user){
    $sql = "
    SELECT * 
    FROM chitietdonhang cd 
    JOIN donhang d ON cd.id_dh = d.id_dh
    WHERE cd.id_sp = $id_sp AND d.id_user = $id_user AND cd.trang_thai = 2;
    ";
    $kt = pdo_query($sql);
    return $kt;
}
?>