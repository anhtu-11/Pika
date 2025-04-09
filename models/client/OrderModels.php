<?php
require_once '../connect/connect.php';

class OrderModels extends Connect
{
    public function createOrder($user_id, $total)
    {
        $sql = 'INSERT INTO orders (user_id, total,created_at) VALUES (?,?,CURRENT_TIMESTAMP)';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$user_id, $total]);
        return $this->connect()->lastInsertId();
    }

    public function getAllOrder($user_id)
    {
        $sql = "SELECT 
            o.order_id,
            o.user_id,
            o.total,
            o.created_at,
            o.status,
            c.coupon_value AS coupon_value,
            s.name AS user_name
        FROM orders o
        LEFT JOIN users s ON o.user_id = s.user_id
        LEFT JOIN coupon c ON o.coupon_id = c.coupon_id
        WHERE o.user_id = ?";

        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$user_id]);
        $orders = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($orders as &$order) {
            $order_id = $order['order_id'];
            $sql_products = "SELECT 
                od.order_detail_id,
                od.product_id,
                od.amount,
                p.name AS product_name,
                p.image AS product_image,
                p.sale_price AS sale_price,
                pv.variant_id AS variant_id,
                vc.color_name AS color_name
            FROM order_detail od
            LEFT JOIN products p ON od.product_id = p.product_id
            LEFT JOIN product_variants pv ON od.variant_id = pv.variant_id 
            INNER JOIN variant_colors vc ON pv.variant_color_id = vc.variant_color_id
            WHERE od.order_id = ?";

            $stmt_products = $this->connect()->prepare($sql_products);
            $stmt_products->execute([$order_id]);
            $order['products'] = $stmt_products->fetchAll(PDO::FETCH_ASSOC);
        }

        return $orders;
    }


    public function createDetailOrder($order_id, $product_id, $variant_id, $amount)
    {
        $sql = 'INSERT INTO order_detail (order_id, product_id, variant_id, amount) VALUES (?,?,?,?)';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$order_id, $product_id, $variant_id, $amount]);
    }

    public function getAllCart($user_id): array
    {
        $sql = 'SELECT  
            carts.cart_id as cart_id,
            products.name as product_name,
            products.product_id as product_id,
            products.image as product_image,
            products.slug as product_slug,
            products.sale_price as product_sale_price,
            product_variants.variant_price as product_variant_price,
            product_variants.variant_id as variant_id,
            product_variants.variant_sale_price as product_variant_sale_price,
            variant_colors.color_name as variant_color_name,
            carts.quantity as quantity
            FROM carts
            
            LEFT JOIN products ON carts.product_id = products.product_id
            LEFT JOIN product_variants ON product_variants.variant_id = carts.variant_id
            LEFT JOIN variant_colors ON product_variants.variant_color_id = variant_colors.variant_color_id
            WHERE carts.user_id = ?
            ';
        $stmt = $this->connect()->prepare(query: $sql);
        $stmt->execute(params: [$user_id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function listCoupon()
    {
        $sql = "SELECT * FROM `coupon`";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getOrderById($order_id)
    {
        $sql = "SELECT 
                o.order_id,
                o.user_id,
                o.total,
                o.created_at,
                o.status,
                od.order_detail_id,
                od.product_id,
                od.amount,
                s.name AS user_name,
                p.name AS product_name,
                p.image AS product_image,
                p.sale_price AS sale_price,
                pv.variant_id AS variant_id,
                vc.color_name AS color_name

            FROM orders o
            LEFT JOIN order_detail od ON o.order_id = od.order_id
            LEFT JOIN users s ON o.user_id = s.user_id
            LEFT JOIN products p ON od.product_id = p.product_id
            LEFT JOIN product_variants pv ON od.variant_id = pv.variant_id 
            INNER JOIN variant_colors vc ON pv.variant_color_id = vc.variant_color_id
            WHERE o.order_id = ?";

        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$order_id]);
        $orderDetails = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $order = [
            'order_id' => $orderDetails[0]['order_id'],
            'user_id' => $orderDetails[0]['user_id'],
            'total' => $orderDetails[0]['total'],
            'user_name' => $orderDetails[0]['user_name'],
            'created_at' => $orderDetails[0]['created_at'],
            'status' => $orderDetails[0]['status'],
            'details' => []
        ];

        foreach ($orderDetails as $detail) {
            $order['details'][] = [
                'order_detail_id' => $detail['order_detail_id'],
                'product_id' => $detail['product_id'],
                'amount' => $detail['amount'],
                'product_name' => $detail['product_name'],
                'product_image' => $detail['product_image'],
                'variant_id' => $detail['variant_id'],
                'color_name' => $detail['color_name'],
                'sale_price' => $detail['sale_price']
            ];
        }

        return $order;
    }
    public function updateOrder($order_id, $coupon_id, $note, $status, $total)
    {
        $sql = "UPDATE orders SET coupon_id = ?, note = ?, status = ?, total = ? WHERE order_id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$coupon_id, $note, $status, $total, $order_id]);
    }
}