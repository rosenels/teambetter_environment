function fix_navbar() {
    elements = document.getElementsByClassName("nav-links");
    for (i = 0; i < elements.length; i++) {
        if (elements[i].getBoundingClientRect().right > window.outerWidth) {
            elements[i].style.display = "none";
        }
        else {
            elements[i].style.display = "flex";
        }
    }
}
window.onload = fix_navbar;
window.onresize = fix_navbar;