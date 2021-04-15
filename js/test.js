var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
    coll[i].addEventListener("click", function () {
        this.classList.toggle("active");
        var content = this.nextElementSibling;
        if (content.style.maxHeight) {
            content.style.maxHeight = null;
        } else {
            content.style.maxHeight = content.scrollHeight + "px";
        }
    });
}
var coll1 = document.getElementsByClassName("collapsible1");
var j;

for (j = 0; j < coll1.length; j++) {
    coll1[j].addEventListener("click", function () {
        this.classList.toggle("active1");
        var content1 = this.nextElementSibling;
        if (content1.style.maxHeight) {
            content1.style.maxHeight = null;
        } else {
            content1.style.maxHeight = content1.scrollHeight + "px";
        }
    });
}