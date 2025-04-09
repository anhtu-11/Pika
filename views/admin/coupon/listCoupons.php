<?php include '../views/admin/layout/header.php' ?>
<?php include '../views/admin/layout/sidebar.php' ?>

<div class="page-body">

    <!-- Start Container Fluid -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div>
                        <div class="table-responsive">
                            <table class="table align-middle mb-0 table-hover table-centered">
                                <thead class="bg-light-subtle">
                                    <tr>
                                        <th style="width: 20px;">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="customCheck1">
                                                <label class="form-check-label" for="customCheck1"></label>
                                            </div>
                                        </th>
                                        <th>Tên mã giảm giá</th>
                                        <th>Giảm giá</th>
                                        <th>Mã giảm</th>
                                        <th>Ngày bắt đầu</th>
                                        <th>Ngày kết thúc</th>
                                        <th>Trạng thái</th>
                                        <th>Hành động</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($listCoupons as $coupon): ?>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="customCheck2">
                                                    <label class="form-check-label" for="customCheck2"></label>
                                                </div>
                                            </td>
                                            <td><?= $coupon['name'] ?></td>
                                            <?php if ($coupon['type'] == 'Percentage'): ?>
                                                <td><?= $coupon['coupon_value'] ?>%</td>
                                            <?php elseif ($coupon['type'] == 'Fixed Amout'): ?>
                                                <td><?= number_format($coupon['coupon_value'] * 1000, 0, ',', '.') ?>đ</td>
                                            <?php endif; ?>
                                            <td><?= $coupon['coupon_code'] ?></td>
                                            <td><?= $coupon['start_date'] ?></td>
                                            <td><?= $coupon['end_date'] ?></td>

                                            <!-- Trạng thái -->
                                            <?php if ($coupon['status'] == 'Active'): ?>
                                                <td>
                                                    <span class="badge text-success bg-success-subtle fs-12"><i
                                                            class="bx bx-check-double"></i><?= $coupon['status'] ?>
                                                    </span>
                                                </td>
                                            <?php elseif ($coupon['status'] == 'Hidden'): ?>
                                                <td>
                                                    <span class="badge text-danger bg-danger-subtle fs-12"><i
                                                            class="bx bx-x"></i><?= $coupon['status'] ?>
                                                    </span>
                                                </td>
                                            <?php elseif ($coupon['status'] == 'Future Plan'): ?>
                                                <td>
                                                    <span class="badge text-success bg-success-subtle fs-12"><i
                                                            class="bx bx-check-double"></i><?= $coupon['status'] ?>
                                                    </span>
                                                </td>
                                            <?php endif; ?>

                                            <!-- Hành động -->
                                            <td>
                                                <div class="d-flex gap-2">
                                                    <a href="?act=coupon-detail&coupon_id=<?= $coupon['coupon_id'] ?>" class="btn btn-light btn-sm">
                                                        <i class="fas fa-eye align-middle fs-18"></i>
                                                    </a>
                                                    <a href="?act=coupon-edit&coupon_id=<?= $coupon['coupon_id'] ?>" class="btn btn-soft-primary btn-sm">
                                                        <i class="fas fa-pen align-middle fs-18"></i>
                                                    </a>
                                                    <a onclick="return confirm('Bạn có chắc chắn muốn xóa')" href="?act=coupon-delete&coupon_id=<?= $coupon['coupon_id'] ?>" class="btn btn-soft-danger btn-sm">
                                                        <i class="fas fa-trash align-middle fs-18"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- end table-responsive -->
                    </div>
                    <div class="card-footer border-top">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-end mb-0">
                                <li class="page-item"><a class="page-link" href="javascript:void(0);">Previous</a></li>
                                <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0);">Next</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Container Fluid -->

    <!-- ========== Footer Start ========== -->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 text-center">
                    <script>document.write(new Date().getFullYear())</script> &copy; Dự án 1 <iconify-icon
                        icon="iconamoon:heart-duotone" class="fs-18 align-middle text-danger"></iconify-icon> <a
                        href="https://1.envato.market/techzaa" class="fw-bold footer-text" target="_blank">Nhóm 5</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- ========== Footer End ========== -->

</div>

<?php include '../views/admin/layout/footer.php' ?>