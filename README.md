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



