<?php
include "database.php";
?>
<?php

class sanpham {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }
    public function show_danhmuc(){
        $query = "SELECT * FROM tbl_danhmuc ORDER BY danhmuc_id DESC";
        $result = $this->db->select($query);
        return $result; 
    }
     public function show_loaisp(){
        // $query = "SELECT * FROM tbl_loaisp ORDER BY loaisp_id DESC";
        $query = "SELECT tbl_loaisp.*, tbl_danhmuc.danhmuc_name FROM tbl_loaisp INNER JOIN tbl_danhmuc ON tbl_loaisp.danhmuc_id = tbl_danhmuc.danhmuc_id ORDER BY tbl_loaisp.loaisp_id DESC";
        $result = $this->db->select($query);
        return $result; 
    }
    public function insert_sanpham(){
        $sanpham_name = $_POST['sanpham_name'];
        $danhmuc_id = $_POST['danhmuc_id'];
        $loaisp_id = $_POST['loaisp_id'];
        $sanpham_price = $_POST['sanpham_price'];
        $sanpham_discount = $_POST['sanpham_discount'];
        $sanpham_mota = $_POST['sanpham_mota'];
        $sanpham_img = $_FILES['sanpham_img']['name'];
        move_uploaded_file($_FILES['sanpham_img']['tmp_name'], "uploads/".$_FILES['sanpham_img']['name']);


        $query = "INSERT INTO tbl_sanpham1(
            sanpham_name, 
            danhmuc_id, 
            loaisp_id, 
            sanpham_price, 
            sanpham_discount, 
            sanpham_mota, 
            sanpham_img
            
        ) VALUES(
             '$sanpham_name',
                '$danhmuc_id',
                '$loaisp_id',
                '$sanpham_price',
                '$sanpham_discount',
                '$sanpham_mota',
                '$sanpham_img'
        )";
    
        
        $result = $this->db->insert($query);

        return $result;

    }
    }






















   
    
    
//     public function get_loaisp($loaisp_id){
//         $query = "SELECT * FROM tbl_loaisp WHERE loaisp_id = '$loaisp_id'";
//         $result = $this->db->select($query);
//         return $result; 
//     }
//     public function update_loaisp($danhmuc_id, $loaisp_name, $loaisp_id){
//         $query = "UPDATE tbl_loaisp SET danhmuc_id = '$danhmuc_id', loaisp_name = '$loaisp_name' WHERE loaisp_id = '$loaisp_id'";
//         $result = $this->db->update($query);
//         header("Location: loaisp_list.php");
//         return $result; 
//     }
//     public function delete_loaisp($loaisp_id){
//         $query = "DELETE FROM tbl_loaisp WHERE loaisp_id = '$loaisp_id'";
//         $result = $this->db->update($query);
//         header("Location: loaisp_list.php");
//         return $result; 
//     }

// }

?>