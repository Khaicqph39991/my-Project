<?php 
    session_start();
    if (!isset($_SESSION['giohang'])) {
        $_SESSION['giohang'] = [];
    }
    include "model/pdo.php";
    include "model/taikhoan.php";
    include "model/sanpham.php";
    include "model/loaisp.php";
    include "model/donhang.php";
    include "model/blog.php";
    include "model/binhluan.php";
    include "global.php";
    ob_start();
    include "view/header.php";
    $dsloaisp = loadall_loaisp();
    $dssphome = loadallsp_home();
    $dssphot=loadSanhot();
    if (isset($_GET['act'])&&($_GET['act']!="")) {
        $act=$_GET['act'];
        switch($act){
            case "dangky":
                if(isset($_POST['dangky']) && ($_POST['dangky']!="")){
                        $email = $_POST['email'];
                        $name = $_POST['user'];
                        $username = $_POST['username'];
                        $diachi = $_POST['diachi'];
                        $sdt = $_POST['sdt'];
                        $pswd = $_POST['pass'];
                        $psre = $_POST['passre'];
                        insert_taikhoan_user($email,$name,$username,$diachi,$sdt,$pswd,$psre);
                }
                include "view/login/dangky.php";
                break;
            case "login":
                if (isset($_POST['dangnhap'])) {
                    dangnhap($_POST['user'], $_POST['pass']);
                    if (isset($_SESSION['user'])){
                        ob_clean();
                        include "view/header.php";
                        include "view/home.php";
                    }
                }else{
                    include "view/login/login.php";
                }
                break;
            case "dangxuat":
                dangxuat();
                if(!isset($_SESSION['user'])) {
                    ob_clean();   
                    include "view/header.php";
                    include "view/home.php";
                  }
                break;
            case "quenmk":
                if (isset($_POST['guiemail'])) {
                    $email = $_POST['email'];
                    sendmail($email);
                } 
                include "view/login/quenmk.php";
                break;
            case "chitietsp":
                if(isset($_POST['guibinhluan'])){
                    $kt = ktraspxong($_GET['id_sp'],$_SESSION['id_user']);
                    if ($kt) {
                        insert_binhluan($_POST['idsp'], $_POST['noidung']);
                    }
                    else{
                        echo '<script>alert("Vui lòng mua hàng để bình luận")</script>';
                    }
                }
                if(isset($_GET['id_sp']) && $_GET['id_sp'] > 0){
                $sanpham = loadone_sanpham($_GET['id_sp']);
                $anhspmota = loadanhsp($_GET['id_sp']);
                $binhluan = loadall_binhluan($_GET['id_sp']);
                $dembl = dem_bl($_GET['id_sp']);
                $sanphamcl = loadsp_cungloai($_GET['id_sp']);
                include "view/sanpham/chitietsp.php";
                }
                break;
            case "danhmuc": 
                if(isset($_POST['timkiem']) &&  ($_POST['timkiem']) ){
                    $keyw = $_POST['keyw'];
                }else{
                    $keyw = "";
                }
                if(isset($_GET['id_loai']) && !empty($_GET['id_loai'])){
                    $dsspdanhmuc  = load_spdanhmuc($_GET['id_loai']);
                    include "view/sanpham/danhmuc.php";
                    break;
                }
                $dsspdanhmuc = loadallsp_spdm($keyw);
                include "view/sanpham/danhmuc.php";
                break;
            case "blog":
                $keyw = '';
                $listblog = loadall_blog($keyw);
                $loadoneblog = loadone_blogview();
                include "view/blog/blog.php";
                break;
            case "card":
                include "view/card.php";
                break;
            case "chitietblog":
                $keyw = '';
                if(isset($_GET['id_blog']) && $_GET['id_blog'] > 0){
                    $oneblog = loadone_blog($_GET['id_blog']);
                    $listblog = loadall_blog($keyw);
                    include "view/blog/chitietblog.php";
                }
                break;
            case "gioithieu":
                include "view/gioithieu.php";
                break;
            case "lienhe":
                include "view/lienhe.php";
                break;
            case "addcard":
                if (isset($_POST['addcard'])) {
                    $idsp = $_POST['idsp'];
                    $tensp = $_POST['tensp'];
                    $anhsp = $_POST['img'];
                    $giasp = $_POST['gia'];
                    $soluong = $_POST['soluong'];
                    $check = false;
                    foreach($_SESSION['giohang'] as $item){
                        if($item['idsp'] == $idsp){
                          $check = true;
                          break;
                        }
                    }
                    if($check){
                        foreach($_SESSION['giohang'] as $key => $item){
                            if($item['idsp'] == $idsp){
                               $_SESSION['giohang'][$key]['soluong'] += $soluong; 
                               header('Location: /du-an1/index.php?act=card');
                               exit;
                            }
                         }
                    }
                    else{
                        $sp = array("idsp"=>$idsp,"tensp"=>$tensp,"anhsp"=>$anhsp,"giasp"=>$giasp,"soluong"=>$soluong);
                        array_push($_SESSION['giohang'],$sp);
                    }                     
                    header('Location: /du-an1/index.php?act=card');
                    exit;
                }
                break;
            case "delspcard":
                if (isset($_POST['delspcard'])) {
                    $i = "";
                    $idspxoa = $_POST['idsp'];
                    foreach($_SESSION['giohang'] as $key => $sp){
                    if($sp['idsp'] == $idspxoa){
                        $i = $key;
                        break; 
                    }
                    }
                    if($i != ""){
                        unset($_SESSION['giohang'][$i]);
                    }
                    $_SESSION['giohang'] = array_values($_SESSION['giohang']);
                    ob_clean();
                    header('Location: /du-an1/index.php?act=card');
                }
                break;
            case "delcard":
                $_SESSION['giohang'] = [];
                ob_clean();
                header('Location: /du-an1/index.php?act=card');
                break;
            case "spyeuthich":
                include "view/spyeuthich.php";
                break;
            case "thongtintk":
            $tk = thongtintk($_SESSION['user']);
                include "view/thongtintk.php";
                break;
            case "capnhaptk":
                $capnhaptknguoi = load_oneuses($_SESSION['user']);
                include "view/capnhaptk.php";
                if(isset($_POST['capnhat'])){
                    if(isset($_SESSION['user'])){
                        $tenuser = $_POST['tenuser'];
                        $user=$_SESSION['user'];
                        $pass = $_POST['pass'];
                        $email = $_POST['email'];
                        $diachi = $_POST['diachi'];
                        $sdt = $_POST['sdt'];
                        $hinh = $_FILES['ImageUpload']['name'];
                        $target_dir = "./upload/";
                        $target_file = $target_dir . basename($_FILES['ImageUpload']['name']);
                        if(move_uploaded_file($_FILES['ImageUpload']['tmp_name'], $target_file)){
                            echo '<script>alert("Upload ảnh thành công")</script>';
                        }else{
                           echo '<script>alert("Upload ảnh không thành công")</script>';
                        }
                      suathongtintk($id_user,$user,$tenuser,$pass,$email,$diachi,$sdt,$hinh);
                        header('location: index.php?act=thongtintk');
                    }
                }
                break;
            case "donhang":
                if (isset($_SESSION['user'])) {
                    $listdhxl  = loaddonhang_xuly($_SESSION['user']);
                    include "view/danhsachdonhang.php";
                }
                break;
            case "lsdonhang":
                if (isset($_SESSION['user'])) {
                    $lsdonhang = loadlichsu_donhang($_SESSION['user']);
                    include "view/lsdonhang.php";
                }
                break;
            case "thanhtoan":
                $tk = thongtintk($_SESSION['user']);
                include "view/thanhtoan.php";
                break;
            case "dathang":
                if (isset($_SESSION['user'])) {
                    if(isset($_POST['dathang']) && ($_POST['dathang']!="") && isset($_SESSION['giohang'])){
                            $id_user = $_SESSION['id_user'];
                            $hoten = $_POST['hoten'];
                            $diachi = $_POST['diachi'];
                            $sdt = $_POST['sdt'];
                            $email = $_POST['email'];
                            $ghichu = $_POST['ghichu'];
                            $pttt = $_POST['pttt'];
                            $tongtiendonhang = 0;
                            // idsp"=>$idsp,"tensp"=>$tensp,"anhsp"=>$anhsp,"giasp"=>$giasp,"soluong"=>$soluong
                            themdonhang($id_user,$hoten,$email,$diachi,$sdt,$ghichu,$tongtiendonhang,$pttt);
                            $iddh = timkiemiddh();
                            extract($iddh);
                            foreach ($_SESSION['giohang'] as $sp) {
                                $idsp = $sp['idsp'];
                                $giasp = $sp['giasp'];
                                $soluong = $sp['soluong'];
                                $thanhtien = $giasp * $soluong;
                                $tongtiendonhang += $thanhtien;
                                themchitietdh($id_dh,$idsp,$giasp,$soluong,$thanhtien);
                                update_tongtiendh($id_dh,$tongtiendonhang);
                                update_slsp($idsp);
                            }
                            unset($_SESSION['giohang']);
                            header('location: index.php?act=');
                    }
                }
                else{
                    header('location: index.php?act=');
                }
                break;
        }
    }else{
        include "view/home.php";
    }
    include "view/footer.php";
?>