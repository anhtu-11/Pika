<?php include '../views/client/layout/header.php' ?>

<body>
    <!-- login page start-->
    <div class="container-fluid p-0">
        <div class="row m-0">
            <div class="col-12 p-0">
                <div class="login-section">
                    <div class="materialContainer">
                        <div class="box">
                            <div class="login-title">
                                <h2>Login</h2>
                            </div>
                            <form action="?act=login" method="post">
                                <div class="input">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="email">
                                    <span class="spin"></span>

                                </div>
                                <?php if (isset($_SESSION['errors']['email'])): ?>
                                    <p class="text-danger"><?= $_SESSION['errors']['email'] ?></p>
                                <?php endif ?>
                                <div class="input" style="margin-bottom: 20px;">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" id="password">
                                    <span class="spin"></span>

                                </div>
                                <?php if (isset($_SESSION['errors']['password'])): ?>
                                    <p class="text-danger"><?= $_SESSION['errors']['password'] ?></p>
                                <?php endif ?>
                                <a href="forgot-password.html" class="pass-forgot">Forgot your password?</a>

                                <div class="button login">
                                    <button type="submit" name="login" onclick="location.href = '';">
                                        <span>Log In</span>
                                        <i class="fa fa-check"></i>
                                    </button>
                                </div>
                            </form>
                            <p class="sign-category">
                                <span>Or sign in with</span>
                            </p>

                            <div class="row gx-md-3 gy-3">
                                <div class="col-md-6">
                                    <a href="javascript:void(0)">
                                        <div class="social-media fb-media">
                                            <img src="client/assets/images/facebook.png" class="img-fluid blur-up lazyload"
                                                alt="">
                                            <h6>Facebook</h6>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="javascript:void(0)">
                                        <div class="social-media google-media">
                                            <img src="client/assets/images/google.png" class="img-fluid blur-up lazyload"
                                                alt="">
                                            <h6>Google</h6>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <p>Not a member? <a href="?act=register" class="theme-color">Sign up now</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- latest jquery-->
        <script src="client/assets/js/jquery-3.6.0.min.js"></script>

        <!-- Bootstrap js-->
        <script src="client/assets/js/bootstrap/bootstrap.bundle.min.js"></script>

        <!-- Theme js-->
        <script src="client/assets/js/script.js"></script>
    </div>
</body>
<?php unset($_SESSION['errors']);
include '../views/client/layout/footer.php' ?>