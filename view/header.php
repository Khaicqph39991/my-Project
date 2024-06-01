<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dự Án 1</title>
    <!-- Favicon -->
    <link
      rel="shortcut icon"
      href="view/assets/images/img-duan1/logo/logo index.png"
    />
    <!-- Bootstrap -->
    <link rel="stylesheet" href="view/assets/css/bootstrap.min.css" />
    <!-- Fontawesome -->
    <!-- <link rel="stylesheet" href="view/assets/css/fontawesome-all.min.css" /> -->
    <script src="https://kit.fontawesome.com/78e4473a65.js" crossorigin="anonymous"></script>
    <!-- Slick -->
    <link rel="stylesheet" href="view/assets/css/slick.css" />
    <!-- line awesome -->
    <link rel="stylesheet" href="view/assets/css/line-awesome.min.css" />
    <!-- countdown css link-->
    <link rel="stylesheet" href="view/assets/css/jquery.classycountdown.min.css" />
    <!-- range css -->
    <link rel="stylesheet" href="view/assets/css/jquery-ui.css" />
    <!-- magnific css link -->
    <link rel="stylesheet" href="view/assets/css/magnific-popup.css" />
    <!-- Main css -->
    <link rel="stylesheet" href="view/assets/css/main.css" />
  </head>
  <body>
    <!--==================== Preloader Start ====================-->
    <div class="preloader" style="display: none">
      <div class="loader-p"></div>
    </div>
    <!--==================== Preloader End ====================-->
    <!--==================== Overlay Start ====================-->
    <div class="body-overlay"></div>
    <!--==================== Overlay End ====================-->

    <!--==================== Sidebar Overlay End ====================-->
    <div class="sidebar-overlay"></div>
    <!--==================== Sidebar Overlay End ====================-->

    <!-- ==================== Scroll to Top End Here ==================== -->
    <a class="scroll-top show"><i class="fas fa-angle-double-up"></i></a>
    <!-- ==================== Scroll to Top End Here ==================== -->

    <!-- ==================== Header Top Start Here ==================== -->
    <div class="header-top">
      <div class="container">
        <div
          class="d-flex flex-wrap align-items-center justify-content-between"
        >
          <div class="top-contact">
            <a href="index.php?act=" class="top-contact__logo">
              <img
                src="view/assets/images/img-duan1/logo/logo-main-1.png"
                alt="logo"
              />
            </a>
          </div>
          <div
            class="d-flex flex-wrap align-items-center justify-content-center"
          >
            <div class="d-md-block d-none">
              <div
                class="contact-list__wrapper d-flex flex-wrap justify-content-between"
              >
                <div class="contact-list style-two">
                  <span class="contact-list__icon">
                    <img src="view/assets/images/icons/phone.png" alt="" />
                  </span>
                  <span class="contact-list__info"> 0123456789</span>
                </div>
                <div class="contact-list">
                  <span class="contact-list__icon">
                    <img src="view/assets/images/icons/email.png" alt="" />
                  </span>
                  <span class="contact-list__info">khaiphaduy@gmail.com</span>
                </div>
              </div>
            </div>
            <!-- <div class="currency-box">
              <select class="select">
                <option selected="">Tiếng Việt</option>
                <option value="1">English</option>
              </select>
            </div> -->
          </div>
        </div>
      </div>
    </div>
    <!-- ==================== Header Top End Here ==================== -->

    <!-- ==================== Bottom Header End Here ==================== -->
    <header class="header fixed-header" id="header">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
          <button
            class="navbar-toggler header-button"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span id="hiddenNav"><i class="las la-bars"></i></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-menu me-auto">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="index.php?act="
                  >Trang Chủ</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="index.php?act=gioithieu"
                  >Giới Thiệu</a
                >
              </li>
              <li class="nav-item">
                <a
                  class="nav-link"
                  aria-current="page"
                  href="index.php?act=danhmuc"
                  >Danh Mục Sản Phẩm</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="index.php?act=blog"
                  >Blog</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php?act=lienhe">Liên Hệ</a>
              </li>
              <li class="nav-item">
                <div class="toggle-search-box d-none d-lg-block">
                  <button
                    type="button"
                    class=""
                    data-bs-toggle="modal"
                    data-bs-target="#search-box"
                    data-bs-whatever="@mdo"
                  >
                    <i class="las la-search"></i>
                  </button>
                </div>
              </li>
            </ul>
          </div>
          <div class="header-info">
            <div class="toggle-search-box d-lg-none d-block">
              <button
                type="button"
                class=""
                data-bs-toggle="modal"
                data-bs-target="#search-box"
                data-bs-whatever="@mdo"
              >
                <i class="las la-search"></i>
              </button>
            </div>
            <!-- <div class="header-info__wishlist">
              <a href="index.php?act=spyeuthich" class="header-info__link"
                ><i class="far fa-heart"></i
              ></a>
            </div> -->
            <div class="header-info__cart">
              <a href="index.php?act=card" class="header-info__link"
                ><i class="fas fa-shopping-cart"></i
              ></a>
              <span class="header-info__cart-quantity"><?php echo count($_SESSION['giohang']);?></span>
            </div>
            <?php
              if (isset($_SESSION['user']) && $_SESSION['vai_tro']==1) {
            ?>
            <div class="header-info__wishlist">
              <a href="../du-an1/admin/index.php?act=" class="header-info__link"
                ><i class="fas fa-users-cog"></i></a>
            </div>
            <?php } ?>
            <?php if (isset($_SESSION['user'])) {?>
              <div class="header-info__wishlist">
              <a href="index.php?act=thongtintk" class="header-info__link"
                ><i class="far fa-user"></i
              ></a>
            </div>
              <div class="header-info__cart">
              <a href="index.php?act=dangxuat" class="header-info__link"
                >
                <i class="fa-solid fa-right-from-bracket"></i>
              </a>
            </div>
            <?php } ?>
            <?php if (!isset($_SESSION['user'])) {?>
            <div class="header-info__user">
              <a href="index.php?act=login" class="header-info__link"
                ><i class="far fa-user"></i
              ></a>
            </div>
            <?php } ?>
          </div>
          <div class="header-categories d-block d-lg-none">
            <button class="header-category">
              Danh Mục
              <span class="header-category__icon"
                ><i class="las la-bars"></i
              ></span>
            </button>
          </div>
        </nav>
      </div>
    </header>
    <!-- ==================== Bottom Header End Here ==================== -->

    <!--========================== Search Modal Start ==========================-->
    <div class="overlay-search-box position-relative">
      <div class="modal fade" id="search-box" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <button
                type="button"
                class="search-overlay-close"
                data-bs-dismiss="modal"
                aria-label="Close"
              >
                <i class="las la-times"></i>
              </button>
            </div>
            <div class="modal-body">
             
                <div class="row">
                  <div class="col-lg-12">
                    <div class="search-box">
                      <div class="input--group">
                        <form action="index.php?act=danhmuc" method="post">
                        <input
                          type="text"
                          class="form--control style-two" name="keyw"
                          placeholder="Search...." 
                        />
                        <br>
                        <input type="submit" name="timkiem" value="Tìm kiếm" class="btn btn--base pill btn--sm" style="margin-top: 20px;">
                          <!-- <i class="las la-search"></i> -->

                        </form>  
                      </div>
                    </div>
                  </div>
                </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--========================== Search Modal End ==========================-->