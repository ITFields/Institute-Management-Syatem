function changeSizeByBtn(change) {
    let container = document.getElementById("container");
    let currentSize = window.getComputedStyle(container).fontSize;
    let newSize = parseInt(currentSize) + change;
    container.style.fontSize = newSize + "px";
}
