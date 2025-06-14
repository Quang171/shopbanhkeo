<?php
include "class/Themdanhmuc_class.php";
$danhmuc = new Danhmuc;

$danhmuc = new Danhmuc ;
if(!isset($_GET['danhmuc_id']) || $_GET['danhmuc_id'] == NULL){
    echo "<script>window.location = 'danhmuc_list.php'</script>";
}else{
    $danhmuc_id = $_GET['danhmuc_id'];   
}
?>
<?php
$delete_danhmuc = $danhmuc->delete_danhmuc($danhmuc_id);



?>