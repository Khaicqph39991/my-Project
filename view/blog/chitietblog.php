    <!-- ==================== Breadcumb Start ==================== -->
    <section
      class="breadcumb py-120 bg-img"
      style="background-image: url(view/assets/images/img-duan1/khai/banner2.jpg)"
    >
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="breadcumb__wrapper">
              <h1 class="breadcumb__title">Chi tiết Blog</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ==================== Breadcumb End ==================== -->

    <!-- ==================== Blog Start ==================== -->
    <section class="blog-detials py-120">
      <div class="container">
        <div class="row gy-5 justify-content-center flex-wrap-reverse">
          <div class="col-lg-4">
            <div class="blog-sidebar-wrapper">
              <div class="blog-sidebar">
                <h5 class="blog-sidebar__title">Bài viết mới</h5>
                <?php
          foreach($listblog as $bl){
            extract($bl);
            $hinh = $img_path.$anh_blog;
            $ctblog = 'index.php?act=chitietblog&id_blog='.$id_blog;
            echo '<div class="latest-blog">            
            <div class="latest-blog__thumb">
              <a href="'.$ctblog.'">
                <img
                  src="'.$hinh.'"
                  alt=""
              /></a>
            </div>
            <div class="latest-blog__content">
              <h6 class="latest-blog__title">
                <a href="'.$ctblog.'">'.$tieu_de.'</a
                >
              </h6>
              <span class="latest-blog__date">'.$ngay_them.'</span>
            </div>
          </div>';
          }
          ?>
                <!-- <div class="latest-blog">
                  <div class="latest-blog__thumb">
                    <a href="index.php?act=chitietblog">
                      <img
                        src="view/assets/images/img-duan1/khai/tintuc3.jpg"
                        alt=""
                    /></a>
                  </div>
                  <div class="latest-blog__content">
                    <h6 class="latest-blog__title">
                      <a href="index.php?act=chitietblog"
                        >Sếp đòi nhân viên cũ trả tiền trà sữa</a
                      >
                    </h6>
                    <span class="latest-blog__date">Thứ tư, 1/11/2023</span>
                  </div>
                </div>
                <div class="latest-blog">
                  <div class="latest-blog__thumb">
                    <a href="index.php?act=chitietblog">
                      <img
                        src="view/assets/images/img-duan1/khai/tintuc4.jpg"
                        alt=""
                    /></a>
                  </div>
                  <div class="latest-blog__content">
                    <h6 class="latest-blog__title">
                      <a href="index.php?act=chitietblog"
                        >Trẻ em có nên uống trà sữa?</a
                      >
                    </h6>
                    <span class="latest-blog__date">Thứ tư, 1/11/2023</span>
                  </div>
                </div> -->
              </div>
            </div>
          </div>

          <!-- ============================= Blog Details Sidebar End ======================== -->

          <div class="col-lg-8">
            <div class="blog-details">
              <div class="blog-details__content">
              <?php
                  extract($oneblog);
                  $hinh = $img_path.$anh_blog;
                  echo '<div class="blog-details__thumb"><img src="'.$hinh.'" alt="" /></div>
                  <h3 class="blog-details__title">'.$tieu_de.'</h3>
                <span class="blog-card-wrapper__date">'.$ngay_them.'</span>
                <p class="blog-details__desc">'.$noi_dung.'</p> ';
                  ?>
                <!-- Comments Start -->
                <!-- <div class="col-lg-12 pt-120">
                  <h5 class="details-subtitle">02 bình luận</h5>
                  <ul class="comment-list">
                    <li class="comment-list__item d-flex flex-wrap">
                      <div class="comment-list__thumb">
                        <img
                          src="view/assets/images/thumbs/feature/imguser.jpg"
                          alt=""
                        />
                      </div>
                      <div class="comment-list__content">
                        <div class="d-flex justify-content-between">
                          <div>
                            <h4 class="comment-list__name">Quốc Khải</h4>
                            <span class="comment-list__time">05/11/2023</span>
                          </div>
                        </div>
                        <p class="comment-list__desc">Shop 10đ</p>
                      </div>
                    </li>
                  </ul>
                </div> -->
                <!-- Comments End -->

                <!-- Comments Form Start -->
                <!-- <div class="contact-form pt-2" id="reply">
                  <h3 class="contact__title">Đăng bình luận</h3>
                  <form action="#" autocomplete="off">
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="form-group">
                          <label for="comment" class="mb-2"
                            >Nội dung bình luận</label
                          >
                          <textarea
                            class="form--control"
                            id="comment"
                          ></textarea>
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <button class="btn btn--base pill mt-2">
                          Đăng bình luận
                        </button>
                      </div>
                    </div>
                  </form>
                </div> -->
                <!-- Comment Form End -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ==================== Blog End ==================== -->

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
