<?php
require_once '../models/admin/UserModels.php';

class UsersControllers extends UserModels
{
    public function listUsers()
    {
        $users = $this->getAllUsers();
        include '../views/admin/users/listUsers.php';
    }

    public function updateRoleUser()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['user_id'])) {
            $user_id = $_POST['user_id'];

            try {
                $result = $this->updateRole($user_id);
                if ($result) {
                    $_SESSION['success'] = 'Cập nhật vai trò người dùng thành công.';
                    header('Location: index.php?act=listUsers');
                    exit;
                } else {
                    $_SESSION['errors'] = 'Không thể cập nhật vai trò. Người dùng không tồn tại hoặc đã có vai trò này.';
                    header('Location:' . $_SERVER['HTTP_REFERER']);
                    exit;
                }
            } catch (Exception $e) {
                $_SESSION['errors'] = 'Đã xảy ra lỗi: ' . $e->getMessage();
                header('Location:' . $_SERVER['HTTP_REFERER']);
                exit;
            }
        } else {
            $_SESSION['errors'] = 'Yêu cầu không hợp lệ.';
            header('Location: index.php?act=listUsers');
            exit;
        }
    }


}