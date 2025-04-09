<?php include '../views/client/layout/header.php' ?>
<!-- mobile fix menu start -->
    <div class="mobile-menu d-sm-none">
        <ul>
            <li>
                <a href="index.html">
                    <i data-feather="home"></i>
                    <span>Home</span>
                </a>
            </li>
            <li>
                <a href="javascript:void(0)" class="toggle-category">
                    <i data-feather="align-justify"></i>
                    <span>Category</span>
                </a>
            </li>
            <li>
                <a href="javascript:void(0)">
                    <i data-feather="shopping-bag"></i>
                    <span>Cart</span>
                </a>
            </li>
            <li>
                <a href="javascript:void(0)">
                    <i data-feather="heart"></i>
                    <span>Wishlist</span>
                </a>
            </li>
            <li>
                <a href="user-dashboard.html">
                    <i data-feather="user"></i>
                    <span>Account</span>
                </a>
            </li>
        </ul>
    </div>
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
                    <h3>Shop Listing</h3>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="index.html">
                                    <i class="fas fa-home"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Shop Fashion</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb section end -->

    <!-- Shop Section start -->
    <section class="section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12 ratio_30">
                    <div class="row gx-4 gy-5">
                        <div class="col-12">
                            <div class="filter-show-button mb-3">
                                <a href="javascript:void(0)" class="mobile-filter border-top-0">
                                    <i data-feather="align-left" class="img-fluid blur-up lazyloaded"></i>
                                    <h5>latest filter</h5>
                                </a>
                            </div>
                        </div>

                        <div class="col-12 m-0">
                            <div class="top-filter-section">
                                <ul>
                                    <li class="back-btn">
                                        <div class="mobile_back text-end">
                                            <span>Back</span>
                                            <i aria-hidden="true" class="fa fa-angle-right ps-2"></i>
                                        </div>
                                    </li>

                                    <li class="filter-title">
                                        <h6 class="theme-color">filter :</h6>
                                    </li>

                                    <li class="onclick-title">
                                        <h6>Category</h6>
                                        <ul class="onclick-content">
                                            <li>
                                                <div class="form-check ps-0 custome-form-check">
                                                    <input class="checkbox_animated check-it" type="checkbox"
                                                        id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">Art</label>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="form-check ps-0 custome-form-check">
                                                    <input class="checkbox_animated check-it" type="checkbox"
                                                        id="flexCheckDefault1">
                                                    <label class="form-check-label"
                                                        for="flexCheckDefault1">Bedroom</label>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="form-check ps-0 custome-form-check">
                                                    <input class="checkbox_animated check-it" type="checkbox"
                                                        id="flexCheckDefault2">
                                                    <label class="form-check-label"
                                                        for="flexCheckDefault2">Chair</label>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="form-check ps-0 custome-form-check">
                                                    <input class="checkbox_animated check-it" type="checkbox"
                                                        id="flexCheckDefault3">
                                                    <label class="form-check-label"
                                                        for="flexCheckDefault3">Creative</label>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="form-check ps-0 custome-form-check">
                                                    <input class="checkbox_animated check-it" type="checkbox"
                                                        id="flexCheckDefault4">
                                                    <label class="form-check-label"
                                                        for="flexCheckDefault4">Design</label>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="form-check ps-0 custome-form-check">
                                                    <input class="checkbox_animated check-it" type="checkbox"
                                                        id="flexCheckDefault5">
                                                    <label class="form-check-label"
                                                        for="flexCheckDefault5">Furniture</label>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="form-check ps-0 custome-form-check">
                                                    <input class="checkbox_animated check-it" type="checkbox"
                                                        id="flexCheckDefault6">
                                                    <label class="form-check-label"
                                                        for="flexCheckDefault6">Gardan</label>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="form-check ps-0 custome-form-check">
                                                    <input class="checkbox_animated check-it" type="checkbox"
                                                        id="flexCheckDefault7">
                                                    <label class="form-check-label" for="flexCheckDefault7">Home</label>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="form-check ps-0 custome-form-check">
                                                    <input class="checkbox_animated check-it" type="checkbox"
                                                        id="flexCheckDefault8">
                                                    <label class="form-check-label"
                                                        for="flexCheckDefault8">Inside</label>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="form-check ps-0 custome-form-check">
                                                    <input class="checkbox_animated check-it" type="checkbox"
                                                        id="flexCheckDefault9">
                                                    <label class="form-check-label"
                                                        for="flexCheckDefault9">Kitchen</label>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="form-check ps-0 custome-form-check">
                                                    <input class="checkbox_animated check-it" type="checkbox"
                                                        id="flexCheckDefault10">
                                                    <label class="form-check-label" for="flexCheckDefault10">Living
                                                        Room</label>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="form-check ps-0 custome-form-check">
                                                    <input class="checkbox_animated check-it" type="checkbox"
                                                        id="flexCheckDefault11">
                                                    <label class="form-check-label"
                                                        for="flexCheckDefault11">Style</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="onclick-title">
                                        <h6>Material</h6>
                                        <ul class="onclick-content">
                                            <li>
                                                <div class="form-check ps-0 custome-form-check">
                                                    <input class="checkbox_animated check-it" type="checkbox"
                                                        id="flexCheckDefault12">
                                                    <label class="form-check-label"
                                                        for="flexCheckDefault12">Plastic</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check ps-0 custome-form-check">
                                                    <input class="checkbox_animated check-it" type="checkbox"
                                                        id="flexCheckDefault13">
                                                    <label class="form-check-label"
                                                        for="flexCheckDefault13">Wood</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check ps-0 custome-form-check">
                                                    <input class="checkbox_animated check-it" type="checkbox"
                                                        id="flexCheckDefault14">
                                                    <label class="form-check-label"
                                                        for="flexCheckDefault14">Metal</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check ps-0 custome-form-check">
                                                    <input class="checkbox_animated check-it" type="checkbox"
                                                        id="flexCheckDefault15">
                                                    <label class="form-check-label"
                                                        for="flexCheckDefault15">Glass</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check ps-0 custome-form-check">
                                                    <input class="checkbox_animated check-it" type="checkbox"
                                                        id="flexCheckDefault16">
                                                    <label class="form-check-label"
                                                        for="flexCheckDefault16">Texttile</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check ps-0 custome-form-check">
                                                    <input class="checkbox_animated check-it" type="checkbox"
                                                        id="flexCheckDefault17">
                                                    <label class="form-check-label"
                                                        for="flexCheckDefault17">Steel</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check ps-0 custome-form-check">
                                                    <input class="checkbox_animated check-it" type="checkbox"
                                                        id="flexCheckDefault18">
                                                    <label class="form-check-label"
                                                        for="flexCheckDefault18">Plywood</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="onclick-title">
                                        <h6>Price</h6>
                                        <ul class="onclick-content">
                                            <li>
                                                <div class="form-check ps-0 custome-form-check">
                                                    <input class="checkbox_animated check-it" type="checkbox"
                                                        id="flexCheckDefault19">
                                                    <label class="form-check-label" for="flexCheckDefault19">Rs. 120 to
                                                        Rs. 300</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check ps-0 custome-form-check">
                                                    <input class="checkbox_animated check-it" type="checkbox"
                                                        id="flexCheckDefault20">
                                                    <label class="form-check-label" for="flexCheckDefault20">Rs. 300 to
                                                        Rs. 425</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check ps-0 custome-form-check">
                                                    <input class="checkbox_animated check-it" type="checkbox"
                                                        id="flexCheckDefault21">
                                                    <label class="form-check-label" for="flexCheckDefault21">Rs. 425 to
                                                        Rs. 540</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check ps-0 custome-form-check">
                                                    <input class="checkbox_animated check-it" type="checkbox"
                                                        id="flexCheckDefault22">
                                                    <label class="form-check-label" for="flexCheckDefault22">Rs. 540 to
                                                        Rs. 600</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check ps-0 custome-form-check">
                                                    <input class="checkbox_animated check-it" type="checkbox"
                                                        id="flexCheckDefault23">
                                                    <label class="form-check-label" for="flexCheckDefault23">Rs. 600 to
                                                        Rs. 760</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check ps-0 custome-form-check">
                                                    <input class="checkbox_animated check-it" type="checkbox"
                                                        id="flexCheckDefault24">
                                                    <label class="form-check-label" for="flexCheckDefault24">Rs. 760 to
                                                        Rs. 850</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="onclick-title">
                                        <h6>Discount</h6>
                                        <ul class="onclick-content">
                                            <li>
                                                <div class="form-check ps-0 custome-form-check">
                                                    <input class="checkbox_animated check-it" type="checkbox"
                                                        id="flexCheckDefault25">
                                                    <label class="form-check-label" for="flexCheckDefault25">10% and
                                                        above</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check ps-0 custome-form-check">
                                                    <input class="checkbox_animated check-it" type="checkbox"
                                                        id="flexCheckDefault26">
                                                    <label class="form-check-label" for="flexCheckDefault26">20% and
                                                        above</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check ps-0 custome-form-check">
                                                    <input class="checkbox_animated check-it" type="checkbox"
                                                        id="flexCheckDefault27">
                                                    <label class="form-check-label" for="flexCheckDefault27">30% and
                                                        above</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check ps-0 custome-form-check">
                                                    <input class="checkbox_animated check-it" type="checkbox"
                                                        id="flexCheckDefault28">
                                                    <label class="form-check-label" for="flexCheckDefault28">40% and
                                                        above</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check ps-0 custome-form-check">
                                                    <input class="checkbox_animated check-it" type="checkbox"
                                                        id="flexCheckDefault29">
                                                    <label class="form-check-label" for="flexCheckDefault29">50% and
                                                        above</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check ps-0 custome-form-check">
                                                    <input class="checkbox_animated check-it" type="checkbox"
                                                        id="flexCheckDefault30">
                                                    <label class="form-check-label" for="flexCheckDefault30">60% and
                                                        above</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check ps-0 custome-form-check">
                                                    <input class="checkbox_animated check-it" type="checkbox"
                                                        id="flexCheckDefault31">
                                                    <label class="form-check-label" for="flexCheckDefault31">70% and
                                                        above</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check ps-0 custome-form-check">
                                                    <input class="checkbox_animated check-it" type="checkbox"
                                                        id="flexCheckDefault32">
                                                    <label class="form-check-label" for="flexCheckDefault32">80% and
                                                        above</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="onclick-title">
                                        <h6>Default Sorting</h6>
                                        <ul class="onclick-content">
                                            <li class="dropdown-list">
                                                <div class="form-check ps-0 custome-form-check">
                                                    <input class="checkbox_animated check-it" type="checkbox"
                                                        id="flexCheckDefault33">
                                                    <label class="form-check-label" for="flexCheckDefault33">Sort By
                                                        Popularity</label>
                                                </div>
                                            </li>
                                            <li class="dropdown-list">
                                                <div class="form-check ps-0 custome-form-check">
                                                    <input class="checkbox_animated check-it" type="checkbox"
                                                        id="flexCheckDefault34">
                                                    <label class="form-check-label" for="flexCheckDefault34">Sort by
                                                        average
                                                        rating</label>
                                                </div>
                                            </li>
                                            <li class="dropdown-list">
                                                <div class="form-check ps-0 custome-form-check">
                                                    <input class="checkbox_animated check-it" type="checkbox"
                                                        id="flexCheckDefault35">
                                                    <label class="form-check-label" for="flexCheckDefault35">Sort by
                                                        latest</label>
                                                </div>
                                            </li>
                                            <li class="dropdown-list">
                                                <div class="form-check ps-0 custome-form-check">
                                                    <input class="checkbox_animated check-it" type="checkbox"
                                                        id="flexCheckDefault36">
                                                    <label class="form-check-label" for="flexCheckDefault36">Sort by
                                                        price:
                                                        low to high</label>
                                                </div>
                                            </li>
                                            <li class="dropdown-list">
                                                <div class="form-check ps-0 custome-form-check">
                                                    <input class="checkbox_animated check-it" type="checkbox"
                                                        id="flexCheckDefault37">
                                                    <label class="form-check-label" for="flexCheckDefault37">Sort by
                                                        price:
                                                        high to low</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row g-4">
                        <h3>25 Results Found</h3>

                        <!-- label and featured section -->
                        <div class="col-12">
                            <ul class="short-name">
                                <li>
                                    <div class="label-tag">
                                        <span>Shirts</span>
                                        <button type="button" class="btn-close" aria-label="Close"></button>
                                    </div>
                                </li>
                                <li>
                                    <div class="label-tag">
                                        <span>Kurtas</span>
                                        <button type="button" class="btn-close" aria-label="Close"></button>
                                    </div>
                                </li>
                                <li>
                                    <div class="label-tag">
                                        <span>Jackets</span>
                                        <button type="button" class="btn-close" aria-label="Close"></button>
                                    </div>
                                </li>
                                <li>
                                    <div class="label-tag">
                                        <span>Blazers</span>
                                        <button type="button" class="btn-close" aria-label="Close"></button>
                                    </div>
                                </li>
                                <li>
                                    <div class="label-tag">
                                        <a href="javascript:void(0)"><span>Clear All</span></a>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="col-12">
                            <div class="filter-options">
                                <div class="select-options">
                                    <div class="page-view-filter">
                                        <div class="dropdown select-featured">
                                            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                24 Page per view
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <li>
                                                    <a class="dropdown-item" href="javascript:void(0)">Alphabetically
                                                        A-Z</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="javascript:void(0)">Alphabetically
                                                        Z-A</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="javascript:void(0)">Price, High To
                                                        Low</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="javascript:void(0)">Price, Low To
                                                        High</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="javascript:void(0)">Date, Old To
                                                        New</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="javascript:void(0)">Date, New To
                                                        Old</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="dropdown select-featured">
                                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            Select Featured
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                            <li>
                                                <a class="dropdown-item" href="javascript:void(0)">Jeans</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:void(0)">T-Shirt</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:void(0)">Shirt</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:void(0)">Jacket</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="javascript:void(0)">Hoodie</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
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
                                        <li class="grid-btn d-lg-inline-block d-none">
                                            <a href="javascript:void(0)">
                                                <img src="client/assets/svg/grid.svg" class="img-fluid blur-up lazyload"
                                                    alt="">
                                            </a>
                                        </li>
                                        <li class="five-grid active d-xl-inline-block d-none">
                                            <a href="javascript:void(0)">
                                                <img src="client/assets/svg/grid-5.svg" class="img-fluid blur-up lazyload"
                                                    alt="">
                                            </a>
                                        </li>
                                        <li class="list-btn">
                                            <a href="javascript:void(0)">
                                                <img src="client/assets/svg/list.svg" class="img-fluid blur-up lazyload"
                                                    alt="">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- label and featured section -->

                    <!-- Prodcut setion -->
                    <div
                        class="row g-sm-4 g-3 row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-2 gx-sm-4 gx-3 mt-1 custom-gy-5 product-style-2 ratio_asos product-list-section">
                        <div>
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <div class="front">
                                        <a href="product-left-sidebar.html">
                                            <img src="client/assets/images/fashion/product/front/1.jpg"
                                                class="bg-img blur-up lazyload" alt="">
                                        </a>
                                    </div>
                                    <div class="back">
                                        <a href="product-left-sidebar.html">
                                            <img src="client/assets/images/fashion/product/back/1.jpg"
                                                class="bg-img blur-up lazyload" alt="">
                                        </a>
                                    </div>
                                    <div class="cart-wrap">
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                    <i data-feather="shopping-bag"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="wishlist.html" class="wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details">
                                    <div class="rating-details">
                                        <span class="font-light grid-content">B&Y Jacket</span>
                                        <ul class="rating mt-0">
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
                                            <li>
                                                <i class="fas fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="main-price">
                                        <a href="product-left-sidebar.html" class="font-default">
                                            <h5 class="ms-0">Slim Fit Plastic Coat</h5>
                                        </a>
                                        <div class="listing-content">
                                            <span class="font-light">Regular Fit</span>
                                            <p class="font-light">Lorem ipsum, dolor sit amet consectetur adipisicing
                                                elit. Sit, deserunt? Asperiores aliquam voluptatum culpa aliquid ab
                                                ducimus eaque illum, quibusdam reiciendis id ad consectetur quis, animi
                                                qui, minus quidem eveniet! Dolorum magnam numquam, asperiores
                                                accusantium architecto placeat quam officia, tempore repellendus.</p>
                                        </div>
                                        <h3 class="theme-color">$78.00</h3>
                                        <button onclick="location.href = 'cart.html';" class="btn listing-content">Add
                                            To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <div class="front">
                                        <a href="product-left-sidebar.html">
                                            <img src="client/assets/images/fashion/product/front/2.jpg"
                                                class="bg-img blur-up lazyload" alt="">
                                        </a>
                                    </div>
                                    <div class="back">
                                        <a href="product-left-sidebar.html">
                                            <img src="client/assets/images/fashion/product/back/2.jpg"
                                                class="bg-img blur-up lazyload" alt="">
                                        </a>
                                    </div>
                                    <div class="cart-wrap">
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                    <i data-feather="shopping-bag"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="wishlist.html" class="wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details">
                                    <div class="rating-details">
                                        <span class="font-light grid-content">Jacket</span>
                                        <ul class="rating mt-0">
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
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="main-price">
                                        <a href="product-left-sidebar.html" class="font-default">
                                            <h5 class="ms-0">Blue Leather Jacket</h5>
                                        </a>
                                        <div class="listing-content">
                                            <span class="font-light">Jacket</span>
                                            <p class="font-light">Lorem ipsum, dolor sit amet consectetur adipisicing
                                                elit. Sit, deserunt? Asperiores aliquam voluptatum culpa aliquid ab
                                                ducimus eaque illum, quibusdam reiciendis id ad consectetur quis, animi
                                                qui, minus quidem eveniet! Dolorum magnam numquam, asperiores
                                                accusantium architecto placeat quam officia, tempore repellendus.</p>
                                        </div>
                                        <h3 class="theme-color">$60.00</h3>
                                        <button onclick="location.href = 'cart.html';" class="btn listing-content">Add
                                            To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <div class="front">
                                        <a href="product-left-sidebar.html">
                                            <img src="client/assets/images/fashion/product/front/3.jpg"
                                                class="bg-img blur-up lazyload" alt="">
                                        </a>
                                    </div>
                                    <div class="back">
                                        <a href="product-left-sidebar.html">
                                            <img src="client/assets/images/fashion/product/back/3.jpg"
                                                class="bg-img blur-up lazyload" alt="">
                                        </a>
                                    </div>
                                    <div class="cart-wrap">
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                    <i data-feather="shopping-bag"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="wishlist.html" class="wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details">
                                    <div class="rating-details">
                                        <span class="font-light grid-content">Coat</span>
                                        <ul class="rating mt-0">
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
                                            <li>
                                                <i class="fas fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="main-price">
                                        <a href="product-left-sidebar.html" class="font-default">
                                            <h5 class="ms-0">Military Ball Night Dress</h5>
                                        </a>
                                        <div class="listing-content">
                                            <span class="font-light">Coat</span>
                                            <p class="font-light">Lorem ipsum, dolor sit amet consectetur adipisicing
                                                elit. Sit, deserunt? Asperiores aliquam voluptatum culpa aliquid ab
                                                ducimus eaque illum, quibusdam reiciendis id ad consectetur quis, animi
                                                qui, minus quidem eveniet! Dolorum magnam numquam, asperiores
                                                accusantium architecto placeat quam officia, tempore repellendus.</p>
                                        </div>
                                        <h3 class="theme-color">$85.00</h3>
                                        <button onclick="location.href = 'cart.html';" class="btn listing-content">Add
                                            To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <div class="front">
                                        <a href="product-left-sidebar.html">
                                            <img src="client/assets/images/fashion/product/front/4.jpg"
                                                class="bg-img blur-up lazyload" alt="">
                                        </a>
                                    </div>
                                    <div class="back">
                                        <a href="product-left-sidebar.html">
                                            <img src="client/assets/images/fashion/product/back/4.jpg"
                                                class="bg-img blur-up lazyload" alt="">
                                        </a>
                                    </div>
                                    <div class="cart-wrap">
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                    <i data-feather="shopping-bag"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="wishlist.html" class="wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details">
                                    <div class="rating-details">
                                        <span class="font-light grid-content">Jacket</span>
                                        <ul class="rating mt-0">
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
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="main-price">
                                        <a href="product-left-sidebar.html" class="font-default">
                                            <h5 class="ms-0">Slim Fit Plastic Coat</h5>
                                        </a>
                                        <div class="listing-content">
                                            <span class="font-light">Jacket</span>
                                            <p class="font-light">Lorem ipsum, dolor sit amet consectetur adipisicing
                                                elit. Sit, deserunt? Asperiores aliquam voluptatum culpa aliquid ab
                                                ducimus eaque illum, quibusdam reiciendis id ad consectetur quis, animi
                                                qui, minus quidem eveniet! Dolorum magnam numquam, asperiores
                                                accusantium architecto placeat quam officia, tempore repellendus.</p>
                                        </div>
                                        <h3 class="theme-color">$69.00</h3>
                                        <button onclick="location.href = 'cart.html';" class="btn listing-content">Add
                                            To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <div class="front">
                                        <a href="product-left-sidebar.html">
                                            <img src="client/assets/images/fashion/product/front/5.jpg"
                                                class="bg-img blur-up lazyload" alt="">
                                        </a>
                                    </div>
                                    <div class="back">
                                        <a href="product-left-sidebar.html">
                                            <img src="client/assets/images/fashion/product/back/5.jpg"
                                                class="bg-img blur-up lazyload" alt="">
                                        </a>
                                    </div>
                                    <div class="cart-wrap">
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                    <i data-feather="shopping-bag"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="wishlist.html" class="wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details">
                                    <div class="rating-details">
                                        <span class="font-light grid-content">Full Jacket</span>
                                        <ul class="rating mt-0">
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
                                            <li>
                                                <i class="fas fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="main-price">
                                        <a href="product-left-sidebar.html" class="font-default">
                                            <h5 class="ms-0">Full Jacket Ladies</h5>
                                        </a>
                                        <div class="listing-content">
                                            <span class="font-light">Full Jacket</span>
                                            <p class="font-light">Lorem ipsum, dolor sit amet consectetur adipisicing
                                                elit. Sit, deserunt? Asperiores aliquam voluptatum culpa aliquid ab
                                                ducimus eaque illum, quibusdam reiciendis id ad consectetur quis, animi
                                                qui, minus quidem eveniet! Dolorum magnam numquam, asperiores
                                                accusantium architecto placeat quam officia, tempore repellendus.</p>
                                        </div>
                                        <h3 class="theme-color">$40.00</h3>
                                        <button onclick="location.href = 'cart.html';" class="btn listing-content">Add
                                            To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <div class="front">
                                        <a href="product-left-sidebar.html">
                                            <img src="client/assets/images/fashion/product/front/6.jpg"
                                                class="bg-img blur-up lazyload" alt="">
                                        </a>
                                    </div>
                                    <div class="back">
                                        <a href="product-left-sidebar.html">
                                            <img src="client/assets/images/fashion/product/back/6.jpg"
                                                class="bg-img blur-up lazyload" alt="">
                                        </a>
                                    </div>
                                    <div class="cart-wrap">
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                    <i data-feather="shopping-bag"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="wishlist.html" class="wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details">
                                    <div class="rating-details">
                                        <span class="font-light grid-content">T-Shirt</span>
                                        <ul class="rating mt-0">
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
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="main-price">
                                        <a href="product-left-sidebar.html" class="font-default">
                                            <h5 class="ms-0">Full Slive Black T-Shirt</h5>
                                        </a>
                                        <div class="listing-content">
                                            <span class="font-light">T-Shirt</span>
                                            <p class="font-light">Lorem ipsum, dolor sit amet consectetur adipisicing
                                                elit. Sit, deserunt? Asperiores aliquam voluptatum culpa aliquid ab
                                                ducimus eaque illum, quibusdam reiciendis id ad consectetur quis, animi
                                                qui, minus quidem eveniet! Dolorum magnam numquam, asperiores
                                                accusantium architecto placeat quam officia, tempore repellendus.</p>
                                        </div>
                                        <h3 class="theme-color">$69.00</h3>
                                        <button onclick="location.href = 'cart.html';" class="btn listing-content">Add
                                            To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <div class="front">
                                        <a href="product-left-sidebar.html">
                                            <img src="client/assets/images/fashion/product/front/7.jpg"
                                                class="bg-img blur-up lazyload" alt="">
                                        </a>
                                    </div>
                                    <div class="back">
                                        <a href="product-left-sidebar.html">
                                            <img src="client/assets/images/fashion/product/back/7.jpg"
                                                class="bg-img blur-up lazyload" alt="">
                                        </a>
                                    </div>
                                    <div class="cart-wrap">
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                    <i data-feather="shopping-bag"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="wishlist.html" class="wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details">
                                    <div class="rating-details">
                                        <span class="font-light grid-content">Fashion</span>
                                        <ul class="rating mt-0">
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
                                            <li>
                                                <i class="fas fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="main-price">
                                        <a href="product-left-sidebar.html" class="font-default">
                                            <h5 class="ms-0">Latest Fashion Cloth</h5>
                                        </a>
                                        <div class="listing-content">
                                            <span class="font-light">Fashion</span>
                                            <p class="font-light">Lorem ipsum, dolor sit amet consectetur adipisicing
                                                elit.
                                                Sit, deserunt?
                                                Asperiores aliquam voluptatum culpa aliquid ab ducimus eaque illum,
                                                quibusdam reiciendis id ad consectetur quis, animi qui, minus quidem
                                                eveniet! Dolorum magnam numquam, asperiores accusantium architecto
                                                placeat
                                                quam officia, tempore repellendus.</p>
                                        </div>
                                        <h3 class="theme-color">$54.00</h3>
                                        <button onclick="location.href = 'cart.html';" class="btn listing-content">Add
                                            To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <div class="front">
                                        <a href="product-left-sidebar.html">
                                            <img src="client/assets/images/fashion/product/front/8.jpg"
                                                class="bg-img blur-up lazyload" alt="">
                                        </a>
                                    </div>
                                    <div class="back">
                                        <a href="product-left-sidebar.html">
                                            <img src="client/assets/images/fashion/product/back/8.jpg"
                                                class="bg-img blur-up lazyload" alt="">
                                        </a>
                                    </div>
                                    <div class="cart-wrap">
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                    <i data-feather="shopping-bag"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="wishlist.html" class="wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details">
                                    <div class="rating-details">
                                        <span class="font-light grid-content">Jacket</span>
                                        <ul class="rating mt-0">
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
                                    </div>
                                    <div class="main-price">
                                        <a href="product-left-sidebar.html" class="font-default">
                                            <h5 class="ms-0">Full Black Slive Jacket</h5>
                                        </a>
                                        <div class="listing-content">
                                            <span class="font-light">Jacket</span>
                                            <p class="font-light">Lorem ipsum, dolor sit amet consectetur adipisicing
                                                elit. Sit, deserunt? Asperiores aliquam voluptatum culpa aliquid ab
                                                ducimus eaque illum, quibusdam reiciendis id ad consectetur quis, animi
                                                qui, minus quidem eveniet! Dolorum magnam numquam, asperiores
                                                accusantium architecto placeat quam officia, tempore repellendus.</p>
                                        </div>
                                        <h3 class="theme-color">$99.00</h3>
                                        <button onclick="location.href = 'cart.html';" class="btn listing-content">Add
                                            To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <div class="front">
                                        <a href="product-left-sidebar.html">
                                            <img src="client/assets/images/fashion/product/front/1.jpg"
                                                class="bg-img blur-up lazyload" alt="">
                                        </a>
                                    </div>
                                    <div class="back">
                                        <a href="product-left-sidebar.html">
                                            <img src="client/assets/images/fashion/product/back/1.jpg"
                                                class="bg-img blur-up lazyload" alt="">
                                        </a>
                                    </div>
                                    <div class="cart-wrap">
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                    <i data-feather="shopping-bag"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="wishlist.html" class="wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details">
                                    <div class="rating-details">
                                        <span class="font-light grid-content">B&Y Jacket</span>
                                        <ul class="rating mt-0">
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
                                            <li>
                                                <i class="fas fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="main-price">
                                        <a href="product-left-sidebar.html" class="font-default">
                                            <h5 class="ms-0">Slim Fit Plastic Coat</h5>
                                        </a>
                                        <div class="listing-content">
                                            <span class="font-light">Regular Fit</span>
                                            <p class="font-light">Lorem ipsum, dolor sit amet consectetur adipisicing
                                                elit. Sit, deserunt? Asperiores aliquam voluptatum culpa aliquid ab
                                                ducimus eaque illum, quibusdam reiciendis id ad consectetur quis, animi
                                                qui, minus quidem eveniet! Dolorum magnam numquam, asperiores
                                                accusantium architecto placeat quam officia, tempore repellendus.</p>
                                        </div>
                                        <h3 class="theme-color">$78.00</h3>
                                        <button onclick="location.href = 'cart.html';" class="btn listing-content">Add
                                            To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <div class="front">
                                        <a href="product-left-sidebar.html">
                                            <img src="client/assets/images/fashion/product/front/2.jpg"
                                                class="bg-img blur-up lazyload" alt="">
                                        </a>
                                    </div>
                                    <div class="back">
                                        <a href="product-left-sidebar.html">
                                            <img src="client/assets/images/fashion/product/back/2.jpg"
                                                class="bg-img blur-up lazyload" alt="">
                                        </a>
                                    </div>
                                    <div class="cart-wrap">
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                    <i data-feather="shopping-bag"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="wishlist.html" class="wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details">
                                    <div class="rating-details">
                                        <span class="font-light grid-content">Jacket</span>
                                        <ul class="rating mt-0">
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
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="main-price">
                                        <a href="product-left-sidebar.html" class="font-default">
                                            <h5 class="ms-0">Blue Leather Jacket</h5>
                                        </a>
                                        <div class="listing-content">
                                            <span class="font-light">Jacket</span>
                                            <p class="font-light">Lorem ipsum, dolor sit amet consectetur adipisicing
                                                elit. Sit, deserunt? Asperiores aliquam voluptatum culpa aliquid ab
                                                ducimus eaque illum, quibusdam reiciendis id ad consectetur quis, animi
                                                qui, minus quidem eveniet! Dolorum magnam numquam, asperiores
                                                accusantium architecto placeat quam officia, tempore repellendus.</p>
                                        </div>
                                        <h3 class="theme-color">$60.00</h3>
                                        <button onclick="location.href = 'cart.html';" class="btn listing-content">Add
                                            To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <div class="front">
                                        <a href="product-left-sidebar.html">
                                            <img src="client/assets/images/fashion/product/front/3.jpg"
                                                class="bg-img blur-up lazyload" alt="">
                                        </a>
                                    </div>
                                    <div class="back">
                                        <a href="product-left-sidebar.html">
                                            <img src="client/assets/images/fashion/product/back/3.jpg"
                                                class="bg-img blur-up lazyload" alt="">
                                        </a>
                                    </div>
                                    <div class="cart-wrap">
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                    <i data-feather="shopping-bag"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="wishlist.html" class="wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details">
                                    <div class="rating-details">
                                        <span class="font-light grid-content">Coat</span>
                                        <ul class="rating mt-0">
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
                                            <li>
                                                <i class="fas fa-star"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="main-price">
                                        <a href="product-left-sidebar.html" class="font-default">
                                            <h5 class="ms-0">Military Ball Night Dress</h5>
                                        </a>
                                        <div class="listing-content">
                                            <span class="font-light">Coat</span>
                                            <p class="font-light">Lorem ipsum, dolor sit amet consectetur adipisicing
                                                elit. Sit, deserunt? Asperiores aliquam voluptatum culpa aliquid ab
                                                ducimus eaque illum, quibusdam reiciendis id ad consectetur quis, animi
                                                qui, minus quidem eveniet! Dolorum magnam numquam, asperiores
                                                accusantium architecto placeat quam officia, tempore repellendus.</p>
                                        </div>
                                        <h3 class="theme-color">$85.00</h3>
                                        <button onclick="location.href = 'cart.html';" class="btn listing-content">Add
                                            To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box">
                                <div class="img-wrapper">
                                    <div class="front">
                                        <a href="product-left-sidebar.html">
                                            <img src="client/assets/images/fashion/product/front/4.jpg"
                                                class="bg-img blur-up lazyload" alt="">
                                        </a>
                                    </div>
                                    <div class="back">
                                        <a href="product-left-sidebar.html">
                                            <img src="client/assets/images/fashion/product/back/4.jpg"
                                                class="bg-img blur-up lazyload" alt="">
                                        </a>
                                    </div>
                                    <div class="cart-wrap">
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                    <i data-feather="shopping-bag"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="wishlist.html" class="wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details">
                                    <div class="rating-details">
                                        <span class="font-light grid-content">Jacket</span>
                                        <ul class="rating mt-0">
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
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="main-price">
                                        <a href="product-left-sidebar.html" class="font-default">
                                            <h5 class="ms-0">Slim Fit Plastic Coat</h5>
                                        </a>
                                        <div class="listing-content">
                                            <span class="font-light">Jacket</span>
                                            <p class="font-light">Lorem ipsum, dolor sit amet consectetur adipisicing
                                                elit. Sit, deserunt? Asperiores aliquam voluptatum culpa aliquid ab
                                                ducimus eaque illum, quibusdam reiciendis id ad consectetur quis, animi
                                                qui, minus quidem eveniet! Dolorum magnam numquam, asperiores
                                                accusantium architecto placeat quam officia, tempore repellendus.</p>
                                        </div>
                                        <h3 class="theme-color">$69.00</h3>
                                        <button onclick="location.href = 'cart.html';" class="btn listing-content">Add
                                            To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Prodcut setion -->
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
    <!-- Subscribe Section End -->

    <!-- footer start -->
    <?php include '../views/client/layout/footer.php' ?>