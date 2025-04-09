<?php
require_once '../connect/connect.php';

class CommentAdminModels extends Connect
{
    public function getAllComments()
    {
        $sql = "SELECT 
                    c.product_id AS product_id,
                    c.comment_id AS comment_id,
                    c.user_id AS user_id,
                    c.status AS status,
                    c.created_at AS created_at,
                    c.rating AS rating,
                    p.image AS product_image,
                    p.name AS product_name,
                    u.name AS user_name,
                    u.avatar AS user_avatar
                FROM comments c
                LEFT JOIN products p ON c.product_id = p.product_id
                LEFT JOIN users u ON c.user_id = u.user_id";

        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function editStatus($comment_id)
    {
        $sql = "SELECT status FROM comments WHERE comment_id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$comment_id]);
        $currentStatus = $stmt->fetchColumn();

        if ($currentStatus === 'hidden') {
            $newStatus = 'active';
            $_SESSION['success'] = 'Hiện thành công';
        } elseif ($currentStatus === 'active') {
            $newStatus = 'hidden';
            $_SESSION['success'] = 'Ẩn thành công';
        } else {
            $newStatus = 'active';
            $_SESSION['success'] = 'Xác nhận thành công';
        }

        $updateSql = "UPDATE comments SET status = ? WHERE comment_id = ?";
        $updateStmt = $this->connect()->prepare($updateSql);
        $updateStmt->execute([$newStatus, $comment_id]);

        return $updateStmt->rowCount() > 0;
    }
}

