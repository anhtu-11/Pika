<?php include '../views/client/layout/header.php' ?>
<!-- mobile fix menu end -->

<!-- Breadcrumb section start -->
<section class="breadcrumb-section section-b-space">
    <ul class="circles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>Shop Đồ điện </h3>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb section end -->

<!-- Shop Section start -->
<section class="section-b-space">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4">
                <div class="category-option">
                    <div class="button-close mb-3">
                        <button class="btn p-0"><i data-feather="arrow-left"></i> Close</button>
                    </div>
                    <div class="accordion category-name" id="accordionExample">

                        <div class="accordion-item category-rating">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo">
                                    Brand
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse show"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body category-scroll">
                                    <ul class="category-list">
                                        <?php foreach ($brands as $brand): ?>
                                            <li>
                                                <div class="form-check ps-0 custome-form-check">
                                                    <a href="index.php?act=detail-brand&brand_id=<?= $brand['brand_id'] ?>"
                                                        class="btn btn-color btn-sm fw-bold">
                                                        <?= $brand['name'] ?>
                                                    </a>
                                                </div>
                                            </li>
                                        <?php endforeach ?>
                                    </ul>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-item category-color">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree">
                                    Color
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse show"
                                aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ul class="category-list">
                                        <?php foreach ($colors as $color): ?>
                                            <li>
                                                <a href="javascript:void(0)">
                                                    <i style="color: #0000"></i>
                                                </a>
                                            </li>
                                        <?php endforeach ?>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item category-rating">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo">
                                    Category
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse show"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body category-scroll">
                                    <ul class="category-list">
                                        <?php foreach ($categories as $category): ?>
                                            <li>
                                                <div class="form-check ps-0 custome-form-check">
                                                    <a href="index.php?act=detail-category&category_id=<?= $category['category_id'] ?>"
                                                        class="btn btn-color btn-sm fw-bold"
                                                        style="color: <?= ($category['category_id'] == ($_GET['category_id'] ?? null)) ? 'rgb(226, 36, 84)' : 'inherit' ?>;">
                                                        <?= $category['name'] ?>
                                                    </a>
                                                </div>
                                            </li>
                                        <?php endforeach ?>
                                    </ul>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-item category-rating">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo">
                                    Coupon
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse show"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body category-scroll">
                                    <ul class="category-list">
                                        <?php foreach ($coupons as $coupon): ?>
                                            <li>
                                                <div class="form-check ps-0 custome-form-check">
                                                    <!-- Thay btn-success bằng lớp tùy chỉnh btn-color -->
                                                    <input class="checkbox_animated check-it" type="button"
                                                        id="flexCheckDefault10">
                                                    <label class="form-check-label"
                                                        for="flexCheckDefault10"><?= $coupon['coupon_value'] ?>%</label>
                                                </div>
                                            </li>
                                        <?php endforeach ?>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Slider section start -->
                        <div class="most-popular">
                            <div class="title title-2 text-lg-start">
                                <h3>Most Popular</h3>
                            </div>

                            <div class="product-slider round-arrow1">
                                <div class="row g-3">
                                    <div class="col-12">
                                        <div class="product-image">
                                            <a href="javascript:void(0)">
                                                <img src="client/assets/images/fashion/product/front/1.jpg"
                                                    class="blur-up lazyload" alt="">
                                            </a>
                                            <div class="product-details">
                                                <h6 class="font-light">Regular Fit</h6>
                                                <a href="javascript:void(0)" class="">
                                                    <h3>Slim Fit Plastic Coat</h3>
                                                </a>
                                                <h4 class="font-light mt-1"><del>$49.00</del> <span
                                                        class="theme-color">$35.50</span>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Slider Section End -->
                    </div>
                </div>
            </div>

            <div class="col-lg-9 col-12 ratio_30">
                <div class="banner-deatils">
                    <div class="banner-image">
                        <img src="client/assets/images/fashion/banner.jpg" class="img-fluid bg-img blur-up lazyload"
                            alt="">
                        <div class="banner-content">
                            <div>
                                <h3><?= $categoryById['name'] ?></h3>
                                <p><?= $categoryById['description'] ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="banner-contain mt-3 mb-5">
                    </div>
                </div>

                <div class="row g-4">
                    <!-- filter button -->
                    <div class="filter-button">
                        <button class="btn filter-btn p-0"><i data-feather="align-left"></i> Filter</button>
                    </div>

                    <div class="filter-options">
                        <div class="grid-options d-sm-inline-block d-none">
                            <ul class="d-flex">
                                <li class="two-grid">
                                    <a href="javascript:void(0)">
                                        <img src="client/assets/svg/grid-2.svg" class="img-fluid blur-up lazyload"
                                            alt="">
                                    </a>
                                </li>
                                <li class="three-grid d-md-inline-block d-none">
                                    <a href="javascript:void(0)">
                                        <img src="client/assets/svg/grid-3.svg" class="img-fluid blur-up lazyload"
                                            alt="">
                                    </a>
                                </li>
                                <li class="grid-btn active d-lg-inline-block d-none">
                                    <a href="javascript:void(0)">
                                        <img src="client/assets/svg/grid.svg" class="img-fluid blur-up lazyload" alt="">
                                    </a>
                                </li>
                                <li class="list-btn">
                                    <a href="javascript:void(0)">
                                        <img src="client/assets/svg/list.svg" class="img-fluid blur-up lazyload" alt="">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- label and featured section -->

                <!-- Prodcut setion -->
                <div
                    class="row g-sm-4 g-3 row-cols-lg-4 row-cols-md-3 row-cols-2 mt-1 custom-gy-5 product-style-2 ratio_asos product-list-section">
                    <?php foreach ($productByCate as $product): ?>
                        <div>
                            <div class="product-box ">
                                <div class="img-wrapper border rounded-lg p-3">
                                    <div class="front">
                                        <a href="product-left-sidebar.html">
                                            <img src="./images/product/<?= $product['image'] ?>"
                                                class="bg-img blur-up lazyload" alt="">
                                        </a>
                                    </div>
                                    <div class="back">
                                        <a href="product-left-sidebar.html">
                                            <img src="./images/product/<?= $product['image'] ?>"
                                                class="bg-img blur-up lazyload" alt="">
                                        </a>
                                    </div>
                                    <div class="cart-wrap">
                                        <ul>
                                            <li>
                                                <a
                                                    href="index.php?act=detail-product&product_id=<?= $product['product_id'] ?>">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>
                                            <?php if (isset($_SESSION['user'])): ?>
                                                <li>
                                                    <a
                                                        href="index.php?act=add-favorite-product&product_id=<?= $product['product_id'] ?>">
                                                        <i data-feather="heart"
                                                            style="color: <?= ($product['favorite_user_id'] == $user['user_id']) ? 'red' : 'black'; ?>"></i>
                                                    </a>
                                                </li>
                                            <?php else: ?>
                                                <li>
                                                    <a href="index.php?act=add-favorite-product" class="wishlist">
                                                        <i data-feather="heart"></i>
                                                    </a>
                                                </li>
                                            <?php endif ?>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details">
                                    <div class="rating-details">
                                        <span class="font-light grid-content"><?= $product['category_name'] ?></span>
                                        <span class="font-light grid-content"><?= $product['brand_name'] ?></span>

                                    </div>
                                    <div class="main-price">
                                        <a href="product-left-sidebar.html" class="font-default">
                                            <h5 class="ms-0"><?= $product['name'] ?></h5>
                                        </a>
                                        <div class="listing-content">
                                            <span class="font-light">Regular Fit</span>
                                            <p class="font-light">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                                Sit, deserunt? Asperiores aliquam voluptatum culpa aliquid ab ducimus eaque
                                                illum, quibusdam reiciendis id ad consectetur quis, animi qui, minus quidem
                                                eveniet! Dolorum magnam numquam, asperiores accusantium architecto placeat
                                                quam officia, tempore repellendus.</p>
                                        </div>
                                        <h3 class="theme-color"><?= $product['price'] ?>.000đ</h3>
                                        <button onclick="location.href = 'cart.html';" class="btn listing-content">Add To
                                            Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>


                <nav class="page-section">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="javascript:void(0)" aria-label="Previous">
                                <span aria-hidden="true">
                                    <i class="fas fa-chevron-left"></i>
                                </span>
                            </a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="javascript:void(0)">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="javascript:void(0)">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="javascript:void(0)">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" aria-label="Next">
                                <span aria-hidden="true">
                                    <i class="fas fa-chevron-right"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- Shop Section end -->

<!-- Subscribe Section Start -->
<section class="subscribe-section section-b-space">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-6">
                <div class="subscribe-details">
                    <h2 class="mb-3">Subscribe Our News</h2>
                    <h6 class="font-light">Subscribe and receive our newsletters to follow the news about our fresh
                        and fantastic Products.</h6>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mt-md-0 mt-3">
                <div class="subsribe-input">
                    <div class="input-group">
                        <input type="text" class="form-control subscribe-input" placeholder="Your Email Address">
                        <button class="btn btn-solid-default" type="button">Button</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include '../views/client/layout/footer.php' ?>