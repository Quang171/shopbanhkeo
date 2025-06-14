<?php
include "header.php";
include "slider.php";
include "class/loaisp_class.php";
// include "class/Themdanhmuc_class.php";
?>
<?php
$loaisp = new loaisp ;
if($_SERVER['REQUEST_METHOD']=== 'POST'){
    $danhmuc_id = $_POST['danhmuc_id'];
    $loaisp_name = $_POST['loaisp_name'];
    $insert_loaisp = $loaisp -> insert_loaisp($danhmuc_id, $loaisp_name);
    header("Location: loaisp_list.php");
    
}

?>

<div class="admin-content-rignt">
            <div class="admin-content-right-Themdanhmuc">
                <div class="loaisp">

                    <h1>Thêm loại sản phẩm</h1> <br>
                    <form action="" method="post">
                        <select name="danhmuc_id" id="">
                            <option value="#">--Chọn danh mục</option>
                            <?php
                            $show_danhmuc = $loaisp->show_danhmuc();
                            if($show_danhmuc){
                                while($result = $show_danhmuc->fetch_assoc()){

                            ?>
                            <option value="<?php echo $result['danhmuc_id']?>"><?php echo $result['danhmuc_name']?> </option>
                            <?php
                                }
                            }
                            ?>
                           
                        </select> <br>
                        <input required name="loaisp_name" type="text" placeholder="Nhập tên loại sản phẩm">
                        <button type="submit">Thêm</button>
                    </form>
                </div>
            </div>

        </div>
    </section>
</body>
</html> 