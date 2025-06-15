<?php
include_once "Admin/class/Themdanhmuc_class.php";
$danhmuc = new Danhmuc();
$show_danhmuc_menu = $danhmuc->show_danhmuc();
?>
<header class="header fad">
    <div class="logo">
        <img src="../giao dien/img/logo3-removebg-preview.png" alt="11 SHOP logo">
    </div>

    <div class ="menu">
        <li><a href="../index/index.php">11 SHOP</a></li>
        <li><a href="../danhmuc/Danhmuc.php">SẢN PHẨM</a>
            <ul class="sub-menu">
                <?php
                echo "Debug Header: show_danhmuc_menu is ";
                if ($show_danhmuc_menu) {
                    echo "not empty.";
                    while ($result_menu = $show_danhmuc_menu->fetch_assoc()) {
                ?>
                <li><a href="../danhmuc/Danhmuc.php?danhmuc_id=<?php echo $result_menu['danhmuc_id']; ?>"><?php echo $result_menu['danhmuc_name']; ?></a>
                </li>
                <?php
                    }
                }
                ?>
            </ul>
        
        </li>
        <li><a href="../main_top/khuyenmai.php">KHUYẾN MÃI</a></li>
        <li><a href="../main_top/tintuc.php">TIN TỨC</a></li>
        <li><a href="../main_top/lienhe.php">LIÊN HỆ</a></li>

    </div>

    <div class="others">
        <li ><input placeholder="Tìm kiếm" type="text">
            <i class="fa-solid fa-magnifying-glass"></i>
        </li>
        <li><a href=""><i class="fa-solid fa-circle-user"></i></a></li>
        <li class="đk_đn">

            <p><a href="dangky.html">Đăng ký</a></p>
            <p><a href="dangky.html">Đăng nhập</a></p>
        </li>
        <li><a href=""><i class="fa-solid fa-cart-shopping"></i></a></li>
    </div>

</header>