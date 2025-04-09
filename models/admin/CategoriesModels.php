<?php
require_once '../connect/connect.php';

class CategoryAdminModel extends Connect
{
    public function listCategoriesAdmin()
    {
        $sql = 'SELECT * FROM category';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function addCategory($name, $image, $status, $description)
    {
        $sql = "INSERT INTO category(name, image, status, description,created_at) VALUES (?,?,?,?,CURRENT_TIMESTAMP)";
        $stmt = $this->connect()->prepare($sql);
        return $stmt->execute([$name, $image, $status, $description]);
    }

    public function updateCategory($id, $name, $image, $status, $description)
    {
        $sql = 'UPDATE category SET name=?, image=?, status=?, description=?, update_at=CURRENT_TIMESTAMP WHERE category_id=?';
        $stmt = $this->connect()->prepare($sql);
        return $stmt->execute([$name, $image, $status, $description, $id]);
    }

    public function getCategoryById($id)
    {
        $sql = 'SELECT * FROM category WHERE category_id=?';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
