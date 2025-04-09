<?php
require_once '../models/admin/OrderAdmin.php';

class OrderControllerAdmin extends OrderAdmin
{
    public function listOrder()
    {
        $orders = $this->getAllOrdersWithDetails();
        include "../views/admin/orders/listOrder.php";
    }

    public function getOrderDetails()
    {
        $order_id = $_GET['order_id'];
        $orderDetails = $this->getOrderDetailsById($order_id);
        include '../views/admin/orders/detailOrder.php';
    }

}