    <!-- ==================== Breadcumb Start ==================== -->
    <section
      class="breadcumb py-120 bg-img"
      style="background-image: url(view/assets/images/img-duan1/khai/banner2.jpg)"
    >
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="breadcumb__wrapper">
              <h1 class="breadcumb__title">Thanh toán</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php
    if (is_array($tk)){
        extract($tk);
    }
    ?>
    <!-- ==================== Breadcumb End ==================== -->

    <!-- =================check out section start ===================-->
    <div class="checkout-section py-120">
      <div class="container">
      <form action="index.php?act=dathang" method="POST">
        <div class="row gy-4">
          <div class="col-lg-8">
            <div class="billing-details">
              <h5 class="billing-details__title">Chi tiết thanh toán</h5>
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label for="first-name" class="form--label"
                      >Họ và tên<span class="required">*</span></label
                    >
                    <input type="text" class="form--control" id="first-name" name="hoten" value="<?=$ten_kh?>"/>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group">
                    <label for="address" class="form--label"
                      >Địa chỉ<span class="required">*</span></label
                    >
                    <input
                      type="text"
                      class="form--control"
                      placeholder="Địa chỉ chi tiết"
                      id="address"
                      name="diachi" value="<?=$dia_chi?>"
                    />
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="tel" class="form--label">Số điện thoại</label>
                    <input type="tel" class="form--control" id="tel" name="sdt" value="<?=$sdt?>"/>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="email" class="form--label">Địa chỉ email</label>
                    <input type="email" class="form--control" id="email" name="email" value="<?=$email?>"/>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group">
                    <label for="ordernote" class="form--label">Ghi chú</label>
                    <textarea
                      class="form--control"
                      id="ordernote"
                      rows="3"
                      placeholder="Nhập ghi chú của bạn"
                      name="ghichu"
                    ></textarea>
                  </div>
                </div>
                <div class="col-xl-6">
                  <div
                    class="billing-details__button d-flex flex-wrap justify-content-between align-items-center"
                  >
                    <a
                      href="index.php?act=danhmuc"
                      class="btn btn--base pill billing-details__button-margin"
                      >Tiếp tục mua hàng</a
                    >
                    <a href="index.php?act=card" class="color-style"
                      >Quay lại giỏ hàng</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="your-order">
              <h6 class="your-order__title">Đơn hàng</h6>
              <?php
              if (isset($_SESSION['giohang']) && !empty($_SESSION['giohang'])) {
                foreach ($_SESSION['giohang'] as $sp) {
                  extract($sp);
              ?>
              <div
                class="order d-flex justify-content-between align-items-center"
              >
                <ul class="order-title">
                  <li class="order-title__one customer__name"><?=$tensp?></li>
                  <li>Số lượng:</li>
                  <li class="order-title__one soluongtt" ><?=$soluong?></li>
                </ul>
                <div class="">
                  <span>Giá:</span>
                  <span class="order__number dongiatt"><?=$giasp?></span>
                </div>
                <span>Thành tiền:</span>
                <span class="order__number thanhtientt"></span>
              </div>
              <?php   
                  }
                }
              ?>
              <div class="order d-flex justify-content-between align-items-center">
                <ul class="order-title">
                  <li class="order-title__one">Tổng</li>
                </ul>
                <span class="order__number" id="tongtientt"></span>
              </div>
              <div class="order-system">
                <div class="form--radio mb-2">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="pttt"
                    id="transfer"
                    value="1"
                  />
                  <label class="form-check-label" for="transfer"
                    >Chuyển khoản</label
                  >
                </div>
                <div class="form--radio">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="pttt"
                    id="delivery"
                    value="0"
                    checked
                  />
                  <label class="form-check-label" for="delivery"
                    >Thanh toán khi nhận hàng</label
                  >
                </div>
              </div>
              <p class="your-order__desc">
                Dữ liệu cá nhân của bạn sẽ được sử dụng để xử lý đơn đặt hàng,
                hỗ trợ trải nghiệm của bạn trên trang web này.
              </p>
              <div class="place-order">
                <input type="submit" name="dathang" class="btn btn--base pill" value="Đặt hàng ngay">
                <!-- <a href="index.php?act=donhang" class="btn btn--base pill">Đặt hàng ngay</a> -->
              </div>
            </div>
          </div>
        </div>
        </form>
      </div>
    </div>
    <!-- =================checkout section end===================== -->
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
    <!-- ==========================feature setion end ============================-->