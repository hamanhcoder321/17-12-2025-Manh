<?php
class Nguoi {
    public $ten;
    public function chao() {
        echo "Xin chào, tôi là " . $this->ten;
    }
}

// Tạo một đối tượng (instance) từ lớp Nguoi
$nguoi_ban = new Nguoi(); // $nguoi_ban giờ chứa một thể hiện của lớp Nguoi

// Truy cập thuộc tính của đối tượng
$nguoi_ban->ten = "An";

// Gọi phương thức của đối tượng
$nguoi_ban->chao(); // In ra: Xin chào, tôi là An [1, 3].

// stdclass trong PHP (đối tượng rỗng)
$nguoi_khac = new stdclass();
$nguoi_khac->ten = "Bình"; // Thêm thuộc tính động
echo $nguoi_khac->ten; // In ra: Bình [2].
