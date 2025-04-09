<?php include '../views/client/profile/layout/header.php' ?>
<?php include '../views/client/profile/layout/sidebar.php' ?>

<div class="page-body">
    <div class="title-header">
        <h5>Giỏ hàng</h5>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="col-lg-4 text-start">
                            <a href="?act=client" class="btn btn-outline-secondary">
                                <i class="fas fa-arrow-left"></i> Continue Shopping
                            </a>
                        </div>
                        <section class="cart-section section-b-space">
                            <div class="container">
                                <div class="row">
                                    <form action="?act=update-cart" method="post" class="col-12">
                                        <div class="table-responsive mt-4">
                                            <table class="table cart-table text-center align-middle">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th scope="col">Ảnh </th>
                                                        <th scope="col">Tên </th>
                                                        <th scope="col">Giá</th>
                                                        <th scope="col">Màu</th>
                                                        <th scope="col">Số lượng</th>
                                                        <th scope="col">Hành động</th>
                                                        <th scope="col">Tổng tiền</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <!-- <?php $total = 0 ?> tổng tiền của tất cả sản phẩm  -->
                                                    <?php foreach ($carts as $cart): ?>
                                                        <?php $item_total = $cart['product_sale_price'] * $cart['quantity'];
                                                        $total += $item_total;
                                                        ?>
                                                        <tr>
                                                            <td>
                                                                <a href="product-left-sidebar.html">
                                                                    <img src="./images/product/<?= $cart['product_image'] ?>"
                                                                        class="img-fluid rounded" alt="Product Image"
                                                                        style="width: 100px;">
                                                                </a>
                                                            </td>
                                                            <td>
                                                                <a href="product-left-sidebar.html"
                                                                    class="text-decoration-none">
                                                                    <?= $cart['product_name'] ?>
                                                                </a>
                                                            </td>
                                                            <td>
                                                                <h6><?= $cart['product_sale_price'] ?>.000đ</h6>
                                                            </td>
                                                            <td>
                                                                <h6><?= $cart['variant_color_name'] ?></h6>
                                                            </td>
                                                            <td>
                                                                <div class="qty-box">
                                                                    <input type="number"
                                                                        name="quantity[<?= $cart['cart_id'] ?>]"
                                                                        class="form-control" min="1"
                                                                        value="<?= $cart['quantity'] ?>"
                                                                        style="width: 80px;">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <a href="?act=delete-cart&cart_id=<?= $cart['cart_id'] ?>">
                                                                    <i data-feather="trash-2"></i>
                                                                </a>
                                                            </td>
                                                            <td>
                                                                <h6 class="text-success">
                                                                    <?= $item_total ?>,000đ
                                                                </h6>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col-md-6 text-start">
                                                <a href="javascript:void(0)"
                                                    class="btn btn-link text-decoration-underline theme-color">
                                                    Xóa tất cả
                                                </a>
                                                <button type="submit" name="update_cart"
                                                    class="btn btn-solid-default ms-2">Cập nhật</button>
                                            </div>

                                            <!-- Total Price on the right -->
                                            <div class="col-md-6 text-end">
                                                <h3>Tổng tiền: <span
                                                        class="fw-bold"><?= number_format($total) ?>,000đ</span></h3>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                                <div class="row mt-5 d-flex justify-content-between">
                                    <!-- Coupon Code -->
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="promo-section">
                                            <form class="d-flex gap-2">
                                                <input type="text" class="form-control" id="coupon-code"
                                                    placeholder="Coupon Code">
                                                <button class="btn btn-solid-default btn-success">Apply Coupon</button>
                                            </form>
                                        </div>
                                    </div>

                                    <!-- Checkout Button -->
                                    <div class="col-lg-6 col-sm-3">
                                        <div class="checkout-button col-md-12 text-end">
                                            <a href="?act=checkout" class="btn btn-solid-default fw-bold">
                                                Check Out <i class="fas fa-arrow-right ms-1"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="container-fluid">
        <footer class="footer">
            <div class="row">
                <div class="col-md-12 footer-copyright text-center">
                    <p class="mb-0">Du an mau nhom 5</p>
                </div>
            </div>
        </footer>
    </div>
</div>





<?php include '../views/client/profile/layout/footer.php' ?>