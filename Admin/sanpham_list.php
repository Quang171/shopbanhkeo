    <?php
    include "header.php";
    include "slider.php";
    include "class/sanpham_class.php";
    ?>
    
    <?php
    $sanpham = new sanpham ;
    $show_sanpham = $sanpham->show_sanpham();

    ?>

    <body>  
    <div class="admin-content-rignt">             
        <div class="admin-content-right-danhmuc_list">                
            <h1>Danh sách sản phẩm</h1>                
            <table>                 
                <tr>                     
                    <th>STT</th>                     
                    <th>Tên sản phẩm</th>                     
                    <th>Danh mục</th>
                    <th>Loại sản phẩm</th>                     
                    <th>Giá sản phẩm</th>                     
                    <th>Khuyến mãi</th>                     
                    <th>Mô tả</th>                     
                    <th>Ảnh sản phẩm</th>                     
                    <th>Ảnh mô tả</th>                     
                    <th>Tùy chọn</th>                 
                </tr>                 
                <?php                 
                if ($show_sanpham) {                     
                    $i = 0;                     
                    while ($result = $show_sanpham->fetch_assoc()) {                         
                        $i++;                    
                ?>                 
                <tr>                     
                    <td><?php echo $i; ?></td>                     
                    <td><?php echo $result['sanpham_name']; ?></td>
                    <td><?php echo $result['danhmuc_name']; ?></td>                     
                    <td><?php echo $result['loaisp_name']; ?></td>                     
                    <td><?php echo number_format($result['sanpham_price'], 0, ',', '.'); ?><sup>đ</sup></td>                     
                    <td><?php echo number_format($result['sanpham_discount'], 0, ',', '.'); ?><sup>đ</sup></td>                     
                    <td><?php echo substr($result['sanpham_mota'], 0, 100) . '...'; ?></td>                     
                    <td>
                        <img src="../uploads/<?php echo $result['sanpham_img']; ?>" alt="<?php echo $result['sanpham_name']; ?>" style="width: 70px">
                    </td>                     
                    <td>
                        <img src="../uploads/istockphoto-1222357475-612x612.jpg" alt="Ảnh mô tả bánh kem tươi 111" style="width: 70px">
                        <img src="../uploads/istockphoto-1222357475-612x612.jpg" alt="Ảnh mô tả bánh kem tươi 111" style="width: 70px">
                    </td>                      
                    <td>
                        <a href="sanpham_edit.php?sanpham_id=<?php echo $result['sanpham_id']; ?>">Sửa</a> | 
                        <a href="sanpham_delete.php?sanpham_id=<?php echo $result['sanpham_id']; ?>" 
                        onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này?')">Xóa</a>
                    </td>                                      
                </tr>
                <?php 
                    }
                } else { 
                ?>
                <tr>
                    <td colspan="10" style="text-align: center;">Không có sản phẩm nào</td>
                </tr>
                <?php } ?>
            </table>              
        </div>
    </div>
    </body>
