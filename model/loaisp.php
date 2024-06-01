<?php
    function loadall_loaisp(){
        $sql = "select * from loaisp order by id_loai desc";
        $loaisp = pdo_query($sql);
        return $loaisp;
    }
    function loaddm_pt($keyw,$page,$soluongdm){
      $batdau=($page-1)*$soluongdm;
      $sql = "SELECT * FROM loaisp";
      $where = "WHERE 1";
      if(!empty($keyw)) {
        $where .= " AND ten_loai LIKE '%$keyw%'";
      }
      $sql .= " " . $where;
      $sql .= " ORDER BY id_loai DESC";
      $sql .= " LIMIT ".$batdau.",".$soluongdm;
      $dsdanhmuc = pdo_query($sql);
      return $dsdanhmuc;
    }
    function get_dm(){
      $sql = "SELECT * FROM loaisp ORDER BY id_loai DESC";
      return pdo_query($sql);
    }
    function hien_thi_so_trang_dm($tongsodm,$soluongdm){
      $tongdanhmuc=count($tongsodm);
      global $sotrangdm;
      $sotrangdm=ceil($tongdanhmuc/$soluongdm);
      $tranght = $_GET['page'] ?? 1;
      $html_sotrang="";
      for ($i=1; $i <=$sotrangdm ; $i++) { 
        if($i == $tranght){
          $html_sotrang.='
          <li class="paginate_button page-item active">
            <a href="index.php?act=nguoidung&page='.$i.'" aria-controls="sampleTable" data-dt-idx="1" tabindex="0" class="page-link">
              <font style="vertical-align: inherit">
                <font style="vertical-align: inherit">'.$i.'</font>
              </font>
            </a>
          </li>        
          ';
        } else {
          $html_sotrang.='
          <li class="paginate_button page-item">
            <a href="index.php?act=nguoidung&page='.$i.'" aria-controls="sampleTable" data-dt-idx="1" tabindex="0" class="page-link">
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
    function insert_danhmuc($tendm,$hinh){
      if (empty($tendm)) {
          echo '<script>alert("Vui lòng nhập tên tên danh mục")</script>';
          return;
      }
      if (strlen($tendm) < 2 || strlen($tendm) > 100) {
          echo '<script>alert("Độ dài tên danh mục phải từ 2-100 ký tự")</script>';
          return;
      }
      $sql = "INSERT INTO `loaisp`( `ten_loai`, `anh_loai`) VALUES ('$tendm', '$hinh')";
      pdo_execute($sql);
      echo '<script>alert("Thêm danh mục thành công")</script>';
      return;
      }
    function load_one_loaisp($id){
        $sql="select * from loaisp where id_loai=".$id;
        $oneloaisp= pdo_query_one($sql);
        return $oneloaisp;
      }
      
      function update_dsloaisp($id, $ten_loai, $hinh)
      {
        $sql = "UPDATE `loaisp` SET
        `ten_loai` =  '$ten_loai'";
        if ($hinh != "") {
          $sql .= ", `anh_loai` = '$hinh'";
        }

        $sql.="WHERE id_loai = $id";

        pdo_execute($sql);
      }

      //xoa
      function delete_loaihang($idloai){
        $sql = "DELETE FROM loaisp WHERE id_loai=$idloai";
        pdo_execute($sql);
      }
      function loaddm_option($id){
        $sql = "
        SELECT 
        c.id_sp,
        s.ten_sp,
        s.anh_chinh,    
        s.mo_ta,
        l.id_loai,   
        l.ten_loai
     FROM chitietsp c
     INNER JOIN sanpham s ON c.id_sp = s.id_sp  
     INNER JOIN loaisp l ON c.id_loai = l.id_loai
     INNER JOIN
     (
       SELECT id_loai, MAX(id_ctsp) AS max_id_ctsp
       FROM chitietsp
       WHERE id_sp = $id
       GROUP BY id_loai
     ) tmp ON c.id_loai = tmp.id_loai AND c.id_ctsp = tmp.max_id_ctsp
        ";
        $dmoption = pdo_query($sql);
        return $dmoption;
      }
      function loadall_loaisptheoid($id){
        $sql = "
        SELECT ten_loai 
        FROM loaisp 
        JOIN chitietsp ON loaisp.id_loai = chitietsp.id_loai
        WHERE chitietsp.id_sp = $id
        ";
        $loaisp = pdo_query($sql);
        return $loaisp;
    }
?>