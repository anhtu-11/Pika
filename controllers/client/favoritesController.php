<?php
require_once '../models/client/farvoritesModels.php';

class FavoritesController extends FavoritesModels
{
    public function addFavoriteProduct()
    {
        if (isset($_SESSION['user'])) {
            $user_id = $_SESSION['user']['user_id'];
            $product_id = isset($_GET['product_id']) ? $_GET['product_id'] : null;

            $isFavorite = $this->isProductInFavorites($product_id, $user_id);
            if (!$isFavorite) {
                $result = $this->addFavoritesProduct($user_id, $product_id);

                if ($result) {
                    $_SESSION['success'] = 'Đã thêm sản phẩm vào danh sách yêu thích!';
                } else {
                    $_SESSION['error'] = 'Đã xảy ra lỗi khi thêm sản phẩm vào danh sách yêu thích.';
                }
            } else {
                $result = $this->removeFavorite($user_id, $product_id);
                if ($result) {
                    $_SESSION['success'] = 'Đã xóa sản phẩm khỏi danh sách yêu thích!';
                } else {
                    $_SESSION['error'] = 'Đã xảy ra lỗi khi xóa sản phẩm khỏi danh sách yêu thích.';
                }
            }

            header('Location: ' . $_SERVER['HTTP_REFERER']);
            exit();
        } else {
            $_SESSION['error'] = 'Vui lòng đăng nhập để thêm sản phẩm vào danh sách yêu thích.';
            header('Location:' . $_SERVER['HTTP_REFERER']);
            exit();
        }
    }

    public function listLoveById()
    {
        $userId = $_SESSION['user']['user_id'];
        $loves = $this->getAllByUserFavorites($userId);
        include '../views/client/profile/listLove.php';
    }
}
