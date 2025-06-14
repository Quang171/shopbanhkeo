<?php
include "header.php";
include "slider.php";
include "class/Themdanhmuc_class.php";

?>
<?php
$danhmuc = new Danhmuc ;
$show_danhmuc = $danhmuc->show_danhmuc();

?>

<div class="admin-content-rignt">
<div class="admin-content-right-danhmuc_list">
               <h1>Danh sách danh mục</h1>
               <table>
                <tr>
                    <th>STT</th>
                    <th>ID</th>
                    <th>Danh mục</th>
                    <th>Tùy biến</th>
                </tr>
                <?php
                if ($show_danhmuc) {
                    $i = 0;
                    while ($result = $show_danhmuc->fetch_assoc()) {
                        $i++;   
                ?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $result['danhmuc_id'] ?> </td>
                    <td><?php echo $result['danhmuc_name'] ?></td>
                    <td><a href="danhmucedit.php?danhmuc_id=<?php echo $result['danhmuc_id'] ?> ">Sửa</a>|<a href="danhmucdelete.php?danhmuc_id=<?php echo $result['danhmuc_id'] ?>">Xóa</a></td>
                    
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