<?php include '../views/admin/layout/header.php' ?>
<?php include '../views/admin/layout/sidebar.php' ?>
<div class="page-body">
    <div class="title-header">
        <h5>Thêm mới Thương hiệu</h5>
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
                                    <h5>Thông tin Thương hiệu</h5>
                                </div>
                                <form action="index.php?act=add-brands" class="theme-form theme-form-2 mega-form"
                                    enctype="multipart/form-data" method="post">
                                    <div class="row">
                                        <!-- tên thương hiệu -->
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

                                        <!-- logo -->
                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-sm-2 mb-0">Logo</label>
                                            <div class="col-sm-10">
                                                <input id="logo" class="form-control" type="file" name="logo">
                                                <?php if (isset($_SESSION['errors']['logo'])): ?>
                                                    <p class="text-danger"><?= $_SESSION['errors']['logo'] ?></p>
                                                <?php endif ?>
                                            </div>
                                            <div class="mb-3 row align-items-start">
                                                <img id="preview-image" src="#" alt="Preview"
                                                    style="max-width: 200px; display: none;">
                                            </div>
                                        </div>

                                        <!-- Miêu tả -->
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
                                                <button type="submit" name="addBrand"
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
    document.getElementById('logo').addEventListener('change', function (e) {
        const reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById('preview-image').src = e.target.result;
            document.getElementById('preview-image').style.display = 'block';
        };
        reader.readAsDataURL(this.files[0]);
    });
</script>
<?php include '../views/admin/layout/footer.php' ?>