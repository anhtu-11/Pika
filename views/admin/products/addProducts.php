<?php include '../views/admin/layout/header.php' ?>
<?php include '../views/admin/layout/sidebar.php' ?>
<div class="page-body">
    <div class="title-header">
        <h5>Thêm mới Sản Phẩm</h5>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-header-2">
                                    <h5>Thông tin sản phẩm</h5>
                                </div>
                                <form action="index.php?act=save-add-products" method="post"
                                    class="theme-form theme-form-2 mega-form" enctype="multipart/form-data">
                                    <!-- Tên sản phẩm và danh mục, slug -->
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="name" class="form-label-title">Tên sản phẩm</label>
                                            <input type="text" name="name" class="form-control" id="name"
                                                placeholder="Nhập tên sản phẩm" onkeyup="ChangeToSlug();"
                                                value=" <?= $_SESSION['old_data']['name'] ?? '' ?>">
                                            <?php if (isset($_SESSION['errors']['name'])): ?>
                                                <p class="text-danger"><?= $_SESSION['errors']['name'] ?></p>
                                            <?php endif ?>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="slug" class="form-label-title">Slug</label>
                                            <input type="text" name="slug" class="form-control" id="slug"
                                                placeholder="Nhập slug"
                                                value="<?= $_SESSION['old_data']['slug'] ?? '' ?>">
                                            <?php if (isset($_SESSION['errors']['slug'])): ?>
                                                <p class="text-danger"><?= $_SESSION['errors']['slug'] ?></p>
                                            <?php endif ?>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="category" class="form-label-title">Danh mục</label>
                                            <select class="form-select" id="category_id" name="category_id">
                                                <option selected>Chọn danh mục</option>
                                                <?php foreach ($categories as $category): ?>
                                                    <option value="<?= $category['category_id'] ?>"><?= $category['name'] ?>
                                                    </option>
                                                <?php endforeach ?>
                                            </select>

                                        </div>
                                        <div class="col-md-6">
                                            <label for="brand" class="form-label-title">Thương hiệu</label>
                                            <select class="form-select" id="brand_id" name="brand_id">
                                                <option selected>Chọn thương hiệu</option>
                                                <?php foreach ($brands as $brand): ?>
                                                    <option value="<?= $brand['brand_id'] ?>"><?= $brand['name'] ?></option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Giá sản phẩm và giá khuyến mãi -->
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="price" class="form-label-title">Giá sản phẩm</label>
                                            <input type="text" name="price" class="form-control" id="price"
                                                placeholder="Nhập giá sản phẩm"
                                                value="<?= $_SESSION['old_data']['price'] ?? '' ?>">
                                            <?php if (isset($_SESSION['errors']['price'])): ?>
                                                <p class="text-danger"><?= $_SESSION['errors']['price'] ?></p>
                                            <?php endif ?>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="sale_price" class="form-label-title">Giá khuyến mãi</label>
                                            <input type="text" name="sale_price" class="form-control" id="sale_price"
                                                placeholder="Nhập giá khuyến mãi"
                                                value="<?= $_SESSION['old_data']['sale_price'] ?? '' ?>">
                                            <?php if (isset($_SESSION['errors']['sale_price'])): ?>
                                                <p class="text-danger"><?= $_SESSION['errors']['sale_price'] ?></p>
                                            <?php endif ?>
                                        </div>
                                    </div>

                                    <!-- checkbox có biến thể hoặc không-->
                                    <div class="row mb-3">
                                        <div class="col-md-12">
                                            <input type="checkbox" id="has_variant" name="has_variant">
                                            <label for="has_variant" class="form-label-title">Sản phẩm có biến
                                                thể</label>
                                        </div>
                                    </div>

                                    <!--Sản phẩm biến thể-->
                                    <div id="variant" style="display: none;">
                                        <div class="border rounded px-4 py-4 mb-3" style="background-color: #f0f0f0;">
                                            <!-- Kích thước và màu sắc -->

                                            <div class="row mb-4">
                                                <div class="col-md-10">
                                                    <label class="form-label-title">Màu:</label>
                                                    <!-- Checkboxes cho màu -->
                                                    <div class="d-flex flex-wrap col-md-12">
                                                        <?php foreach ($colors as $color): ?>
                                                            <div class="form-check me-3">
                                                                <!-- Đặt màu nền cho checkbox -->
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="variant_color[]"
                                                                    value="<?= $color['variant_color_id'] ?>"
                                                                    id="color_<?= $color['variant_color_id'] ?>" style="background-color: <?= $color['color_code'] ?>; width:
                                                                20px; height: 20px;">
                                                                <label class="form-check-label"
                                                                    for="color_<?= $color['variant_color_id'] ?>"></label>
                                                            </div>
                                                        <?php endforeach; ?>
                                                    </div>

                                                    <?php if (isset($_SESSION['errors']['variant_color']) && is_array($_SESSION['errors']['variant_color'])): ?>
                                                        <?php foreach ($_SESSION['errors']['variant_color'] as $variant_color): ?>
                                                            <p class="text-danger"><?= $variant_color ?></p>
                                                        <?php endforeach ?>
                                                    <?php endif ?>
                                                    <i>(*lưu ý: checkbox hiện viền màu xang là đã chọn)</i>
                                                </div>


                                            </div>

                                            <!-- Giá biến thể, giá khuyến mãi biến thể và số lượng -->
                                            <div class="row mb-3">
                                                <div class="col-md-4">
                                                    <label for="variant_price[]" class="form-label-title">Giá biến
                                                        thể</label>
                                                    <input type="text" name="variant_price[]" class="form-control"
                                                        id="variant_price[]" placeholder="Nhập giá sản phẩm">
                                                    <?php if (isset($_SESSION['errors']['variant_price']) && is_array($_SESSION['errors']['variant_price'])): ?>
                                                        <?php foreach ($_SESSION['errors']['variant_price'] as $variant_price): ?>
                                                            <p class="text-danger"><?= $variant_price ?></p>
                                                        <?php endforeach ?>
                                                    <?php endif ?>
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="variant_sale_price[]" class="form-label-title">Giá
                                                        khuyến
                                                        mãi
                                                        biến
                                                        thể</label>
                                                    <input type="text" name="variant_sale_price[]" class="form-control"
                                                        id="variant_sale_price[]" placeholder="Nhập giá khuyến mãi"
                                                        value="<?= htmlspecialchars($_SESSION['old_data']['variant_sale_price'][0] ?? '') ?>">
                                                    <?php if (isset($_SESSION['errors']['variant_sale_price']) && is_array($_SESSION['errors']['variant_sale_price'])): ?>
                                                        <?php foreach ($_SESSION['errors']['variant_sale_price'] as $variant_sale_price): ?>
                                                            <p class="text-danger"><?= $variant_sale_price ?></p>
                                                        <?php endforeach ?>
                                                    <?php endif ?>
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="variant_quantity[]" class="form-label-title">Số
                                                        lượng</label>
                                                    <input type="number" name="variant_quantity[]" class="form-control"
                                                        id="variant_quantity[]" placeholder="Nhập số lượng"
                                                        value="<?= htmlspecialchars($_SESSION['old_data']['variant_quantity'][0] ?? '') ?>">
                                                    <?php if (isset($_SESSION['errors']['variant_quantity']) && is_array($_SESSION['errors']['variant_quantity'])): ?>
                                                        <?php foreach ($_SESSION['errors']['variant_quantity'] as $variant_quantity): ?>
                                                            <p class="text-danger"><?= $variant_quantity ?></p>
                                                        <?php endforeach ?>
                                                    <?php endif ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row justify-content-start" id="variant-button" style="display: none">
                                        <div class="col-md-12 text-end">
                                            <button type="button" id="add-variant"
                                                class="btn btn-success">Aplly</button>
                                        </div>
                                    </div>


                                    <!-- Mô tả sản phẩm -->
                                    <div class="mb-3">
                                        <label for="description" class="form-label-title">Mô tả</label>
                                        <textarea name="description" class="form-control" id="description" rows="5"
                                            placeholder="Nhập mô tả sản phẩm"></textarea>
                                        <?php if (isset($_SESSION['errors']['description'])): ?>
                                            <p class="text-danger"><?= $_SESSION['errors']['description'] ?></p>
                                        <?php endif ?>
                                    </div>

                                    <!-- Hình ảnh-->
                                    <div class="mb-4">
                                        <label class="form-label-title">Ảnh</label>
                                        <div class="col-sm-12">
                                            <input id="image" class="form-control" type="file" name="image">
                                        </div>
                                        <div class="mb-3 row align-items-start">
                                            <img id="preview-image" src="#" alt="Preview"
                                                style="max-width: 200px; display: none;">
                                        </div>
                                    </div>

                                    <!--Galleries Product-->
                                    <div class="mb-4">
                                        <label class="form-label-title">Thêm nhiều ảnh sản phẩm </label>
                                        <div class="col-sm-12">
                                            <input id="image" class="form-control" type="file" name="gallery_image[]"
                                                multiple accept="image/*">
                                        </div>

                                    </div>



                                    <!-- Nút lưu -->
                                    <div class="row justify-content-start">
                                        <div class="col-md-10">
                                            <button type="submit" name="saveProduct"
                                                class="btn btn-primary">Aplly</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Card end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- New Product Add End -->

    <!-- Footer Start -->
    <div class="container-fluid mt-4">
        <footer class="footer">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p class="mb-0">Dự án mẫu nhóm 5</p>
                </div>
            </div>
        </footer>
    </div>
    <!-- Footer End -->
</div>
<script>
    document.getElementById('add-variant').addEventListener('click', function () {
        const container = document.getElementById('variant')
        console.log(container)
        const newVariant = document.createElement('div')
        newVariant.innerHTML =
            `
                <div class="border rounded px-4 py-4 mb-3" style="background-color: #f0f0f0;">
                    <!-- Kích thước và màu sắc -->
                    <div class="row mb-4">
                        <div class="col-md-10">
                            <label class="form-label-title">Màu:</label>
                            <!-- Checkboxes cho màu -->
                            <div class="d-flex flex-wrap col-md-12">
                                <?php foreach ($colors as $color): ?>
                                <div class="form-check me-3">
                                <!-- Đặt màu nền cho checkbox -->
                                <input class="form-check-input" type="checkbox"
                                name="variant_color[]"
                                value="<?= $color['variant_color_id'] ?>"
                                id="color_<?= $color['variant_color_id'] ?>"
                                style="background-color: <?= $color['color_code'] ?>; width: 20px; height: 20px;">
                                <label class="form-check-label"
                                for="color_<?= $color['variant_color_id'] ?>">
                                </label>
                                </div>
                                <?php endforeach; ?>
                                    <i>(*lưu ý: checkbox hiện viền màu xang là đã chọn)</i>
                            </div>
                        </div>
                    </div>

                    <!-- Giá biến thể, giá khuyến mãi biến thể và số lượng -->
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label for="variant_price[]" class="form-label-title">Giá biến
                                thể</label>
                            <input type="text" name="variant_price[]" class="form-control"
                                id="variant_price[]" placeholder="Nhập giá sản phẩm">
                        </div>

                        <div class="col-md-4">
                            <label for="variant_sale_price[]" class="form-label-title">Giá
                                khuyến mãi biến thể
                            </label>
                            <input type="text" name="variant_sale_price[]" class="form-control"
                                id="variant_sale_price[]" placeholder="Nhập giá khuyến mãi">
                        </div>

                        <div class="col-md-4">
                            <label for="variant_quantity[]" class="form-label-title">Số
                                lượng</label>
                            <input type="number" name="variant_quantity[]" class="form-control"
                                id="variant_quantity[]" placeholder="Nhập số lượng">
                        </div>
                    </div>
                </div>
        `
        container.appendChild(newVariant)
    })
    //form check variant có hoặc không
    document.getElementById('has_variant').addEventListener('change', function () {
        const variantSection = document.getElementById('variant')
        if (this.checked) {
            variantSection.style.display = 'block'
        } else {
            variantSection.style.display = 'none'
        }
    })
    //check variant-button có hoặc không
    document.getElementById('has_variant').addEventListener('change', function () {
        const variantSection = document.getElementById('variant-button')
        if (this.checked) {
            variantSection.style.display = 'block'
        } else {
            variantSection.style.display = 'none'
        }
    })

    //Hiện ảnh đã chọn
    document.getElementById('image').addEventListener('change', function (e) {
        const reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById('preview-image').src = e.target.result;
            document.getElementById('preview-image').style.display = 'block';
        };
        reader.readAsDataURL(this.files[0]);
    });

</script>

<!--Xóa session -->

<?php include '../views/admin/layout/footer.php' ?>