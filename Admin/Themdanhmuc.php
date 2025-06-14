<?php
include "header.php";
include "slider.php";
include "class/Themdanhmuc_class.php";

?>
<?php
$danhmuc = new Danhmuc ;
if($_SERVER['REQUEST_METHOD']=== 'POST'){
    $Danhmuc_name = $_POST['Danhmuc_name'];
    $insert_Danhmuc = $danhmuc -> insert_danhmuc($Danhmuc_name);
    header("Location: danhmuc_list.php");
}

?>

<div class="admin-content-rignt">
            <div class="admin-content-right-Themdanhmuc">
                <h1>Thêm danh mục</h1>
                <form action="" method="post">
                    <input required name="Danhmuc_name" type="text" placeholder="Nhập tên danh mục">
                    <button type="submit">Thêm</button>
                </form>
            </div>

        </div>
    </section>
</body>
</html>