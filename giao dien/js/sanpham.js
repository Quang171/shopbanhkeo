const mota= document.querySelector(".mota")
const baoquan= document.querySelector(".baoquan")
const thongtin= document.querySelector(".thongtin")
if(mota){
    mota.addEventListener("click",function(){
        document.querySelector(".sanpham-content-right-bottom-content-mota").style.display ="block"
        document.querySelector(".sanpham-content-right-bottom-content-baoquan").style.display ="none"
        document.querySelector(".sanpham-content-right-bottom-content-thongtin").style.display ="none"


    })
}
if(baoquan){
    baoquan.addEventListener("click",function(){
        document.querySelector(".sanpham-content-right-bottom-content-mota").style.display ="none"
        document.querySelector(".sanpham-content-right-bottom-content-baoquan").style.display ="block"
        document.querySelector(".sanpham-content-right-bottom-content-thongtin").style.display ="none"


    })
}
if(thongtin){
    thongtin.addEventListener("click",function(){
        document.querySelector(".sanpham-content-right-bottom-content-mota").style.display ="none"
        document.querySelector(".sanpham-content-right-bottom-content-baoquan").style.display ="none"
        document.querySelector(".sanpham-content-right-bottom-content-thongtin").style.display ="block"


    })
}
// thanh cuộn
const botTon=document.querySelector(".sanpham-content-right-bottom-top")
if(botTon){
    botTon.addEventListener("click", function(){
        document.querySelector(".sanpham-content-right-bottom-content-big").classList.toggle("active2")
    })
}

    // Xử lý chuyển đổi ảnh
    const bigImg = document.querySelector(".sanpham-content-left-bigimg img");
    const smallImgs = document.querySelectorAll(".sanpham-content-left-smallimg img");
    
    if(bigImg && smallImgs.length > 0) {
        smallImgs.forEach(function(imgItem) {
            imgItem.addEventListener("click", function() {  
                // Thêm hiệu ứng cho ảnh được chọn
                smallImgs.forEach(img => img.classList.remove('active'));
                this.classList.add('active');
                // Thay đổi ảnh lớn
                bigImg.src = this.src;
            });
        });
    }   

// Quantity selector functionality
document.addEventListener('DOMContentLoaded', function() {
    const minusBtn = document.querySelector('.minus-btn');
    const plusBtn = document.querySelector('.plus-btn');
    const quantityInput = document.querySelector('.quantity-input');

    minusBtn.addEventListener('click', function() {
        let currentValue = parseInt(quantityInput.value);
        if (currentValue > 1) {
            quantityInput.value = currentValue - 1;
        }
    });

    plusBtn.addEventListener('click', function() {
        let currentValue = parseInt(quantityInput.value);
        quantityInput.value = currentValue + 1;
    });

    // Prevent manual input
    quantityInput.addEventListener('keydown', function(e) {
        e.preventDefault();
    });
});
