    <!-- ==================== Breadcumb Start ==================== -->
    <section
      class="breadcumb py-120 bg-img"
      style="background-image: url(view/assets/images/img-duan1/khai/banner2.jpg)"
    >
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="breadcumb__wrapper">
              <h1 class="breadcumb__title">Giỏ hàng</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ==================== Breadcumb End ==================== -->

    <!-- ================cart-section start================ -->
    <div class="cart-section py-120">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-heading">
              <h3 class="section-heading__title style-two">
                Sản phẩm trong giỏ hàng<span
                  class="section-heading__bars"
                ></span>
              </h3>
            </div>
          </div>
        </div>
            <?php
            $stt = 1;
            if (isset($_SESSION['giohang']) && !empty($_SESSION['giohang'])) {
              echo '
              <div class="row">
                <div class="col-lg-12">
                  <table class="table table--responsive--lg cart-table">
                    <thead>
                      <tr>
                        <th>STT</th>
                        <th>ID sản phẩm</th>
                        <th>Tên sản phẩm</th>
                        <th>Giá</th>
                        <th>Số lượng</th>
                        <th>Thành tiền</th>
                        <th>Xóa</th>
                      </tr>
                    </thead>
                    <tbody>';
                    foreach ($_SESSION['giohang'] as $sp) {
                      extract($sp);
                      echo '
                      <tr>
                      <td>'.$stt.'</td>
                      <td>'.$idsp.'</td>
                      <td data-label="Tên sản phẩm">
                        <div class="customer">
                          <div class="customer__thumb">
                            <img
                              src="'.$anhsp.'"
                              alt=""
                            />
                          </div>
                          <div class="customer__content">
                            <h6 class="customer__name">'.$tensp.'</h6>
                          </div>
                        </div>
                      </td>
                      <td><input data-label="Giá"  type="number" class="dongia product-qty__value" value="'.$giasp.'" readonly/></td>
                      <td data-label="Số lượng">
                        <div class="qty-cart d-flex style-two">
                          <div class="product-qty">
                            <input
                              type="number"
                              class="product-qty__value soluong"
                              value="'.$soluong.'"
                            />
                          </div>
                        </div>
                      </td>
                      <td data-label="Thành tiền" class="thanhtien"></td>
                      <td data-label="Xóa">
                        <form action="index.php?act=delspcard" method="post">
                        <input type="hidden" name="idsp" value="'.$idsp.'">
                          <button
                            type="submit"
                            class="delete-icon"
                            data-bs-toggle="tooltip"
                            data-bs-placement="top"
                            data-bs-title="Delete"
                            name="delspcard"
                          >
                            <i class="las la-trash-alt"></i>
                          </button>
                        </form>
                      </td>
                    </tr>
                      ';
                      $stt++;
                    }
                    ?>
                      </tbody>
                                  </table>
                                </div>
                              </div>
                              <div class="cart-btn-area d-flex justify-content-between flex-wrap">
                                <div class="shopping-cart mb-0">
                                  <a
                                    href="index.php?act="
                                    class="btn btn--base pill shopping-cart__pr mb-3"
                                    >Tiếp tục mua hàng</a
                                  >
                                </div>
                                <div class="clear-cart">
                                  <a onclick="location.href='/du-an1/index.php?act=delcard'" class="btn pill btn--white">Xóa giỏ hàng</a>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-lg-12">
                                  <div class="order-summery ms-auto">
                                    <div class="order-summery__two d-flex justify-content-between">
                                      <h6 class="order-summery__title-two">Tổng cộng:</h6>
                                      <span class="order-summery__number-two" id="totalMoney"></span>
                                    </div>
                                    <div class="checkout">
                                      <?php if(isset($_SESSION['user'])){?>
                                      <a href="index.php?act=thanhtoan" class="btn btn--base pill"
                                        >Tiến hành kiểm tra</a
                                      >
                                      <?php }
                                      else{
                                      ?>
                                      <a href="index.php?act=login" class="btn btn--base pill"
                                        >Tiến hành kiểm tra</a
                                      >
                                      <?php }?>
                                      <p class="checkout__desc">Thanh toán với nhiều địa chỉ</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- ===============cart section end ==================-->
                <?php
                      }
                  else{
                    echo '<h3 class="section-heading__title" style=" text-align: center; margin-bottom: 50px;">Giỏ hàng trống</h3>';
                  }
                ?>
                          <!--============================feature section start =======================-->
                          <div
                            class="feature-section bg-img py-60"
                            style="background-image: url(view/assets/images/img-duan1/khai/banner2.jpg)"
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
    <script src="view/assets/js/jstest.js"></script>
    <!-- ==========================feature setion end ============================-->