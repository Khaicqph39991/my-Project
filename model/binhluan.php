<?php
function loadall_binhluan($idsp)
{
    $sql = "
            SELECT binhluan.id_bl, binhluan.noi_dung, taikhoan.ten_kh, taikhoan.anh, binhluan.ngay_bl FROM `binhluan` 
            LEFT JOIN taikhoan ON binhluan.id_user = taikhoan.id_user
            LEFT JOIN sanpham ON binhluan.id_sp = sanpham.id_sp
            WHERE sanpham.id_sp = $idsp;
            ORDER BY binhluan.id_bl DESC
            LIMIT 5;
        ";
    $result = pdo_query($sql);
    return $result;
}
function insert_binhluan($idsp, $noidung)
{
    if (empty($noidung)) {
        echo '<script>alert("Vui lòng không để trống bình luận")</script>';
        return;
    }
    $date = date('Y-m-d');
    $idbl = $_SESSION['id_user'];
    $sql = "
            INSERT INTO `binhluan`(`id_user`, `id_sp`, `noi_dung`, `ngay_bl`) 
            VALUES ('$idbl','$idsp','$noidung','$date');
        ";
    pdo_execute($sql);
}
function dem_bl($idsp)
{
    $sql = "
          SELECT COUNT(*) AS so_binh_luan
          FROM binhluan 
          WHERE id_sp = ?";
    $params = [$idsp];
    $result = count_row($sql, $params);
    return $result;
}
function loadall_binhluan_admin($keyw,$page,$soluongbluan)
{
    $batdau= ($page-1)*$soluongbluan;
    $sql = "
        SELECT 
    b.id_bl, 
    u.ten_kh,
    p.ten_sp,
    b.noi_dung,
    b.ngay_bl
    FROM binhluan b
    INNER JOIN taikhoan u ON b.id_user = u.id_user
    INNER JOIN sanpham p ON b.id_sp = p.id_sp
        ";
    if(!empty($keyw)) {
        $sql .= "WHERE u.ten_kh LIKE '%$keyw%'"; 
    }
    $sql .= " ORDER BY b.id_bl DESC";
    $sql .= " LIMIT ".$batdau.",".$soluongbluan;
    $result = pdo_query($sql);
    return $result;
}

function get_bluan(){
    $sql = "SELECT * FROM binhluan ORDER BY id_bl DESC";
      return pdo_query($sql);
  }
  function hien_thi_so_trang_bluan($tongsobluan,$soluongbluan){
      $tongbluan=count($tongsobluan);
      global $sotrangxoabluan;
      $sotrangxoabluan=ceil($tongbluan/$soluongbluan);
      $tranght = $_GET['page'] ?? 1;
      $html_sotrang="";
      for ($i=1; $i <=$sotrangxoabluan ; $i++) { 
        if($i == $tranght){
          $html_sotrang.='
          <li class="paginate_button page-item active">
            <a href="index.php?act=quanlybinhluan&page='.$i.'" aria-controls="sampleTable" data-dt-idx="1" tabindex="0" class="page-link">
              <font style="vertical-align: inherit">
                <font style="vertical-align: inherit">'.$i.'</font>
              </font>
            </a>
          </li>        
          ';
        } else {
          $html_sotrang.='
          <li class="paginate_button page-item">
            <a href="index.php?act=quanlybinhluan&page='.$i.'" aria-controls="sampleTable" data-dt-idx="1" tabindex="0" class="page-link">
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
function delete_binhluan($id_bl){
    $sql = "DELETE FROM binhluan WHERE id_bl=$id_bl";
    pdo_execute($sql);
  }
?>