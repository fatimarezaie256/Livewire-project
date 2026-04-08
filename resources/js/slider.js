const image = document.getElementById("image");
const imageList = ["images/banner-1.jpg", "images/banner-2.jpg"];
let index = 0;
setInterval(() => {
    index++;
    if (imageList.length == index) {
        index = 0;
    }
    image.setAttribute("src", imageList[index]);
}, 1000);
