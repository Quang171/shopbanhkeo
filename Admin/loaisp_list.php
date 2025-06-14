<?php
include "header.php";
include "slider.php";
include "class/loaisp_class.php";

?>
<?php
$loaisp = new loaisp ;
$show_loaisp = $loaisp->show_loaisp();

?>

<div class="admin-content-rignt">
<div class="admin-content-right-danhmuc_list">
               <h1>Danh sách Loại sản phẩm</h1>
               <table>
                <tr>
                    <th>STT</th>
                    <th>ID</th>
                    <th>Danh mục ID</th>
                    <th>Loại sản phẩm</th>
                    <th>Tùy biến</th>
                </tr>
                <?php
                if ($show_loaisp) {
                    $i = 0;
                    while ($result = $show_loaisp->fetch_assoc()) {
                        $i++;   
                ?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $result['loaisp_id'] ?> </td>
                    <td><?php echo $result['danhmuc_name'] ?> </td>

                    <td><?php echo $result['loaisp_name'] ?></td>
                    <td><a href="loaispedit.php?loaisp_id=<?php echo $result['loaisp_id'] ?> ">Sửa</a>|<a href="loaispdelete.php?loaisp_id=<?php echo $result['loaisp_id'] ?>">Xóa</a></td>
                    
                </tr>
                <?php
                    }
                } 
                ?>
               </table>

            </div>
        </div>
    </section>
</body>
</html>