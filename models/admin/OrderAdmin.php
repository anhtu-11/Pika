<?php
require_once '../connect/connect.php';

class OrderAdmin extends Connect
{
    public function getAllOrdersWithDetails()
    {
        $sql = "SELECT o.order_id, o.user_id, o.total, o.created_at, o.status,
                       u.name AS user_name, u.avatar AS user_avatar,
                       GROUP_CONCAT(p.name) AS product_names,
                       GROUP_CONCAT(p.image) AS product_images
                FROM orders o
                LEFT JOIN users u ON o.user_id = u.user_id
                LEFT JOIN order_detail od ON o.order_id = od.order_id
                LEFT JOIN products p ON od.product_id = p.product_id
                GROUP BY o.order_id, o.user_id, o.total, o.created_at, o.status, u.name, u.avatar";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getOrderDetailsById($order_id)
    {
        $sql = "SELECT o.order_id, o.user_id, o.total, o.created_at, o.status,
                   u.name AS user_name, u.avatar AS user_avatar,
                   od.amount, p.name AS product_name, p.image AS product_image, p.sale_price
            FROM orders o
            JOIN users u ON o.user_id = u.user_id
            JOIN order_detail od ON o.order_id = od.order_id
            JOIN products p ON od.product_id = p.product_id
            WHERE o.order_id = ?";

        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$order_id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }




}