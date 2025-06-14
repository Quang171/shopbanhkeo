<?php
include "header.php";
include "slider.php";
include "class/loaisp_class.php";
// include "class/Themdanhmuc_class.php";
?>
<?php
$loaisp = new loaisp ;
if(!isset($_GET['loaisp_id']) || $_GET['loaisp_id'] == NULL){
    echo "<script>window.location = 'loaisp_list.php'</script>";
}else{
    $loaisp_id = $_GET['loaisp_id'];   
}
?>
<?php
$get_loaisp = $loaisp->get_loaisp($loaisp_id);
if($get_loaisp){
    $resultA = $get_loaisp->fetch_assoc();
}

?>



<?php
$loaisp = new loaisp ;
if($_SERVER['REQUEST_METHOD']=== 'POST'){
    $danhmuc_id = $_POST['danhmuc_id'];
    $loaisp_name = $_POST['loaisp_name'];
    $update_loaisp = $loaisp -> update_loaisp($danhmuc_id, $loaisp_name,$loaisp_id);
    // header("Location: loaisp_list.php");
    
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
                            <option value="<?php echo $result['danhmuc_id']?>"
                            <?php if($resultA['danhmuc_id'] == $result['danhmuc_id']) echo 'selected'; ?>>
                            <?php echo $result['danhmuc_name']?>
                            </option>
                            <?php
                                }
                            }
                            ?>
                           
                        </select> <br>
                        <input required name="loaisp_name" type="text" placeholder="Nhập tên loại sản phẩm" 
                        value="<?php echo $resultA['loaisp_name'] ?>">
                        <button type="submit">Sửa</button>
                    </form>
                </div>
            </div>

        </div>
    </section>
</body>
</html>