<?php include '../views/client/profile/layout/header.php' ?>
<?php include '../views/client/profile/layout/sidebar.php' ?>

<div class="page-body">
    <div class="title-header mb-4">
        <h5 class="text-center">Chi tiết đơn hàng</h5>
    </div>

    <div class="container">
        <div class="row">
            <!-- Thông tin đơn hàng -->
            <div class="col-lg-8">
                <div class="card shadow-sm mb-4">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">Thông tin đơn hàng</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th>Mã đơn hàng:</th>
                                <td><?= $order['order_id']; ?></td>
                            </tr>
                            <tr>
                                <th>Người dùng:</th>
                                <td><?= $order['user_name']; ?></td>
                            </tr>
                            <tr>
                                <th>Tổng tiền:</th>
                                <td><?= $order['total'] ?>,000 Vnđ</td>
                            </tr>
                            <tr>
                                <th>Ngày tạo:</th>
                                <td><?= $order['created_at']; ?></td>
                            </tr>
                        </table>
                    </div>
                </div>

                <!-- Chi tiết sản phẩm -->
                <div class="card shadow-sm">
                    <div class="card-header bg-success text-white">
                        <h5 class="mb-0">Chi tiết sản phẩm</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <?php foreach ($order['details'] as $detail): ?>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <img src="./images/product/<?= $detail['product_image'] ?>" alt="Product Image"
                                        class="img-thumbnail me-3" style="width: 60px; height: 60px;">
                                    <div>
                                        <h6 class="mb-1"><?= $detail['product_name'] ?></h6>
                                        <p class="mb-0 text-muted">
                                            Màu sắc: <?= $detail['color_name'] ?> |
                                        </p>
                                    </div>
                                </div>
                                <span class="badge bg-primary rounded-pill">
                                    <?= $detail['amount'] ?> x <?= number_format($detail['sale_price'], 0, ',', '.'); ?> VND
                                </span>
                            </li>
                        <?php endforeach ?>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <strong>Tổng cộng:</strong>
                            <span class="fw-bold text-danger"><?= $order['total'] ?>,000 Vnđ</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Thông tin thanh toán -->
            <div class="col-lg-4">
                <div class="card shadow-sm">
                    <div class="card-header bg-warning text-dark">
                        <h5 class="mb-0">Thông tin thanh toán</h5>
                    </div>
                    <div class="card-body">
                        <form action="?act=saveOrder&order_id=<?= $order['order_id'] ?>" method="POST">
                            <!-- Mã giảm giá -->
                            <!-- Dropdown cho mã giảm giá -->
                            <div class="mb-3">
                                <label for="voucher" class="form-label">Mã giảm giá</label>
                                <select class="form-select" id="voucher" name="coupon_id">
                                    <option value="" selected>Chọn mã giảm giá (nếu có)</option>
                                    <?php foreach ($coupons as $coupon): ?>
                                        <option value="<?= $coupon['coupon_id'] ?>:<?= $coupon['coupon_value'] ?>">
                                            Giảm <?= $coupon['coupon_value'] ?>%
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <!-- trạng thái -->
                            <div class="mb-3">
                                <label class="form-label">Phương thức thanh toán:</label>
                                <div>
                                    <input type="radio" id="option1" name="status" value="unpaid"
                                        <?= ($order['status'] === 'unpaid') ? 'checked' : '' ?>>
                                    <label for="option1">Thanh toán khi nhận hàng</label>
                                </div>
                                <div>
                                    <input type="radio" id="option2" name="status" value="payed">
                                    <label for="option2">Thanh toán luôn</label>
                                </div>
                            </div>

                            <!-- Ghi chú -->
                            <div class="mb-3">
                                <label for="note" class="form-label">Ghi chú</label>
                                <textarea class="form-control" id="note" name="note" rows="3"
                                    placeholder="Nhập ghi chú cho đơn hàng"></textarea>
                            </div>



                            <!-- Button thanh toán -->
                            <button type="submit" class="btn btn-success w-100" name="saveOrder">Đặt hàng</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="container mt-4">
        <footer class="footer bg-light py-3">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p class="mb-0">Dự án mẫu nhóm 5</p>
                </div>
            </div>
        </footer>
    </div>
</div>

<?php include '../views/client/profile/layout/footer.php' ?>