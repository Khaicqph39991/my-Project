    <!--========================== Banner Section Start ==========================-->
    <section class="banner-section pt-60 pb-60">
      <div class="container">
        <div class="row gy-4 justify-content-center">
          <div class="col-lg-3">
            <nav class="category">
              <span class="close-sidebar d-lg-none d-block"
                ><i class="las la-times"></i
              ></span>
              <ul class="category-menu">
              <li class="category-menu__item">
                  <a href="index.php?act=danhmuc" class="category-menu__link">
                    Tất cả sản phẩm
                  </a>
                </li>
                <?php
                  if (empty($dsloaisp)){
                    echo 'Đang cập nhật sản phẩm';
                  }else{
                    foreach ($dsloaisp as $loaisp) {
                      extract($loaisp);
                      $hinh = $img_path.$anh_loai;
                      $spdm = 'index.php?act=danhmuc&id_loai='.$id_loai;
                      echo '
                      <li class="category-menu__item">
                  <a href="'.$spdm.'" class="category-menu__link"
                    ><span class="category-menu__thumb"
                      ><img
                        src="'.$hinh.'"
                        alt=""
                        style="height: 30px"
                    /></span>
                    '.$ten_loai.'
                  </a>
                </li>
                      ';
                    }
                  }
                ?>
                
                <!-- <li class="category-menu__item">
                  <a href="index.php?act=danhmuc" class="category-menu__link"
                    ><span class="category-menu__thumb"
                      ><img
                        src="view/assets/images/img-duan1/logo/logo cp.png"
                        alt=""
                        style="height: 30px"
                    /></span>
                    Cà Phê
                  </a>
                </li>
                <li class="category-menu__item">
                  <a href="index.php?act=danhmuc" class="category-menu__link"
                    ><span class="category-menu__thumb"
                      ><img
                        src="view/assets/images/img-duan1/logo/logo ntc.png"
                        alt=""
                        style="height: 30px"
                    /></span>
                    Nước Trái Cây
                  </a>
                </li>
                <li class="category-menu__item">
                  <a href="index.php?act=danhmuc" class="category-menu__link"
                    ><span class="category-menu__thumb"
                      ><img
                        src="view/assets/images/img-duan1/logo/logo ts.png"
                        alt=""
                        style="height: 30px"
                    /></span>
                    Trà Sữa
                  </a>
                </li> -->
              </ul>
            </nav>
          </div>
          <div class="col-lg-9 col-md-12">
            <div class="banner">
              <div class="banner-content">
                <h4 class="banner-content__subtitle">Sản phẩm tốt nhất</h4>
                <h2 class="banner-content__title">TRÀ SỮA</h2>
                <p class="banner-content__desc">
                  Shop mang đến cho khách hàng những sản phẩm tốt nhất
                </p>
                <div class="banner-content__buttons">
                  <a href="index.php?act=danhmuc" class="btn btn--base pill"
                    >MUA NGAY</a
                  >
                  <div class="button-shape">
                    <img src="view/assets/images/shapes/button-shape.png" alt="" />
                  </div>
                </div>
              </div>
              <div class="banner-thumb">
                <img src="view/assets/images/img-duan1/pha/img1.jpg" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--========================== Banner Section End ==========================-->
    <!--==============================offer-section start  here=============================-->
    <div class="offer-section pt-60 pb-60">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-6">
            <a href="index.php?act=danhmuc" class="offer">
              <img src="view/assets/images/img-duan1/pha/img2.jpg" alt="" />
            </a>
          </div>
          <div class="col-lg-6">
            <a href="index.php?act=danhmuc" class="offer">
              <img src="view/assets/images/img-duan1/pha/img3.jpg" alt="" />
            </a>
          </div>
        </div>
      </div>
    </div>
    <!--======================product sections start here =================-->
    <div class="product-section py-60">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-heading">
              <!-- <h4 class="section-heading__subtitle">Sản phẩm đặc biệt</h4> -->
              <h3 class="section-heading__title style-two">
                Sản phẩm mới<span class="section-heading__bars"></span>
              </h3>
            </div>
          </div>
        </div>
        <div class="row justify-content-center gy-4">

        <?php 
        if (empty($dssphome)){
          echo '';
        }else{
          foreach ($dssphome as $sp) {
            extract($sp);
            $hinhsp = $img_path.$anh_chinh;
            $format_giasale = number_format($gia_sale);
            $format_gia = number_format($gia);
            $ctsp = 'index.php?act=chitietsp&id_sp='.$id_sp;
          echo '
          <div class="col-lg-3 col-md-4 col-sm-6 col-xsm-6">
          <div class="product-item text-center">
            <div class="product-item__thumb">
              <a
                href="'.$ctsp.'"
                class="product-item__thumb-link"
              >
                <img src="'.$hinhsp.'" alt="" />
              </a>

              ';

              if (isset($gia) && $gia >0) {
                echo '
              <div class="product-item__badge">
                <span class="badge badge--base">Sale</span>
              </div>';
              }

              echo '
            </div>
            <div class="product-item__content">
              <h5 class="product-item__title">
                <a
                  href="'.$ctsp.'"
                  class="product-item__title-link"
                >
                  '.$ten_sp.'
                </a>
              </h5>
              <h6 class="product-item__price">';
                if (isset($gia) && $gia >0) {
                  echo'<span class="product-item__price-new">'.$format_gia.'VNĐ';
                }
                echo'
                </span>'.$format_giasale.'VNĐ
              </h6>
              ';
                echo '
                <form action="index.php?act=addcard" method="post">
                <input type="hidden" name="idsp" value="'.$id_sp.'">
                <input type="hidden" name="tensp" value="'.$ten_sp.'">
                <input type="hidden" name="img" value="'.$hinhsp.'">
                <input type="hidden" name="gia" value="'.$gia_sale.'">
                <input type="hidden" name="soluong" value="1">
                <button type="submit" name="addcard" class="btn btn--base pill btn--sm">
                        Thêm vào giỏ hàng
                </button>
            </form>
              ';
              echo '
            </div>
          </div>
        </div>
          ';}}
        ?>
          <!-- <div class="col-lg-3 col-md-4 col-sm-6 col-xsm-6">
            <div class="product-item">
              <div class="product-item__thumb">
                <a
                  href="index.php?act=chitietsp"
                  class="product-item__thumb-link"
                >
                  <img src="view/assets/images/img-duan1/cà phê/cp2.jpg" alt="" />
                </a>
                <button class="product-item__icon">
                  <span class="product-item__icon-style">
                    <i class="las la-heart"></i>
                  </span>
                </button>
              </div>
              <div class="product-item__content">
                <h5 class="product-item__title">
                  <a
                    href="index.php?act=chitietsp"
                    class="product-item__title-link"
                  >
                    Cà phê muối Huế ngon đậm đặt
                  </a>
                </h5>
                <ul class="product-info__rating justify-content-center">
                  <li class="product-info__rating-item">
                    <i class="fas fa-star"></i>
                  </li>
                  <li class="product-info__rating-item">
                    <i class="fas fa-star"></i>
                  </li>
                  <li class="product-info__rating-item">
                    <i class="fas fa-star"></i>
                  </li>
                  <li class="product-info__rating-item">
                    <i class="fas fa-star"></i>
                  </li>
                  <li class="product-info__rating-item">
                    <i class="fas fa-star-half-alt"></i>
                  </li>
                  <li class="product-info__number">4.8</li>
                </ul>
                <h6 class="product-item__price">
                  <span class="product-item__price-new">40.00VND</span>25.000VND
                </h6>
                <a href="index.php?act=card" class="btn btn--base pill btn--sm"
                  >Thêm vào giỏ hàng</a
                >
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 col-xsm-6">
            <div class="product-item">
              <div class="product-item__thumb">
                <a
                  href="index.php?act=chitietsp"
                  class="product-item__thumb-link"
                >
                  <img src="view/assets/images/img-duan1/cà phê/cp2.jpg" alt="" />
                </a>
                <button class="product-item__icon">
                  <span class="product-item__icon-style">
                    <i class="las la-heart"></i>
                  </span>
                </button>
                <div class="product-item__badge">
                  <span class="badge badge--base">Sale</span>
                </div>
              </div>
              <div class="product-item__content">
                <h5 class="product-item__title">
                  <a
                    href="index.php?act=chitietsp"
                    class="product-item__title-link"
                  >
                    Cà phê muối Huế ngon đậm đặt
                  </a>
                </h5>
                <ul class="product-info__rating justify-content-center">
                  <li class="product-info__rating-item">
                    <i class="fas fa-star"></i>
                  </li>
                  <li class="product-info__rating-item">
                    <i class="fas fa-star"></i>
                  </li>
                  <li class="product-info__rating-item">
                    <i class="fas fa-star"></i>
                  </li>
                  <li class="product-info__rating-item">
                    <i class="fas fa-star"></i>
                  </li>
                  <li class="product-info__rating-item">
                    <i class="fas fa-star"></i>
                  </li>
                  <li class="product-info__number">5.0</li>
                </ul>
                <h6 class="product-item__price">
                  <span class="product-item__price-new">40.000VND</span
                  >25.000VND
                </h6>
                <a href="index.php?act=card" class="btn btn--base pill btn--sm"
                  >Thêm vào giỏ hàng
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 col-xsm-6">
            <div class="product-item">
              <div class="product-item__thumb">
                <a
                  href="index.php?act=chitietsp"
                  class="product-item__thumb-link"
                >
                  <img src="view/assets/images/img-duan1/cà phê/cp2.jpg" alt="" />
                </a>
                <button class="product-item__icon">
                  <span class="product-item__icon-style">
                    <i class="las la-heart"></i>
                  </span>
                </button>
              </div>
              <div class="product-item__content">
                <h5 class="product-item__title">
                  <a
                    href="index.php?act=chitietsp"
                    class="product-item__title-link"
                  >
                    Cà phê muối Huế ngon đậm đặt
                  </a>
                </h5>
                <ul class="product-info__rating justify-content-center">
                  <li class="product-info__rating-item">
                    <i class="fas fa-star"></i>
                  </li>
                  <li class="product-info__rating-item">
                    <i class="fas fa-star"></i>
                  </li>
                  <li class="product-info__rating-item">
                    <i class="fas fa-star"></i>
                  </li>
                  <li class="product-info__rating-item">
                    <i class="fas fa-star"></i>
                  </li>
                  <li class="product-info__rating-item">
                    <i class="fas fa-star"></i>
                  </li>
                  <li class="product-info__number">5.0</li>
                </ul>
                <h6 class="product-item__price">
                  <span class="product-item__price-new">40.000VND</span
                  >25.000VND
                </h6>
                <a href="index.php?act=card" class="btn btn--base pill btn--sm"
                  >Thêm vào giỏ hàng</a
                >
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 col-xsm-6">
            <div class="product-item">
              <div class="product-item__thumb">
                <a
                  href="index.php?act=chitietsp"
                  class="product-item__thumb-link"
                >
                  <img src="view/assets/images/img-duan1/cà phê/cp2.jpg" alt="" />
                </a>
                <button class="product-item__icon">
                  <span class="product-item__icon-style">
                    <i class="las la-heart"></i>
                  </span>
                </button>
                <div class="product-item__badge">
                  <span class="badge badge--base">-30%</span>
                </div>
              </div>
              <div class="product-item__content">
                <h5 class="product-item__title">
                  <a
                    href="index.php?act=chitietsp"
                    class="product-item__title-link"
                  >
                    Cà phê muối Huế ngon đậm đặt
                  </a>
                </h5>
                <ul class="product-info__rating justify-content-center">
                  <li class="product-info__rating-item">
                    <i class="fas fa-star"></i>
                  </li>
                  <li class="product-info__rating-item">
                    <i class="fas fa-star"></i>
                  </li>
                  <li class="product-info__rating-item">
                    <i class="fas fa-star"></i>
                  </li>
                  <li class="product-info__rating-item">
                    <i class="fas fa-star"></i>
                  </li>
                  <li class="product-info__rating-item">
                    <i class="fas fa-star"></i>
                  </li>
                  <li class="product-info__number">5.0</li>
                </ul>
                <h6 class="product-item__price">
                  <span class="product-item__price-new">40.000VND</span
                  >25.000VND
                </h6>
                <a href="index.php?act=card" class="btn btn--base pill btn--sm"
                  >Thêm vào giỏ hàng</a
                >
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 col-xsm-6">
            <div class="product-item">
              <div class="product-item__thumb">
                <a
                  href="index.php?act=chitietsp"
                  class="product-item__thumb-link"
                >
                  <img src="view/assets/images/img-duan1/cà phê/cp2.jpg" alt="" />
                </a>
                <button class="product-item__icon">
                  <span class="product-item__icon-style">
                    <i class="las la-heart"></i>
                  </span>
                </button>
              </div>
              <div class="product-item__content">
                <h5 class="product-item__title">
                  <a
                    href="index.php?act=chitietsp"
                    class="product-item__title-link"
                  >
                    Cà phê muối Huế ngon đậm đặt
                  </a>
                </h5>
                <ul class="product-info__rating justify-content-center">
                  <li class="product-info__rating-item">
                    <i class="fas fa-star"></i>
                  </li>
                  <li class="product-info__rating-item">
                    <i class="fas fa-star"></i>
                  </li>
                  <li class="product-info__rating-item">
                    <i class="fas fa-star"></i>
                  </li>
                  <li class="product-info__rating-item">
                    <i class="fas fa-star"></i>
                  </li>
                  <li class="product-info__rating-item">
                    <i class="fas fa-star"></i>
                  </li>
                  <li class="product-info__number">5.0</li>
                </ul>
                <h6 class="product-item__price">
                  <span class="product-item__price-new">40.00VND</span>25.000VND
                </h6>
                <a href="index.php?act=card" class="btn btn--base pill btn--sm"
                  >Thêm vào giỏ hàng</a
                >
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 col-xsm-6">
            <div class="product-item">
              <div class="product-item__thumb">
                <a
                  href="index.php?act=chitietsp"
                  class="product-item__thumb-link"
                >
                  <img src="view/assets/images/img-duan1/cà phê/cp2.jpg" alt="" />
                </a>
                <button class="product-item__icon">
                  <span class="product-item__icon-style">
                    <i class="las la-heart"></i>
                  </span>
                </button>
                <div class="product-item__badge">
                  <span class="badge badge--base">Sale</span>
                </div>
              </div>
              <div class="product-item__content">
                <h5 class="product-item__title">
                  <a
                    href="index.php?act=chitietsp"
                    class="product-item__title-link"
                  >
                    Cà phê muối Huế ngon đậm đặt
                  </a>
                </h5>
                <ul class="product-info__rating justify-content-center">
                  <li class="product-info__rating-item">
                    <i class="fas fa-star"></i>
                  </li>
                  <li class="product-info__rating-item">
                    <i class="fas fa-star"></i>
                  </li>
                  <li class="product-info__rating-item">
                    <i class="fas fa-star"></i>
                  </li>
                  <li class="product-info__rating-item">
                    <i class="fas fa-star"></i>
                  </li>
                  <li class="product-info__rating-item">
                    <i class="fas fa-star"></i>
                  </li>
                  <li class="product-info__number">5.0</li>
                </ul>
                <h6 class="product-item__price">
                  <span class="product-item__price-new">40.00VND</span>25.000VND
                </h6>
                <a href="index.php?act=card" class="btn btn--base pill btn--sm"
                  >Thêm vào giỏ hàng</a
                >
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 col-xsm-6">
            <div class="product-item">
              <div class="product-item__thumb">
                <a
                  href="index.php?act=chitietsp"
                  class="product-item__thumb-link"
                >
                  <img src="view/assets/images/img-duan1/cà phê/cp2.jpg" alt="" />
                </a>
                <button class="product-item__icon">
                  <span class="product-item__icon-style">
                    <i class="las la-heart"></i>
                  </span>
                </button>
              </div>
              <div class="product-item__content">
                <h5 class="product-item__title">
                  <a
                    href="index.php?act=chitietsp"
                    class="product-item__title-link"
                  >
                    Cà phê muối Huế ngon đậm đặt
                  </a>
                </h5>
                <ul class="product-info__rating justify-content-center">
                  <li class="product-info__rating-item">
                    <i class="fas fa-star"></i>
                  </li>
                  <li class="product-info__rating-item">
                    <i class="fas fa-star"></i>
                  </li>
                  <li class="product-info__rating-item">
                    <i class="fas fa-star"></i>
                  </li>
                  <li class="product-info__rating-item">
                    <i class="fas fa-star"></i>
                  </li>
                  <li class="product-info__rating-item">
                    <i class="fas fa-star"></i>
                  </li>
                  <li class="product-info__number">4.8</li>
                </ul>
                <h6 class="product-item__price">
                  <span class="product-item__price-new">40.000VND</span
                  >20.000VND
                </h6>
                <a href="index.php?act=card" class="btn btn--base pill btn--sm"
                  >Thêm vào giỏ hàng
                </a>
              </div>
            </div>
          </div> -->
        </div>
      </div>
      </div>
      
<!-- sanphamhot -->
    <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-heading">
              <h3 class="section-heading__title style-two">
                Sản phẩm Hot <span class="section-heading__bars"></span>
              </h3>
            </div>
          </div>
        </div>
        <div class="row justify-content-center gy-4">

        <?php 
        if (empty($dssphot)){
          echo 'Đang cập nhật sản phẩm';
        }else{
          foreach ($dssphot as $sphot) {
            extract($sphot);
            $hinhsp = $img_path.$anh_chinh;
            $format_giasale = number_format($gia_sale);
            $format_gia = number_format($gia);
            $ctsp = 'index.php?act=chitietsp&id_sp='.$id_sp;
          echo '
          <div class="col-lg-3 col-md-4 col-sm-6 col-xsm-6">
          <div class="product-item text-center">
            <div class="product-item__thumb">
              <a
                href="'.$ctsp.'"
                class="product-item__thumb-link"
              >
                <img src="'.$hinhsp.'" alt="" />
              </a>
              ';

              if (isset($gia) && $gia >0) {
                echo '
              <div class="product-item__badge">
                <span class="badge badge--base">Sale</span>
              </div>';
              }

              echo '
            </div>
            <div class="product-item__content">
              <h5 class="product-item__title">
                <a
                  href="'.$ctsp.'"
                  class="product-item__title-link"
                >
                  '.$ten_sp.'
                </a>
              </h5>
              <h6 class="product-item__price">';
                if (isset($gia) && $gia >0) {
                  echo'<span class="product-item__price-new">'.$format_gia.'VNĐ';
                }
                echo'
                </span>'.$format_giasale.'VNĐ
              </h6>
              ';
                echo '
                <form action="index.php?act=addcard" method="post">
                  <input type="hidden" name="idsp" value="'.$id_sp.'">
                  <input type="hidden" name="tensp" value="'.$ten_sp.'">
                  <input type="hidden" name="img" value="'.$hinhsp.'">
                  <input type="hidden" name="gia" value="'.$gia_sale.'">
                  <input type="hidden" name="soluong" value="1">
                  <button type="submit" name="addcard" class="btn btn--base pill btn--sm">
                          Thêm vào giỏ hàng
                  </button>
                </form>
              ';

              echo '
            </div>
          </div>
        </div>
          ';}}
        ?>
          <!-- <div class="col-lg-3 col-md-4 col-sm-6 col-xsm-6">
            <div class="product-item">
              <div class="product-item__thumb">
                <a
                  href="index.php?act=chitietsp"
                  class="product-item__thumb-link"
                >
                  <img src="view/assets/images/img-duan1/cà phê/cp2.jpg" alt="" />
                </a>
                <button class="product-item__icon">
                  <span class="product-item__icon-style">
                    <i class="las la-heart"></i>
                  </span>
                </button>
              </div>
              <div class="product-item__content">
                <h5 class="product-item__title">
                  <a
                    href="index.php?act=chitietsp"
                    class="product-item__title-link"
                  >
                    Cà phê muối Huế ngon đậm đặt
                  </a>
                </h5>
                <ul class="product-info__rating justify-content-center">
                  <li class="product-info__rating-item">
                    <i class="fas fa-star"></i>
                  </li>
                  <li class="product-info__rating-item">
                    <i class="fas fa-star"></i>
                  </li>
                  <li class="product-info__rating-item">
                    <i class="fas fa-star"></i>
                  </li>
                  <li class="product-info__rating-item">
                    <i class="fas fa-star"></i>
                  </li>
                  <li class="product-info__rating-item">
                    <i class="fas fa-star-half-alt"></i>
                  </li>
                  <li class="product-info__number">4.8</li>
                </ul>
                <h6 class="product-item__price">
                  <span class="product-item__price-new">40.00VND</span>25.000VND
                </h6>
                <a href="index.php?act=card" class="btn btn--base pill btn--sm"
                  >Thêm vào giỏ hàng</a
                >
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 col-xsm-6">
            <div class="product-item">
              <div class="product-item__thumb">
                <a
                  href="index.php?act=chitietsp"
                  class="product-item__thumb-link"
                >
                  <img src="view/assets/images/img-duan1/cà phê/cp2.jpg" alt="" />
                </a>
                <button class="product-item__icon">
                  <span class="product-item__icon-style">
                    <i class="las la-heart"></i>
                  </span>
                </button>
                <div class="product-item__badge">
                  <span class="badge badge--base">Sale</span>
                </div>
              </div>
              <div class="product-item__content">
                <h5 class="product-item__title">
                  <a
                    href="index.php?act=chitietsp"
                    class="product-item__title-link"
                  >
                    Cà phê muối Huế ngon đậm đặt
                  </a>
                </h5>
                <ul class="product-info__rating justify-content-center">
                  <li class="product-info__rating-item">
                    <i class="fas fa-star"></i>
                  </li>
                  <li class="product-info__rating-item">
                    <i class="fas fa-star"></i>
                  </li>
                  <li class="product-info__rating-item">
                    <i class="fas fa-star"></i>
                  </li>
                  <li class="product-info__rating-item">
                    <i class="fas fa-star"></i>
                  </li>
                  <li class="product-info__rating-item">
                    <i class="fas fa-star"></i>
                  </li>
                  <li class="product-info__number">5.0</li>
                </ul>
                <h6 class="product-item__price">
                  <span class="product-item__price-new">40.000VND</span
                  >25.000VND
                </h6>
                <a href="index.php?act=card" class="btn btn--base pill btn--sm"
                  >Thêm vào giỏ hàng
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 col-xsm-6">
            <div class="product-item">
              <div class="product-item__thumb">
                <a
                  href="index.php?act=chitietsp"
                  class="product-item__thumb-link"
                >
                  <img src="view/assets/images/img-duan1/cà phê/cp2.jpg" alt="" />
                </a>
                <button class="product-item__icon">
                  <span class="product-item__icon-style">
                    <i class="las la-heart"></i>
                  </span>
                </button>
              </div>
              <div class="product-item__content">
                <h5 class="product-item__title">
                  <a
                    href="index.php?act=chitietsp"
                    class="product-item__title-link"
                  >
                    Cà phê muối Huế ngon đậm đặt
                  </a>
                </h5>
                <ul class="product-info__rating justify-content-center">
                  <li class="product-info__rating-item">
                    <i class="fas fa-star"></i>
                  </li>
                  <li class="product-info__rating-item">
                    <i class="fas fa-star"></i>
                  </li>
                  <li class="product-info__rating-item">
                    <i class="fas fa-star"></i>
                  </li>
                  <li class="product-info__rating-item">
                    <i class="fas fa-star"></i>
                  </li>
                  <li class="product-info__rating-item">
                    <i class="fas fa-star"></i>
                  </li>
                  <li class="product-info__number">5.0</li>
                </ul>
                <h6 class="product-item__price">
                  <span class="product-item__price-new">40.000VND</span
                  >25.000VND
                </h6>
                <a href="index.php?act=card" class="btn btn--base pill btn--sm"
                  >Thêm vào giỏ hàng</a
                >
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 col-xsm-6">
            <div class="product-item">
              <div class="product-item__thumb">
                <a
                  href="index.php?act=chitietsp"
                  class="product-item__thumb-link"
                >
                  <img src="view/assets/images/img-duan1/cà phê/cp2.jpg" alt="" />
                </a>
                <button class="product-item__icon">
                  <span class="product-item__icon-style">
                    <i class="las la-heart"></i>
                  </span>
                </button>
                <div class="product-item__badge">
                  <span class="badge badge--base">-30%</span>
                </div>
              </div>
              <div class="product-item__content">
                <h5 class="product-item__title">
                  <a
                    href="index.php?act=chitietsp"
                    class="product-item__title-link"
                  >
                    Cà phê muối Huế ngon đậm đặt
                  </a>
                </h5>
                <ul class="product-info__rating justify-content-center">
                  <li class="product-info__rating-item">
                    <i class="fas fa-star"></i>
                  </li>
                  <li class="product-info__rating-item">
                    <i class="fas fa-star"></i>
                  </li>
                  <li class="product-info__rating-item">
                    <i class="fas fa-star"></i>
                  </li>
                  <li class="product-info__rating-item">
                    <i class="fas fa-star"></i>
                  </li>
                  <li class="product-info__rating-item">
                    <i class="fas fa-star"></i>
                  </li>
                  <li class="product-info__number">5.0</li>
                </ul>
                <h6 class="product-item__price">
                  <span class="product-item__price-new">40.000VND</span
                  >25.000VND
                </h6>
                <a href="index.php?act=card" class="btn btn--base pill btn--sm"
                  >Thêm vào giỏ hàng</a
                >
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 col-xsm-6">
            <div class="product-item">
              <div class="product-item__thumb">
                <a
                  href="index.php?act=chitietsp"
                  class="product-item__thumb-link"
                >
                  <img src="view/assets/images/img-duan1/cà phê/cp2.jpg" alt="" />
                </a>
                <button class="product-item__icon">
                  <span class="product-item__icon-style">
                    <i class="las la-heart"></i>
                  </span>
                </button>
              </div>
              <div class="product-item__content">
                <h5 class="product-item__title">
                  <a
                    href="index.php?act=chitietsp"
                    class="product-item__title-link"
                  >
                    Cà phê muối Huế ngon đậm đặt
                  </a>
                </h5>
                <ul class="product-info__rating justify-content-center">
                  <li class="product-info__rating-item">
                    <i class="fas fa-star"></i>
                  </li>
                  <li class="product-info__rating-item">
                    <i class="fas fa-star"></i>
                  </li>
                  <li class="product-info__rating-item">
                    <i class="fas fa-star"></i>
                  </li>
                  <li class="product-info__rating-item">
                    <i class="fas fa-star"></i>
                  </li>
                  <li class="product-info__rating-item">
                    <i class="fas fa-star"></i>
                  </li>
                  <li class="product-info__number">5.0</li>
                </ul>
                <h6 class="product-item__price">
                  <span class="product-item__price-new">40.00VND</span>25.000VND
                </h6>
                <a href="index.php?act=card" class="btn btn--base pill btn--sm"
                  >Thêm vào giỏ hàng</a
                >
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 col-xsm-6">
            <div class="product-item">
              <div class="product-item__thumb">
                <a
                  href="index.php?act=chitietsp"
                  class="product-item__thumb-link"
                >
                  <img src="view/assets/images/img-duan1/cà phê/cp2.jpg" alt="" />
                </a>
                <button class="product-item__icon">
                  <span class="product-item__icon-style">
                    <i class="las la-heart"></i>
                  </span>
                </button>
                <div class="product-item__badge">
                  <span class="badge badge--base">Sale</span>
                </div>
              </div>
              <div class="product-item__content">
                <h5 class="product-item__title">
                  <a
                    href="index.php?act=chitietsp"
                    class="product-item__title-link"
                  >
                    Cà phê muối Huế ngon đậm đặt
                  </a>
                </h5>
                <ul class="product-info__rating justify-content-center">
                  <li class="product-info__rating-item">
                    <i class="fas fa-star"></i>
                  </li>
                  <li class="product-info__rating-item">
                    <i class="fas fa-star"></i>
                  </li>
                  <li class="product-info__rating-item">
                    <i class="fas fa-star"></i>
                  </li>
                  <li class="product-info__rating-item">
                    <i class="fas fa-star"></i>
                  </li>
                  <li class="product-info__rating-item">
                    <i class="fas fa-star"></i>
                  </li>
                  <li class="product-info__number">5.0</li>
                </ul>
                <h6 class="product-item__price">
                  <span class="product-item__price-new">40.00VND</span>25.000VND
                </h6>
                <a href="index.php?act=card" class="btn btn--base pill btn--sm"
                  >Thêm vào giỏ hàng</a
                >
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 col-xsm-6">
            <div class="product-item">
              <div class="product-item__thumb">
                <a
                  href="index.php?act=chitietsp"
                  class="product-item__thumb-link"
                >
                  <img src="view/assets/images/img-duan1/cà phê/cp2.jpg" alt="" />
                </a>
                <button class="product-item__icon">
                  <span class="product-item__icon-style">
                    <i class="las la-heart"></i>
                  </span>
                </button>
              </div>
              <div class="product-item__content">
                <h5 class="product-item__title">
                  <a
                    href="index.php?act=chitietsp"
                    class="product-item__title-link"
                  >
                    Cà phê muối Huế ngon đậm đặt
                  </a>
                </h5>
                <ul class="product-info__rating justify-content-center">
                  <li class="product-info__rating-item">
                    <i class="fas fa-star"></i>
                  </li>
                  <li class="product-info__rating-item">
                    <i class="fas fa-star"></i>
                  </li>
                  <li class="product-info__rating-item">
                    <i class="fas fa-star"></i>
                  </li>
                  <li class="product-info__rating-item">
                    <i class="fas fa-star"></i>
                  </li>
                  <li class="product-info__rating-item">
                    <i class="fas fa-star"></i>
                  </li>
                  <li class="product-info__number">4.8</li>
                </ul>
                <h6 class="product-item__price">
                  <span class="product-item__price-new">40.000VND</span
                  >20.000VND
                </h6>
                <a href="index.php?act=card" class="btn btn--base pill btn--sm"
                  >Thêm vào giỏ hàng
                </a>
              </div>
            </div>
          </div> -->
        </div>
      </div>
    <!-- ==================new offer section start here==================-->
    <div class="new-offer-section py-60">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <a href="index.php?act=danhmuc" class="new-offer-content">
              <img src="view/assets/images/img-duan1/pha/img4.webp" alt="" />
            </a>
          </div>
        </div>
      </div>
    </div>
    <!--============================feature section start here =======================-->
    <div
      class="feature-section bg-img py-60"
      style="background-image: url(view/assets/images/img-duan1/pha/ben.jpg)"
    >
      <div class="container">
        <div class="row gy-4">
          <div class="col-md-3 col-sm-6 col-xxsm-6">
            <div class="feature-item">
              <div class="feature-item__thumb">
                <img src="view/assets/images/thumbs/feature/f04.png" alt="" />
              </div>
              <div class="feature-item__info">
                <h5 class="feature-item__title">MIỄN PHÍ GIAO HÀNG</h5>
                <span class="feature-item__payment"
                  >Từ đơn hàng trị giá 150k trở lên</span
                >
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xxsm-6">
            <div class="feature-item">
              <div class="feature-item__thumb">
                <img src="view/assets/images/thumbs/feature/f03.png" alt="" />
              </div>
              <div class="feature-item__info">
                <h5 class="feature-item__title">HỖ TRỢ THÂN THIỆN</h5>
                <span class="feature-item__payment"
                  >Hỗ trợ khách hàng 24/7</span
                >
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xxsm-6">
            <div class="feature-item">
              <div class="feature-item__thumb">
                <img src="view/assets/images/thumbs/feature/f02.png" alt="" />
              </div>
              <div class="feature-item__info">
                <h5 class="feature-item__title">THANH TOÁN AN TOÀN</h5>
                <span class="feature-item__payment"
                  >Thanh toán an toàn 100%</span
                >
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xxsm-6">
            <div class="feature-item">
              <div class="feature-item__thumb">
                <img src="view/assets/images/thumbs/feature/f01.png" alt="" />
              </div>
              <div class="feature-item__info">
                <h5 class="feature-item__title">GIAO HÀNG &amp; ĐỔI TRẢ</h5>
                <span class="feature-item__payment"
                  >Đổi sản phẩm trong ngày</span
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>