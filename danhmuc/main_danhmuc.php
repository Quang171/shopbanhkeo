<?php
    $sanpham = new sanpham ;
    $show_sanpham = $sanpham->show_sanpham();

    ?>
 
 <div class="danhmuc-right ">

                <div class="danhmuc-right-top-item row">
                    <p>BÁNH TƯƠI</p>
                    <select name="" id="">
                        <option value="">Sắp xếp</option>
                        <option value="">Giá cao đến thấp</option>
                        <option value="">Giá thấp đến cao</option>
                        
                    </select>
                </div>
                
                
                <div class="danhmuc-right-content row">
                 <?php                 
                if ($show_sanpham) {                     
                    $i = 0;                     
                    while ($result = $show_sanpham->fetch_assoc()) {                         
                        $i++;                    
                ?> 
                   <div class="product">
            <img src="../uploads/<? echo $result['sanpham_img']; ?>" alt="<?php echo $result['sanpham_name']; ?>" style="width: 70px">
            <h3><?php echo $result['sanpham_name']; ?></h3>
            <p>Giá: <?php echo number_format($result['sanpham_price'], 0, ',', '.'); ?><sup>đ</sup></p>
                 </div>
                 <?php
    }
}
?>


                    <!-- <div class="danhmuc-right-content-item">
                        <img src="../giao dien/img/sp2.png" alt="">
                        <h1>Bánh phô mai - chà bông</h1>
                        <p>40.000 <sup>đ</sup></p>
                    </div>
                    <div class="danhmuc-right-content-item">
                        <img src="../giao dien/img/sp3.webp" alt="">
                        <h1>Bánh tươi nhân cốm</h1>
                        <p>35.000 <sup>đ</sup></p>
                    </div>
                    <div class="danhmuc-right-content-item">
                        <img src="../giao dien/img/sp4.png" alt="">
                        <h1>Bánh mì hoa cúc</h1>
                        <p>35.000 <sup>đ</sup></p>
                    </div> -->
                </div>

                <div class="danhmuc-right-bottom">
                    <div class="danhmuc-right-bottom-items">
                        <p><span>&#171;</span>1 2 3 4 5<span>&#187;</span>Trang cuối</p>
                    </div>
                </div>
            </div>


        </div>
    </div>


</section>