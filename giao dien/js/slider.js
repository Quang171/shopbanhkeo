document.addEventListener("DOMContentLoaded", function () {
    const imgPosition = document.querySelectorAll(".aspect-ratio-169 img");
    const imgContainer = document.querySelector(".aspect-ratio-169");
    const dotItems = document.querySelectorAll(".dot");
    let imgNumber = imgPosition.length;
    let index = 0;

    imgPosition.forEach(function (image, idx) {
        image.style.left = idx * 100 + "%";
        dotItems[idx].addEventListener("click", function () {
            slider(idx);
        });
    });

    function imgSlider() {
        index++;
        if (index >= imgNumber) {
            index = 0;
        }
        slider(index);
    }

    function slider(index) {
        imgContainer.style.left = "-" + index * 100 + "%";
        const dotActive = document.querySelector(".dot.active");
        if (dotActive) dotActive.classList.remove("active");
        dotItems[index].classList.add("active");
    }

    setInterval(imgSlider, 3000);
});
