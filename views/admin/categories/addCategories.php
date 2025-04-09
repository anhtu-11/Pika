<?php include '../views/admin/layout/header.php' ?>
<?php include '../views/admin/layout/sidebar.php' ?>
<div class="page-body">
    <div class="title-header">
        <h5>Thêm mới Danh mục</h5>
    </div>

    <!-- New Category Add Start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-sm-12">
                        <!-- Category Form -->
                        <div class="card">
                            <div class="card-body">
                                <div class="card-header-2">
                                    <h5>Thêm Danh mục</h5>
                                </div>
                                <form action="index.php?act=add-categories" class="theme-form theme-form-2 mega-form"
                                    enctype="multipart/form-data" method="post">
                                    <div class="row">
                                        <!-- Category Name -->
                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-sm-2 mb-0">Tên</label>
                                            <div class="col-sm-10">
                                                <input id="name" name="name" class="form-control" type="text"
                                                    placeholder="Nhập tên danh mục">
                                                <?php if (isset($_SESSION['errors']['name'])): ?>
                                                    <p class="text-danger"><?= $_SESSION['errors']['name'] ?></p>
                                                <?php endif ?>
                                            </div>
                                        </div>

                                        <!-- Category Images -->
                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-sm-2 mb-0">Ảnh</label>
                                            <div class="col-sm-10">
                                                <input id="image" class="form-control" type="file" name="image">
                                                <?php if (isset($_SESSION['errors']['image'])): ?>
                                                    <p class="text-danger"><?= $_SESSION['errors']['image'] ?></p>
                                                <?php endif ?>
                                            </div>
                                            <div class="mb-3 row align-items-start">
                                                <img id="preview-image" src="#" alt="Preview"
                                                    style="max-width: 200px; display: none;">
                                            </div>
                                        </div>

                                        <!-- Cateogry Status -->
                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-sm-2 mb-0">Trạng thái</label>
                                            <div class="col-sm-10">
                                                <select class="form-select" name="status">
                                                    <option value="Hidden">Ẩn</option>
                                                    <option value="Active">Hiện</option>
                                                </select>
                                                <?php if (isset($_SESSION['errors']['status'])): ?>
                                                    <p class="text-danger"><?= $_SESSION['errors']['status'] ?></p>
                                                <?php endif ?>
                                            </div>
                                        </div>

                                        <!-- Category Description -->
                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-sm-2 mb-0">Miêu tả</label>
                                            <div class="col-sm-10">
                                                <textarea id="description" name="description" class="form-control"
                                                    rows="5" placeholder="Nhập miêu tả danh mục"></textarea>
                                                <?php if (isset($_SESSION['errors']['description'])): ?>
                                                    <p class="text-danger"><?= $_SESSION['errors']['description'] ?></p>
                                                <?php endif ?>
                                            </div>
                                        </div>

                                        <!-- Submit Button -->
                                        <div class="row justify-content-start">
                                            <div class="col-sm-10">
                                                <button type="submit" name="addCategory"
                                                    class="btn btn-primary">Apply</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- New Category Add End -->
    <!-- footer Start -->
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
    <!-- footer En -->
</div>
<!-- Container-fluid End -->
<script>
    document.getElementById('image').addEventListener('change', function (e) {
        const reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById('preview-image').src = e.target.result;
            document.getElementById('preview-image').style.display = 'block';
        };
        reader.readAsDataURL(this.files[0]);
    });
</script>
<?php include '../views/admin/layout/footer.php' ?>