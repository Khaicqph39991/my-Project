    <!-- ==================== Breadcumb Start ==================== -->
    <section class="breadcumb py-120 bg-img" style="background-image: url(view/assets/images/img-duan1/khai/banner2.jpg)">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="breadcumb__wrapper">
              <h1 class="breadcumb__title">Đăng nhập</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ==================== Breadcumb End ==================== -->
    <!-- =============account section start ====================-->
    <?php if (!isset($_SESSION['user'])) {?>
    <section class="account py-120">
      <div class="account-inner">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6 d-none d-lg-block">
              <div class="account-thumb">
                <img src="view/assets/images/img-duan1/pha/img6.jpg" alt="" />
              </div>
            </div>
            <div class="col-lg-6">
              <div class="account-form">
                <div class="account-form__content mb-4">
                  <h3 class="account-form__title mb-2">
                    Đăng nhập tài khoản của bạn
                  </h3>
                </div>
                  <form action="index.php?act=login" method="POST">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label for="user" class="form--label"> User</label>
                        <input
                          type="text"
                          class="form--control"
                          id="user"
                          placeholder="Nhập user"
                          name="user"
                        />
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <label for="your-password" class="form--label"
                        >Mật khẩu</label
                      >
                      <div class="form-group">
                        <input
                          id="your-password"
                          type="password"
                          class="form-control form--control"
                          value="Password"
                          name="pass"
                        />
                        <div
                          class="password-show-hide fas fa-eye toggle-password fa-eye-slash"
                          id="#your-password"
                        ></div>
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="d-flex flex-wrap justify-content-between">
                        <div class="form--check form-group">
                          <input
                            class="form-check-input"
                            type="checkbox"
                            value=""
                            id="remember"
                          />
                          <label class="form-check-label" for="remember"
                            >Nhớ mật khẩu</label
                          >
                        </div>
                        <a href="index.php?act=quenmk" class="forgot-password text--base"
                          >Quên mật khẩu</a
                        >
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="form-group">
                        <button type="submit" class="btn btn--base w-100" name="dangnhap">
                          Đăng nhập
                        </button>
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="have-account text-center">
                        <p class="have-account__text">
                          Bạn chưa có tài khoản? <a
                            href="index.php?act=dangky"
                            class="have-account__link text--base"
                            >Đăng kí tài khoản</a
                          >
                        </p>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php } ?>
    <!-- =======================account section end ========================-->