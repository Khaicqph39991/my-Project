    <!-- ==================== Breadcumb Start ==================== -->
    <section
      class="breadcumb py-120 bg-img"
      style="background-image: url(view/assets/images/img-duan1/khai/banner2.jpg)"
    >
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="breadcumb__wrapper">
              <h1 class="breadcumb__title">Blog</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ==================== Breadcumb End ==================== -->

    <!-- =================blog section start =============-->
    <div class="blog-section py-120">
      <div class="container">
        <div class="row flex-wrap-reverse gy-5">
          <div class="col-lg-4">
            <div class="blog-sidebar-wrapper">
              <div class="blog-sidebar">
                <h5 class="blog-sidebar__title">Bài viết mới</h5>
                <?php
                if(empty($listblog)){
                echo 'Không có bài viết';
                }else{
                foreach($listblog as $bl){
            extract($bl);
            $hinh = $img_path.$anh_blog;
            $ctblog = 'index.php?act=chitietblog&id_blog='.$id_blog;
            echo'    <div class="latest-blog">
            <div class="latest-blog__thumb">
              <a href="'.$ctblog.'">
                <img
                  src="'.$hinh.'"
                  alt=""
              /></a>
            </div>
            <div class="latest-blog__content">
              <h6 class="latest-blog__title">
                <a href="'.$ctblog.'"
                  >'.$tieu_de.'</a
                >
              </h6>
              <span class="latest-blog__date">'.$ngay_them.'</span>
            </div>
          </div>';
          }
        }
          ?>
            
                <!-- <div class="latest-blog">
                  <div class="latest-blog__thumb">
                    <a href="index.php?act=chitietblog">
                      <img
                        src="view/assets/images/img-duan1/khai/tintuc2.jpg"
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
          <div class="col-lg-8" >
          <?php
           if(empty($listblog)){
            echo '<p style="text-align: center;">Không có bài viết</p>';
            }else{
            extract($loadoneblog);
            $hinh = $img_path.$anh_blog;
            $ctblog = 'index.php?act=chitietblog&id_blog='.$id_blog;
            echo' <div class="blog-card-wrapper">
            <a href="'.$ctblog.'" >
            <div class="blog-details__thumb">
              <img src="'.$hinh.'" alt=""/>
            </div>
            </a>
            <div class="blog-card-wrapper__content" style="margin-top: 70px">
              <h4 class="blog-card-wrapper__title">
                <a
                  href="'.$ctblog.'"
                  class="blog-card-wrapper__title-link"
                  >'.$tieu_de.'</a
                >
              </h4>
              <p class="blog-card-wrapper__date">'.$ngay_them.'</p>
              <p class="blog-card-wrapper__desc">'.$noi_dung.'</p>
              <div class="blog-card-wrapper__icon">
                <a href="'.$ctblog.'" class="blog-card-wrapper__button">
                  Continue Reading
                  <span class="blog-card-wrapper__button-icon"
                    ><i class="fas fa-angle-right"></i></span
                ></a>
              </div>
            </div>
          </div>';
            }
          ?>
          
            <!-- pagination html -->
            <nav aria-label="Page navigation example">
              <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">01</a></li>
                <li class="page-item"><a class="page-link" href="#">02</a></li>
                <li class="page-item"><a class="page-link" href="#">03</a></li>
                <li class="page-item">
                  <a class="page-link" href="#"
                    ><i class="fas fa-angle-right"></i>
                  </a>
                </li>
              </ul>
            </nav>
            <!-- pagination html end -->
          </div>
        </div>
      </div>
    </div>
    <!-- ================blog section end=================-->

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