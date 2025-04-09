<?php
require_once '../models/client/OrderModels.php';


class OrderController extends OrderModels
{
    public function checkOut()
    {
        $user_id = $_SESSION['user']['user_id'];
        $cart_items = $this->getAllCart($user_id);
        $total = 0;
        foreach ($cart_items as $item) {
            $price = $item['product_variant_sale_price'] ?: $item['product_sale_price'];
            $total += $price * $item['quantity'];
        }

        $order_id = $this->createOrder($user_id, $total);

        foreach ($cart_items as $item) {
            $this->createDetailOrder($order_id, $item['product_id'], $item['variant_id'], $item['quantity']);
        }

        $_SESSION['success'] = 'Đã thêm sản phẩm vào danh sách yêu thích!';
        header('Location: ?act=edit_checkout&order_id=' . $order_id);

    }

    public function listOrder()
    {
        $user_id = $_SESSION['user']['user_id'];
        $orders = $this->getAllOrder($user_id);
        include '../views/client/profile/listOrder.php';

    }

    public function detailOrder()
    {
        $order_id = $_GET['order_id'];
        $order = $this->getOrderById($order_id);
        $coupons = $this->listCoupon();
        include '../views/client/profile/orderDetail.php';
    }

    public function saveEditOrder()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['saveOrder'])) {
            // Kiểm tra giá trị order_id
            $order_id = $_GET['order_id'];
            var_dump($order_id); // Kiểm tra giá trị

            // Lấy thông tin đơn hàng
            $order = $this->getOrderById($order_id);

            // Kiểm tra giá trị coupon_id
            $selectedCoupon = $_POST['coupon_id'] ?? '';
            var_dump($selectedCoupon); // Kiểm tra giá trị

            if (!empty($selectedCoupon)) {
                list($coupon_id, $coupon_value) = explode(':', $selectedCoupon);
                $coupon_value = floatval($coupon_value);
            } else {
                $coupon_id = null;
                $coupon_value = 0;
            }

            // Tính tổng
            $total = ($order['total'] * (100 - $coupon_value) / 100);

            // Kiểm tra giá trị note
            $note = $_POST['note'] ?? '';
            var_dump($note); // Kiểm tra giá trị

            // Kiểm tra trạng thái
            $status = $_POST['status'] ?? 'unpaid';
            var_dump($status); // Kiểm tra giá trị

            // Cập nhật đơn hàng
            $this->updateOrder($order_id, $coupon_id, $note, $status, $total);

            // Thông báo và chuyển hướng
            $_SESSION['success'] = 'Đặt hàng thành công!';
            header('Location:index.php?act=client');
            exit();
        }
    }



}