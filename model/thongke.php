<?php 
function load_demuser(){
    $sql = "SELECT COUNT(*) AS id_user 
    FROM taikhoan";
    $dem = pdo_query($sql);
    return $dem;
}
function load_demsanpham(){
    $sql = "SELECT COUNT(*) AS id_sp 
    FROM sanpham";
    $dem = pdo_query($sql);
    return $dem;
}
function load_demdonhang(){
    $sql = "SELECT COUNT(*) AS id_dh 
    FROM donhang";
    $dem = pdo_query($sql);
    return $dem;
}
function load_demdhbihuy(){
    $sql = "SELECT COUNT(*) AS id_dh 
    FROM donhang where trang_thai = 5";
    $dem = pdo_query($sql);
    return $dem;
}
function load_demsphethang(){
    $sql = "SELECT COUNT(*) AS id_sp 
    FROM sanpham where so_luong = 0";
    $dem = pdo_query($sql);
    return $dem;
}
function load_demspkhonghd(){
    $sql = "SELECT COUNT(*) AS id_sp 
    FROM sanpham where trang_thai = 1";
    $dem = pdo_query($sql);
    return $dem;
}
function load_demdanhmuc(){
    $sql = "SELECT COUNT(*) AS id_loai
    FROM loaisp";
    $dem = pdo_query($sql);
    return $dem;
}
function load_tongtiendh(){
   $sql =  "SELECT SUM(tong_tien_dh) 
    FROM donhang
    WHERE trang_thai = 4";
    $dem = pdo_query_one($sql);
    return $dem;
}
function list_thongke_spdm(){
    $sql="SELECT 
    l.ten_loai,
    COUNT(s.id_sp) AS 'so_luong'
  FROM loaisp l
  LEFT JOIN chitietsp c ON l.id_loai = c.id_loai
  LEFT JOIN sanpham s ON c.id_sp = s.id_sp
  GROUP BY l.ten_loai";

$tkdmsp = pdo_query($sql);
return $tkdmsp;
}
function Trangthaidh(){
    $sql="SELECT
    CASE
      WHEN ct.trang_thai = 0 THEN 'Chưa giải quyết'  
      WHEN ct.trang_thai = 1 THEN 'Chưa thanh toán '
      WHEN ct.trang_thai = 2 THEN 'Đã thanh toán '
      WHEN ct.trang_thai = 3 THEN ' Đang giao hàng '
      WHEN ct.trang_thai = 4 THEN 'Xong '
      ELSE 'Hủy bỏ'
    END AS trang_thai,
    COUNT(ct.id_dh) AS so_don
  FROM donhang ct
  GROUP BY ct.trang_thai  ";

$sptt = pdo_query($sql);
return $sptt;
}
?>