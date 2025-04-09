<?php include '../views/admin/layout/header.php' ?>
<?php include '../views/admin/layout/sidebar.php' ?>
<div class="page-body">
    <div class="title-header">
        <h5>Danh Mục</h5>
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
                                            <th>Hình ảnh</th>
                                            <th>Tên</th>
                                            <th>Trạng thái</th>
                                            <th>Thao tác</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php foreach ($list_Categories as $category): ?>
                                            <tr>
                                                <td>
                                                    <img src="./images/category/<?= $category['image'] ?>" class="img-fluid"
                                                        alt="<?= $category['name'] ?>">
                                                </td>

                                                <td>
                                                    <a href=""></a>
                                                    <?= $category['name'] ?>
                                                </td>

                                                <td>
                                                    <span
                                                        class="badge <?= $category['status'] === 'Active' ? 'bg-primary' : 'bg-secondary' ?>">
                                                        <?= $category['status'] === 'Active' ? 'Active' : 'Inactive' ?>
                                                    </span>
                                                </td>

                                                <td>
                                                    <ul>
                                                        <li>
                                                            <a href="order-detail.html">
                                                                <span class="lnr lnr-eye"></span>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a
                                                                href="index.php?act=edit-categories&category_id=<?= $category['category_id'] ?>">
                                                                <span class="lnr lnr-pencil"></span>
                                                            </a>
                                                        </li>
                                                    </ul>
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