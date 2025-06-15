

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết sản phẩm</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include "header.php"; ?>

    <div class="container">
        <div class="product-detail">
            <div class="row">
                <div class="col-md-6">
                    <img src="<?php echo $row['hinhanh']; ?>" alt="<?php echo $row['ten_sanpham']; ?>" class="product-image">
                </div>
                <div class="col-md-6">
                    <h1><?php echo $row['ten_sanpham']; ?></h1>
                    <p class="price"><?php echo number_format($row['gia']); ?> VNĐ</p>
                    <div class="description">
                        <h3>Mô tả sản phẩm:</h3>
                        <p><?php echo $row['mota']; ?></p>
                    </div>
                    <div class="quantity">
                        <label for="quantity">Số lượng:</label>
                        <input type="number" id="quantity" name="quantity" value="1" min="1">
                    </div>
                    <button class="btn-add-cart">Thêm vào giỏ hàng</button>
                </div>
            </div>
        </div>
    </div>

    <?php include "footer.php"; ?>
</body>
</html> 