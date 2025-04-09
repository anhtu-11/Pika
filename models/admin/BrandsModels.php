<?php
require_once '../connect/connect.php';

class BrandsModels extends Connect
{
    public function getAllBrands()
    {
        $sql = 'SELECT * FROM brands';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function addBrand($name, $logo, $description)
    {
        $sql = "INSERT INTO brands(name, logo, description, created_at) VALUES (?,?,?,CURRENT_TIMESTAMP)";
        $stmt = $this->connect()->prepare($sql);
        return $stmt->execute([$name, $logo, $description]);
    }

    public function updateBrand($id, $name, $logo, $description)
    {
        $sql = 'UPDATE brands SET name=?, logo=?, description=?, updated_at=CURRENT_TIMESTAMP WHERE brand_id=?';
        $stmt = $this->connect()->prepare($sql);
        return $stmt->execute([$name, $logo, $description, $id]);
    }

    public function getBrandById($id)
    {
        $sql = 'SELECT * FROM brands WHERE brand_id=?';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getLimitBrand()
    {
        $sql = 'SELECT * FROM brands WHERE brand_id IN (3,6,8,10)';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}