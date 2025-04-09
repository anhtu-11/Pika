<?php include '../views/admin/layout/header.php' ?>
<?php include '../views/admin/layout/sidebar.php' ?>

<div class="page-body">
    <div class="title-header">
        <h5>Danh sách Hóa Đơn</h5>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <div class="table-responsive table-desi table-product">
                                <table class="table table-1d all-package">
                                    <thead>
                                        <tr>
                                            <th>Mã Hóa Đơn</th>
                                            <th>Người Dùng</th>
                                            <th>Tổng Tiền</th>
                                            <th>Ngày Tạo</th>
                                            <th>Trạng Thái</th>
                                            <th>Thao Tác</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php foreach ($orders as $order): ?>
                                            <tr>
                                                <td><?= $order['order_id']; ?></td>
                                                <td><?= $order['user_name']; ?></td>
                                                <td><?= number_format($order['total'], 0, ',', '.') ?> VND</td>
                                                <td><?= date('d/m/Y H:i', strtotime($order['created_at'])); ?></td>
                                                <td>
                                                    <?php if ($order['status'] === 'unpaid'): ?>
                                                        <span class="badge bg-warning">Chưa thanh toán</span>
                                                    <?php else: ?>
                                                        <span class="badge bg-success">Đã thanh toán</span>
                                                    <?php endif; ?>
                                                </td>
                                                <td>
                                                    <ul>
                                                        <li>
                                                            <a href="?act=detailOrder&order_id=<?= $order['order_id']; ?>">
                                                                <span class="lnr lnr-eye"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="index.php?act=edit-order&order_id=<?= $order['order_id']; ?>">
                                                                <span class="lnr lnr-pencil"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="index.php?act=delete-order&order_id=<?= $order['order_id']; ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa không?');">
                                                                <span class="lnr lnr-trash"></span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="pagination-box">
                        <nav class="ms-auto me-auto " aria-label="...">
                            <ul class="pagination pagination-primary">
                                <li class="page-item disabled">
                                    <a class="page-link" href="javascript:void(0)" tabindex="-1">Previous</a>
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
                                    <a class="page-link" href="javascript:void(0)">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

    <div class="container-fluid">
        <!-- footer start-->
        <footer class="footer">
            <div class="row">
                <div class="col-md-12 footer-copyright text-center">
                    <p class="mb-0">Dự án mẫu nhóm 5</p>
                </div>
            </div>
        </footer>
    </div>
</div>

<?php include '../views/admin/layout/footer.php' ?>
