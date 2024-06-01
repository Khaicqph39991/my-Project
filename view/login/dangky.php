    <!-- ==================== Breadcumb Start==================== -->
    <section
      class="breadcumb py-120 bg-img"
      style="background-image: url(view/assets/images/img-duan1/khai/banner2.jpg)"
    >
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="breadcumb__wrapper">
              <h1 class="breadcumb__title">Đăng ký</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ==================== Breadcumb End==================== -->
    <section class="account py-120">
      <div class="account-inner">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6 d-none d-lg-block">
              <div class="account-thumb">
                <img src="view/assets/images/img-duan1//pha/img6.jpg" alt="" />
              </div>
            </div>
            <div class="col-lg-6">
              <div class="account-form">
                <div class="account-form__content mb-4">
                  <h3 class="account-form__title mb-2">
                    Đăng ký tài khoản của bạn
                  </h3>
                </div>
                <form action="index.php?act=dangky" method="POST">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="name" class="form--label">User</label>
                        <input
                          type="text"
                          class="form--control"
                          id="name"
                          name="user"
                          placeholder="Nhập User của bạn"
                        />
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="username" class="form--label">Họ và tên</label>
                        <input
                          type="text"
                          class="form--control"
                          id="username"
                          name="username"
                          placeholder="Nhập họ và tên của bạn"
                        />
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="diachi" class="form--label">Địa chỉ</label>
                        <input
                          type="text"
                          class="form--control"
                          id="diachi"
                          name="diachi"
                          placeholder="Nhập địa chỉ của bạn"
                        />
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="sdt" class="form--label">Số điện thoại</label>
                        <input
                          type="text"
                          class="form--control"
                          id="sdt"
                          name="sdt"
                          placeholder="Nhập số điện thoại của bạn"
                        />
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label for="email" class="form--label">Email</label>
                        <input
                          type="text"
                          class="form--control"
                          id="email"
                          name="email"
                          placeholder="Nhập Email"
                        />
                      </div>
                    </div>
                    <div class="col-sm-6">
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
                    <div class="col-sm-6">
                      <label for="confirm-password" class="form--label"
                        >Nhập lại mật khẩu</label
                      >
                      <div class="form-group">
                        <input
                          id="confirm-password"
                          type="password"
                          class="form-control form--control"
                          value="Xác nhận mật khẩu"
                          name="passre"
                        />
                        <div
                          class="password-show-hide fas fa-eye toggle-password fa-eye-slash"
                          id="#confirm-password"
                        ></div>
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="form-group">
                        <input type="submit" name="dangky" class="btn btn--base w-100" id="" value="Đăng ký">
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="have-account text-center">
                        <p class="have-account__text">
                          Bạn đã có tài khoản
                          <a
                            href="index.php?act=login"
                            class="have-account__link text--base"
                            >Đăng nhập ngay bây giờ</a
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