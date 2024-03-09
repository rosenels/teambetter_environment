function fix_navbar() {
    elements = document.getElementsByClassName("nav-links");
    for (i = 0; i < elements.length; i++) {
        elements[i].style.visibility = "hidden";
        elements[i].style.display = "flex";
        if (elements[i].getBoundingClientRect().right > window.outerWidth) {
            elements[i].style.display = "none";
        }
        else {
            elements[i].style.visibility = "visible";
        }
    }
}
fix_navbar();
window.onresize = fix_navbar;