const image = document.getElementById("image");
const imageList = ["images/sharifi.jpg", "images/sharifi1.jpg"];
let index = 0;
setInterval(() => {
    index++;
    if (imageList.length == index) {
        index = 0;
    }
    image.setAttribute("src", imageList[index]);
}, 5000);
