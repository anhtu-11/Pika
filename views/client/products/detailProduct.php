<?php include '../views/client/layout/header.php' ?>

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
                <h3>Shop đồ điện</h3>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb section end -->

<!-- Shop Section start -->
<section>
    <div class="container">
        <div class="row gx-4 gy-5">
            <div class="col-lg-3 col-md-4 mt-lg-5 mt-0">
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
                                                        class="btn btn-color btn-sm fw-bold"
                                                        style="color: <?= ($brand['brand_id'] == ($detailProduct['brand_id'] ?? null)) ? 'rgb(226, 36, 84)' : 'inherit' ?>;">
                                                        <?= $brand['name'] ?>
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
                                                        style="color: <?= ($category['category_id'] == ($detailProduct['category_id'] ?? null)) ? 'rgb(226, 36, 84)' : 'inherit' ?>;">
                                                        <?= $category['name'] ?>
                                                    </a>
                                                </div>
                                            </li>
                                        <?php endforeach ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-9 col-12">
                <!-- filter button -->
                <div class="filter-button mb-3">
                    <button class="danger-button danger-center btn btn-sm filter-btn"><i data-feather="align-left"></i>
                        Filter</button>
                </div>
                <!-- filter button -->
                <div class="details-items">
                    <div class="row g-4">
                        <div class="col-lg-5 col-md-6">
                            <div class="degree-section">
                                <div class="details-image ratio_asos">
                                    <div>
                                        <div class="product-image-tag">
                                            <img src="./images/product/<?= $detailProduct['product_image'] ?>"
                                                id="zoom_01" data-zoom-image="client/assets/images/fashion/1.jpg"
                                                class="img-fluid w-100 image_zoom_cls-0 blur-up lazyload" alt="">
                                            <div class="label-tag">
                                                <h6><i class="fas fa-star"></i> 4.8 <span class="font-light">120</span>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="details-image-option black-slide mt-4 rounded">
                                    <?php foreach ($detailGallery as $gallery): ?>
                                        <div>
                                            <img src="./images/gallery/<?= $gallery['gallery_image'] ?>"
                                                class="img-fluid blur-up lazyload" alt="">
                                        </div>
                                    <?php endforeach ?>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-7 col-md-6">
                            <div class="cloth-details-size">
                                <div class="product-count">
                                    <ul>
                                        <li>
                                            <img src="client/assets/images/gif/fire.gif"
                                                class="img-fluid blur-up lazyload" alt="image">
                                            <span class="p-counter">37</span>
                                            <span class="lang">orders in last 24 hours</span>
                                        </li>
                                        <li>
                                            <img src="client/assets/images/gif/person.gif" class="img-fluid user_img"
                                                alt="image">
                                            <span class="p-counter">44</span>
                                            <span class="lang">active view this</span>
                                        </li>
                                    </ul>
                                </div>
                                <form action="?act=addToCart-byNow&product_id=<?= $detailProduct['product_id'] ?>"
                                    method="POST">
                                    <div class="details-image-concept">
                                        <h2><?= $detailProduct['product_name'] ?></h2>
                                    </div>

                                    <div class="label-section">
                                        <span class="badge badge-grey-color"><?= $detailProduct['brand_name'] ?></span>
                                        <span class="label-text"><?= $detailProduct['category_name'] ?></span>
                                    </div>

                                    <h3 class="price-detail"><?= $detailProduct['product_sale_price'] ?>.000 Vnd
                                        <del><?= $detailProduct['product_price'] ?>.000 Vnd</del><span>55% off</span>
                                    </h3>


                                    <div class="color-image">
                                        <div class="image-select">
                                            <h5 class="product-title product-title-2 d-block">Color :</h5>
                                            <ul class="image-section" style="list-style: none; padding: 0;">
                                                <?php foreach ($detailVariant as $variant): ?>
                                                    <li style="display: inline-block; margin-right: 10px;">
                                                        <input type="hidden" name="variant_id" id="variant_id"
                                                            value="<?= $variant['variant_id']; ?>">
                                                        <span
                                                            style="display: inline-block; width: 45px; height: 45px; background-color: <?= $variant['variant_color_code']; ?>; border-radius: 10%; border: 1px solid #000;">
                                                        </span>
                                                        <input type="radio" name="variant_color"
                                                            value="<?= $variant['variant_color_id']; ?>"
                                                            style="display:none;">
                                                    </li>
                                                <?php endforeach; ?>
                                            </ul>
                                        </div>
                                    </div>

                                    <div id="selectSize" class="addeffect-section product-description border-product">
                                        <h6 class="product-title product-title-2 d-block">Quantity</h6>
                                        <div class="qty-box">
                                            <div class="input-group">
                                                <span class="input-group-prepend">
                                                    <button type="button" class="btn quantity-left-minus"
                                                        data-type="minus" data-field="">
                                                        <i class="fas fa-minus"></i>
                                                    </button>
                                                </span>
                                                <input type="number" name="quantity" class="form-control input-number"
                                                    value="1" min="1">
                                                <span class="input-group-prepend">
                                                    <button type="button" class="btn quantity-right-plus"
                                                        data-type="plus" data-field="">
                                                        <i class="fas fa-plus"></i>
                                                    </button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <input type="hidden" name="product_id" value="<?= $detailProduct['product_id']; ?>">


                                    <div class="product-buttons">
                                        <a href="wishlist.html" class="btn btn-solid">
                                            <i class="fa fa-bookmark fz-16 me-2"></i>
                                            <span>Wishlist</span>
                                        </a>
                                        <button type="submit" name="add_to_cart"
                                            class="btn btn-solid hover-solid btn-animation">
                                            <i class="fa fa-shopping-cart"></i>
                                            <span>Add To Cart</span>
                                        </button>
                                    </div>
                                </form>


                                <ul class="product-count shipping-order">
                                    <li>
                                        <img src="client/assets/images/gif/truck.png" class="img-fluid blur-up lazyload"
                                            alt="image">
                                        <span class="lang">Free shipping for orders above $500 USD</span>
                                    </li>
                                </ul>

                                <div class="mt-2 mt-md-3 border-product">
                                    <h6 class="product-title hurry-title d-block">Hurry Up! Left <span>10</span>
                                        in
                                        stock</h6>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 78%"></div>
                                    </div>
                                </div>

                                <div class="border-product">
                                    <h6 class="product-title d-block">share it</h6>
                                    <div class="product-icon">
                                        <ul class="product-social">
                                            <li>
                                                <a href="https://www.facebook.com/">
                                                    <i class="fab fa-facebook-f"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://www.google.com/">
                                                    <i class="fab fa-google-plus-g"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://twitter.com/">
                                                    <i class="fab fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://www.instagram.com/">
                                                    <i class="fab fa-instagram"></i>
                                                </a>
                                            </li>
                                            <li class="pe-0">
                                                <a href="https://www.google.com/">
                                                    <i class="fas fa-rss"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-12">
                <div class="cloth-review">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                data-bs-target="#desc" type="button">Description</button>
                            <button class="nav-link " id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#speci"
                                type="button">Specifications</button>
                            <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#review"
                                type="button">Review</button>
                        </div>
                    </nav>

                    <div class="tab-content" id="nav-tabContent">


                        <!-- Description -->
                        <div class="tab-pane fade show active" id="desc">
                            <div class="shipping-chart">
                                <div class="part">
                                    <h4 class="inner-title mb-2">Give you a complete account of the system</h4>
                                    <p class="font-light">Nor again is there anyone who loves or pursues or
                                        desires
                                        to
                                        obtain pain of itself, because it is pain, but because occasionally
                                        circumstances occur in which toil and pain can procure him some great
                                        pleasure.
                                        To take a trivial example, which of us ever undertakes laborious
                                        physical
                                        exercise, except to obtain some advantage from it? But who has any right
                                        to
                                        find
                                        fault with a man who chooses to enjoy a pleasure that has no annoying
                                        consequences, or one who avoids a pain that produces no resultant
                                        pleasure.
                                    </p>
                                </div>
                                <div class="row g-3 align-items-center">
                                    <div class="col-lg-8">
                                        <p class="font-light">Lorem ipsum dolor sit amet, consectetur
                                            adipisicing
                                            elit.
                                            Ab, autem nemo? Tempora vitae assumenda laudantium unde magni,
                                            soluta
                                            repudiandae quam, neque voluptate deleniti consequatur laboriosam
                                            veritatis?
                                            Tempore dolor molestias voluptatum! Minima possimus, pariatur sed,
                                            quasi
                                            provident dolorum unde molestias, assumenda consequuntur odit magni
                                            blanditiis obcaecati? Ea corporis odit dolorem fuga, fugiat soluta
                                            consequuntur magni.</p>

                                        <div class="part mt-3">
                                            <h5 class="inner-title mb-2">fabric:</h5>
                                            <p class="font-light">Art silk is manufactured by synthetic fibres
                                                like
                                                rayon. It's light in weight and is soft on the skin for comfort
                                                in
                                                summers.Art silk is manufactured by synthetic fibres like rayon.
                                                It's
                                                light in weight and is soft on the skin for comfort in summers.
                                            </p>
                                            <p class="font-light">Lorem Ipsum is simply dummy text of the
                                                printing
                                                and typesetting industry. Lorem Ipsum has been the industry's
                                                standard dummy text ever since the 1500s</p>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <img src="./images/gallery/<?= $detailGallery[0]['gallery_image'] ?>"
                                            class="img-fluid rounded blur-up lazyload" alt="">
                                    </div>

                                    <div class="col-lg-8 order-lg-2 mt-4">
                                        <p class="font-light">Lorem ipsum dolor sit amet, consectetur
                                            adipisicing
                                            elit.
                                            Ab, autem nemo? Tempora vitae assumenda laudantium unde magni,
                                            soluta
                                            repudiandae quam, neque voluptate deleniti consequatur laboriosam
                                            veritatis?
                                            Tempore dolor molestias voluptatum! Minima possimus, pariatur sed,
                                            quasi
                                            provident dolorum unde molestias, assumenda consequuntur odit magni
                                            blanditiis obcaecati? Ea corporis odit dolorem fuga, fugiat soluta
                                            consequuntur magni.</p>
                                        <div class="part mt-3">
                                            <p class="font-light">Lorem ipsum, dolor sit amet consectetur
                                                adipisicing
                                                elit. Odio repellat numquam perspiciatis eum quis ab, sed dicta
                                                tenetur
                                                fugit culpa, aut distinctio deserunt quisquam ipsam
                                                reprehenderit
                                                iure?
                                                Adipisci, optio enim? Voluptates voluptatum neque id ad commodi
                                                quisquam
                                                dolorem vitae inventore quasi! Officiis facere, iusto tempore
                                                atque
                                                magnam voluptas. Architecto laboriosam deleniti hic veritatis
                                                nesciunt.
                                                Aut officia quasi inventore et. Debitis.</p>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 order-lg-0 mt-4">
                                        <img src="./images/gallery/<?= $detailGallery[1]['gallery_image'] ?>"
                                            class="img-fluid rounded blur-up lazyload" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Specifications -->
                        <div class="tab-pane fade" id="speci">
                            <div class="pro mb-4">
                                <p class="font-light">The Model is wearing a white blouse from our stylist's
                                    collection, see the image for a mock-up of what the actual blouse would look
                                    like.it has text written on it in a black cursive language which looks great
                                    on a white color.</p>
                                <div class="table-responsive">
                                    <table class="table table-part">
                                        <tr>
                                            <th>Product Dimensions</th>
                                            <td>15 x 15 x 3 cm; 250 Grams</td>
                                        </tr>
                                        <tr>
                                            <th>Date First Available</th>
                                            <td>5 April 2021</td>
                                        </tr>
                                        <tr>
                                            <th>Manufacturer‏</th>
                                            <td>Aditya Birla Fashion and Retail Limited</td>
                                        </tr>
                                        <tr>
                                            <th>ASIN</th>
                                            <td>B06Y28LCDN</td>
                                        </tr>
                                        <tr>
                                            <th>Item model number</th>
                                            <td>AMKP317G04244</td>
                                        </tr>
                                        <tr>
                                            <th>Department</th>
                                            <td>Men</td>
                                        </tr>
                                        <tr>
                                            <th>Item Weight</th>
                                            <td>250 G</td>
                                        </tr>
                                        <tr>
                                            <th>Item Dimensions LxWxH</th>
                                            <td>15 x 15 x 3 Centimeters</td>
                                        </tr>
                                        <tr>
                                            <th>Net Quantity</th>
                                            <td>1 U</td>
                                        </tr>
                                        <tr>
                                            <th>Included Components‏</th>
                                            <td>1-T-shirt</td>
                                        </tr>
                                        <tr>
                                            <th>Generic Name</th>
                                            <td>T-shirt</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!-- review -->
                        <div class="tab-pane fade" id="review">
                            <div class="row g-4">
                                <div class="col-lg-4">
                                    <div class="customer-rating">
                                        <h2>Customer reviews</h2>
                                        <ul class="rating my-2 d-inline-block">
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

                                        <div class="global-rating">
                                            <h5 class="font-light">82 Ratings</h5>
                                        </div>

                                        <ul class="rating-progess">
                                            <li>
                                                <h5 class="me-3">5 Star</h5>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 78%"
                                                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                                    </div>
                                                </div>
                                                <h5 class="ms-3">78%</h5>
                                            </li>
                                            <li>
                                                <h5 class="me-3">4 Star</h5>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 62%"
                                                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                                    </div>
                                                </div>
                                                <h5 class="ms-3">62%</h5>
                                            </li>
                                            <li>
                                                <h5 class="me-3">3 Star</h5>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 44%"
                                                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                                    </div>
                                                </div>
                                                <h5 class="ms-3">44%</h5>
                                            </li>
                                            <li>
                                                <h5 class="me-3">2 Star</h5>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 30%"
                                                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                                    </div>
                                                </div>
                                                <h5 class="ms-3">30%</h5>
                                            </li>
                                            <li>
                                                <h5 class="me-3">1 Star</h5>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 18%"
                                                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                                    </div>
                                                </div>
                                                <h5 class="ms-3">18%</h5>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-lg-8">
                                    <div class="review-box">
                                        <form class="row g-4"
                                            action="?act=addComments&product_id=<?= $detailProduct['product_id'] ?>"
                                            method="post">

                                            <div class="col-6 col-md-4 d-flex align-items-center">
                                                <?php if (isset($user)): ?>
                                                    <img src="./images/avatar/<?= $user['avatar'] ?>" alt="Avatar"
                                                        class="rounded-circle me-3"
                                                        style="width: 50px; height: 50px; object-fit: cover;">
                                                <?php else: ?>
                                                    <div></div>
                                                <?php endif ?>
                                                <div>
                                                    <label class="mb-1 d-block fw-bold"
                                                        for="id"><?php echo isset($user) ? $user['name'] : 'Guest'; ?>
                                                    </label>
                                                </div>
                                            </div>

                                            <div>
                                                <p class="d-inline-block me-2">Rating (10 points):</p>
                                                <div id="rating">
                                                    <div class="d-flex">
                                                        <label class="form-check-label me-2" for="rating-1">
                                                            <input type="radio" class="form-check-input" name="rating"
                                                                id="rating-1" value="1"> 1
                                                        </label>
                                                        <label class="form-check-label me-2" for="rating-2">
                                                            <input type="radio" class="form-check-input" name="rating"
                                                                id="rating-2" value="2"> 2
                                                        </label>
                                                        <label class="form-check-label me-2" for="rating-3">
                                                            <input type="radio" class="form-check-input" name="rating"
                                                                id="rating-3" value="3"> 3
                                                        </label>
                                                        <label class="form-check-label me-2" for="rating-4">
                                                            <input type="radio" class="form-check-input" name="rating"
                                                                id="rating-4" value="4"> 4
                                                        </label>
                                                        <label class="form-check-label me-2" for="rating-5">
                                                            <input type="radio" class="form-check-input" name="rating"
                                                                id="rating-5" value="5"> 5
                                                        </label>
                                                        <label class="form-check-label me-2" for="rating-6">
                                                            <input type="radio" class="form-check-input" name="rating"
                                                                id="rating-6" value="6"> 6
                                                        </label>
                                                        <label class="form-check-label me-2" for="rating-7">
                                                            <input type="radio" class="form-check-input" name="rating"
                                                                id="rating-7" value="7"> 7
                                                        </label>
                                                        <label class="form-check-label me-2" for="rating-8">
                                                            <input type="radio" class="form-check-input" name="rating"
                                                                id="rating-8" value="8"> 8
                                                        </label>
                                                        <label class="form-check-label me-2" for="rating-9">
                                                            <input type="radio" class="form-check-input" name="rating"
                                                                id="rating-9" value="9"> 9
                                                        </label>
                                                        <label class="form-check-label me-2" for="rating-10">
                                                            <input type="radio" class="form-check-input" name="rating"
                                                                id="rating-10" value="10"> 10
                                                        </label>
                                                    </div>
                                                    <p id="rating-message" class="mt-3 text-dark date-custo font-light">
                                                    </p>
                                                    <?php if (isset($_SESSION['errors']['rating'])): ?>
                                                        <p class="text-danger"><?= $_SESSION['errors']['rating'] ?></p>
                                                    <?php endif ?>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <label class="mb-1" for="comments">Comments</label>
                                                <textarea class="form-control" placeholder="Leave a comment here"
                                                    id="comments" style="height: 100px" name="content"></textarea>
                                            </div>

                                            <div class="col-12">
                                                <button type="submit"
                                                    class="btn default-light-theme default-theme default-theme-2"
                                                    name="addComment">Submit</button>
                                            </div>

                                        </form>
                                    </div>
                                </div>

                                <div class="col-12 mt-4">
                                    <div class="customer-review-box">
                                        <h4>Customer Reviews</h4>
                                        <?php if ($productComments): ?>
                                            <!-- hiển thị bình luận nếu có -->
                                            <div class="customer-section row">
                                                <?php foreach ($productComments as $comment): ?>
                                                    <div>
                                                        <div class="mr-3 d-flex align-items-center">
                                                            <img src="./images/avatar/<?= $comment['comment_avatar_user'] ?>"
                                                                class="img-fluid rounded-circle" alt="Avatar"
                                                                style="width: 50px; height: 50px;">
                                                            <h5 class="ml-2"><?= $comment['comment_name_user'] ?></h5>
                                                        </div>
                                                        <div class="mb-4 p-3 border rounded">
                                                            <div class="d-flex">
                                                                <div class="w-100">
                                                                    <h6><strong>Rating:</strong> <?= $comment['rating'] ?></h6>
                                                                    <div class="content-box">
                                                                        <p class="font-light"><?= $comment['content'] ?></p>
                                                                    </div>
                                                                    <div class="text-right font-light">
                                                                        <p class="date-custo">- <?= $comment['created_at'] ?>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endforeach ?>
                                            </div>
                                        <?php else: ?>
                                            <!-- Nếu chưa có bình luận -->
                                            <div class="d-flex justify-content-center align-items-center text-dark"
                                                style="height: 200px;">
                                                <h3>Sản phẩm hiện chưa có bình luận nào</h3>
                                            </div>

                                        <?php endif ?>


                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Shop Section end -->

<!-- product section start -->
<section class="ratio_asos section-b-space overflow-hidden">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="mb-lg-4 mb-3">Customers Also Bought These</h2>
                <div class="product-wrapper product-style-2 slide-4 p-0 light-arrow bottom-space">
                    <?php foreach ($productByCate as $product): ?>
                        <div>
                            <div class="product-box">
                                <div class="img-wrapper">
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
                                        <h3 class="theme-color"><?= $product['price'] ?>.000 Vnđ</h3>
                                        <button onclick="location.href = 'cart.html';" class="btn listing-content">Add To
                                            Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- product section end -->

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

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const ratingInputs = document.querySelectorAll('input[name="rating"]');
        const ratingMessage = document.getElementById('rating-message');

        const messages = {
            1: "Chúng tôi thật sự xin lỗi! Chắc chắn chúng tôi sẽ cải thiện ngay lập tức để xứng đáng với sự tin tưởng của bạn.",
            2: "Chúng tôi biết mình còn nhiều thiếu sót, nhưng sẽ cố gắng hết sức để mang lại trải nghiệm tuyệt vời hơn cho bạn!",
            3: "Cảm ơn bạn đã cho chúng tôi cơ hội! Chúng tôi sẽ nỗ lực hơn nữa để khiến bạn hài lòng hơn!",
            4: "Bốn điểm là một bước tiến lớn! Chúng tôi sẽ không dừng lại ở đây và sẽ cố gắng cải thiện nhiều hơn nữa!",
            5: "Cảm ơn bạn rất nhiều vì đánh giá 5 điểm! Nhưng chúng tôi vẫn luôn muốn làm tốt hơn để bạn thực sự hài lòng!",
            6: "Một đánh giá tuyệt vời! Cảm ơn bạn! Chúng tôi sẽ nỗ lực nhiều hơn nữa để bạn có thể cho điểm tuyệt đối!",
            7: "7 điểm là một tín hiệu rất tích cực, nhưng chúng tôi tin rằng chúng tôi có thể làm tốt hơn và đạt điểm 10 tuyệt đối!",
            8: "Cảm ơn bạn đã cho điểm 8! Chúng tôi rất trân trọng sự đánh giá của bạn và sẽ luôn cố gắng để đạt được 10 điểm hoàn hảo!",
            9: "Gần như hoàn hảo rồi! Bạn đã cho chúng tôi điểm 9, và chúng tôi sẽ không ngừng cải thiện để đạt điểm tuyệt đối!",
            10: "Cảm ơn bạn rất nhiều! Chúng tôi thực sự rất tự hào khi nhận được điểm tuyệt đối này và sẽ tiếp tục giữ vững chất lượng tuyệt vời này!"
        };


        ratingInputs.forEach(input => {
            input.addEventListener('change', function () {
                const ratingValue = this.value;
                ratingMessage.textContent = messages[ratingValue];
            });
        });
    });
</script>