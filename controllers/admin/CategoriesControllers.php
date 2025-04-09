<?php
require_once '../models/admin/CategoriesModels.php';
class CategoryAdminController extends CategoryAdminModel
{
    public function listCategories()
    {
        $list_Categories = (new CategoryAdminModel())->listCategoriesAdmin();
        include '../views/admin/categories/listCategories.php';
    }

    public function saveAddCategory()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['addCategory'])) {
            $errors = [];
            if (empty($_POST['name'])) {
                $errors['name'] = 'Vui lòng nhập tên danh mục';
            }
            if (empty($_POST['status'])) {
                $errors['status'] = 'Vui lòng chọn trạng thái';
            }
            if (empty($_POST['description'])) {
                $errors['description'] = 'Vui lòng nhập miêu tả';
            }
            if (!isset($_FILES['image']) || $_FILES['image']['error'] !== UPLOAD_ERR_OK) {
                $errors['image'] = 'Vui lòng chọn ảnh';
            }

            $_SESSION['errors'] = $errors;

            $file = $_FILES['image'];
            $image = $file['name'];
            if (move_uploaded_file($file['tmp_name'], './images/category/' . $image)) {
                $addCategory = $this->addCategory($_POST['name'], $image, $_POST['status'], $_POST['description']);
                if ($addCategory) {
                    $_SESSION['success'] = 'Thêm danh mục thành công';
                    header('Location: index.php?act=list-categories');
                    exit;
                } else {
                    $_SESSION['errors'] = 'Thêm danh mục thất bại';
                    header('Location:' . $_SERVER['HTTP_REFERER']);
                    exit;
                }
            }
        }
        include '../views/admin/categories/addCategories.php';
    }

    public function getACategoryById()
    {
        $id = $_GET['category_id'];
        $getCategory = $this->getCategoryById($id);
        if ($getCategory) {
            return $getCategory;
        } else {
            $_SESSION['error'] = 'Không tìm thấy danh mục';
        }
    }

    public function saveEditCategory()
    {
        $id = $_GET['category_id'];
        $getCategory = $this->getCategoryById($id);

        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['saveEditCategory'])) {
            $errors = [];
            if (empty($_POST['name'])) {
                $errors['name'] = 'Vui lòng nhập tên danh mục';
            }
            if (empty($_POST['status'])) {
                $errors['status'] = 'Vui lòng chọn trạng thái';
            }
            if (empty($_POST['description'])) {
                $errors['description'] = 'Vui lòng nhập miêu tả';
            }

            $_SESSION['errors'] = $errors;

            // Xử lý ảnh
            $file = $_FILES['image'];
            $image = $file['name'];
            
            if ($file['size'] > 0) {  // Nếu có ảnh mới
                move_uploaded_file($file['tmp_name'], './images/category/' . $image);
                
                // Xóa ảnh cũ nếu có
                if (!empty($_POST['old_image']) && file_exists('./images/category/' . $_POST['old_image'])) {
                    unlink('./images/category/' . $_POST['old_image']);
                }
            } else {
                // Nếu không có ảnh mới, giữ ảnh cũ
                $image = $_POST['old_image'];
            }

            // Cập nhật danh mục
            $updateCategory = $this->updateCategory($id, $_POST['name'], $image, $_POST['status'], $_POST['description']);
            
            if ($updateCategory) {
                $_SESSION['success'] = 'Sửa danh mục thành công';
                header('Location: index.php?act=list-categories');
                exit;
            } else {
                $_SESSION['errors'] = 'Sửa danh mục thất bại';
                header('Location:' . $_SERVER['HTTP_REFERER']);
                exit;
            }
        }

        include '../views/admin/categories/editCategories.php';
    }
}
