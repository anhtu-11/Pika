<div class="page-body-wrapper">
    <!-- Page Sidebar Start-->
    <div class="sidebar-wrapper">
        <div>
            <?php if (isset($_SESSION['user'])): ?>
                <?php $user = $_SESSION['user']; ?>
                <div class="logo-wrapper logo-wrapper-center">
                    <a href="index.php?act=admin" data-bs-original-title="" title="">
                        <h2 class="for-dark blur-up lazyload"><strong>Chào </strong></h2>
                        <h4 class="gradient-title"><?= $user['name'] ?></h4>
                        </>
                        <div class="back-btn">
                            <i class="fa fa-angle-left"></i>
                        </div>
                        <div class="toggle-sidebar">
                            <i class="status_toggle middle sidebar-toggle" data-feather="grid"></i>
                        </div>
                </div>
                <div class="logo-icon-wrapper">
                    <a href="index.php?act=admin">
                        <img class="img-fluid main-logo" src="admin/assets/images/logo/logo.png" alt="logo">
                    </a>
                </div>
                <nav class="sidebar-main">
                    <div class="left-arrow" id="left-arrow">
                        <i data-feather="arrow-left"></i>
                    </div>

                    <div id="sidebar-menu">
                        <ul class="sidebar-links" id="simple-bar">
                            <li class="back-btn"></li>

                            <li class="sidebar-list">
                                <a class="sidebar-link sidebar-title link-nav" href="index.php?act=update-profile">
                                    <i data-feather="home"></i>
                                    <span>Thông tin cá nhân</span>
                                </a>
                            </li>

                            <li class="sidebar-main-title sidebar-main-title-2">
                                <div>
                                    <h6 class="lan-1">Quản lý</h6>
                                    <p class="lan-2">tiêu dùng</p>
                                </div>
                            </li>
                            <li class="">
                                <a class="sidebar-link sidebar-title" href="index.php?act=client">
                                    <i data-feather="arrow-left-circle"></i>
                                    <span>Mua Hàng</span>
                                </a>
                            </li>

                            <li class="">
                                <a class="sidebar-link sidebar-title" href="?act=listOrder">
                                    <i data-feather="archive"></i>
                                    <span>Hóa Đơn</span>
                                </a>
                            </li>

                            <li class="">
                                <a class="sidebar-link sidebar-title" href="?act=cart">
                                    <i data-feather="shopping-cart"></i>
                                    <span>Giỏ Hàng</span>
                                </a>
                            </li>
                            <li class="">
                                <a class="sidebar-link sidebar-title" href="?act=listLove">
                                    <i data-feather="heart"></i>
                                    <span>Yêu thích</span>
                                </a>
                            </li>
                            <li class="">
                                <a class="sidebar-link sidebar-title" href="?act=listCommentsClient">
                                    <i data-feather="message-square"></i>
                                    <span>Bình luận gần đây</span>
                                </a>
                            </li>
                            <li class="">
                                <a class="sidebar-link sidebar-title" href="?act=logout">
                                    <i data-feather="log-out"></i>
                                    <span>Đăng Xuất</span>
                                </a>
                            </li>



                        </ul>
                    </div>
                    <div class="right-arrow" id="right-arrow">
                        <i data-feather="arrow-right"></i>
                    </div>
                </nav>
            <?php endif; ?>
        </div>
    </div>