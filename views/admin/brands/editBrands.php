<?php include '../views/admin/layout/header.php' ?>
<?php include '../views/admin/layout/sidebar.php' ?>
<div class="page-body">
    <div class="title-header">
        <h5>Sửa thông tin Thương hiệu</h5>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-header-2">
                                    <h5>Thông tin thương hiệu</h5>
                                </div>
                                <form action="index.php?act=edit-brands&brand_id=<?= $getBrand['brand_id'] ?>"
                                    class="theme-form theme-form-2 mega-form" enctype="multipart/form-data"
                                    method="post">
                                    <div class="row">
                                        <!-- tên thương hiệu -->
                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-sm-2 mb-0">Tên</label>
                                            <div class="col-sm-10">
                                                <input id="name" name="name" class="form-control" type="text"
                                                    value="<?= $getBrand['name'] ?>" placeholder="Nhập tên danh mục">
                                                <?php if (isset($_SESSION['errors']['name'])): ?>
                                                    <p class="text-danger"><?= $_SESSION['errors']['name'] ?></p>
                                                <?php endif ?>
                                            </div>
                                        </div>

                                        <!-- Brand Images -->
                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-sm-2 mb-0">Ảnh</label>
                                            <div class="col-sm-10">
                                                <img src="./images/brand/<?= $getBrand['logo'] ?>" alt=""
                                                    class=" mb-2 img-fluid rounded shadow" style="max-width: 200px;">
                                                <input type="hidden" name="old_logo"
                                                    value="<?= isset($getBrand['logo']) ? $getBrand['logo'] : '' ?>">
                                                <input id="logo" class="form-control" type="file" name="logo">
                                            </div>
                                        </div>

                                        <!-- Brand Description -->
                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-sm-2 mb-0">Miêu tả</label>
                                            <div class="col-sm-10">
                                                <textarea id="description" name="description" class="form-control"
                                                    rows="5"
                                                    placeholder="Nhập miêu tả danh mục"><?= $getBrand['description'] ?></textarea>
                                                <?php if (isset($_SESSION['errors']['description'])): ?>
                                                    <p class="text-danger"><?= $_SESSION['errors']['description'] ?></p>
                                                <?php endif ?>
                                            </div>
                                        </div>

                                        <!-- Submit Button -->
                                        <div class="row justify-content-end">
                                            <div class="col-sm-10">
                                                <button type="submit" name="saveEditBrand"
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

    <!-- New Brand Add End -->
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
</div>
<?php include '../views/admin/layout/footer.php' ?>