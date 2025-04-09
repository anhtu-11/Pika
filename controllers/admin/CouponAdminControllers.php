<?php
require_once '../models/admin/CouponModels.php';
class CouponAdminControllers extends Coupon
{
    public function index()
    {
        $listCoupons = $this->listCoupon();
        include "../views/admin/coupon/listCoupons.php";
    }

    public function create()
    {
        if (isset($_SERVER['REQUEST_METHOD']) == 'POST' && isset($_POST['coupon-create'])) {
            $errors = [];
            if (empty($_POST['name'])) {
                $errors['name'] = 'Vui lòng nhập tên';
            }
            if (empty($_POST['status'])) {
                $errors['status'] = 'Vui lòng nhập status';
            }
            if (empty($_POST['quantity'])) {
                $errors['quantity'] = 'Vui lòng nhập số lượng';
            }
            if (empty($_POST['coupon_value'])) {
                $errors['coupon_value'] = 'Vui lòng chọn coupon_value';
            }
            if (empty($_POST['type'])) {
                $errors['type'] = 'Vui lòng chọn type';
            }
            if (empty($_POST['coupon_code'])) {
                $errors['coupon_code'] = 'Vui lòng chọn coupon_code';
            }
            if (empty($_POST['start_date']) && $_POST['start_date'] < date('Y-m-d')) {
                $errors['start_date'] = 'Vui lòng chọn ngày bắt đầu';
            }
            if (empty($_POST['end_date']) && !empty($_POST['start_date']) && $_POST['end_date'] < $_POST['start_date']) {
                $errors['end_date'] = 'Vui lòng chọn ngày kết thúc';
            }

            $_SESSION['errors'] = $errors;
            if (count($errors) > 0) {
                $_SESSION['error'] = 'Vui lòng nhập đầy đủ dữ liệu';
                header('Location:' . $_SERVER['HTTP_REFERER']);
            }


            $coupon = $this->addCoupon(
                $_POST['name'],
                $_POST['start_date'],
                $_POST['end_date'],
                $_POST['quantity'],
                $_POST['status'],
                $_POST['coupon_code'],
                $_POST['type'],
                $_POST['coupon_value']
            );
            if ($coupon) {
                $_SESSION['success'] = 'Thêm mã giảm giá thành công';
                header("Location: ?act=coupon-list");
                exit();
            } else {
                $_SESSION['error'] = 'Thêm mã giảm giá không thành công, vui lòng kiểm tra lại!';
                header("Location:" . $_SERVER['HTTP_REFERER']);
                exit();
            }
        }
        include "../views/admin/coupon/createCoupons.php";
    }

    public function edit()
    {
        $coupon = $this->editCoupon();
        include "../views/admin/coupon/editCoupons.php";
    }

    public function update()
    {
        if (isset($_SERVER['REQUEST_METHOD']) == 'POST' && isset($_POST['coupon-update'])) {
            $errors = [];
            if (empty($_POST['name'])) {
                $errors['name'] = 'Vui lòng nhập tên';
            }
            if (empty($_POST['status'])) {
                $errors['status'] = 'Vui lòng nhập status';
            }
            if (empty($_POST['quantity'])) {
                $errors['quantity'] = 'Vui lòng nhập số lượng';
            }
            if (empty($_POST['coupon_value'])) {
                $errors['coupon_value'] = 'Vui lòng chọn coupon_value';
            }
            if (empty($_POST['type'])) {
                $errors['type'] = 'Vui lòng chọn type';
            }
            if (empty($_POST['coupon_code'])) {
                $errors['coupon_code'] = 'Vui lòng chọn coupon_code';
            }
            if (empty($_POST['start_date']) && $_POST['start_date'] < date('Y-m-d')) {
                $errors['start_date'] = 'Vui lòng chọn ngày bắt đầu';
            }
            if (empty($_POST['end_date']) && !empty($_POST['start_date']) && $_POST['end_date'] < $_POST['start_date']) {
                $errors['end_date'] = 'Vui lòng chọn ngày kết thúc';
            }

            $_SESSION['errors'] = $errors;
            if (count($errors) > 0) {
                $_SESSION['error'] = 'Vui lòng nhập đầy đủ dữ liệu';
                header('Location:' . $_SERVER['HTTP_REFERER']);
            }
            $updateCoupon = $this->updateCoupon(
                $_POST['name'],
                $_POST['start_date'],
                $_POST['end_date'],
                $_POST['quantity'],
                $_POST['status'],
                $_POST['coupon_code'],
                $_POST['type'],
                $_POST['coupon_value']
            );
            if ($updateCoupon) {
                $_SESSION['success'] = 'Cập nhật mã giảm giá thành công';
                header("Location: ?act=coupon-list");
                exit();
            } else {
                $_SESSION['error'] = 'Cập nhật giảm giá không thành công, vui lòng kiểm tra lại!';
                header("Location:" . $_SERVER['HTTP_REFERER']);
                exit();
            }
        }
    }
    public function delete()
    {
        try {
            $this->deteleCoupon();
            $_SESSION['success'] = 'Xóa mã giảm giá thành công';
            header('location: ?act=coupon-list');
            exit();
        } catch (\Throwable $th) {
            $_SESSION['error'] = 'Xóa mã giảm giá thất bại, vui lòng thử lại';
            header('location:' . $_SERVER['HTTP_REFERER']);
            exit();
        }
    }
}