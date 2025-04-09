<?php include '../views/client/profile/layout/header.php'; ?>
<?php include '../views/client/profile/layout/sidebar.php'; ?>

<div class="page-body">
    <div class="title-header mb-4">
        <h5 class="text-center">Quản lý bình luận</h5>
    </div>

    <div class="container">
        <div class="row">
            <?php foreach ($comments as $comment): ?>
                <div class="col-lg-6 col-md-12 mb-4"> <!-- Hiển thị tối đa 2 bình luận mỗi hàng -->
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Tên sản phẩm: <?= $comment['comment_name_product']; ?></h5>
                            <p class="card-text"><strong>Người dùng:</strong> <?= $comment['comment_name_user']; ?></p>
                            <p class="card-text"><strong>Ngày tạo:</strong>
                                <?= date('d/m/Y H:i', strtotime($comment['created_at'])); ?></p>
                            <p class="card-text"><strong>Đánh giá:</strong> <?= $comment['rating']; ?>/10</p>
                            <p class="card-text"><strong>Nội dung bình luận:</strong></p>
                            <p class="card-text"><?= htmlspecialchars($comment['content']); ?></p>
                            <p class="card-text">
                                <strong>Trạng thái:</strong>
                                <?php if ($comment['status'] === 'active'): ?>
                                    <span class="badge bg-warning">Đã được xác nhận</span>
                                <?php elseif ($comment['status'] === 'waitting'): ?>
                                    <span class="badge bg-success">Chờ xác thực</span>
                                <?php else: ?>
                                    <span class="badge bg-dark">Ẩn</span>
                                <?php endif; ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Footer -->
    <div class="container mt-4">
        <footer class="footer py-3">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p class="mb-0">Dự án mẫu nhóm 5</p>
                </div>
            </div>
        </footer>
    </div>
</div>

<?php include '../views/client/profile/layout/footer.php'; ?>
