<?php
class CategoryModel extends BaseModel {
    protected $table = 'categories';

    /**
     * Lấy tất cả danh mục trong database.
     */
    public function getAllCategories() {
        $query = "SELECT * FROM " . $this->table; // Viết câu lệnh SQL để lấy tất cả danh mục
        $stmt = $this->pdo->prepare($query); // Chuẩn bị câu lệnh SQL
        $stmt->execute(); // Thực thi câu lệnh SQL
        return $stmt->fetchAll(PDO::FETCH_ASSOC); // Trả về tất cả danh mục dưới dạng mảng kết hợp
    }
}