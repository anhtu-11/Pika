<?php include '../views/admin/layout/header.php' ?>
<?php include '../views/admin/layout/sidebar.php' ?>
<div class="page-body">
    <div class="title-header">
        <h5>Danh sách khách hàng</h5>
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
                                            <th>Avatar</th>
                                            <th>Họ và tên</th>
                                            <th>Email</th>
                                            <th>Liên lạc</th>
                                            <th>Vai trò</th>
                                            <th>Thao tác</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($users as $user): ?>
                                            <tr>
                                                <td>
                                                    <img src="./images/avatar/<?= $user['avatar'] ?>" class="img-fluid"
                                                        alt="<?= $user['name'] ?>">
                                                </td>

                                                <td>
                                                    <?= $user['name'] ?>
                                                </td>

                                                <td>
                                                    <?= $user['email'] ?>
                                                </td>

                                                <td>
                                                    +84<?= $user['phone'] ?>
                                                </td>

                                                <td>
                                                    <span
                                                        class="badge <?= $user['role_id'] === '1' ? 'bg-primary' : 'bg-dark' ?>">
                                                        <?= $user['role_name'] === 'ADMIN' ? 'ADMIN' : 'USER' ?>
                                                    </span>
                                                </td>

                                                <td class="">
                                                    <?php if ($user['role_id'] === 1): ?>
                                                        <form action="?act=update-role-user" method="POST" class="me-2">
                                                            <input type="hidden" name="user_id" value="<?= $user['user_id'] ?>">
                                                            <button type="submit" class="btn btn-primary">Nâng cấp</button>
                                                        </form>
                                                    <?php endif ?>
                                                    <button class="btn btn-danger btn-sm w-100">
                                                        <i class="bi bi-trash"></i> Xóa tài khoản này
                                                    </button>
                                                </td>
                                            </tr>
                                        <?php endforeach ?>
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
                                    <a class="page-link" href="javascript:void(0)">2 <span
                                            class="sr-only">(current)</span>
                                    </a>
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
                    <p class="mb-0">Du an mau nhom 5</p>
                </div>
            </div>
        </footer>
    </div>
</div>
<?php include '../views/admin/layout/footer.php' ?>