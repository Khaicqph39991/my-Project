<?php 
    function loadallsp_home(){
        $sql = "select * from sanpham where trang_thai = 0 order by id_sp desc limit 0,8";
        $listsp = pdo_query($sql);
        return $listsp;
    }
    function loadall_listsptk($keyw,$page,$soluongsp){
      $batdau=($page-1)*$soluongsp;
      $sql = "SELECT * FROM sanpham";
      $where = "WHERE 1";
      if(!empty($keyw)) {
        $where .= " AND ten_sp LIKE '%$keyw%'";
      }
      $sql .= " " . $where;
      $sql .= " ORDER BY id_sp DESC";
      $sql .= " LIMIT ".$batdau.",".$soluongsp;
      $dssanpham = pdo_query($sql);
      return $dssanpham;
    }
    function get_sp(){
      $sql = "SELECT * FROM sanpham ORDER BY id_sp DESC";
        return pdo_query($sql);
    }
    function hien_thi_so_trang_sp($tongsosp,$soluongsp){
      $tongsanpham=count($tongsosp);
      global $sotrangsp;
      $sotrangsp=ceil($tongsanpham/$soluongsp);
      $tranght = $_GET['page'] ?? 1;
      $html_sotrang="";
      for ($i=1; $i <=$sotrangsp ; $i++) { 
        if($i == $tranght){
          $html_sotrang.='
          <li class="paginate_button page-item active">
            <a href="index.php?act=hethongsanpham&page='.$i.'" aria-controls="sampleTable" data-dt-idx="1" tabindex="0" class="page-link">
              <font style="vertical-align: inherit">
                <font style="vertical-align: inherit">'.$i.'</font>
              </font>
            </a>
          </li>        
          ';
        } else {
          $html_sotrang.='
          <li class="paginate_button page-item">
            <a href="index.php?act=hethongsanpham&page='.$i.'" aria-controls="sampleTable" data-dt-idx="1" tabindex="0" class="page-link">
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
//xoasp

    function delete_sanpham($id_sp){
    $sql = "DELETE FROM sanpham WHERE id_sp = $id_sp";
    pdo_execute($sql);
    }
    function loadone_sanpham($id){
        $sql = "select * from sanpham where id_sp = ".$id;
        $result = pdo_query_one($sql);
        return $result;
    }
    function loadanhsp($id){
        $sql = "select * from anhsp where id_sp = $id LIMIT 4";
        $listanhsp = pdo_query($sql);
        return $listanhsp;
    }
        // load all sản phẩm ở danh mục sản phẩm
    function loadallsp_spdm($keyw)
    {
      $sql = "select * from sanpham";
      if (!empty($keyw)) {
        $sql .= " where ten_sp like '%$keyw%'";
      }
      $sql .= " order by id_sp desc";
      $listsp = pdo_query($sql);
      return $listsp;
    }
    // load sản phẩm theo danh mục
    function load_spdanhmuc($id){
        $sql = "SELECT * FROM chitietsp
      INNER JOIN sanpham ON chitietsp.id_sp = sanpham.id_sp
      INNER JOIN loaisp ON chitietsp.id_loai = loaisp.id_loai
      WHERE loaisp.id_loai = $id";
        $dmspham = pdo_query($sql);
        return $dmspham;
      }
      function update_sanpham($id, $ten_sp, $gia, $gia_sale, $so_luong, $mo_ta, $trang_thai, $hinh) {

        $sql = "UPDATE sanpham SET ";
      
        $sql .= "ten_sp = '$ten_sp'";
      
        // Kiểm tra kiểu dữ liệu của biến số
        if(is_numeric($gia)) {
          $sql .= ", gia = $gia"; 
        } else {
          $sql .= ", gia = '$gia'";
        }
      
        if(is_numeric($gia_sale)) {
          $sql .= ", gia_sale = $gia_sale";
        } else {
          $sql .= ", gia_sale = '$gia_sale'";
        }
        if(is_numeric($so_luong)) {
          $sql .= ", so_luong = $so_luong";
        } else {
          $sql .= ", so_luong = '$so_luong'";
        }
        if(is_numeric($trang_thai)) {
          $sql .= ", trang_thai = $trang_thai";
        } else {
          $sql .= ", trang_thai = '$trang_thai'";
        }
      
        // Kiểm tra các biến còn lại
      
        $sql .= ", mo_ta = '$mo_ta'";
      
        if($hinh != "") {
          $sql .= ", anh_chinh = '$hinh'";
        }
      
        // Kiểm tra id 
        if(is_numeric($id)) {
          $sql .= " WHERE id_sp = $id";
        } else {
          $sql .= " WHERE id_sp = '$id'"; 
        }
      
        pdo_execute($sql);
      
      }
      //update danh mục sản phẩm
      //xóa tất cả các bản ghi khác danh mục đã chọn
      function delbanghidm($id_sp){
        $sql = "DELETE FROM chitietsp WHERE id_sp = '$id_sp'";
        pdo_execute($sql);
      }
      //thêm danh mục mới vào bảng
      function addbanghidm($id_sp, $id_loai){
        $sql = "INSERT INTO chitietsp (id_sp, id_loai) 
                VALUES ($id_sp, $id_loai);";
        pdo_execute($sql);
      }
      function loadSanhot() {
        $sql = "SELECT 
                sp.*, l.ten_loai
                FROM 
                sanpham sp
                LEFT JOIN  
                chitietsp ctp 
                ON   
                sp.id_sp = ctp.id_sp
                LEFT JOIN
                loaisp l
                ON
                ctp.id_loai = l.id_loai 
                WHERE
                l.id_loai = 1 
                ORDER BY  
                sp.so_luong DESC 
                LIMIT 8"; 
        $dssanphamhot = pdo_query($sql);
        return $dssanphamhot;
      }
      function delbanghi_anhphusp($id_sp){
        $sql = "DELETE FROM anhsp WHERE id_sp = '$id_sp'";
        pdo_execute($sql);
      }
      function update_anhphusp($id_sp,$anhphu){
        $sql = "INSERT INTO anhsp (id_sp, anh_mota) 
                VALUES ($id_sp, '$anhphu');";
        pdo_execute($sql);
      }
      function insert_sanpham($tensanpham,$gia, $giasale,$hinh,$soluong,$mota){
        $sql = "INSERT INTO `sanpham` ( `ten_sp`, `gia`, `gia_sale`, `anh_chinh`,`so_luong`,`mo_ta`,`ngay_nhap`) VALUES ( '$tensanpham', '$gia','$giasale','$hinh','$soluong','$mota',NOW()); ";
        pdo_execute($sql);
      }
      function timidsanphammoinhat(){
        $sql = "SELECT * FROM `sanpham` order by id_sp DESC limit 1;";
        $idsp = pdo_query_one($sql);
        return $idsp;
      }
      function loadsp_cungloai($id_sp){
        $sql = "
        SELECT sp.*  
        FROM sanpham sp
        INNER JOIN chitietsp cts ON sp.id_sp = cts.id_sp
        INNER JOIN loaisp l ON cts.id_loai = l.id_loai
        WHERE cts.id_loai IN (
          SELECT id_loai
          FROM chitietsp
          WHERE id_sp = $id_sp  
        ) 
        AND sp.id_sp != $id_sp
        GROUP BY sp.id_sp
        LIMIT 4
        ";
        $list_spcungloai = pdo_query($sql);
        return $list_spcungloai;
      }
?>