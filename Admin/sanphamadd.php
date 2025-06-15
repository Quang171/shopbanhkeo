<?php
include "header.php";
include "slider.php";
include "class/sanpham_class.php"

?>
<?php
$sanpham = new sanpham ;
if($_SERVER['REQUEST_METHOD']=== 'POST'){
   $insert_sanpham = $sanpham -> insert_sanpham($_POST, $_FILES);
   
    
}

?>

<div class="admin-content-rignt">
                        <div class="admin-content-right-sanphamadd">
                <h1>Thêm sản phẩm</h1>
                <form action="" method="POST" enctype="multipart/form-data">
                    <input name="sanpham_name" required type="text" placeholder="Nhập tên sản phẩm">
                    <select name="danhmuc_id" id="">
                          <option value="#">--Chọn danh mục</option>
                            <?php
                            $show_danhmuc = $sanpham->show_danhmuc();
                            if($show_danhmuc){
                                while($result = $show_danhmuc->fetch_assoc()){

                            ?>
                            <option value="<?php echo $result['danhmuc_id']?>"><?php echo $result['danhmuc_name']?> </option>
                            <?php
                                }
                            }
                            ?>
                    </select>
                    <select name="loaisp_id" id="">
                          <option value="#">--Chọn loại sản phẩm</option>
                            <?php
                            $show_loaisp = $sanpham->show_loaisp();
                            if($show_loaisp){
                                while($result = $show_loaisp->fetch_assoc()){

                            ?>
                            <option value="<?php echo $result['loaisp_id']?>"><?php echo $result['loaisp_name']?> </option>
                            <?php
                                }
                            }
                            ?>
                    </select>
                    <input name = "sanpham_price" required type="text" placeholder="Giá sản phẩm">
                    <input name ="sanpham_discount" required type="text" placeholder="Giá khuyến mãi">
                    <textarea required name="sanpham_mota" id="editor1" cols="30" rows="10" placeholder="Mô tả sản phẩm"></textarea>
                    <label for="">Ảnh sản phẩm <span style="color: red;">*</span></label>
                    <input name="sanpham_img" required type="file" id="sanpham_img_input">
                    <div class="image-preview" style="margin-top: 10px;"></div>
                    <input type="hidden" value="" id="sanpham_img_hidden" name="sanpham_img">
                    <label for="">Ảnh mô tả <span style="color: red;">*</span></label>
                    <input name ="sanpham_img_mota" multiple required type="file">
                    <button type="submit">Thêm</button>
                </form>
            </div>

        </div>
    </section>
  <script>
    CKEDITOR.replace('editor1', {
    filebrowserBrowseUrl: 'ckfinder/ckfinder.html',
    filebrowserUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files'
});
  </script>

  <script>
    $('#sanpham_img').on('change', function(e) {
        const file = e.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                const preview = `
                    <img src="${e.target.result}" style="max-width: 200px; max-height: 200px; object-fit: contain;">
                `;
                $('.image-preview').html(preview);
            }
            reader.readAsDataURL(file);
        }
    });
  </script>
</body>
</html>