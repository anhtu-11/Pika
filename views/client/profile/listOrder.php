<?php include '../views/client/profile/layout/header.php'; ?>
<?php include '../views/client/profile/layout/sidebar.php'; ?>

<div class="page-body">
    <div class="title-header mb-4">
        <h5 class="text-center">Quản lý danh sách hóa đơn</h5>
    </div>

    <div class="container">
        <div class="row">
            <?php foreach ($orders as $order): ?>
                <div class="col-lg-6 col-md-12 mb-4"> <!-- Cập nhật để cho tối đa 2 cái mỗi hàng -->
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Mã hóa đơn: <?= $order['order_id']; ?></h5>
                            <p class="card-text"><strong>Người dùng:</strong> <?= $order['user_name']; ?></p>                                
                            <p class="card-text"><strong>Mã giảm giá:</strong>
                                <?= isset($order['coupon_value']) ? $order['coupon_value'] : 'Không có' ?>%</p>
                            <p class="card-text"><strong>Ngày tạo:</strong>
                                <?= date('d/m/Y H:i', strtotime($order['created_at'])); ?></p>
                            <p class="card-text">
                                <strong>Trạng thái:</strong>
                                <?php if ($order['status'] === 'unpaid'): ?>
                                    <span class="badge bg-warning">Chưa thanh toán</span>
                                <?php else: ?>
                                    <span class="badge bg-success">Đã thanh toán</span>
                                <?php endif; ?>
                            </p>

                            <ul class="list-group mt-3">
                                <?php foreach ($order['products'] as $detail): ?>
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
                                            <?= $detail['amount'] ?> x <?= number_format($detail['sale_price'], 0, ',', '.'); ?>.000 Vnđ
                                           
                                        </span>
                                    </li>
                                <?php endforeach; ?>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <strong>Tổng cộng:</strong>
                                    <span class="fw-bold text-danger"><?= number_format($order['total'], 0, ',', '.') ?>.000 Vnđ </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
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

<?php include '../views/client/profile/layout/footer.php'; ?>