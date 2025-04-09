<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start(); // Chỉ khởi động session nếu chưa có session nào
}
?>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themes.pixelstrap.com/voxo/front-end/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Nov 2024 03:39:49 GMT -->

<head>
    <link rel="manifest" href="manifest.json" />
    <link rel="icon" href="client/assets/images/favicon/2.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="client/assets/images/favicon/2.png" />
    <meta name="theme-color" content="#e22454" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta name="apple-mobile-web-app-title" content="Voxo" />
    <meta name="msapplication-TileImage" content="client/assets/images/favicon/2.png" />
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Voxo">
    <meta name="keywords" content="Voxo">
    <meta name="author" content="Voxo">
    <link rel="icon" href="client/assets/images/favicon/2.png" type="image/x-icon" />
    <title>Index</title>

    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700&amp;display=swap" rel="stylesheet">

    <!-- bootstrap css -->
    <link id="rtl-link" rel="stylesheet" type="text/css" href="client/assets/css/vendors/bootstrap.css">

    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href="client/assets/css/vendors/font-awesome.css">

    <!-- feather icon css -->
    <link rel="stylesheet" type="text/css" href="client/assets/css/vendors/feather-icon.css">

    <!-- animation css -->
    <link rel="stylesheet" type="text/css" href="client/assets/css/vendors/animate.css">

    <!-- slick css -->
    <link rel="stylesheet" type="text/css" href="client/assets/css/vendors/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="client/assets/css/vendors/slick/slick-theme.css">

    <!-- Theme css -->
    <link id="color-link" rel="stylesheet" type="text/css" href="client/assets/css/demo2.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- Toast js -->
    <script src="https://cdn.jsdelivr.net/npm/toastr@2.1.4/toastr.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastr@2.1.4/build/toastr.min.css">

</head>

<body class="theme-color2 light ltr">

    <?php
    if (isset($_SESSION['error'])) {
        echo "<script type='text/javascript'>
                toastr.warning('{$_SESSION['error']}')
                </script>";
        unset($_SESSION['error']);
    }
    if (isset($_SESSION['success'])) {
        echo "<script type='text/javascript'>
                toastr.success('{$_SESSION['success']}')
                </script>";
        unset($_SESSION['success']);
    }
    ?>

    <!-- header start -->
    <header class="header-style-2" id="home">
        <div class="main-header navbar-searchbar">
            <div class="container-fluid-lg">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="main-menu">
                            <div class="menu-left">
                                <div class="brand-logo">
                                    <a href="index.php?act=client">
                                        <h3 class="img-fluid blur-up lazyload"><strong>Shop đồ điện</strong>
                                        </h3>
                                        <p class="gradient-title">gia dụng</p>
                                    </a>
                                </div>
                            </div>
                            <nav>
                                <div class="main-navbar">
                                    <div id="mainnav">
                                        <div class="toggle-nav">
                                            <i class="fa fa-bars sidebar-bar"></i>
                                        </div>
                                        <ul class="nav-menu">
                                            <li class="back-btn d-xl-none">
                                                <div class="close-btn">
                                                    Menu
                                                    <span class="mobile-back"><i class="fa fa-angle-left"></i>
                                                    </span>
                                                </div>
                                            </li>
                                            <li class="home-menu">
                                                <a href="javascript:void(0)" class="nav-link menu-title">home</a>
                                            </li>
                                            <li class="dropdown">
                                                <a href="javascript:void(0)" class="nav-link menu-title">Categories</a>
                                                <ul class="nav-submenu menu-content">
                                                    <?php foreach ($categories as $category): ?>
                                                        <li>
                                                            <a
                                                                href="index.php?act=detail-category&category_id=<?= $category['category_id'] ?>"><?= $category['name'] ?></a>
                                                        </li>
                                                    <?php endforeach ?>
                                                </ul>
                                            </li>
                                            <li class="mobile-poster d-flex d-xl-none">
                                                <img src="client/assets/images/pwa.png" class="img-fluid" alt="">
                                                <div class="mobile-contain">
                                                    <h5>Enjoy app-like experience</h5>
                                                    <p class="font-light">With this Screen option you can use
                                                        Website
                                                        like an App.</p>
                                                    <a href="javascript:void(0)" id="installApp"
                                                        class="btn btn-solid-default btn-spacing w-100">ADD TO
                                                        HOMESCREEN</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                            <div class="menu-right">
                                <ul>
                                    <li>
                                        <div class="search-box">
                                            <i data-feather="search"></i>
                                        </div>
                                    </li>
                                    <?php if (isset($_SESSION['user'])): ?>
                                        <?php $user = $_SESSION['user']; ?>
                                        <li class="onhover-dropdown">
                                            <div class="cart-media">
                                                <img src="./images/avatar/<?= $user['avatar'] ?>" alt="N/A"
                                                    style="width: 45px; height: 45px;">
                                            </div>
                                            <div class="onhover-div profile-dropdown">
                                                <ul>
                                                    <li>
                                                        <a href="?act=update-profile"
                                                            class="d-block"><?= $user['name'] ?></a>
                                                    </li>
                                                    <li>
                                                        <a href="?act=logout" class="d-block">Log-out</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="onhover-dropdown wislist-dropdown">
                                            <div class="cart-media">
                                                <a href="wishlist.html">
                                                    <i data-feather="heart"></i>
                                                    <span class="label label-theme rounded-pill">5</span>
                                                </a>
                                            </div>
                                            <div class="onhover-div">
                                                <a href="wishlist.html">
                                                    <div class="wislist-empty">
                                                        <i class="fab fa-gratipay"></i>
                                                        <h6 class="mb-1">Chưa có sản phẩm yêu thích</h6>
                                                        <p class="font-light mb-0">LỰA NGAY!!!</p>
                                                    </div>
                                                </a>
                                            </div>
                                        </li>
                                        <li class="onhover-dropdown cart-dropdown">
                                            <a href="?act=cart" class="btn btn-solid-default btn-spacing">
                                                <i data-feather="shopping-cart" class="pe-2"></i>
                                                <span>Danh sách</span>
                                            </a>
                                        </li>

                                    <?php else: ?>
                                        <li class="onhover-dropdown">
                                            <div class="cart-media">
                                                <i data-feather="user"></i>
                                            </div>
                                            <div class="onhover-div profile-dropdown">
                                                <ul>
                                                    <li>
                                                        <a href="?act=login" class="d-block">Login</a>
                                                    </li>
                                                    <li>
                                                        <a href="?act=register" class="d-block">Create account</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="onhover-dropdown wislist-dropdown">
                                            <div class="cart-media">
                                                <a href="wishlist.html">
                                                    <i data-feather="heart"></i>
                                                    <span class="label label-theme rounded-pill">5</span>
                                                </a>
                                            </div>
                                            <div class="onhover-div">
                                                <a href="wishlist.html">
                                                    <div class="wislist-empty">
                                                        <i class="fab fa-gratipay"></i>
                                                        <h6 class="mb-1">error</h6>
                                                        <p class="font-light mb-0">Bạn cần đăng nhập trước</p>
                                                    </div>
                                                </a>
                                            </div>
                                        </li>
                                        <li class="onhover-dropdown cart-dropdown">
                                            <button type="button" class="btn btn-solid-default btn-spacing">
                                                <i data-feather="shopping-cart" class="pe-2"></i>
                                                <span>$5686.25</span>
                                            </button>
                                            <div class="onhover-div">
                                                <div class="cart-menu">
                                                    <ul class="custom-scroll">
                                                        <li>
                                                            <div class="media">
                                                                <img src="assets/images/fashion/product/front/7.jpg"
                                                                    class="img-fluid blur-up lazyload" alt="">
                                                                <div class="media-body">
                                                                    <h6>Womens Stylish Jacket</h6>
                                                                    <div class="qty-with-price">
                                                                        <span>$24.00</span>
                                                                        <span>
                                                                            <input type="number" class="form-control"
                                                                                value="1">
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <button type="button" class="btn-close d-block d-md-none"
                                                                    aria-label="Close">
                                                                    <i class="fas fa-times"></i>
                                                                </button>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="cart-btn">
                                                    <h6 class="cart-total"><span class="font-light"></h6>
                                                </div>
                                            </div>
                                        </li>
                                    <?php endif; ?>
                                </ul>
                            </div>
                            <div class="search-full">
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i data-feather="search" class="font-light"></i>
                                    </span>
                                    <input type="text" class="form-control search-type" placeholder="Search here..">
                                    <span class="input-group-text close-search">
                                        <i data-feather="x" class="font-light"></i>
                                    </span>
                                </div>
                                <div class="search-suggestion">
                                    <ul class="custom-scroll">
                                        <li>
                                            <div class="product-cart media">
                                                <img src="client/assets/images/electronics/product/1.jpg"
                                                    class="img-fluid blur-up lazyload" alt="">
                                                <div class="media-body">
                                                    <a href="javascript:void(0)">
                                                        <h6 class="mb-1">New Smart Watch 4 ERT2</h6>
                                                    </a>
                                                    <ul class="rating p-0">
                                                        <li>
                                                            <i class="fas fa-star theme-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star theme-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star theme-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                    </ul>
                                                    <p class="mb-0 mt-1">$28.00</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>