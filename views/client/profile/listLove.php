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
                                    <div class="table-responsive mt-4">
                                        <table class="table cart-table text-center align-middle">
                                            <thead class="table-light">
                                                <tr>
                                                    <th scope="col">Ảnh </th>
                                                    <th scope="col">Tên sản phẩm </th>
                                                    <th scope="col">Ngày thích</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($loves as $love): ?>
                                                    <tr>
                                                        <td>
                                                            <a href="product-left-sidebar.html">
                                                                <img src="./images/product/<?= $love['product_image'] ?>"
                                                                    class="img-fluid rounded" alt="Product Image"
                                                                    style="width: 100px;">
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a href="product-left-sidebar.html"
                                                                class="text-decoration-none">
                                                                <?= $love['product_name'] ?>
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <h6><?= date('d/m/Y H:i', strtotime($love['created_at'])); ?></h6>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
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