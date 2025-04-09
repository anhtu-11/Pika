<?php
require_once '../models/admin/BrandsModels.php';

class BrandsControllers extends BrandsModels
{
    public function listBrands()
    {
        $list_Brands = (new BrandsModels())->getAllBrands();
        include '../views/admin/brands/listBrands.php';
    }

    public function saveAddBrand()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['addBrand'])) {
            $errors = [];
            if (empty($_POST['name'])) {
                $errors['name'] = 'Vui lòng nhập tên thương hiệu';
            }
            if (empty($_POST['description'])) {
                $errors['description'] = 'Vui lòng nhập miêu tả';
            }
            if (!isset($_FILES['logo']) || $_FILES['logo']['error'] !== UPLOAD_ERR_OK) {
                $errors['logo'] = 'Vui lòng chọn logo';
            }

            $_SESSION['errors'] = $errors;

            $file = $_FILES['logo'];
            $logo = $file['name'];
            if (move_uploaded_file($file['tmp_name'], './images/brand/' . $logo)) {
                $addCategory = $this->addBrand($_POST['name'], $logo, $_POST['description']);
                if ($addCategory) {
                    $_SESSION['success'] = 'Thêm thương hiệu thành công';
                    header('Location: index.php?act=add-brands');
                    exit;
                } else {
                    $_SESSION['errors'] = 'Thêm thương hiệu thất bại';
                    header('Location:' . $_SERVER['HTTP_REFERER']);
                    exit;
                }
            }
        }
        include '../views/admin/brands/addBrands.php';
    }

    public function brandById()
    {
        $id = $_GET['brand_id'];
        $getBrand = $this->getBrandById($id);
        if ($getBrand) {
            return $getBrand;
        } else {
            $_SESSION['error'] = 'Không tìm thấy Thương hiệu';
        }
    }

    public function saveEditBrand()
    {
        $id = $_GET['brand_id'];
        $getBrand = $this->getBrandById($id);

        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['saveEditBrand'])) {
            $errors = [];
            if (empty($_POST['name'])) {
                $errors['name'] = 'Vui lòng nhập tên thương hiệu';
            }
            if (empty($_POST['description'])) {
                $errors['description'] = 'Vui lòng nhập miêu tả';
            }
            if (!isset($_FILES['logo']) || $_FILES['logo']['error'] !== UPLOAD_ERR_OK) {
                $errors['logo'] = 'Vui lòng chọn logo';
            }

            $_SESSION['errors'] = $errors;

            // Xử lý ảnh
            $file = $_FILES['logo'];
            $logo = $file['name'];

            if ($file['size'] > 0) {  // Nếu có ảnh mới
                move_uploaded_file($file['tmp_name'], './images/brand/' . $logo);

                // Xóa ảnh cũ nếu có
                if (!empty($_POST['old_logo']) && file_exists('./images/category/' . $_POST['old_logo'])) {
                    unlink('./images/brand/' . $_POST['old_logo']);
                }
            } else {
                // Nếu không có ảnh mới, giữ ảnh cũ
                $logo = $_POST['old_logo'];
            }

            // Cập nhật danh mục
            $updateCategory = $this->updateBrand($id, $_POST['name'], $logo, $_POST['description']);

            if ($updateCategory) {
                $_SESSION['success'] = 'Sửa thông tin Thương hiệu thành công';
                header('Location: index.php?act=list-brands');
                exit;
            } else {
                $_SESSION['errors'] = 'Sửa thông tin thương hiệu thất bại';
                header('Location:' . $_SERVER['HTTP_REFERER']);
                exit;
            }
        }

        include '../views/admin/brands/editBrands.php';
    }
}
