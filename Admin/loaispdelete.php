<?php
include "class/loaisp_class.php";
$loaisp = new loaisp;
$loaisp = new loaisp ;
$loaisp_id = $_GET['loaisp_id'];   
?>
<?php
$delete_loaisp = $loaisp->delete_loaisp($loaisp_id);



?>