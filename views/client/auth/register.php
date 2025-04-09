<?php include '../views/client/layout/header.php' ?>

<body>

    <!-- login page start-->
    <div class="container-fluid p-0">
        <div class="row m-0">
            <div class="col-12 p-0">
                <!-- Sign Up Section Start -->
                <div class="login-section">
                    <div class="materialContainer">
                        <div class="box">
                            <div class="login-title">
                                <h2>Register</h2>
                            </div>
                            <form action="?act=register" method="POST">

                                <!-- tên đăng nhập -->
                                <div class="input top">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" id="name"
                                        value="<?= $_SESSION['old_data']['name'] ?? '' ?>">
                                    <span class="spin"></span>
                                </div>
                                <?php if (isset($_SESSION['errors']['name'])): ?>
                                    <p class="text-danger"><?= $_SESSION['errors']['name'] ?></p>
                                <?php endif ?>
                                <!-- Email -->
                                <div class="input">
                                    <label for="email">Email Address</label>
                                    <input type="text" name="email" id="email"
                                    value="<?= $_SESSION['old_data']['email'] ?? '' ?>">
                                    <span class="spin"></span>
                                </div>
                                <?php if (isset($_SESSION['errors']['email'])): ?>
                                    <p class="text-danger"><?= $_SESSION['errors']['email'] ?></p>
                                <?php endif ?>

                                <!-- password -->
                                <div class="input">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" id="password">
                                    <span class="spin"></span>
                                </div>
                                <?php if (isset($_SESSION['errors']['password'])): ?>
                                    <p class="text-danger"><?= $_SESSION['errors']['password'] ?></p>
                                <?php endif ?>
                                <div class="button login">
                                    <button name="register" onclick="location.href = '?act=register';">
                                        <span>Sign Up</span>
                                        <i class="fa fa-check"></i>
                                    </button>
                                </div>
                            </form>
                            <p class="sign-category">
                                <span>Or sign up with</span>
                            </p>

                            <div class="row gx-md-3 gy-3">
                                <div class="col-md-6">
                                    <a href="javascript:void(0)">
                                        <div class="social-media fb-media">
                                            <img src="client/assets/images/facebook.png"
                                                class="img-fluid blur-up lazyload" alt="">
                                            <h6>Facebook</h6>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="javascript:void(0)">
                                        <div class="social-media google-media">
                                            <img src="client/assets/images/google.png"
                                                class="img-fluid blur-up lazyload" alt="">
                                            <h6>Google</h6>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <p>
                                <a href="?act=login" class="theme-color">Already have an account?</a>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Sign Up Section End -->
            </div>
        </div>
    </div>
    <!-- login page End -->

    <!-- latest js -->
    <script src="client/assets/js/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap js -->
    <script src="client/assets/js/bootstrap/bootstrap.bundle.min.js"></script>

    <!-- Theme js -->
    <script src="client/assets/js/script.js"></script>
</body>
<?php
unset($_SESSION['errors']);
include '../views/client/layout/footer.php' ?>