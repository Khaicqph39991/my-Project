<?php 
    include "../model/pdo.php";
    include "../model/taikhoan.php";
    include "../model/thongke.php";
    include "../model/donhang.php";
    include "../global.php";
    include "../model/sanpham.php";
    include "../model/loaisp.php";
    include "../model/blog.php";
    include "../model/binhluan.php";
    ob_start();
    include "../admin/header.php";
    $dsbihuy=loadall_donhanghuy();
    $listdh = loadall_donhangbdk();
    if (isset($_GET['act'])&&($_GET['act']!="")) {
        $act=$_GET['act'];
        switch($act){
            case "addblog":
                if (isset($_POST['themmoiblog'])&&($_POST['themmoiblog'])) {
                    $tieu_de=$_POST['tieu_de'];
                    $tac_gia=$_POST['tac_gia'];
                    $noi_dung=$_POST['noi_dung'];
                    $hinh = $_FILES['productImg']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir.basename($_FILES['productImg']['name']);
                        if(move_uploaded_file($_FILES['productImg']['tmp_name'], $target_file)){
    //                        echo "Bạn đã upload ảnh thành công";
                        }else{
    //                        echo "Upload ảnh không thành công";
                        }
                        insert_blog($tieu_de,$tac_gia,$noi_dung,$hinh);
                        header('location: index.php?act=quanlyblog');
                }
                
                include "../admin/blog/addblog.php";
                break;
            case "addnhanvien":
                if(isset($_POST['themmoi'])&& ($_POST['themmoi'])){
                    $user = $_POST['user'];
                    $tenuser = $_POST['tenuser'];
                    $pass = $_POST['pass'];
                    $email = $_POST['email'];
                    $diachi = $_POST['diachi'];
                    $sdt = $_POST['sdt'];
                    $vaitro = $_POST['vaitro'];
                    $hinh = $_FILES['ImageUpload']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir.basename($_FILES['ImageUpload']['name']);
                    if(move_uploaded_file($_FILES['ImageUpload']['tmp_name'], $target_file)){
//                        echo "Bạn đã upload ảnh thành công";
                    }else{
//                        echo "Upload ảnh không thành công";
                    }
                    insert_taikhoan($tenuser,$user, $pass,$email, $diachi,$sdt,$hinh,$vaitro);
                    header('location: index.php?act=nguoidung');
                }
                include "../admin/taikhoan/addnhanvien.php";
                break;
            case "addsanpham":
                $dmsp =loadall_loaisp();
                if(isset($_POST['themmoi'])&& ($_POST['themmoi'])){
                    // $danhmuc = $_POST['danhmuc'];
                    $tensanpham = $_POST['tensanpham'];
                    $soluong = $_POST['soluong'];
                    $gia = $_POST['gia'];
                    $mota = $_POST['mota'];
                    $giasale = $_POST['giasale'];
                    $hinh = $_FILES['anhsanpham']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir.basename($_FILES['anhsanpham']['name']);
                        if(move_uploaded_file($_FILES['anhsanpham']['tmp_name'], $target_file)){
    //                        echo "Bạn đã upload ảnh thành công";
                        }else{
    //                        echo "Upload ảnh không thành công";
                        }
                    insert_sanpham($tensanpham,$gia, $giasale,$hinh,$soluong,$mota);
                    //danh mục
                    $idspmoinhat = timidsanphammoinhat();
                    extract($idspmoinhat);
                    $danhmuc = $_POST['danhmuc'];
                    if (is_array($danhmuc) && $danhmuc != null) {
                        foreach($danhmuc as $id_loai) {
                            addbanghidm($id_sp,$id_loai);
                        }
                    }
                    //anh phu
                    $hinhphu = array_filter($_FILES['files']['name']); 
                    if (is_array($hinhphu) && $hinhphu != null) {
                            foreach($hinhphu as $index => $name){
                                $target_file = $target_dir . $name;
                                if(move_uploaded_file($_FILES['files']['tmp_name'][$index], $target_file)) {
                                update_anhphusp($id_sp, $name);  
                                } else {
                                echo "Lỗi upload";
                                }
                            }
                    }
                    header('location: index.php?act=hethongsanpham');
                }
                include "../admin/sanpham/addsanpham.php";
                break;
            case "bangdieukhien":
                $demuser = load_demuser();
                $demsp = load_demsanpham();
                $demdh = load_demdonhang();
                $demspkhonghd = load_demspkhonghd();
                $thongkesp= list_thongke_spdm();
                $trangthaidonghang=Trangthaidh();
                include "../admin/bangdieukhien.php";
                break;
            case "suadh":
                if (isset($_GET['iddh']) && ($_GET['iddh'] > 0)) {
                $listonedh = loadone_donhang($_GET['iddh']);
                $chitietdh = ct_donhang($_GET['iddh']);
                }
                include "../admin/chitietdonhang.php";
                break;
            case "chitietdonhang":
                if(isset($_POST['capnhapdh']) && ($_POST['capnhapdh'])) {
                $id = $_POST['iddh'];
                $diachi = $_POST['diachi'];
                $sdt = $_POST['sdt'];
                $trangthai = $_POST['trangthai'];
                update_ctdh($id,$diachi, $sdt,$trangthai);
                }
                // $listdh = loadall_donhang();
                if(!isset($_GET['page'])){
                    $page=1;
                 }else{
                    $page=$_GET['page'];
                 }
                $soluongdh=10;
                $listdh = loadall_donhangtk($keyw,$page,$soluongdh);
                $tongsodh = get_dh();
                $hienthisotrang= hien_thi_so_trang_dh($tongsodh,$soluongdh);
                include "../admin/dathang.php";
                break;
            case "dathang":
                if(isset($_POST['clickOK'])&&($_POST['clickOK'])){
                    $keyw=$_POST['keyw'];
                }else{
                    $keyw="";
                }

                if(!isset($_GET['page'])){
                    $page=1;
                 }else{
                    $page=$_GET['page'];
                 }
                $soluongdh=10;
                $listdh = loadall_donhangtk($keyw,$page,$soluongdh);
                $tongsodh = get_dh();
                $hienthisotrang= hien_thi_so_trang_dh($tongsodh,$soluongdh);

                include "../admin/dathang.php";
                break;
            case "editblog":
                // case form update
                $updateblog = loadone_blog($_GET['idblog']);
                include "../admin/blog/editblog.php";
                if(isset($_POST['capnhatblog'])){
                    if(isset($_GET['idblog'])){
                        $id = $_POST['id_blog'];
                        $tieu_de = $_POST['tieu_de'];
                        $tac_gia = $_POST['tac_gia'];
                        $noi_dung = $_POST['noi_dung'];
                        $hinh = $_FILES['ImageUpload']['name'];
                        $target_dir = "./../upload/";
                        $target_file = $target_dir.basename($_FILES['ImageUpload']['name']);
                        if(move_uploaded_file($_FILES['ImageUpload']['tmp_name'], $target_file)){
    //                        echo "Bạn đã upload ảnh thành công";
                        }else{
    //                        echo "Upload ảnh không thành công";
                        }
                        update_blog($id,$tieu_de,$tac_gia,$noi_dung,$hinh);
                        header('location: index.php?act=quanlyblog');
                    }
                }
                
                break;
            case "suasp":
                    if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
                    $listonesp  = loadone_sanpham($_GET['idsp']);
                    $dmsp =loadall_loaisp();
                    $danhmuc= loaddm_option($_GET['idsp']);
                    $anhmt = loadanhsp($_GET['idsp']);
                    }
                    include "../admin/sanpham/editsanpham.php";
                    break;
            case "editsanpham":
                if(isset($_POST['capnhapsanpham']) && ($_POST['capnhapsanpham'])) {
                        $id=$_POST['id_sp'];
                        $ten_sp=$_POST['ten_sp'];
                        $gia=$_POST['gia'];
                        $gia_sale=$_POST['gia_sale'];
                        $so_luong=$_POST['so_luong'];
                        $mo_ta=$_POST['mo_ta'];
                        $trang_thai=$_POST['trang_thai'];
                        $hinh = $_FILES['ImageUpload']['name'];
                        $target_dir = "../upload/";
                        $target_file = $target_dir.basename($_FILES['ImageUpload']['name']);
                            if(move_uploaded_file($_FILES['ImageUpload']['tmp_name'], $target_file)){
        //                        echo "Bạn đã upload ảnh thành công";
                            }else{
        //                        echo "Upload ảnh không thành công";
                            }
                        
                            update_sanpham($id, $ten_sp, $gia, $gia_sale, $so_luong, $mo_ta, $trang_thai, $hinh );
                        //update danh mục
                        $iddm = $_POST['iddm'];
                        if (is_array($iddm) && $iddm != null) {
                            //xóa bản ghi
                            delbanghidm($id);
                            //thêm bản ghi
                            foreach($iddm as $id_loai) {
                                // echo $id;
                                addbanghidm($id,$id_loai);
                            }
                        }
                        //update ảnh phụ
                        $hinhphu = array_filter($_FILES['files']['name']); 
                        if (is_array($hinhphu) && $hinhphu != null) {
                            delbanghi_anhphusp($id);
                                foreach($hinhphu as $index => $name){
                                    $target_file = $target_dir . $name;
                                    if(move_uploaded_file($_FILES['files']['tmp_name'][$index], $target_file)) {
                                    update_anhphusp($id, $name);  
                                    } else {
                                    echo "Lỗi upload";
                                    }
                                }
                        }
                    }
                    $keyw = '';
                if(!isset($_GET['page'])){
                    $page=1;
                 }else{
                    $page=$_GET['page'];
                 }
                $soluongsp=10;
                $dssp = loadall_listsptk($keyw,$page,$soluongsp);
                $tongsosp = get_sp();
                $hienthisotrang= hien_thi_so_trang_sp($tongsosp,$soluongsp);
                    include "../admin/sanpham/hethongsanpham.php";
                break;
            case "hethongsanpham":
                $danhmuc=loadall_loaisp();
                if(isset($_POST['clickOK'])&&($_POST['clickOK'])){
                    $keyw=$_POST['keyw'];
                    $id_loai=$_POST['iddm'];
                }else{
                    $keyw="";
                    $id_loai=0;
                }
                if(!isset($_GET['page'])){
                    $page=1;
                 }else{
                    $page=$_GET['page'];
                 }
                $soluongsp=10;
                $dssp = loadall_listsptk($keyw,$page,$soluongsp);
                $tongsosp = get_sp();
                $hienthisotrang= hien_thi_so_trang_sp($tongsosp,$soluongsp);
                // if (isset($id_loai) && !empty($id_loai)) {
                    
                // }
                // loaddm_option($_GET['idsp'])
                include "../admin/sanpham/hethongsanpham.php";
                break;
            case "xoadssp":
                if (isset($_POST['xoahtsp'])) {
                    if (isset($_GET['id_sp'])) {
                        delete_sanpham($_GET['id_sp']);
                        header('location: index.php?act=hethongsanpham');
                    }
                }
                $keyw = '';
                if(!isset($_GET['page'])){
                    $page=1;
                 }else{
                    $page=$_GET['page'];
                 }
                $soluongsp=10;
                $dssp = loadall_listsptk($keyw,$page,$soluongsp);
                $tongsosp = get_sp();
                $hienthisotrang= hien_thi_so_trang_sp($tongsosp,$soluongsp);
                include "../admin/sanpham/xoasp.php";
                include "../admin/sanpham/hethongsanpham.php";
                break;
            case "listchuyenmuc":
            // $danhmuc=loadall_loaisp();

            if(isset($_POST['clickOK'])&&($_POST['clickOK'])){
                $keyw=$_POST['keyw'];
            }else{
                $keyw="";
            }
            if(!isset($_GET['page'])){
                $page=1;
             }else{
                $page=$_GET['page'];
             }
            $soluongdm=10;
            $danhmuc = loaddm_pt($keyw,$page,$soluongdm);
            $tongsodm = get_dm();
            $hienthisotrang= hien_thi_so_trang_dm($tongsodm,$soluongdm);

            include "../admin/sanpham/listchuyenmuc.php";
            break;
            case "adddanhmuc":
                if (isset($_POST['themmoidm'])&&($_POST['themmoidm'])) {
                    $tendm=$_POST['tendm'];
                    $hinh = $_FILES['productImg']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir.basename($_FILES['productImg']['name']);
                        if(move_uploaded_file($_FILES['productImg']['tmp_name'], $target_file)){
    //                        echo "Bạn đã upload ảnh thành công";
                        }else{
    //                        echo "Upload ảnh không thành công";
                        }
                    insert_danhmuc($tendm,$hinh);
                }
                $keyw = "";
                if(!isset($_GET['page'])){
                    $page=1;
                 }else{
                    $page=$_GET['page'];
                 }
                $soluongdm=10;
                $danhmuc = loaddm_pt($keyw,$page,$soluongdm);
                $tongsodm = get_dm();
                $hienthisotrang= hien_thi_so_trang_dm($tongsodm,$soluongdm);
                include "../admin/sanpham/listchuyenmuc.php";
                break;

            case "xoaloai":
                if(isset($_POST['xoaloai'])){
                    if(isset($_GET['idloai'])){
                        delete_loaihang($_GET['idloai']);
                        header('location: index.php?act=listchuyenmuc');
                    }
                }
                $keyw = "";
                if(!isset($_GET['page'])){
                    $page=1;
                 }else{
                    $page=$_GET['page'];
                 }
                $soluongdm=10;
                $danhmuc = loaddm_pt($keyw,$page,$soluongdm);
                $tongsodm = get_dm();
                $hienthisotrang= hien_thi_so_trang_dm($tongsodm,$soluongdm);
                include "../admin/sanpham/xoaloai.php";
                include "../admin/sanpham/listchuyenmuc.php";
                break;

            case "apdanhmuc":
                $uploaihang=load_one_loaisp($_GET['idloaihang']);
                include "../admin/sanpham/uploaisp.php";
                $keyw = "";
                if(!isset($_GET['page'])){
                    $page=1;
                 }else{
                    $page=$_GET['page'];
                 }
                $soluongdm=10;
                $danhmuc = loaddm_pt($keyw,$page,$soluongdm);
                $tongsodm = get_dm();
                $hienthisotrang= hien_thi_so_trang_dm($tongsodm,$soluongdm);
                include "../admin/sanpham/listchuyenmuc.php";
                if(isset($_POST['capnhaploai'])){
                    if(isset($_GET['idloaihang'])){
                        $id=$_POST['id_loai'];
                        $ten_loai=$_POST['ten_loai'];
                        $hinh = $_FILES['productImg']['name'];
                        $target_dir = "../upload/";
                        $target_file = $target_dir.basename($_FILES['productImg']['name']);
                            if(move_uploaded_file($_FILES['productImg']['tmp_name'], $target_file)){
        //                        echo "Bạn đã upload ảnh thành công";
                            }else{
        //                        echo "Upload ảnh không thành công";
                            }
                        update_dsloaisp($id,$ten_loai,$hinh);
                        header('location: index.php?act=listchuyenmuc');
                    }
                }
                break;
            case "updatenhanvien":
                // case form update
                $keyw ='';
                    $updateuser = load_oneuser($_GET['iduser']);
                    include "../admin/taikhoan/update-form-user.php";
                    if(!isset($_GET['page'])){
                        $page=1;
                     }else{
                        $page=$_GET['page'];
                     }
                     $soluongtk=10;
                    $xluser = loadall_usertk($keyw,$page,$soluongtk);
                    $tongsotk = get_tk();
                    $hienthisotrang= hien_thi_so_trang($tongsotk,$soluongtk);
                    include "../admin/taikhoan/nguoidung.php";
                // 
                    if(isset($_POST['capnhat'])){
                        if(isset($_GET['iduser'])){
                            $id = $_POST['idkh'];
                            $user = $_POST['user'];
                            $tenuser = $_POST['tenuser'];
                            $pass = $_POST['pass'];
                            $email = $_POST['email'];
                            $diachi = $_POST['diachi'];
                            $sdt = $_POST['sdt'];
                            $vaitro = $_POST['vaitro'];
                            $hinh = $_FILES['ImageUpload']['name'];
                            $target_dir = "../upload/";
                            $target_file = $target_dir.basename($_FILES['ImageUpload']['name']);
                            if(move_uploaded_file($_FILES['ImageUpload']['tmp_name'], $target_file)){
        //                        echo "Bạn đã upload ảnh thành công";
                            }else{
        //                        echo "Upload ảnh không thành công";
                            }
                            update_taikhoan($id,$tenuser,$user,$pass,$email,$diachi,$sdt,$hinh,$vaitro);
                            header('location: index.php?act=nguoidung');
                        }
                    }
                    // header('location: index.php?act=hethongsanpham');
                    break;
            case "nguoidung":
                // if(!isset($_GET['soluongtk'])){
                    $soluongtk=10;
                //  }else{
                //     $soluongtk=$_GET['soluongtk'];
                //  }
                if(isset($_POST['clickOK'])&&($_POST['clickOK'])){
                    $keyw=$_POST['keyw'];
                }else{
                    $keyw="";
                }
                if(!isset($_GET['page'])){
                    $page=1;
                 }else{
                    $page=$_GET['page'];
                 }
                // $soluongtk=6;
                $xluser = loadall_usertk($keyw,$page,$soluongtk);
                $tongsotk = get_tk();
                $hienthisotrang= hien_thi_so_trang($tongsotk,$soluongtk);
                include "../admin/taikhoan/nguoidung.php";
                break;
            case "xoanhanvien":
                $keyw ='';
                include "../admin/taikhoan/del-form-user.php";
                if(isset($_POST['xoanv'])){
                    if(isset($_GET['iduser'])){
                        delete_mem($_GET['iduser']);
                        header('location: index.php?act=nguoidung');
                    }
                }
                if(!isset($_GET['page'])){
                    $page=1;
                 }else{
                    $page=$_GET['page'];
                 }
                 $soluongtk=10;
                $xluser = loadall_usertk($keyw,$page,$soluongtk);
                $tongsotk = get_tk();
                $hienthisotrang= hien_thi_so_trang($tongsotk,$soluongtk);
                include "../admin/taikhoan/nguoidung.php";
                break; 
            case "phantich":
                $demuser = load_demuser();
                $demsp = load_demsanpham();
                $demdh = load_demdonhang();
                $demdhhuy = load_demdhbihuy();
                $demsphethang = load_demsphethang();
                $demspkhonghd = load_demspkhonghd();
                $tongtiendh = load_tongtiendh();
                $demdanhmuc = load_demdanhmuc();
                $thongkesp= list_thongke_spdm();
                $trangthaidonghang=Trangthaidh();
                include "../admin/phantich.php";
                break;
            case "quanlyblog":
                if(isset($_POST['clickOK'])&&($_POST['clickOK'])){
                    $keyw=$_POST['keyw'];
                }else{
                    $keyw=""; 
                }

                if(!isset($_GET['page'])){
                    $page=1;
                 }else{
                    $page=$_GET['page'];
                 }
                $soluongbl=10;
                $listblog=loadall_blog($keyw,$page,$soluongbl);
                $tongsobl = get_bl();
                $hienthisotrang= hien_thi_so_trang_bl($tongsobl,$soluongbl);

                include "../admin/blog/quanlyblog.php";
                break;
            case "xoablog":
                    if(isset($_POST['xoablog'])){
                        if(isset($_GET['id_blog'])){
                            delete_blog($_GET['id_blog']);
                            header('location: index.php?act=quanlyblog');
                        }
                    }
                    $keyw=""; 
                    if(!isset($_GET['page'])){
                        $page=1;
                     }else{
                        $page=$_GET['page'];
                     }
                    $soluongbl=10;
                    $listblog=loadall_blog($keyw,$page,$soluongbl);
                    $tongso = get_bl();
                    $hienthisotrang= hien_thi_so_trang_bl($tongso,$soluongbl);
                    include "../admin/blog/xoablog.php";
                    include "../admin/blog/quanlyblog.php";
                    break;  
            case "dangxuat":
                ob_clean();
                dangxuat();
                break;
            case "suachitietdonhang":
                $iddh =$_GET['iddh'];
                // case form update
                $updatectdh= loadone_ctdonhang($_GET['id_ctdh']);
                include "../admin/updatechitietdh.php";
                if (isset($iddh) && ($iddh > 0)) {
                    $listonedh = loadone_donhang($iddh);
                    $chitietdh = ct_donhang($iddh);
                    }
                    include "../admin/chitietdonhang.php";
                if(isset($_POST['capnhapctdh'])){
                    if(isset($_GET['id_ctdh'])){
                        $id = $_POST['idctdh'];
                        $trangthai = $_POST['trangthai'];
                        update_ctdonhang($id,$trangthai);
                    }
                    header("location: index.php?act=suadh&iddh={$iddh}");
                }
            break;
            case "xoachitietdonhang":
                $iddh =$_GET['iddh'];
                if (isset($iddh) && ($iddh > 0)) {
                    $listonedh = loadone_donhang($iddh);
                    $chitietdh = ct_donhang($iddh);
                }
                include "../admin/chitietdonhang.php";
                include "../admin/delchitietdonhang.php";
                if(isset($_POST['xoactdh'])){
                    if(isset($_GET['id_ctdh'])){
                        delete_ctdonhang($_GET['id_ctdh']);
                        header("location: index.php?act=suadh&iddh={$iddh}");
                    }
                }
            break;
            case "thungrac":
                if(isset($_POST['clickOK'])&&($_POST['clickOK'])){
                    $keyw=$_POST['keyw'];
                }else{
                    $keyw="";
                }

                if(!isset($_GET['page'])){
                    $page=1;
                 }else{
                    $page=$_GET['page'];
                 }
                $soluongtkxoa=10;
                $xluserthungrac = loadall_userthungrac($keyw,$page,$soluongtkxoa);
                $tongsotkxoa = get_tk_xoa();
                $hienthisotrang= hien_thi_so_trang_xoa($tongsotkxoa,$soluongtkxoa);
                include "../admin/taikhoan/thungrac.php";
                break;
            case "xoathungrac":
                if(!isset($_GET['page'])){
                    $page=1;
                 }else{
                    $page=$_GET['page'];
                 }
                $keyw ="";
                $soluongtkxoa=10;
                $xluserthungrac = loadall_userthungrac($keyw,$page,$soluongtkxoa);
                $tongsotkxoa = get_tk_xoa();
                $hienthisotrang= hien_thi_so_trang_xoa($tongsotkxoa,$soluongtkxoa);
                include "../admin/taikhoan/thungrac.php";
                include "../admin/taikhoan/del-thungrac.php";
                if(isset($_POST['xoathrac'])){
                   if(isset($_GET['iduser'])){
                        delete_user($_GET['iduser']);
                        header('location: index.php?act=thungrac');
                    }
                    } 
                    break;
            case "khoiphuc":
                if(!isset($_GET['page'])){
                    $page=1;
                 }else{
                    $page=$_GET['page'];
                 }
                $keyw ="";
                $soluongtkxoa=10;
                $xluserthungrac = loadall_userthungrac($keyw,$page,$soluongtkxoa);
                $tongsotkxoa = get_tk_xoa();
                $hienthisotrang= hien_thi_so_trang_xoa($tongsotkxoa,$soluongtkxoa);
                include "../admin/taikhoan/thungrac.php";
                include "../admin/taikhoan/khoiphuctk.php";  
                if(isset($_POST['khoiphuc'])){
                    if(isset($_GET['iduser'])){
                        khoi_phuctk($_GET['iduser']);
                        header('location: index.php?act=thungrac');
                    }
                }
                include "../admin/taikhoan/thungrac.php";
            break;
            case "quanlybinhluan":
                if(isset($_POST['clickOK'])&&($_POST['clickOK'])){
                    $keyw=$_POST['keyw'];
                }else{
                    $keyw="";
                }

                if(!isset($_GET['page'])){
                    $page=1;
                 }else{
                    $page=$_GET['page'];
                 }
                $soluongbluan=10;
                $listbinhluan = loadall_binhluan_admin($keyw,$page,$soluongbluan);
                $tongsobluan = get_bluan();
                $hienthisotrang= hien_thi_so_trang_bluan($tongsobluan,$soluongbluan);

                include "../admin/qlbinhluan.php";
            break;
            case "xoabl":
                if(isset($_POST['xoabinhluan'])){
                    if(isset($_GET['id_bl'])){
                        delete_binhluan($_GET['id_bl']);
                        header('location: index.php?act=quanlybinhluan');
                    }
                }
                $keyw=""; 
                if(!isset($_GET['page'])){
                    $page=1;
                 }else{
                    $page=$_GET['page'];
                 }
                $soluongbluan=10;
                $listbinhluan = loadall_binhluan_admin($keyw,$page,$soluongbluan);
                $tongsobluan = get_bluan();
                $hienthisotrang= hien_thi_so_trang_bluan($tongsobluan,$soluongbluan);
                include "../admin/del-binhluan.php";
                include "../admin/qlbinhluan.php";
            break;  
        }
    }else{
        include "../admin/bangdieukhien.php";
    }
    include "../admin/footer.php";
?>