let offset = 0;
const sliderLine = document.querySelector(".slider-line");

document.querySelector(".slider-next").addEventListener("click", function() {
    offset += 487;
    if (offset > 974) {
        offset = 0;
    }
    sliderLine.style.left = -offset + "px";
});

document.querySelector(".slider-prev").addEventListener("click", function() {
    offset -= 487;
    if (offset < 0) {
        offset = 974;
    }
    sliderLine.style.left = -offset + "px";
});