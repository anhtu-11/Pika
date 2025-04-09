<?php
require_once '../connect/connect.php';
class User extends connect
{
    public function register($name, $email, $password): bool
    {
        $hash_password = password_hash(password: $password, algo: PASSWORD_DEFAULT);
        $sql = 'INSERT INTO users(name, email, password,role_id) VALUES (?,?,?,1)';
        $stmt = $this->connect()->prepare(query: $sql);
        return $stmt->execute(params: [$name, $email, $hash_password]);
    }

    public function login($email, $password): mixed
    {
        $sql = 'SELECT * FROM users WHERE email = ?';
        $stmt = $this->connect()->prepare(query: $sql);
        $stmt->execute(params: [$email]);
        $user = $stmt->fetch();

        if ($user && password_verify(password: $password, hash: $user['password'])) {
            return $user;
        }
        return false;
    }
    public function updateContact($userId, $email, $phone)
    {
        $sql = 'UPDATE users SET email = ?, phone = ?, update_at=CURRENT_TIMESTAMP WHERE user_id = ?';
        $stmt = $this->connect()->prepare(query: $sql);
        return $stmt->execute(params: [$email, $phone, $userId]);
    }
    public function updateAddress($userId, $address)
    {
        $sql = 'UPDATE users SET address = ?, update_at=CURRENT_TIMESTAMP WHERE user_id = ?';
        $stmt = $this->connect()->prepare(query: $sql);
        return $stmt->execute(params: [$address, $userId]);
    }
    public function changePassword($userId, $currentPassword, $newPassword)
    {
        $sql = 'SELECT * FROM users, update_at=CURRENT_TIMESTAMP WHERE user_id = ?';
        $stmt = $this->connect()->prepare(query: $sql);
        $stmt->execute(params: [$userId]);
        $user = $stmt->fetch();

        if ($user && password_verify(password: $currentPassword, hash: $user['password'])) {
            $hash_new_password = password_hash(password: $newPassword, algo: PASSWORD_DEFAULT);
            $updateSql = 'UPDATE users SET password = ? WHERE user_id = ?';
            $updateStmt = $this->connect()->prepare(query: $updateSql);
            return $updateStmt->execute(params: [$hash_new_password, $userId]);
        }
        return false; // mật khẩu cũ không đúng
    }
    public function updateAvatar($userId, $avatarPath)
    {
        $sql = 'UPDATE users SET avatar = ?, update_at=CURRENT_TIMESTAMP WHERE user_id = ?';
        $stmt = $this->connect()->prepare(query: $sql);
        return $stmt->execute(params: [$avatarPath, $userId]);
    }


}