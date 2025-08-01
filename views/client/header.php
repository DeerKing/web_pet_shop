<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PET SHOP - Pet Shop Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto:wght@700&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/client/lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="assets/client/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="assets/client/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="assets/client/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid border-bottom d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-4 text-center py-2">
                <div class="d-inline-flex align-items-center">
                    <i class="bi bi-geo-alt fs-1 text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase mb-1">Our Office</h6>
                        <span>123 Street, New York, USA</span>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 text-center py-2">
                <div class="d-inline-flex align-items-center">
                    <i class="bi bi-phone-vibrate fs-1 text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase mb-1">Call Us</h6>
                        <span>+012 345 6789</span>
                    </div>
                </div>
            </div>
            <?php 
            $text_hello = ''; 
            if(isset($_SESSION['user']) ) {
                $text_hello = "Xin chào " . $_SESSION['user']['email'];
            } 
           
                ?>
            
            <div class="col-lg-4 text-center border-start border-end py-2">
                <div class="d-inline-flex align-items-center">
                   
                    <div class="text-start">
                        <?php  
                        if($text_hello){
                        ?>
                            <h6 class="text-uppercase mb-1">                             
                                <?php echo $text_hello; ?>
                            </h6>
                            <a href="<?php echo BASE_URL. 'index.php?action=logout' ?>"><span>Đăng xuất</span></a>
                         <?php 
                         } 
                         else 
                         { ?>
                            <a href="<?php echo BASE_URL. 'index.php?action=login' ?>"><span>Đăng nhập</span> </a> |                         
                            <a href="<?php echo BASE_URL. 'index.php?action=register' ?>"><span>Đăng ký</span></a>
                        <?php 
                        } ?>
                    </div>
                </div>
            </div>
         
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm py-3 py-lg-0 px-3 px-lg-0 mb-5">
        <a href="index.html" class="navbar-brand ms-lg-5">
            <h1 class="m-0 text-uppercase text-dark"><i class="bi bi-shop fs-1 text-primary me-3"></i>Pet Shop</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="index.html" class="nav-item nav-link">Trang chủ</a>
                <a href="about.html" class="nav-item nav-link">Giới thiệu</a>
                <a href="service.html" class="nav-item nav-link">Dịch vụ</a>
                <a href="product.html" class="nav-item nav-link active">Sản phẩm</a>
                <!-- <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu m-0">
                        <a href="price.html" class="dropdown-item">Pricing Plan</a>
                        <a href="team.html" class="dropdown-item">The Team</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        <a href="blog.html" class="dropdown-item">Blog Grid</a>
                        <a href="detail.html" class="dropdown-item">Blog Detail</a>
                    </div>
                </div> -->
                <a href="contact.html" class="nav-item nav-link nav-contact bg-primary text-white px-5 ms-lg-5">Liên hệ <i class="bi bi-arrow-right"></i></a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->
