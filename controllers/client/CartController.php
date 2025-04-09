<?php
require_once '../models/client/Cart.php';

class CartController extends Cart
{

    public function index()
    {
        $carts = $this->getAllCart();
        include '../views/client/profile/cart.php';
    }

    public function getCartbyUser(){
        
    }
    public function addToCartOrBuyNow(): void
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add_to_cart'])) {
            if (empty($_POST['variant_id'])) {
                $_SESSION['error'] = 'Vui lòng chọn sản phẩm và số lượng.';
                header('Location: ' . $_SERVER['HTTP_REFERER']);
                exit();
            }
            // Kiểm tra sản phẩm đã tồn tại trong giỏ hàng hay chưa
            $checkCart = $this->checkCart($_SESSION['user']['user_id'], $_POST['product_id'], $_POST['variant_id']);
            if ($checkCart) {
                // Nếu tồn tại, cập nhật số lượng
                $newQuantity = $checkCart['quantity'] + $_POST['quantity'];
                $updateCart = $this->updateCart(
                    $_SESSION['user']['user_id'],
                    $_POST['product_id'],
                    $_POST['variant_id'],
                    $newQuantity
                );

                if ($updateCart) {
                    $_SESSION['success'] = 'Cập nhật giỏ hàng thành công.';
                } else {
                    $_SESSION['error'] = 'Lỗi khi cập nhật giỏ hàng.';
                }
            } else {
                // Nếu chưa tồn tại, thêm sản phẩm mới
                $addToCart = $this->addToCart(
                    $_SESSION['user']['user_id'],
                    $_POST['product_id'],
                    $_POST['variant_id'],
                    $_POST['quantity']
                );

                if ($addToCart) {
                    $_SESSION['success'] = 'Thêm vào giỏ hàng thành công.';
                } else {
                    $_SESSION['error'] = 'Lỗi khi thêm sản phẩm vào giỏ hàng.';
                }
            }

            // Quay lại trang trước
            header('Location: ' . $_SERVER['HTTP_REFERER']);
            exit();
        }
    }

    public function update()
    {
        if (isset($_SERVER['REQUEST_METHOD']) == 'POST' && isset($_POST['update_cart'])) {
            if (isset($_POST['quantity'])) {
                foreach ($_POST['quantity'] as $cart_id => $quantity) {
                    $this->updateCartById($cart_id, $quantity);
                }
                header('Location: ' . $_SERVER['HTTP_REFERER']);
                $_SESSION['success'] = 'Cập nhật giỏ hàng thành công';
                exit();
            }
        }
    }
    public function delete()
    {
        try {
            $this->deleteCart($_GET['cart_id']);
            $_SESSION['success'] = 'Xóa sản phẩm trong giỏ hàng thành công';
            header('Location: ' . $_SERVER['HTTP_REFERER']);
            exit();
        } catch (\Throwable $th) {
            $_SESSION['error'] = 'Xóa sản phẩm trong giỏ hàng thất bại';
            header('Location: ' . $_SERVER['HTTP_REFERER']);
            exit();
        }
    }
}