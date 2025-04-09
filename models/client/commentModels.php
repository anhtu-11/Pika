<?php
require_once '../connect/connect.php';

class CommentModels extends Connect
{
    public function addComments($user_id, $product_id, $content, $rating)
    {
        $sql = "INSERT INTO comments (user_id, product_id, content, rating, created_at) VALUES (?,?,?,?,CURRENT_TIMESTAMP)";
        $stmt = $this->connect()->prepare($sql);
        return $stmt->execute([$user_id, $product_id, $content, $rating]);
    }

    public function getListComments($product_id)
    {
        $sql = "SELECT c.comment_id, c.product_id, c.content, c.created_at, c.rating, c.status,
                       u.name AS comment_name_user, u.avatar AS comment_avatar_user
                FROM comments c
                INNER JOIN users u ON c.user_id = u.user_id
                WHERE c.status = 'active' AND c.product_id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$product_id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getAllListComments($user_id)
    {
        $sql = "SELECT c.comment_id, c.product_id, c.content, c.created_at, c.rating, c.status, c.user_id, 
                       u.name AS comment_name_user, u.avatar AS comment_avatar_user,
                       p.name AS comment_name_product
                FROM comments c
                INNER JOIN users u ON c.user_id = u.user_id
                INNER JOIN products p ON c.product_id = p.product_id
                WHERE c.user_id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$user_id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }



}