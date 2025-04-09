<?php include '../views/admin/layout/header.php' ?>
<?php include '../views/admin/layout/sidebar.php' ?>
<div class="page-body">
    <div class="title-header">
        <h5>Sửa thông tin sản phẩm </h5>
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
                                <?php foreach ($products as $product): ?>
                                    <form action="index.php?act=edit-products&id=<?= $product['product_id'] ?>"
                                        method="POST" class="theme-form theme-form-2 mega-form"
                                        enctype="multipart/form-data">
                                        <!-- Tên sản phẩm và danh mục, slug -->

                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <label for="name" class="form-label-title">Tên sản phẩm</label>
                                                <input type="text" name="name" class="form-control" id="name"
                                                    placeholder="Nhập tên sản phẩm" onkeyup="ChangeToSlug();"
                                                    value="<?= $product['product_name'] ?>">
                                                <?php if (isset($_SESSION['errors']['name'])): ?>
                                                    <p class="text-danger"><?= $_SESSION['errors']['name'] ?></p>
                                                <?php endif ?>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="slug" class="form-label-title">Slug</label>
                                                <input type="text" name="slug" class="form-control" id="slug"
                                                    placeholder="Nhập slug" value="<?= $product['product_slug'] ?>">
                                                <?php if (isset($_SESSION['errors']['slug'])): ?>
                                                    <p class="text-danger"><?= $_SESSION['errors']['slug'] ?></p>
                                                <?php endif ?>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <label for="category" class="form-label-title">Danh mục</label>
                                                <select class="form-select" id="category_id" name="category_id">
                                                    <option value="">Chọn danh mục</option>
                                                    <?php foreach ($categories as $category): ?>
                                                        <option value="<?= $category['category_id'] ?>"
                                                            <?= ($product['category_id'] == $category['category_id']) ? 'selected' : '' ?>>
                                                            <?= $category['name'] ?>
                                                        </option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="brand" class="form-label-title">Thương hiệu</label>
                                                <select class="form-select" id="brand_id" name="brand_id">
                                                    <option value="">Chọn thương hiệu</option>
                                                    <?php foreach ($brands as $brand): ?>
                                                        <option value="<?= $brand['brand_id'] ?>"
                                                            <?= ($product['brand_id'] == $brand['brand_id']) ? 'selected' : '' ?>>
                                                            <?= $brand['name'] ?>
                                                        </option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>

                                        <!-- Giá sản phẩm và giá khuyến mãi -->
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <label for="price" class="form-label-title">Giá sản phẩm</label>
                                                <input type="text" name="price" class="form-control" id="price"
                                                    placeholder="Nhập giá sản phẩm"
                                                    value="<?= $product['product_price'] ?>">
                                                <?php if (isset($_SESSION['errors']['price'])): ?>
                                                    <p class="text-danger"><?= $_SESSION['errors']['price'] ?></p>
                                                <?php endif ?>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="sale_price" class="form-label-title">Giá khuyến mãi</label>
                                                <input type="text" name="sale_price" class="form-control" id="sale_price"
                                                    placeholder="Nhập giá khuyến mãi"
                                                    value="<?= $product['product_sale_price'] ?>">
                                                <?php if (isset($_SESSION['errors']['sale_price'])): ?>
                                                    <p class="text-danger"><?= $_SESSION['errors']['sale_price'] ?></p>
                                                <?php endif ?>
                                            </div>
                                        </div>


                                        <!--Sản phẩm biến thể-->
                                        <div id="variant"
                                            style="display: <?= empty($value['variant_id']) ? 'block' : 'none' ?>;">
                                            <?php foreach ($variants as $key => $value): ?>
                                                <div class="border rounded px-4 py-4 mb-3" style="background-color: #f0f0f0;">
                                                    <!-- Kích thước và màu sắc -->
                                                    <div class="row mb-4">
                                                        <input type="hidden" name="variant_id"
                                                            value="<?= $value['variant_id'][$key] ?>">
                                                    </div>
                                                    <div class="row mb-4">
                                                        <div class="col-md-10">
                                                            <label class="form-label-title">Màu:</label>
                                                            <div class="d-flex flex-wrap col-md-12">
                                                                <!-- Lặp qua các màu sắc và tạo checkbox cho mỗi màu -->
                                                                <?php foreach ($colors as $color): ?>
                                                                    <div class="form-check me-3">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            name="variant_color[]"
                                                                            value="<?= $color['variant_color_id'] ?>"
                                                                            id="color_<?= $color['variant_color_id'] ?>"
                                                                            style="background-color: <?= $color['color_code'] ?>; width: 20px; height: 20px;"
                                                                            <?= ($value['variant_color_id'] == $color['variant_color_id']) ? 'checked' : '' ?>>
                                                                        <label class="form-check-label"
                                                                            for="color_<?= $color['variant_color_id'] ?>"></label>
                                                                    </div>
                                                                <?php endforeach; ?>

                                                            </div>

                                                            <?php if (isset($_SESSION['errors']['variant_color']) && is_array($_SESSION['errors']['variant_color'])): ?>
                                                                <?php foreach ($_SESSION['errors']['variant_color'] as $variant_color): ?>
                                                                    <p class="text-danger"><?= $variant_color ?></p>
                                                                <?php endforeach; ?>
                                                            <?php endif; ?>
                                                            <i>(*lưu ý: checkbox hiện viền màu xanh là đã chọn)</i>
                                                        </div>
                                                    </div>

                                                    <!-- Giá biến thể, giá khuyến mãi biến thể và số lượng -->
                                                    <div class="row mb-3">
                                                        <div class="col-md-4">
                                                            <label for="variant_price_<?= $key ?>" class="form-label-title">Giá
                                                                biến thể</label>
                                                            <input type="text" name="variant_price[<?= $key ?>]"
                                                                class="form-control" id="variant_price_<?= $key ?>"
                                                                placeholder="Nhập giá sản phẩm"
                                                                value="<?= $value['variant_price'] ?>">
                                                            <?php if (isset($_SESSION['errors']['variant_price']) && is_array($_SESSION['errors']['variant_price'])): ?>
                                                                <?php foreach ($_SESSION['errors']['variant_price'] as $variant_price): ?>
                                                                    <p class="text-danger"><?= $variant_price ?></p>
                                                                <?php endforeach; ?>
                                                            <?php endif; ?>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="variant_sale_price_<?= $key ?>"
                                                                class="form-label-title">Giá khuyến mãi biến thể</label>
                                                            <input type="text" name="variant_sale_price[<?= $key ?>]"
                                                                class="form-control" id="variant_sale_price_<?= $key ?>"
                                                                placeholder="Nhập giá khuyến mãi"
                                                                value="<?= $value['variant_sale_price'] ?>">
                                                            <?php if (isset($_SESSION['errors']['variant_sale_price']) && is_array($_SESSION['errors']['variant_sale_price'])): ?>
                                                                <?php foreach ($_SESSION['errors']['variant_sale_price'] as $variant_sale_price): ?>
                                                                    <p class="text-danger"><?= $variant_sale_price ?></p>
                                                                <?php endforeach; ?>
                                                            <?php endif; ?>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="variant_quantity_<?= $key ?>"
                                                                class="form-label-title">Số lượng</label>
                                                            <input type="number" name="variant_quantity[<?= $key ?>]"
                                                                class="form-control" id="variant_quantity_<?= $key ?>"
                                                                placeholder="Nhập số lượng"
                                                                value="<?= $value['variant_quantity'] ?>">
                                                            <?php if (isset($_SESSION['errors']['variant_quantity']) && is_array($_SESSION['errors']['variant_quantity'])): ?>
                                                                <?php foreach ($_SESSION['errors']['variant_quantity'] as $variant_quantity): ?>
                                                                    <p class="text-danger"><?= $variant_quantity ?></p>
                                                                <?php endforeach; ?>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
                                        </div>



                                        <div class="row justify-content-start" id="variant-button"
                                            style="display:<?= $$value['variant_id'] ? 'block' : 'none' ?>;">
                                            <div class="col-md-12 text-end">
                                                <button type="button" id="add-variant" class="btn btn-success">Thêm</button>
                                            </div>
                                        </div>



                                        <!-- Mô tả sản phẩm -->
                                        <div class="mb-3">
                                            <label for="description" class="form-label-title">Mô tả</label>
                                            <textarea name="description" class="form-control" id="description" rows="5"
                                                placeholder="Nhập mô tả sản phẩm"><?= $product['product_description'] ?></textarea>
                                            <?php if (isset($_SESSION['errors']['description'])): ?>
                                                <p class="text-danger"><?= $_SESSION['errors']['description'] ?></p>
                                            <?php endif ?>
                                        </div>

                                        <!-- Hình ảnh-->
                                        <div class="mb-4">
                                            <label class="form-label-title">Ảnh</label>
                                            <div class="d-flex align-items-start border p-3"
                                                style="background-color: #f8f9fa; border-radius: 5px;">
                                                <div class="col-sm-4">
                                                    <input id="image" class="form-control" type="file" name="image">
                                                    <input type="hidden" name="old_product_image" id="old_product_image"
                                                        value="<?= $product['product_image'] ?>">
                                                    <div class="sol-mb-6">
                                                        <img src="./images/product/<?= $product['product_image'] ?>" alt=""
                                                            width="200px">
                                                    </div>

                                                </div>
                                                <div class="mb-3 row align-items-start ms-3">
                                                    <img id="preview-image" src="#" alt="Preview"
                                                        style="max-width: 200px; display: none;">
                                                </div>
                                            </div>
                                        </div>


                                        <!--Galleries Product-->
                                        <div class="mb-4">
                                            <label class="form-label-title">Thêm nhiều ảnh sản phẩm </label>
                                            <div class="d-flex align-items-start border p-3"
                                                style="background-color: #f8f9fa; border-radius: 5px;">
                                                <div class="col-sm-12">
                                                    <input id="moreImage" class="form-control" type="file"
                                                        name="gallery_image[]" multiple accept="image/*">
                                                    <!-- Hiển thị ảnh đã có trong gallery -->
                                                    <?php foreach ($galleries as $gallery): ?>
                                                        <img src="./images/gallery/<?= $gallery['gallery_image'] ?>" alt=""
                                                            width="100px" style="margin-right: 5px;">
                                                        <input type="hidden" name="old_gallery_image[]"
                                                            value="<?= $gallery['gallery_image'] ?>">
                                                    <?php endforeach ?>
                                                    <br>
                                                    <p><strong>Ảnh mới:</strong></p>
                                                    <div id="preview-container" class="d-flex flex-wrap">
                                                        <!-- Ảnh mới sẽ được thêm vào đây -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Nút lưu -->
                                        <div class="row justify-content-start">
                                            <div class="col-md-10">
                                                <button type="submit" name="saveEditProduct" class="btn btn-primary"
                                                    id="button-check">Aplly</button>
                                            </div>
                                        </div>
                                    </form>
                                <?php endforeach ?>
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

    //Hiện ảnh đã chọn
    document.getElementById('image').addEventListener('change', function (e) {
        const reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById('preview-image').src = e.target.result;
            document.getElementById('preview-image').style.display = 'block';
        };
        reader.readAsDataURL(this.files[0]);
    });
    document.getElementById('moreImage').addEventListener('change', function (e) {
        const previewContainer = document.getElementById('preview-container');

        // Duyệt qua từng file đã chọn
        Array.from(this.files).forEach(file => {
            const reader = new FileReader();
            reader.onload = function (event) {
                const img = document.createElement('img');
                img.src = event.target.result;
                img.style.maxWidth = '100px';
                img.style.marginRight = '5px';
                previewContainer.appendChild(img); // Thêm ảnh vào container
            };
            reader.readAsDataURL(file);
        });
    });



</script>

<!--Xóa session -->

<?php include '../views/admin/layout/footer.php' ?>