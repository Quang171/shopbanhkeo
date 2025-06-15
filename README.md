<<<<<<< HEAD
<i class="fa-solid fa-magnifying-glass"></i>  find logo


shopping cart 
<i class="fa-solid fa-cart-shopping"></i>


tài khoản 
<i class="fa-solid fa-circle-user"></i>


facebook
<i class="fa-brands fa-facebook"></i>

youtube
<i class="fa-brands fa-youtube"></i>

ig
<i class="fa-brands fa-instagram"></i>

-------------Thiết kế database--------------------

1, Bảng role
- id: int -> khóa chính tự tăng
- name: string (varchar) -20 ký tự
2, Bảng User
- id: int -> khóa chính tự tăng
- fullname -> string -> 50 ký tự 
- email -> string ->150 ký tự
- phone_number -> string ->20 ký tự
- address -> string -> 200 ký tự
- password -> string -> md5 -> 32 lý tự
- role_id-> int-> 
3, Bảng danh mục
- id: int -> khóa tự tăng
- name: string -> tên danh mục
4, Bảng sản phẩm -> product
- id: int -> khóa tự tăng
- danhmuc_id -> int ->foreign key -> danhmuc (id)
-title: string ->350 ký tự 
- price: int 
- discount: 
- hinhanh: string -> 500 ký tự
- mota: longtext
- created_at: datetime -> tự tạo bản ghi
- update_at: datetime -> sửa bản ghi đó
5, quản lý đơn hàng
- fullname
-id 
- email
- phone_number
- address
- danhsachsp: sp1(tên+ số lg+ giá)
              sp2...
- 



=======
# shopbanhkeo
>>>>>>> 31eae1932a5db4f1ea2df1eb463234964e89b482










Giải thích kết nối cơ sở dữ liệu 
1. config.php:
 Host: localhost
User: root
Password: (trống)
Database name: web_banbanhkeodemo

2. Class Database trong database.php cung cấp các phương thức để thao tác với CSDL:
public $host = DB_HOST;    // Địa chỉ máy chủ database (từ config.php)
public $user = DB_USER;    // Tên người dùng database (từ config.php)
public $pass = DB_PASS;    // Mật khẩu database (từ config.php)
public $dbname = DB_NAME;  // Tên database (từ config.php)

public $link;             // Biến lưu kết nối database
public $error;            // Biến lưu thông báo lỗi

3. Hàm khởi tạo:
public function __construct(){
    $this->connectDB();
}

- Hàm tự động chạy khi tạo đối tượng database mới
- Gọi hàm connectDB() để thiết lập kết nối database

4. Hàm kết nối database: 
private function connectDB() {
    $this->link = new mysqli($this->host, $this->user, $this->pass, $this->dbname);

    if ($this->link->connect_error) {
        $this->error = "Connection failed: " . $this->link->connect_error;
        return false;
    }
}

Tạo kết nối mới đến MySQL sử dụng mysqli

Sử dụng thông tin từ config.php (DB_HOST, DB_USER, DB_PASS, DB_NAME)

Nếu kết nối thất bại, lưu thông báo lỗi vào biến $error

5. hàm select (đọc dữ liệu):

public function select($query) {
    $result = $this->link->query($query) or die($this->link->error . __LINE__);
    if ($result->num_rows > 0) {
        return $result;
    } else {
        return false;
    }
}

Nhận vào một câu truy vấn SQL dạng SELECT
Thực thi câu truy vấn bằng $this->link->query()
Nếu có lỗi, hiển thị lỗi và dòng gây lỗi
Kiểm tra số lượng bản ghi trả về (num_rows)
Nếu có dữ liệu, trả về kết quả dạng result set
Nếu không có dữ liệu, trả về false

6. Hàm insert (thêm dữ liệu):

public function insert($query) {
    $insert_row = $this->link->query($query) or die($this->link->error . __LINE__);
    if ($insert_row) {
        return $insert_row;
    } else {
        return false;
    }
}

Nhận vào câu lệnh INSERT SQL
Thực thi câu lệnh bằng $this->link->query()
Nếu thành công, trả về true
Nếu thất bại, trả về false

### VD:
// Thêm sản phẩm mới
$query = "INSERT INTO sanpham (ten_sanpham, gia, mota) 
          VALUES ('Bánh kem', 100000, 'Bánh kem socola')";
$insert = $db->insert($query);
if($insert) {
    echo "Thêm sản phẩm thành công";
} else {
    echo "Thêm sản phẩm thất bại";
}

// Thêm nhiều sản phẩm
$query = "INSERT INTO sanpham (ten_sanpham, gia) VALUES 
          ('Bánh kem', 100000),
          ('Bánh quy', 50000)";
$insert = $db->insert($query);


7. Hàm Update (cập nhật dữ liệu)

public function update($query) {
    $update_row = $this->link->query($query) or die($this->link->error . __LINE__);
    if ($update_row) {
        return $update_row;
    } else {
        return false;
    }
}

Nhận vào câu lệnh UPDATE SQL
Thực thi câu lệnh bằng $this->link->query()
Nếu thành công, trả về true
Nếu thất bại, trả về false


### VD:
$query = "UPDATE sanpham SET gia = 120000 WHERE id = 1";
$update = $db->update($query);
if($update) {
    echo "Cập nhật giá thành công";
} else {
    echo "Cập nhật giá thất bại";
}

// Cập nhật nhiều thông tin
$query = "UPDATE sanpham 
          SET ten_sanpham = 'Bánh kem mới',
              gia = 150000,
              mota = 'Bánh kem mới với hương vị đặc biệt'
          WHERE id = 1";
$update = $db->update($query);


8. Delete 

public function delete($query) {
    $delete_row = $this->link->query($query) or die($this->link->error . __LINE__);
    if ($delete_row) {
        return $delete_row;
    } else {
        return false;
    }
}

### VD:
Nhận vào câu lệnh DELETE SQL
Thực thi câu lệnh bằng $this->link->query()
Nếu thành công, trả về true
Nếu thất bại, trả về false

// Xóa một sản phẩm
$query = "DELETE FROM sanpham WHERE id = 1";
$delete = $db->delete($query);
if($delete) {
    echo "Xóa sản phẩm thành công";
} else {
    echo "Xóa sản phẩm thất bại";
}

// Xóa nhiều sản phẩm
$query = "DELETE FROM sanpham WHERE danhmuc_id = 1";
$delete = $db->delete($query);


