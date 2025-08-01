<?php
class DashboardController
{
    public function index()
    {
        
        // Kiểm tra quyền truy cập
      
        if (!isset($_SESSION['user']) || $_SESSION['user']['role'] !== 'admin') {
            $url = BASE_URL . 'index.php?action=login';
            header('Location: ' . $url);
            exit();
        }

        // Lấy dữ liệu cần thiết cho dashboard
        $data = [
            'title' => 'Dashboard',
            'user' => $_SESSION['user'],
            // Thêm các dữ liệu khác nếu cần
        ];

        // Hiển thị view dashboard
        require_once PATH_VIEW . 'admin/dashboard.php';
    }
}