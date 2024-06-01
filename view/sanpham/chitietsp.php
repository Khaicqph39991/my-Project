    <!-- ==================== Breadcumb Start==================== -->
    <section
      class="breadcumb py-120 bg-img"
      style="background-image: url(view/assets/images/img-duan1/pha/ben.jpg)"
    >
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8"></div>
        </div>
      </div>
    </section>
    <!-- ==================== Breadcumb End==================== -->

    <!-- ======================product details two section start====================-->
    <div class="product-details-section py-120">
      <div class="container">
        <div class="row align-items-center gy-4">
          <div class="col-lg-7 pe-lg-5">
            <div class="row align-items-center">
              <div class="col-lg-9 order-lg-2">
                <div
                  class="product-details__thumb slick-initialized slick-slider"
                >
                  <div class="slick-list draggable">
                    <div class="slick-track" style="opacity: 1; width: 1632px">
                    <?php
                      extract($sanpham); 
                      $gia_sp = number_format($gia_sale);
                      $gia_cgg = number_format($gia);
                      $img_chinh = $img_path . $anh_chinh;
                    ?>
                    <!-- Start Ảnh chính -->

                      <div
                        class="slick-slide"
                        data-slick-index="0"
                        aria-hidden="true"
                        style="
                          width: 408px;
                          position: relative;
                          left: 0px;
                          top: 0px;
                          z-index: 5;
                          opacity: 0;
                          transition: opacity 500ms ease 0s;
                        "
                        tabindex="-1"
                      >
                      </div>
                      <div
                        class="slick-slide"
                        data-slick-index="1"
                        aria-hidden="true"
                        style="
                          width: 408px;
                          position: relative;
                          left: -408px;
                          top: 0px;
                          z-index: 998;
                          opacity: 0;
                          transition: opacity 500ms ease 0s;
                        "
                        tabindex="-1"
                      >
                      </div>
                      <div
                        class="slick-slide"
                        data-slick-index="2"
                        aria-hidden="true"
                        style="
                          width: 408px;
                          position: relative;
                          left: -816px;
                          top: 0px;
                          z-index: 998;
                          opacity: 0;
                          transition: opacity 500ms ease 0s;
                        "
                        tabindex="-1"
                      >
                        <div>
                          <a
                            href="index.php?act=chitietsp"
                            class="product-details__image"
                            style="width: 100%; display: inline-block"
                            tabindex="-1"
                          >
                            <img
                              src="view/assets/images/thumbs/product/product04.png"
                              alt=""
                            />
                          </a>
                        </div>
                      </div>
                      <div
                        class="slick-slide slick-current slick-active"
                        data-slick-index="3"
                        aria-hidden="false"
                        style="
                          width: 408px;
                          position: relative;
                          left: -1224px;
                          top: 0px;
                          z-index: 999;
                          opacity: 1;
                        "
                      >
                        <div style="margin-left: -60px;";>
                          <a
                            href="#"
                            class="product-details__image"
                            style="width: 100%; display: inline-block"
                            tabindex="0"
                          >
                          <?php 
                          echo '<img src="'.$img_chinh.'" alt="" />';
                          ?>
                          </a>
                        </div>
                      </div>

                    <!-- END Ảnh chính -->

                    </div>
                  </div>
                </div>
              </div>
              <!-- Ảnh mô tả Start -->
              <div class="col-lg-3 order-lg-1">
                <ul
                  class="product-details-gallery slick-initialized slick-slider"
                >
                  <div class="slick-list draggable">
                    <div
                      class="slick-track"
                      style="
                        opacity: 1;
                        transform: translate3d(-102px, 0px, 0px);
                        padding: 20px;
                      "
                    >

                    <?php 
                      if (isset($anhspmota) && !empty($anhspmota)) {
                        foreach ($anhspmota as $imgmota) {
                          extract($imgmota);
                          $img_mota = $img_path . $anh_mota;
                          echo '
                          <div
                          class="slick-slide slick-active"
                          data-slick-index="0"
                          aria-hidden="false"
                          style="width: 34px"
                          tabindex="-1"
                        >
                          <div>
                            <li
                              class="product-details-gallery__image"
                              style="width: 100%; display: inline-block"
                            >
                              <img
                                src="'.$img_mota.'"
                                alt=""
                              />
                            </li>
                          </div>
                        </div>
                          ';
                        }
                      }else{
                        echo "";
                      }
                      
                    ?>
<!-- 
                      <div
                        class="slick-slide slick-active"
                        data-slick-index="1"
                        aria-hidden="false"
                        style="width: 34px"
                        tabindex="-1"
                      >
                        <div>
                          <li
                            class="product-details-gallery__image"
                            style="width: 100%; display: inline-block"
                          >
                            <img
                              src="view/assets/images/img-duan1/cà phê/cp5.jpg"
                              alt=""
                            />
                          </li>
                        </div>
                      </div>
                      <div
                        class="slick-slide slick-active"
                        data-slick-index="2"
                        aria-hidden="false"
                        style="width: 34px"
                        tabindex="-1"
                      >
                        <div>
                          <li
                            class="product-details-gallery__image"
                            style="width: 100%; display: inline-block"
                          >
                            <img
                              src="view/assets/images/img-duan1/cà phê/cp5.jpg"
                              alt=""
                            />
                          </li>
                        </div>
                      </div>
                      <div
                        class="slick-slide slick-current slick-active"
                        data-slick-index="3"
                        aria-hidden="false"
                        style="width: 34px"
                      >
                        <div>
                          <li
                            class="product-details-gallery__image"
                            style="width: 100%; display: inline-block"
                          >
                          <?php
                          echo '<img src="'.$img_chinh.'" alt="" />';
                          ?>
                          </li>
                        </div>
                      </div> -->


                    </div>
                  </div>
                </ul>
              </div>
                <!-- Ảnh mô tả END -->
            </div>
          </div>
          <div class="col-lg-5" style="text-align: center;";>
            <div class="product-info">
              <?php echo '<h3 class="product-info__title">'.$ten_sp.'</h3>';?>
              <!-- Start Sao -->
              <!-- <ul class="product-info__rating mb-3" style="display: flex; justify-content: center;">
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
              </ul> -->
              <!-- end sao SP -->
              <h6 class="product-info__price">
                <?php 
                if (isset($gia_cgg) && !empty($gia_cgg) && $gia_cgg>0) {
                  echo '
                  <span class="product-info__price-new">'.$gia_cgg.'VNĐ</span>
                  <br><br>
                  ';
                }
                  echo '
                  <span class="giaban">'.$gia_sp.'VNĐ</span>
                  <br><br>
                  ';
                  echo '
                  <span class="">Số lượng còn lại: <span class="soluong">'.$so_luong.'</span></span>
                  ';

                ?>
                
                
              </h6>
              <div class="" style="display: grid; justify-content: center;">
              <?php 
                echo '
                <p class="product-info__desc">
                  '.$mo_ta.'
                </p>
                ';
              ?>
                <div class="qty-cart d-flex product-style">
                  <span class="product-style__title">Số lượng</span>
                  <div class="product-qty">
                     <button type="button" class="product-qty__decrement"><i class="las la-angle-down"></i></button>
                     <input type="number" class="product-qty__value" value="0">
                     <button type="button" class="product-qty__increment"><i class="las la-angle-up"></i> </button>
                 </div>
                </div>
                <div class="product-info__button">
                  <a
                    href="index.php?act="
                    class="btn btn--base pill product-info__link"
                    >MUA NGAY</a
                  >
                  <a
                    href="index.php?act=addcard"
                    class="product-info__cart product-info__link"
                    ><i class="fas fa-shopping-cart"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<!-- Comments Start -->
<div class="col-lg-7 mx-auto">
  <div class="col-lg-12 pt-100">
                    <h5 class="details-subtitle"><?= $dembl?> Bình luận</h5>
                    <ul class="comment-list">
                    <?php foreach($binhluan as $value){
                      extract($value);
                      $hinh = '../du-an1/'.$img_path.$anh;
                      ?>
                      <li class="comment-list__item d-flex flex-wrap">
                        <div class="comment-list__thumb">
                          <img
                            src="<?= $hinh?>"
                            alt=""  
                          />
                        </div>
                        <div class="comment-list__content">
                          <div class="d-flex justify-content-between">
                            <div>
                              <h4 class="comment-list__name"><?= $ten_kh?></h4>
                              <span class="comment-list__time"><?= $ngay_bl?></span>
                            </div>
                          </div>
                          <p class="comment-list__desc"><?= $noi_dung?></p>
                        </div>
                      </li>
                    <?php } ?>
                    </ul>
  </div>
  <!-- Comments End -->

  <!-- Comments Form Start -->
  <div class="contact-form pt-2" id="reply" style="margin-bottom: 40px;">
                    <h3 class="contact__title">Đăng bình luận</h3>
                    <form action="index.php?act=chitietsp&id_sp=<?=$id_sp?>" autocomplete="off" method="POST">
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="form-group">
                            <label for="comment" class="mb-2"
                              >Nội dung bình luận</label
                            >
                            <textarea
                              class="form--control"
                              id="comment"
                              name="noidung"
                            ></textarea>
                          </div>
                        </div>
                        <input type="hidden" name="idsp" value="<?=$id_sp?>" />
                        <div class="col-sm-12">
                        <?php if (isset($_SESSION['user'])) {?>
                          <input type="submit" name="guibinhluan" class="btn btn--base pill mt-2" value="Đăng bình luận">
                        <?php } ?>
                        <?php if (!isset($_SESSION['user'])) {?>
                          <a href="index.php?act=login"><input type="button" class="btn btn--base pill mt-2" value="Đăng bình luận"></a>
                        <?php } ?>
                        </div>
                      </div>
                    </form>
  </div>
</div>
<!-- Comment Form End -->

    <div class="pb-120">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-heading style-two">
              <h4 class="section-heading__title style-two">
                Sản Phẩm tương tự<span
                  class="section-heading__bars style-two"
                ></span>
              </h4>
            </div>
          </div>
        </div>
        <div class="row gy-4">
        <?php 
        if (empty($sanphamcl)){
          echo 'Đang cập nhật sản phẩm';
        }else{
          foreach ($sanphamcl as $spcloai) {
            extract($spcloai);
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
          <!-- <div class="col-lg-3 col-md-6 col-sm-6 col-xsm-6">
            <div class="product-item">
              <div class="product-item__thumb">
                <a
                  href="index.php?act=chitietsp"
                  class="product-item__thumb-link"
                >
                  <img src="view/assets/images/img-duan1/cà phê/cp5.jpg" alt="" />
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
                    >Cà phê sữa đặc biệt
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
                  <span class="product-item__price-new">40.000VND</span
                  >30.000VND
                </h6>
                <a href="index.php?act=card" class="btn btn--base pill btn--sm"
                  >Thêm vào giỏ hàng</a
                >
              </div>
            </div>
          </div> -->
          <!-- <div class="col-lg-3 col-md-6 col-sm-6 col-xsm-6">
            <div class="product-item">
              <div class="product-item__thumb">
                <a
                  href="index.php?act=chitietsp"
                  class="product-item__thumb-link"
                >
                  <img src="view/assets/images/img-duan1/cà phê/cp5.jpg" alt="" />
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
                    >Cà phê đen ngon tyệt</a
                  >
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
                  >30.000VND
                </h6>
                <a href="index.php?act=card" class="btn btn--base pill btn--sm"
                  >Thêm vào giỏ hàng</a
                >
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 col-xsm-6">
            <div class="product-item">
              <div class="product-item__thumb">
                <a
                  href="index.php?act=chitietsp"
                  class="product-item__thumb-link"
                >
                  <img src="view/assets/images/img-duan1/cà phê/cp5.jpg" alt="" />
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
                    >Cà phê thơm ngon</a
                  >
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
                  <span class="product-item__price-new">40.000VND</span
                  >30.000VND
                </h6>
                <a href="index.php?act=card" class="btn btn--base pill btn--sm"
                  >Thêm vào giỏ hàng</a
                >
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 col-xsm-6">
            <div class="product-item">
              <div class="product-item__thumb">
                <a
                  href="index.php?act=chitietsp"
                  class="product-item__thumb-link"
                >
                  <img src="view/assets/images/img-duan1/cà phê/cp5.jpg" alt="" />
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
                    >Cà phê đen ngon mê li</a
                  >
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
                  >30.000VND
                </h6>
                <a href="index.php?act=card" class="btn btn--base pill btn--sm"
                  >Thêm vào giỏ hàng</a
                >
              </div>
            </div>
          </div> -->
        </div>
      </div>
    </div>

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
    <script>
      const qtyBtnDecrement = document.querySelector('.product-qty__decrement');
      const qtyBtnIncrement = document.querySelector('.product-qty__increment'); 
      const qtyValue = document.querySelector('.product-qty__value');
      const soluong = document.querySelector('.soluong');

      const maxLimit = soluong.textContent; 
      let count = 1; 
      console.log(maxLimit);

      qtyBtnDecrement.addEventListener('click', decrementQty);
      qtyBtnIncrement.addEventListener('click', incrementQty);

      function decrementQty() {
        if(count > 1) {
          count--;
        }
        qtyValue.value = count;
      }

      function incrementQty() {
        if(count < maxLimit) {
          count++;
        }
        qtyValue.value = count;
      }

      // Khởi tạo ban đầu
      qtyValue.value = count;
    </script>