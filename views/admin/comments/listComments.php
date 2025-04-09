<?php include '../views/admin/layout/header.php' ?>
<?php include '../views/admin/layout/sidebar.php' ?>
<div class="page-body">
    <div class="title-header">
        <h5>Danh sách tất cả bình luận</h5>
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
                                            <th>Sản Phẩm</th>
                                            <th>Khách Hàng</th>
                                            <th>Đánh Giá</th>
                                            <th>Trạng thái</th>
                                            <th>Ngày Tạo</th>
                                            <th></th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php foreach ($comments as $comment): ?>
                                            <tr>
                                                <td>
                                                    <img src="./images/product/<?= $comment['product_image'] ?>"
                                                        class="img-fluid" alt="<?= $comment['product_name'] ?>"
                                                        style="width:50px">
                                                    <p><?= $comment['product_name'] ?></p>
                                                </td>

                                                <td>
                                                    <img src="./images/avatar/<?= $comment['user_avatar'] ?>"
                                                        class="img-fluid" alt="<?= $comment['user_name'] ?>"
                                                        style="width:50px">
                                                    <p><?= $comment['user_name'] ?></p>
                                                </td>
                                                <td>
                                                    <p><?= $comment['rating'] ?></p>
                                                </td>
                                                <td>
                                                    <span class="badge 
                                                        <?php
                                                        if ($comment['status'] === 'active') {
                                                            echo 'bg-primary';
                                                        } elseif ($comment['status'] === 'waiting') {
                                                            echo 'bg-info';
                                                        } else {
                                                            echo 'bg-dark';
                                                        }
                                                        ?>">
                                                        <?php
                                                        if ($comment['status'] === 'active') {
                                                            echo 'Đã xác nhận';
                                                        } elseif ($comment['status'] === 'waitting') {
                                                            echo 'Đang chờ xác nhận';
                                                        } else {
                                                            echo 'Ẩn';
                                                        }
                                                        ?>
                                                    </span>

                                                </td>
                                                <td>
                                                    <p><?= $comment['created_at'] ?></p>
                                                </td>
                                                <td>
                                                    <?php if ($comment['status'] === 'waitting'): ?>
                                                        <form action="?act=edit-status-comment" method="POST">
                                                            <input type="hidden" name="comment_id"
                                                                value="<?= $comment['comment_id'] ?>">
                                                            <button type="submit" class="btn btn-primary">Xác nhận bình luận
                                                                này</button>
                                                        </form>
                                                    <?php elseif ($comment['status'] === 'active'): ?>
                                                        <form action="?act=edit-status-comment" method="POST">
                                                            <input type="hidden" name="comment_id"
                                                                value="<?= $comment['comment_id'] ?>">
                                                            <button type="submit" class="btn btn-dark">Ẩn bình luận này</button>
                                                        </form>
                                                    <?php else: ?>
                                                        <form action="?act=edit-status-comment" method="POST">
                                                            <input type="hidden" name="comment_id"
                                                                value="<?= $comment['comment_id'] ?>">
                                                            <button type="submit" class="btn btn-primary">Hiện bình luận
                                                                này</button>
                                                        </form>
                                                    <?php endif ?>
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