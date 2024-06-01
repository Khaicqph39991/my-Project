    <!-- ==================== Breadcumb Start==================== -->
    <section
      class="breadcumb py-120 bg-img"
      style="background-image: url(view/assets/images/img-duan1/pha/ben.jpg)"
    >
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="breadcumb__wrapper">
              <h1 class="breadcumb__title">Danh mục sản phẩm</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ==================== Breadcumb End==================== -->

    <!-- ==================product category two section start==============================-->
    <div class="product-category-two py-120">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <div class="left-sidebar">
              <span class="close-sidebar d-lg-none d-block">
                <i class="las la-times"></i>
              </span>
              <h6 class="sidebar-item__title">Danh Mục</h6>
              <div class="sidebar-item">
                
              <li class="category-menu__item">
                  <a href="index.php?act=danhmuc" class="category-menu__link"
                    ><span class="category-menu__thumb"
                      ><img
                        src=""
                        alt=""
                        style="height: 30px"
                    /></span>
                    Tất cả sản phẩm
                  </a>
                </li>
                    
              <?php
                  if (empty($dsloaisp)){
                    echo '';
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
                <!-- <div class="form-check form--check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="cadfood"
                  />
                  <label class="form-check-label" for="cadfood">Cà phê</label>
                </div>
                <div class="form-check form--check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="accessories"
                  />
                  <label class="form-check-label" for="accessories"
                    >Trà Sữa</label
                  >
                </div>
                <div class="form-check form--check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="dogfood"
                  />
                  <label class="form-check-label" for="dogfood"
                    >Trà Tranh</label
                  >
                </div>
                <div class="form-check form--check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="animal"
                  />
                  <label class="form-check-label" for="animal">Nước ép</label>
                </div> -->
              </div>
              <div class="sidebar-item">
                <h5 class="sidebar-item__title">Tìm kiếm</h5>

                <!-- <div class="custom--range">
                  <div
                    id="slider-range"
                    class="custom--range__range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"
                  >
                    <div
                      class="ui-slider-range ui-corner-all ui-widget-header"
                      style="left: 15%; width: 45%"
                    ></div>
                    <span
                      tabindex="0"
                      class="ui-slider-handle ui-corner-all ui-state-default"
                      style="left: 15%"
                    ></span
                    ><span
                      tabindex="0"
                      class="ui-slider-handle ui-corner-all ui-state-default"
                      style="left: 60%"
                    ></span>
                    <div
                      class="ui-slider-range ui-corner-all ui-widget-header"
                      style="left: 15%; width: 45%"
                    ></div>
                    <div
                      class="ui-slider-range ui-corner-all ui-widget-header"
                      style="left: 15%; width: 45%"
                    ></div>
                    <div
                      class="ui-slider-range ui-corner-all ui-widget-header"
                      style="left: 15%; width: 45%"
                    ></div>
                    <div
                      class="ui-slider-range ui-corner-all ui-widget-header"
                      style="left: 15%; width: 45%"
                    ></div>
                    <div
                      class="ui-slider-range ui-corner-all ui-widget-header"
                      style="left: 15%; width: 45%"
                    ></div>
                  </div>
                  <div
                    class="custom--range__content d-flex flex-wrap justify-content-betwwen"
                  >
                    <label for="amount" class="custom--range__text"
                      >Giá Tiền Phạm vi:</label
                    >
                    <input
                      type="text"
                      class="custom--range__prices"
                      id="amount"
                      readonly=""
                    />
                  </div>
                </div> -->
                <div class="sidebar-item__button">
                <form action="index.php?act=danhmuc" method="post">
                    <input type="text" name="keyw" class="form-control form-control-sm" placeholder="Nhập từ khóa tìm kiếm">
                    <br>
                    <input type="submit" name="timkiem" value="Tìm kiếm" class="btn btn--base pill btn--sm">
                </form>
                  <!-- <a
                    href="index.php?act=danhmuc"
                    class="btn btn--base pill btn--sm"
                    >Lọc</a
                  > -->
                </div>
              </div>

              <div class="sidebar-item">
                <h6 class="sidebar-item__title">Bán chạy nhất</h6>
                <div>
                  <div class="seller-item">
                    <a
                      href="index.php?act=chitietsp"
                      class="seller-item__thumb"
                    >
                      <img
                        src="view/assets/images/img-duan1/cà phê/cp5.jpg"
                        alt=""
                      />
                    </a>
                    <div class="seller-item__title">
                      <a
                        href="index.php?act=chitietsp"
                        class="seller-item__link"
                        >Cà phê đen</a
                      >
                      <h6 class="seller-item__price">
                        30.000VND<span class="seller-item__price-new"
                          >25.000VND</span
                        >
                      </h6>
                    </div>
                  </div>
                  <div class="seller-item">
                    <a
                      href="index.php?act=chitietsp"
                      class="seller-item__thumb"
                    >
                      <img
                        src="view/assets/images/img-duan1/cà phê/cp5.jpg"
                        alt=""
                      />
                    </a>
                    <div class="seller-item__title">
                      <a
                        href="index.php?act=chitietsp"
                        class="seller-item__link"
                        >Cà phê đen</a
                      >
                      <h6 class="seller-item__price">
                        30.000VND<span class="seller-item__price-new"
                          >25.000VND</span
                        >
                      </h6>
                    </div>
                  </div>
                  <div class="seller-item">
                    <a
                      href="index.php?act=chitietsp"
                      class="seller-item__thumb"
                    >
                      <img
                        src="view/assets/images/img-duan1/cà phê/cp5.jpg"
                        alt=""
                      />
                    </a>
                    <div class="seller-item__title">
                      <a
                        href="index.php?act=chitietsp"
                        class="seller-item__link"
                        >Cà phê đen</a
                      >
                      <h6 class="seller-item__price">
                        30.000VND<span class="seller-item__price-new"
                          >20.000VND</span
                        >
                      </h6>
                    </div>
                  </div>
                </div>
              </div>
              <div class="sidebar-item">
                <a href="index.php?act=" class="sidebar-item__thumb">
                  <img src="view/assets/images/img-duan1/pha/img5.jpg" alt="" />
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-9">
            <div class="product-sidebar-filter d-lg-none d-block">
              <button class="product-sidebar-filter__button">
                <i class="las la-filter"></i>
                <span class="text"> Filter </span>
              </button>
            </div>
            <div class="row justify-content-center gy-4">

        <?php 
        if (empty($dsspdanhmuc)){
          echo 'Sản phẩm chưa cập nhật';
        }else{
          foreach ($dsspdanhmuc as $sp) {
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

              if (isset($gia) && $gia>0) {
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
                if (isset($gia) && $gia>0) {
                  echo'<span class="product-item__price-new">'.$format_gia.'VNĐ';
                }
                echo'
                </span>'.$format_giasale.'VNĐ
              </h6>
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
      </div>
    </div>
    <!-- ==================product category two section end==============================-->
    <!--============================feature section start=======================-->
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
                <h5 class="feature-item__title">Miễn phí giao hàng</h5>
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
                <h5 class="feature-item__title">Hỗ trợ thân thiện</h5>
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
                <h5 class="feature-item__title">Thanh toán an toàn</h5>
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
                <h5 class="feature-item__title">Giao hàng và đổi trả</h5>
                <span class="feature-item__payment"
                  >Đổi sản phẩm trong ngày</span
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>