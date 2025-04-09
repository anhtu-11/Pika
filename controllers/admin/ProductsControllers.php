<?php
require_once '../models/admin/ProductsModels.php';

class ProductsAdminController extends ProductsAdminModle
{
    public function listProduct()
    {
        $products = (new ProductsAdminModle)->listProducts();
        include '../views/admin/products/listProducts.php';
    }

    public function addProducts()
    {
        $categories = $this->getAllCategories();
        $brands = $this->getAllBrands();
        $colors = $this->getAllColors();

        include '../views/admin/products/addProducts.php';
    }
    public function saveAddProducts()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['saveProduct'])) {
            $errors = [];
            $data = $_POST; // Lưu toàn bộ dữ liệu người dùng nhập

            // Kiểm tra lỗi (với các trường khác)
            if (empty($data['name'])) {
                $errors['name'] = 'Vui lòng nhập tên sản phẩm';
            }
            if (empty($data['price'])) {
                $errors['price'] = 'Vui lòng nhập giá sản phẩm';
            }
            if (empty($data['sale_price'])) {
                $errors['sale_price'] = 'Vui lòng nhập giá khuyến mãi sản phẩm';
            }
            if (empty($data['description'])) {
                $errors['description'] = 'Vui lòng nhập miêu tả sản phẩm';
            }

            // Kiểm tra lỗi cho biến thể
            if (isset($data['has_variant'])) {
                foreach ($data['variant_quantity'] as $key => $variant_quantity) {
                    if (empty($variant_quantity)) {
                        $errors['variant_quantity'][$key] = 'Vui lòng nhập số lượng của biến thể ' . ($key + 1);
                    }
                }
                foreach ($data['variant_price'] as $key => $variant_price) {
                    if (empty($variant_price)) {
                        $errors['variant_price'][$key] = 'Vui lòng nhập giá của biến thể ' . ($key + 1);
                    }
                }
                foreach ($data['variant_sale_price'] as $key => $variant_sale_price) {
                    if (empty($variant_sale_price)) {
                        $errors['variant_sale_price'][$key] = 'Vui lòng nhập giá khuyến mãi của biến thể ' . ($key + 1);
                    }
                }
                // Kiểm tra màu sắc của các biến thể
                if (isset($data['variant_color']) && is_array($data['variant_color'])) {
                    foreach ($data['variant_color'] as $key => $variant_color) {
                        if (empty($variant_color)) {
                            $errors['variant_color'][$key] = 'Vui lòng chọn màu của biến thể ' . ($key + 1);
                        }
                    }
                } else {
                    $errors['variant_color'] = 'Vui lòng chọn ít nhất một màu cho sản phẩm.';
                }
            }

            // Lưu lỗi và dữ liệu cũ vào session
            $_SESSION['errors'] = $errors;
            $_SESSION['old_data'] = $data;

            if ($errors) {
                header('Location: index.php?act=add-products');
                exit;
            }

            // Tiến hành lưu sản phẩm và biến thể
            $file = $_FILES['image'];
            $file_name = basename($file['name']);
            $extension = pathinfo($file_name, PATHINFO_EXTENSION);
            $base_name = preg_replace('/[^a-zA-Z0-9]/', '', pathinfo($file_name, PATHINFO_FILENAME));
            $image = uniqid() . '-' . $base_name . '.' . $extension;

            if (move_uploaded_file($file['tmp_name'], './images/product/' . $image)) {
                $addProduct = $this->addProductsModle(
                    $_POST['name'],
                    $_POST['category_id'],
                    $_POST['brand_id'],
                    $_POST['price'],
                    $_POST['sale_price'],
                    $_POST['description'],
                    $image,
                    $_POST['slug']
                );
                if ($addProduct) {
                    $product_id = $this->getLastInsertId();
                    if (isset($_POST['variant_color']) && is_array($_POST['variant_color'])) {
                        foreach ($_POST['variant_color'] as $key => $variant_color) {
                            $addProductVariant = $this->addProducts_Variant(
                                $product_id,
                                $variant_color,  // Dùng trực tiếp variant_color thay vì variant_color_id
                                $_POST['variant_price'][$key],
                                $_POST['variant_sale_price'][$key],
                                $_POST['variant_quantity'][$key]
                            );
                        }
                    }
                    if (!empty($_FILES['gallery_image']['name'][0])) {
                        $file = $_FILES['gallery_image'];
                        for ($i = 0; $i < count($file['name']); $i++) {
                            $file_name = basename($file['name'][$i]); // Lấy tên file
                            $extension = pathinfo($file_name, PATHINFO_EXTENSION); // Lấy phần mở rộng của file
                            $base_name = preg_replace('/[^a-zA-Z0-9]/', '', pathinfo($file_name, PATHINFO_FILENAME)); // Xử lý tên file
                            // Tạo tên file mới
                            $gallery_image = uniqid() . '-' . $base_name . '.' . $extension;
                            move_uploaded_file($file['tmp_name'][$i], './images/gallery/' . $gallery_image);
                            $this->addProduct_Gallery($product_id, $gallery_image);
                        }
                    }

                    // Sau khi thêm sản phẩm thành công, chuyển hướng về trang danh sách sản phẩm và xóa các session


                    unset($_SESSION['errors']);
                    unset($_SESSION['old_data']);

                    $_SESSION['success'] = 'Thêm sản phẩm thành công';
                    header('Location: index.php?act=list-products');
                    exit;
                }
            }
            $_SESSION['errors'] = 'Thêm sản phẩm thất bại';
            header('Location:' . $_SERVER['HTTP_REFERER']);
            exit;
        }
    }
    public function saveEditProduct()
    {
        $id = $_GET['id'];
        $products = $this->getProductById($id);
        $variants = $this->getProductVariantByid($_GET['id']);
        $galleries = $this->getProductGalleryByid($_GET['id']);
        $categories = $this->getAllCategories();
        $brands = $this->getAllBrands();
        $colors = $this->getAllColors();

        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['saveEditProduct'])) {
            $errors = [];
            $data = $_POST; // Lưu toàn bộ dữ liệu người dùng nhập

            // Kiểm tra lỗi (với các trường khác)
            if (empty($data['name'])) {
                $errors['name'] = 'Vui lòng nhập tên sản phẩm';
            }
            if (empty($data['price'])) {
                $errors['price'] = 'Vui lòng nhập giá sản phẩm';
            }
            if (empty($data['sale_price'])) {
                $errors['sale_price'] = 'Vui lòng nhập giá khuyến mãi sản phẩm';
            }
            if (empty($data['description'])) {
                $errors['description'] = 'Vui lòng nhập miêu tả sản phẩm';
            }

            // Kiểm tra lỗi cho biến thể
            if (isset($data['has_variant'])) {
                foreach ($data['variant_quantity'] as $key => $variant_quantity) {
                    if (empty($variant_quantity)) {
                        $errors['variant_quantity'][$key] = 'Vui lòng nhập số lượng của biến thể ' . ($key + 1);
                    }
                }
                foreach ($data['variant_price'] as $key => $variant_price) {
                    if (empty($variant_price)) {
                        $errors['variant_price'][$key] = 'Vui lòng nhập giá của biến thể ' . ($key + 1);
                    }
                }
                foreach ($data['variant_sale_price'] as $key => $variant_sale_price) {
                    if (empty($variant_sale_price)) {
                        $errors['variant_sale_price'][$key] = 'Vui lòng nhập giá khuyến mãi của biến thể ' . ($key + 1);
                    }
                }
                // Kiểm tra màu sắc của các biến thể
                if (isset($data['variant_color']) && is_array($data['variant_color'])) {
                    foreach ($data['variant_color'] as $key => $variant_color) {
                        if (empty($variant_color)) {
                            $errors['variant_color'][$key] = 'Vui lòng chọn màu của biến thể ' . ($key + 1);
                        }
                    }
                } else {
                    $errors['variant_color'] = 'Vui lòng chọn ít nhất một màu cho sản phẩm.';
                }
            }

            // Lưu lỗi và dữ liệu cũ vào session
            $_SESSION['errors'] = $errors;
            $_SESSION['old_data'] = $data;

            $file = $_FILES['image'];
            $file_name = basename($file['name']);
            $extension = pathinfo($file_name, PATHINFO_EXTENSION);
            $base_name = preg_replace('/[^a-zA-Z0-9]/', '', pathinfo($file_name, PATHINFO_FILENAME));
            $image = uniqid() . '-' . $base_name . '.' . $extension;

            if ($file['size'] > 0) {
                if (move_uploaded_file($file['tmp_name'], './images/product/' . $image)) {
                    // Xóa ảnh cũ nếu có
                    if (isset($_POST['old_product_image']) && file_exists('./images/product/' . $_POST['old_product_image'])) {
                        unlink('./images/product/' . $_POST['old_product_image']);
                    }
                } else {
                    // Thêm thông báo lỗi nếu file không tải lên được
                    $_SESSION['error'] = 'Có lỗi khi tải ảnh lên.';
                }
            } else {
                // Nếu không có ảnh mới, giữ ảnh cũ
                $image = isset($_POST['old_product_image']) ? $_POST['old_product_image'] : '';
            }

            $updateProduct = $this->updateProduct(
                $_GET['id'],
                $_POST['name'],
                $_POST['category_id'],
                $_POST['brand_id'],
                $_POST['price'],
                $_POST['sale_price'],
                $_POST['description'],
                $image,
                $_POST['slug']
            );
            if ($updateProduct) {

                // Inside the saveEditProduct method
                if (isset($_POST['variant_color'])) {
                    foreach ($_POST['variant_color'] as $key => $variant_color) {
                        // Ensure the color is valid
                        if (empty($variant_color)) {
                            $errors['variant_color'][$key] = 'Vui lòng chọn màu của biến thể ' . ($key + 1);
                        }

                        $variant_color_id = $variant_color;  // Assuming variant_color contains the correct ID

                        // Now check prices and quantities for variants
                        if (isset($_POST['variant_id'][$key]) && !empty($_POST['variant_id'][$key])) {
                            // Update variant
                            $this->updateVariant(
                                $_POST['variant_id'][$key],
                                $_GET['id'],
                                $variant_color_id,
                                $_POST['variant_price'][$key],
                                $_POST['variant_sale_price'][$key],
                                $_POST['variant_quantity'][$key]
                            );
                        } else {
                            // Add new variant
                            $this->addProducts_Variant(
                                $_GET['id'],
                                $variant_color_id,
                                $_POST['variant_price'][$key],
                                $_POST['variant_sale_price'][$key],
                                $_POST['variant_quantity'][$key]
                            );
                        }
                    }
                }


                if (!empty($_FILES['gallery_image']['name'][0])) {
                    $file = $_FILES['gallery_image'];
                    for ($i = 0; $i < count($file['name']); $i++) {
                        $file_name = basename($file['name'][$i]);
                        $extension = pathinfo($file_name, PATHINFO_EXTENSION);
                        $base_name = preg_replace('/[^a-zA-Z0-9]/', '', pathinfo($file_name, PATHINFO_FILENAME));
                        $gallery_image = uniqid() . '-' . $base_name . '.' . $extension;

                        if (isset($_POST['old_gallery_image']) && file_exists('./images/gallery/' . $_POST['old_gallery_image'])) {
                            unlink('./images/gallery/' . $_POST['old_gallery_image']);
                        }
                        move_uploaded_file($file['tmp_name'][$i], './images/gallery/' . $gallery_image);
                        $this->addProduct_Gallery($_GET['id'], $gallery_image);
                    }
                } else {
                    $gallery_image = $_POST['old_gallery_image'];
                }

                $_SESSION['success'] = 'Sản phẩm đã được cập nhật thành công!';
                header("Location: index.php?act=list-products");
            }
        }
        include '../views/admin/products/editProducts.php';
    }


}