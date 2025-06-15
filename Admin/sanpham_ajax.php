<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $file = $_FILES;
    $file_path = '../upload/';
    move_uploaded_file($file['file']['tmp_name'], $file_path.$file['file']['name']); // lưu file vào thư mục upload
    $fileurl = $file_path.$file['file']['name']; // đường dẫn đến file đã lưu
    $data = json_encode([ // tạo mảng dữ liệu để trả về
        'success' => true,
        'fileurl' => $fileurl
    ]);
    echo $data;
}
?>