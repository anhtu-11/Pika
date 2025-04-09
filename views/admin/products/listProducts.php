<?php include '../views/admin/layout/header.php'; ?>
<?php include '../views/admin/layout/sidebar.php'; ?>
<div class="page-body">
    <div class="title-header">
        <h5>Danh sách sản phẩm</h5>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive table-desi table-product">
                            <table class="table table-1d all-package">
                                <thead>
                                    <tr>
                                        <th>Hình ảnh</th>
                                        <th>Tên</th>
                                        <th>Danh mục</th>
                                        <th>Thương hiệu</th>
                                        <th>Giá</th>
                                        <th>Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($products as $product): ?>
                                        <tr>
                                            <td>
                                                <img src="./images/product/<?= $product['product_image'] ?>"
                                                    class="img-fluid" alt="" style="width: 100px">
                                            </td>
                                            <td>
                                                <a href="javascript:void(0)"><?= $product['product_name'] ?></a>
                                                <p>
                                                    <strong>color:</strong>
                                                    <?php foreach ($product['variants'] as $variant): ?>
                                                        <em><?= $variant['product_variant_color'] ?>.</em>
                                                    <?php endforeach; ?>
                                                </p>
                                            </td>
                                            <td>
                                                <strong>
                                                    <a href="javascript:void(0)"><?= $product['category_name'] ?></a>
                                                </strong>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0)"><?= $product['brand_name'] ?></a>
                                            </td>
                                            <td class="td-price">
                                                <?= $product['product_price'] ?>.000 VNĐ
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
                                                            href="index.php?act=edit-products&id=<?= $product['product_id'] ?>">
                                                            <span class="lnr lnr-pencil"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)">
                                                            <i class="far fa-trash-alt theme-color"></i>
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
                                <a class="page-link" href="javascript:void(0)">2 <span
                                        class="sr-only">(current)</span></a>
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
<?php include '../views/admin/layout/footer.php'; ?>