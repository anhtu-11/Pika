<?php include '../views/admin/layout/header.php'; ?>
<?php include '../views/admin/layout/sidebar.php'; ?>

<div class="page-body">
    <div class="title-header">
        <h5>Chi Tiết Hóa Đơn - Mã Hóa Đơn: <?= $orderDetails[0]['order_id']; ?></h5>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Thông tin khách hàng</h5>
                        <p><strong>Tên người dùng:</strong> <?= $orderDetails[0]['user_name']; ?></p>
                        <p><strong>Ngày tạo:</strong> <?= date('d/m/Y H:i', strtotime($orderDetails[0]['created_at'])); ?></p>
                        <p><strong>Tổng tiền:</strong> <?= number_format($orderDetails[0]['total'], 0, ',', '.') ?> VND</p>
                        <p><strong>Trạng thái:</strong> 
                            <?php if ($orderDetails[0]['status'] === 'unpaid'): ?>
                                <span class="badge bg-warning">Chưa thanh toán</span>
                            <?php else: ?>
                                <span class="badge bg-success">Đã thanh toán</span>
                            <?php endif; ?>
                        </p>

                        <h5 class="card-title mt-4">Danh sách sản phẩm</h5>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Hình ảnh</th>
                                        <th>Tên sản phẩm</th>
                                        <th>Số lượng</th>
                                        <th>Giá</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($orderDetails as $detail): ?>
                                        <tr>
                                            <td>
                                                <img src="./images/product/<?= $detail['product_image']; ?>" class="img-fluid" alt="<?= $detail['product_name']; ?>" style="width: 60px; height: 60px;">
                                            </td>
                                            <td><?= $detail['product_name']; ?></td>
                                            <td><?= $detail['amount']; ?></td>
                                            <td><?= number_format($detail['sale_price'], 0, ',', '.') ?> VND</td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
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
                    <p class="mb-0">Dự án mẫu nhóm 5</p>
                </div>
            </div>
        </footer>
    </div>
</div>

<?php include '../views/admin/layout/footer.php'; ?>
