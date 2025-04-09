<?php
require_once '../models/client/User.php';
class AuthController extends User
{
    public function registers(): void
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])) {
            $errors = [];
            $data = $_POST;
            if (empty($data['name'])) {
                $errors['name'] = 'Vui lòng nhập tên người dùng';
            }
            if (empty($data['email']) || !filter_var(value: $data['email'], filter: FILTER_VALIDATE_EMAIL)) {
                $errors['email'] = 'Email không đúng định dạng';
            }
            if (empty($data['password']) || strlen(string: $data['password']) < 6) {
                $errors['password'] = 'Mật khẩu phải ít nhất 6 ký tự';
            }

            $_SESSION['errors'] = $errors;
            $_SESSION['old_data'] = $data;

            if (count(value: $errors) > 0) {
                header(header: 'Location: ?act=register');
                exit();
            }

            $register = $this->register(name: $_POST['name'], email: $_POST['email'], password: $_POST['password']);
            if ($register) {
                $_SESSION['success'] = 'Tạo tài khoản thành công. Vui lòng đăng nhập';
                header(header: 'Location: ?act=login');
                exit();
            } else {
                $_SESSION['errors'] = 'Tạo tài khoản thất bại. Vui lòng thử lại';
                header(header: 'Location: ' . $_SERVER['HTTP_REFERER']);
                exit();
            }

        }
        include '../views/client/auth/register.php';
    }
    public function signin(): void
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
            $errors = [];
            $data = $_POST;
            if (empty($_POST['email']) || !filter_var(value: $_POST['email'], filter: FILTER_VALIDATE_EMAIL)) {
                $errors['email'] = 'Email không đúng định dạng';
            }
            if (empty($_POST['password']) || strlen(string: $_POST['password']) < 6) {
                $errors['password'] = 'Mật khẩu phải ít nhất 6 ký tự';
            }
            $_SESSION['errors'] = $errors;

            if (count(value: $errors) > 0) {
                header(header: 'Location:' . $_SERVER['HTTP_REFERER']);
                exit();
            }

            $user = $this->login($_POST['email'], $_POST['password']);
            if ($user) {
                $_SESSION['user'] = $user;
                if ($user['role_id'] === 1) {
                    $_SESSION['success'] = 'Đăng nhập thanh cong';
                    $userId = $user['user_id'];
                    $userEmail = $user['email'];
                    $userRole = $user['role_id'];
                    header(header: 'Location:index.php?act=client');
                    exit;
                } elseif ($user['role_id'] === 2) {
                    $_SESSION['success'] = 'Đăng nhập thanh cong';
                    header(header: 'Location:index.php?act=admin');
                    exit;
                }
            } else {
                $_SESSION['errors'] = 'Đăng nhập that bai';
                header(header: 'Location: ' . $_SERVER['HTTP_REFERER']);
                exit();
            }
        }
        include '../views/client/auth/login.php';
    }

    public function logout(): void
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        unset($_SESSION['user']);
        unset($_SESSION['success']);
        header('Location: index.php?act=client');
        exit();
    }


    public function saveUpdateContact()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update_contact'])) {
            $errors = [];
            $data = $_POST;

            if (empty($data['email']) || !filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                $errors['email'] = 'Email không đúng định dạng';
            }
            if (empty($data['phone'])) {
                $errors['phone'] = 'Vui lòng nhập số điện thoại';
            }

            $_SESSION['errors'] = $errors;

            if (count($errors) > 0) {
                header('Location: ' . $_SERVER['HTTP_REFERER']);
                exit();
            }

            $userId = $_SESSION['user']['user_id'];
            $update = $this->updateContact($userId, $data['email'], $data['phone']);
            if ($update) {
                $_SESSION['success'] = 'Cập nhật thông tin thành công';
                header('Location: ?act=update-profile');
                if ($update) {
                    $_SESSION['user']['email'] = $data['email'];
                    $_SESSION['user']['phone'] = $data['phone'];
                    $_SESSION['user']['update_at'] = date('Y-m-d H:i:s');
                    exit();
                } else {
                    $_SESSION['errors'] = 'Cập nhật thông tin thất bại. Vui lòng thử lại';
                    header('Location: ' . $_SERVER['HTTP_REFERER']);
                    exit();
                }
            }
        }
    }

    public function saveUpdataAvatar()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['avatar'])) {
            $errors = [];
            $file = $_FILES['avatar'];
            if ($file['error'] !== UPLOAD_ERR_OK) {
                $errors[] = 'Đã có lỗi xảy ra khi tải lên tệp.';
            }

            if (empty($errors)) {
                $userId = $_SESSION['user']['user_id'];
                $fileName = uniqid() . '-' . basename($file['name']);

                if (move_uploaded_file($file['tmp_name'], './images/avatar/' . $fileName)) {
                    $this->updateAvatar($userId, $fileName);
                    $_SESSION['user']['avatar'] = $fileName;
                    $_SESSION['user']['update_at'] = date('Y-m-d H:i:s');
                    $_SESSION['success'] = 'Cập nhật ảnh đại diện thành công.';
                    header('Location: ?act=update-profile');
                    exit;
                } else {
                    $_SESSION['errors'][] = 'Không thể di chuyển tệp đến thư mục lưu trữ.';
                }
            } else {
                $_SESSION['errors'] = $errors;
            }

            header('Location: ' . $_SERVER['HTTP_REFERER']);
            exit();
        }
    }

    public function saveUpdateAddress()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update_address'])) {
            $data = $_POST;

            $userId = $_SESSION['user']['user_id'];
            $update = $this->updateAddress($userId, $data['address']);
            if ($update) {
                $_SESSION['success'] = 'Cập nhật thông tin thành công';
                header('Location: ?act=update-profile');
                if ($update) {
                    $_SESSION['user']['address'] = $data['address'];
                    $_SESSION['user']['update_at'] = date('Y-m-d H:i:s');
                }
                exit();
            } else {
                $_SESSION['errors'] = 'Cập nhật thông tin thất bại. Vui lòng thử lại';
                header('Location: ' . $_SERVER['HTTP_REFERER']);
                exit();
            }
        }
    }
}