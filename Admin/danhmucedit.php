<?php
include "header.php";
include "slider.php";
include "class/Themdanhmuc_class.php";

?>
<?php
$danhmuc = new Danhmuc ;
if(!isset($_GET['danhmuc_id']) || $_GET['danhmuc_id'] == NULL){
    echo "<script>window.location = 'danhmuc_list.php'</script>";
}else{
    $danhmuc_id = $_GET['danhmuc_id'];   
}
?>
<?php
$get_danhmuc = $danhmuc->get_danhmuc($danhmuc_id);
if($get_danhmuc){
    $resultB = $get_danhmuc->fetch_assoc();
}

?>
<?php
if($_SERVER['REQUEST_METHOD']=== 'POST'){
    $Danhmuc_name = $_POST['Danhmuc_name'];
    $update_Danhmuc = $danhmuc -> update_danhmuc($Danhmuc_name,$danhmuc_id);
}

?>

<div class="admin-content-rignt">
            <div class="admin-content-right-Themdanhmuc">
                <h1>Thêm danh mục</h1>
                <form action="" method="post">
                    <input required name="Danhmuc_name" type="text" placeholder="Nhập tên danh mục" 
                    value="<?php  echo $result['danhmuc_name'] ?>">
                    <button type="submit">Sửa</button>
                </form>
            </div>

        </div>
    </section>
</body>
</html>