<?php
// session_start();
function insert_taikhoan_user($email,$user,$username,$diachi,$sdt,$pass,$psre){
  //validate
  if(empty($user)) {
      echo '<script>alert("Vui lòng nhập tên tài khoản")</script>';
      return;
    }
    if(strlen($user) < 5 || strlen($user) > 50) {
      echo '<script>alert("Độ dài tài khoản phải từ 5-50 ký tự")</script>';
      return; 
    }
    if(!preg_match("/^[a-zA-Z0-9_]+$/", $user)) {
      echo '<script>alert("Tên đăng nhập chỉ được phép chứa chữ cái, số")</script>';
      return;
    }
  if(empty($username)) {
      echo '<script>alert("Vui lòng nhập Họ và tên")</script>';
      return;
    }
    if(is_numeric($username)) {
      echo '<script>alert("Họ và tên không được là số")</script>';
      return;  
    }
    if(strlen($username) < 5 || strlen($username) > 50) {
      echo '<script>alert("Độ dài Họ và tên phải từ 5-50 ký tự")</script>';
      return; 
    }
    if(empty($diachi)) {
      echo '<script>alert("Vui lòng nhập địa chỉ")</script>';
      return;
    }
    if(strlen($diachi) < 3 || strlen($diachi) > 255) {
      echo '<script>alert("Độ dài địa chỉ phải từ 3-255 ký tự")</script>';
      return;
    }
    if(empty($sdt)) {
      echo '<script>alert("Vui lòng nhập số điện thoại")</script>';
      return; 
    }
    
    if(!is_numeric($sdt)) {
      echo '<script>alert("Số điện thoại phải là số")</script>';
      return;
    }
    
    if(!(strlen($sdt) >= 10 && strlen($sdt) < 14)) {
      echo '<script>alert("Số điện thoại phải có từ 10 đến 13 chữ số")</script>';
      return;
    }
  if(empty($email)) {
      echo '<script>alert("Vui lòng nhập email đăng ký tài khoản")</script>';
      return;
    }
  if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo '<script>alert("Định dạng email không chính xác")</script>';
    return;
  }
  if(empty($pass)) {
      echo '<script>alert("Vui lòng nhập mật khẩu")</script>';
      return;
    }
    if(strlen($pass) < 5 || strlen($pass) > 50) {
      echo '<script>alert("Độ dài password phải từ 5-50 ký tự")</script>';
      return; 
    }
    if($pass != $psre) {
      echo '<script>alert("Mật khẩu không trùng với Mật khẩu nhập lại");</script>';
      return; 
    }

  //check csdl
      $sql = "SELECT COUNT(*) FROM taikhoan WHERE user = ?";
      $count = count_row($sql, [$user]);
      if($count > 0){
          echo '<script>alert("Tài khoản đã tồn tại")</script>';
          return;
      }
      $sql = "SELECT COUNT(*) FROM taikhoan WHERE sdt = ?";
      $count = count_row($sql, [$sdt]);
      if($count > 0){
          echo '<script>alert("Số điện thoại đã được sử dụng")</script>';
          return;
      }
  
    // Kiểm tra email
      $sql = "SELECT COUNT(*) FROM taikhoan WHERE email = ?";
      $count = count_row($sql, [$email]);  
      if($count > 0){
          echo '<script>alert("Email đã được sử dụng")</script>';
          return;
      }
  
  $sql="INSERT INTO `taikhoan` ( `email`, `user`, `pass`, `ten_kh`, `dia_chi`, `sdt`) VALUES ( '$email', '$user','$pass','$username','$diachi','$sdt'); ";
  pdo_execute($sql);
  echo '<script>alert("Đăng ký thành công")</script>';
  header('Location: /du-an1/index.php?act=login');
  return;
}

function dangnhap($user, $pass)
{
  if (empty($user)) {
    echo '<script>alert("Vui lòng nhập tên tài khoản")</script>';
    include "view/login/login.php";
    return;
  }
  if (empty($pass)) {
    echo '<script>alert("Vui lòng nhập mật khẩu")</script>';
    include "view/login/login.php";
    return;
  }
  $sql = "SELECT * FROM taikhoan WHERE user='$user' and pass='$pass'";
  $taikhoan = pdo_query_one($sql);

  if ($taikhoan != false) {
    $_SESSION['user'] = $user;
    $_SESSION['id_user'] = $taikhoan['id_user'];
    $_SESSION['vai_tro'] = $taikhoan['vai_tro'];
    if ($taikhoan['anh'] != "") {
      $_SESSION['anhtk'] = $taikhoan['anh'];
    }
  } else {
    echo '<script>alert("Tài khoản hoặc mật khẩu không chính xác")</script>';
    include "view/login/login.php";
    return;
  }
  if ($_SESSION['vai_tro'] == 1) {
    header('Location: /du-an1/admin/index.php');
    exit;
  }
}
function dangxuat()
{
  if (isset($_SESSION['user'])) {
    unset($_SESSION['user']);
  }
  header('Location: /du-an1/index.php?act=');
  exit;
}
function loadall_user()
{
  $sql = "select * from taikhoan order by id_user asc";
  $listuser = pdo_query($sql);
  return $listuser;
}
function loadall_usertk($keyw,$page,$soluongtk)
{
  $batdau=($page-1)*$soluongtk;
  $sql = "SELECT * FROM taikhoan WHERE kich_hoat = 0";
  if(!empty($keyw)) {
    $sql .= " AND (";
    if($keyw == 'User') {
      $sql .= "vai_tro = 0";
    } else if($keyw == 'Admin') {  
      $sql .= "vai_tro = 1";
    } else {
      $sql .= "ten_kh LIKE '%$keyw%' OR email LIKE '%$keyw%' OR sdt LIKE '%$keyw%' OR id_user LIKE '%$keyw%' OR dia_chi LIKE '%$keyw%' OR user LIKE '%$keyw%' OR vai_tro LIKE '%$keyw%'";
    }
    $sql .= ")";
  }
  $sql .= " ORDER BY id_user DESC";
  $sql .= " LIMIT ".$batdau.",".$soluongtk;
  $listuser = pdo_query($sql);
  return $listuser;
}
function get_tk(){
  $sql = "SELECT * FROM taikhoan WHERE kich_hoat = 0 ORDER BY id_user DESC";
    return pdo_query($sql);
}
function hien_thi_so_trang($tongsotk,$soluongtk){
    $tongtaikhoan=count($tongsotk);
    global $sotrang;
    $sotrang=ceil($tongtaikhoan/$soluongtk);
    $tranght = $_GET['page'] ?? 1;
    $html_sotrang="";
    for ($i=1; $i <=$sotrang ; $i++) { 
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
function loadall_userthungrac($keyw,$page,$soluongtkxoa) {
  $batdau=($page-1)*$soluongtkxoa;
  $sql = "SELECT * FROM taikhoan WHERE kich_hoat = 1";
  if(!empty($keyw)) {
    $sql .= " AND (";
    if($keyw == 'User') {
      $sql .= "vai_tro = 0";
    } else if($keyw == 'Admin') {  
      $sql .= "vai_tro = 1";
    } else {
      $sql .= "ten_kh LIKE '%$keyw%' OR email LIKE '%$keyw%' OR sdt LIKE '%$keyw%' OR id_user LIKE '%$keyw%' OR dia_chi LIKE '%$keyw%' OR user LIKE '%$keyw%' OR vai_tro LIKE '%$keyw%'";
    }
    $sql .= ")";
  }
  $sql .= " ORDER BY id_user DESC";
  $sql .= " LIMIT ".$batdau.",".$soluongtkxoa;
  $listuser = pdo_query($sql);
  return $listuser;
}

function get_tk_xoa(){
  $sql = "SELECT * FROM taikhoan WHERE kich_hoat = 1 ORDER BY id_user DESC";
    return pdo_query($sql);
}
function hien_thi_so_trang_xoa($tongsotkxoa,$soluongtkxoa){
    $tongtaikhoanxoa=count($tongsotkxoa);
    global $sotrangxoa;
    $sotrangxoa=ceil($tongtaikhoanxoa/$soluongtkxoa);
    $tranght = $_GET['page'] ?? 1;
    $html_sotrang="";
    for ($i=1; $i <=$sotrangxoa ; $i++) { 
      if($i == $tranght){
        $html_sotrang.='
        <li class="paginate_button page-item active">
          <a href="index.php?act=thungrac&page='.$i.'" aria-controls="sampleTable" data-dt-idx="1" tabindex="0" class="page-link">
            <font style="vertical-align: inherit">
              <font style="vertical-align: inherit">'.$i.'</font>
            </font>
          </a>
        </li>        
        ';
      } else {
        $html_sotrang.='
        <li class="paginate_button page-item">
          <a href="index.php?act=thungrac&page='.$i.'" aria-controls="sampleTable" data-dt-idx="1" tabindex="0" class="page-link">
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

function delete_mem($id){
  $sql = "UPDATE `taikhoan` SET `kich_hoat` = 1 WHERE `taikhoan`.`id_user` = $id";
  pdo_execute($sql);
}
function khoi_phuctk($id){
  $sql = "UPDATE `taikhoan` SET `kich_hoat` = 0 WHERE `taikhoan`.`id_user` = $id";
  pdo_execute($sql);
}
function load_oneuser($id)
{
  $sql = "select * from taikhoan where id_user =" . $id;
  $oneuser = pdo_query_one($sql);
  return $oneuser;
}
function insert_taikhoan($tenuser, $user, $pass, $email, $diachi, $sdt, $hinh, $vaitro)
{
  $sql = "INSERT INTO `taikhoan` ( `ten_kh`, `user`, `pass`, `email`, `dia_chi`, `sdt`, `anh`,`vai_tro`) VALUES ( '$tenuser', '$user','$pass','$email','$diachi','$sdt','$hinh','$vaitro'); ";
  pdo_execute($sql);
}
function update_taikhoan($id,$tenuser,$user,$pass,$email,$diachi,$sdt,$hinh,$vaitro)
{
  $sql = "UPDATE `taikhoan` SET 
      `ten_kh` = '$tenuser',
      `user` = '$user', 
      `pass` = '$pass',
      `dia_chi` = '$diachi',
      `sdt` = '$sdt',
      `email` = '$email',
      `vai_tro` = '$vaitro'";

if ($hinh != "") {
  $sql .= ", `anh` = '$hinh'";
}

  $sql .= " WHERE id_user = $id";
  pdo_execute($sql);
  if ($_SESSION['id_user'] == $id) {
    if ($user != "") {
      $_SESSION['user'] = $user;
    }
    if ($id != "") {
      $_SESSION['id_user'] = $id;
    }
    // $_SESSION['vai_tro'] = $vaitro;
    if ($hinh != "") {
      $_SESSION['anhtk'] = $hinh;
    }
  }
}
function delete_user($id)
{
  $sql = "DELETE FROM taikhoan WHERE id_user= $id";
  pdo_execute($sql);
}
function sendmail($email) {
  if(empty($email)) {
      echo '<script>alert("Vui lòng nhập email để lấy lại mật khẩu")</script>';
      return;
    }
  $sql="SELECT * FROM taikhoan WHERE email='$email'";
  $taikhoan = pdo_query_one($sql);
  if ($taikhoan != false) {
      sendMailPass($email, $taikhoan['user'], $taikhoan['pass']);
      echo '<script>alert("Gửi email thành công")</script>';
      return; 
  } else {
      echo '<script>alert("Email bạn nhập ko có trong hệ thống")</script>';
      return; 
  }
}

function sendMailPass($email, $username, $pass) {
  require 'PHPMailer/src/Exception.php';
  require 'PHPMailer/src/PHPMailer.php';
  require 'PHPMailer/src/SMTP.php';

  $mail = new PHPMailer\PHPMailer\PHPMailer(true);

  try {
      //Server settings
      $mail->SMTPDebug = PHPMailer\PHPMailer\SMTP::DEBUG_OFF;                      //Enable verbose debug output
      $mail->isSMTP();                                            //Send using SMTP
      $mail->Host       = 'sandbox.smtp.mailtrap.io';                     //Set the SMTP server to send through
      $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
      $mail->Username   = 'd201c9919386da';                     //SMTP username
      $mail->Password   = '48581b008d2ed9';                               //SMTP password
      $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
      $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

      //Recipients
      $mail->setFrom('duanmau@example.com', 'DuAnMau');
      $mail->addAddress($email, $username);     //Add a recipient

      //Content
      $mail->isHTML(true);                                  //Set email format to HTML
      $mail->Subject = 'Du an 1 lay lai mat khau.';
      $mail->Body    = 'Mat khau cua tai khoan '.$username.' la: ' .$pass;

      $mail->send();
  } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }
}

function thongtintk($user) {
  $sql = "SELECT * FROM taikhoan WHERE user='$user'";
  $taikhoan = pdo_query_one($sql);
  return  $taikhoan;
}

function load_oneuses($user)
{
  $sql = "select * from taikhoan where user='$user'" ;
  $oneusera = pdo_query_one($sql);
  return $oneusera;
}

function suathongtintk($id_user,$user,$tenuser,$pass,$email,$diachi,$sdt,$hinh)
{
  if(empty($tenuser)) {
    echo '<script>alert("Vui lòng nhập họ tên")</script>';
    die();
  }
  if(strlen($tenuser)<5) {
    echo '<script>alert("Quá ngắn")</script>';
    die();
  }
  $sql = "UPDATE `taikhoan` SET 
      `ten_kh` = '$tenuser',
      `pass` = '$pass',
      `dia_chi` = '$diachi',
      `sdt` = '$sdt',
      `email` = '$email'";

  if ($hinh != "") {
    $sql .= ", `anh` = '$hinh'";
  }

  $sql .= " WHERE user= '$user'";
  pdo_execute($sql);
  if ($_SESSION['id_user'] == $id_user) {
    if ($user != "") {
      $_SESSION['user'] = $user;
    }
    if ($hinh != "") {
      $_SESSION['anhtk'] = $hinh;
    }
  }
}
?>