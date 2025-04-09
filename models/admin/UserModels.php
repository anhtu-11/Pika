<?php
require_once '../connect/connect.php';

class UserModels extends Connect
{
    public function getAllUsers()
    {
        $sql = "SELECT *, r.role_type AS role_name
        FROM users u 
        INNER JOIN roles r ON u.role_id = r.role_id";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function updateRole($user_id)
    {
        $sql = "UPDATE users SET role_id=? WHERE user_id=?";
        $stmt = $this->connect()->prepare($sql);
        $newRole = 2;
        return $stmt->execute([$newRole, $user_id]);
    }
}