<?php

class Connect
{
    private $conn;

    // Phương thức kết nối tới cơ sở dữ liệu
    public function connect(): ?PDO
    {
        // Nếu chưa có kết nối, tạo kết nối mới
        if ($this->conn === null) {
            $serverName = 'localhost';
            $userName = 'root';
            $passWord = '';
            $myDB = 'du an mau 1';

            try {
                // Tạo kết nối PDO và lưu vào biến $this->conn
                $this->conn = new PDO("mysql:host=$serverName;dbname=$myDB;charset=utf8", $userName, $passWord);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  // Thiết lập chế độ lỗi
            } catch (Throwable $th) {
                // Xử lý lỗi khi kết nối không thành công
                echo 'Kết nối thất bại: ' . $th->getMessage();
                return null;
            }
        }

        // Trả về kết nối nếu đã có
        return $this->conn;
    }
}
