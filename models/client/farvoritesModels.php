<?php
require_once '../connect/connect.php';

class FavoritesModels extends Connect
{
    public function addFavoritesProduct($user_id, $product_id)
    {
        $sql = "INSERT INTO favorites (user_id, product_id, created_at) VALUES (:user_id, :product_id, CURRENT_TIMESTAMP)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->bindParam(':user_id', $user_id);
        $stmt->bindParam(':product_id', $product_id);
        return $stmt->execute();
    }
    public function removeFavorite($userId, $productId)
    {
        $sql = "DELETE FROM favorites WHERE user_id = :user_id AND product_id = :product_id";
        $stmt = $this->connect()->prepare($sql);
        $stmt->bindParam(':user_id', $userId);
        $stmt->bindParam(':product_id', $productId);
        return $stmt->execute();
    }

    function isProductInFavorites($product_id, $user_id)
    {
        $sql = "SELECT COUNT(*) FROM favorites WHERE user_id = :user_id AND product_id = :product_id";
        $stmt = $this->connect()->prepare($sql);
        $stmt->bindParam(':user_id', $user_id);
        $stmt->bindParam(':product_id', $product_id);
        $stmt->execute();

        return $stmt->fetchColumn() > 0;
    }

    public function getAllByUserFavorites($user_id)
    {
        $sql = "SELECT f.*, p.name AS product_name, p.image AS product_image 
                FROM favorites f
                INNER JOIN products p ON f.product_id = p.product_id
                WHERE f.user_id = ?";

        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$user_id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


}
