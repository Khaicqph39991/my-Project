<?php 
function loadall_blog($keyw,$page,$soluongbl){
  $batdau=($page-1)*$soluongbl;
  $sql = "SELECT * FROM blog";
  if(!empty($keyw)) {
    $sql .=" WHERE tieu_de LIKE '%$keyw%' or tac_gia LIKE '%$keyw%'";
  }
  $sql .= " ORDER BY id_blog DESC";
  $sql .= " LIMIT ".$batdau.",".$soluongbl;
  $ket_qua = pdo_query($sql);
  return $ket_qua;
}
function get_bl(){
  $sql = "SELECT * FROM blog ORDER BY id_blog DESC";
    return pdo_query($sql);
}
function hien_thi_so_trang_bl($tongsobl,$soluongbl){
    $tongbl=count($tongsobl);
    global $sotrangbl;
    $sotrangbl=ceil($tongbl/$soluongbl);
    $tranght = $_GET['page'] ?? 1;
    $html_sotrang="";
    for ($i=1; $i <=$sotrangbl ; $i++) { 
      if($i == $tranght){
        $html_sotrang.='
        <li class="paginate_button page-item active">
          <a href="index.php?act=quanlyblog&page='.$i.'" aria-controls="sampleTable" data-dt-idx="1" tabindex="0" class="page-link">
            <font style="vertical-align: inherit">
              <font style="vertical-align: inherit">'.$i.'</font>
            </font>
          </a>
        </li>        
        ';
      } else {
        $html_sotrang.='
        <li class="paginate_button page-item">
          <a href="index.php?act=quanlyblog&page='.$i.'" aria-controls="sampleTable" data-dt-idx="1" tabindex="0" class="page-link">
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

function loadone_blog($id){
    $sql = "select * from blog where id_blog = ".$id;
    $result = pdo_query_one($sql);
    return $result;
}
function loadone_blogview(){
    $sql = "SELECT * FROM blog order by id_blog DESC limit 1;";
    $result = pdo_query_one($sql);
    return $result;
}

function insert_blog($tieu_de,$tac_gia,$noi_dung,$hinh){
    $sql = "INSERT INTO `blog`( `tieu_de`, `tac_gia`,`noi_dung`, `ngay_them`,`anh_blog`) VALUES ('$tieu_de', '$tac_gia','$noi_dung',NOW(),'$hinh')";
    pdo_execute($sql);
    return;
    }

function update_blog($id, $tieu_de, $tac_gia, $noi_dung, $hinh)
{
  $sql = "UPDATE `blog` SET 
      `tieu_de` = '$tieu_de',
      `tac_gia` = '$tac_gia', 
      `noi_dung` = '$noi_dung',
      `ngay_them` = NOW()";

  if ($hinh != "") {
    $sql .= ", `anh_blog` = '$hinh'";
  }

  $sql .= " WHERE id_blog = $id";
  pdo_execute($sql);
}

function delete_blog($id_blog){
    $sql = "DELETE FROM blog WHERE id_blog=$id_blog";
    pdo_execute($sql);
  }
?>