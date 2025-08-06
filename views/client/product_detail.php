<div class="container py-5">
    <div class="row g-5">
        <!-- Hình ảnh sản phẩm -->
        <div class="col-md-6">
            <div class="card border-0 shadow-sm">
                <img src="<?php echo PATH_IMAGE . $product['main_image']?>" class="card-img-top img-fluid" alt="<?php echo $product['name']?>">
            </div>
            <!-- Thumbnails -->
            <!-- <div class="d-flex gap-2 mt-3">
                <img src="path/to/thumb1.jpg" class="img-thumbnail" style="width:80px; height:80px; object-fit:cover;" alt="thumb1">
                <img src="path/to/thumb2.jpg" class="img-thumbnail" style="width:80px; height:80px; object-fit:cover;" alt="thumb2">
                <img src="path/to/thumb3.jpg" class="img-thumbnail" style="width:80px; height:80px; object-fit:cover;" alt="thumb3">
            </div> -->
        </div>

        <!-- Thông tin sản phẩm -->
        <div class="col-md-6">
            <h2 class="text-uppercase fw-bold mb-3"><?php echo $product['name']?></h2>
            <h4 class="text-primary mb-4"><?php echo number_format($product['price'])?> VND</h4>

            <p class="text-muted mb-4">
                <?php echo $product['description']?>
            </p>

            <!-- Chọn số lượng -->
            <div class="mb-4">
                <label for="quantity" class="form-label fw-bold">Số lượng</label>
                <input type="number" id="quantity" value="1" min="1" class="form-control" style="width:100px;">
            </div>

            <!-- Nút hành động -->
            <div class="d-flex gap-3">
                <a href="#" class="btn btn-primary btn-lg">
                    <i class="bi bi-bag-check"></i> Mua ngay
                </a>
                <a href="#" class="btn btn-outline-primary btn-lg">
                    <i class="bi bi-cart-plus"></i> Thêm vào giỏ
                </a>
            </div>

            <!-- Thông tin thêm -->
            <ul class="list-unstyled mt-4">
                <li><i class="bi bi-check-circle text-success"></i> Miễn phí vận chuyển</li>
                <li><i class="bi bi-check-circle text-success"></i> Bảo hành 12 tháng</li>
                <li><i class="bi bi-check-circle text-success"></i> Đổi trả trong 7 ngày</li>
            </ul>
        </div>
    </div>
</div>
