<?php
include "database.php";
?>
<?php

class Danhmuc {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }
    public function insert_danhmuc($Danhmuc_name){
        $query = "INSERT INTO tbl_danhmuc(danhmuc_name) VALUES('$Danhmuc_name')";
        
        $result = $this->db->insert($query);

        return $result;
    }
    public function show_danhmuc(){
        $query = "SELECT * FROM tbl_danhmuc ORDER BY danhmuc_id DESC";
        $result = $this->db->select($query);
        return $result; 
    }
    public function get_danhmuc($danhmuc_id){
        $query = "SELECT * FROM tbl_danhmuc WHERE danhmuc_id = '$danhmuc_id'";
        $result = $this->db->select($query);
        return $result; 
    }
    public function update_danhmuc($Danhmuc_name, $danhmuc_id){
        $query = "UPDATE tbl_danhmuc SET danhmuc_name = '$Danhmuc_name' WHERE danhmuc_id = '$danhmuc_id'";
        $result = $this->db->update($query);
        header("Location: danhmuc_list.php");
        return $result; 
    }
    public function delete_danhmuc($danhmuc_id){
        $query = "DELETE FROM tbl_danhmuc WHERE danhmuc_id = '$danhmuc_id'";
        $result = $this->db->update($query);
        header("Location: danhmuc_list.php");
        return $result; 
    }
}

?>
