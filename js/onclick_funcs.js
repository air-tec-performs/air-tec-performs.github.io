"use strict";

window.onscroll = function() {
    stayOnTop()
};

let nav = document.getElementById("nav");

let sticky = nav.offsetTop;

function stayOnTop() {
    if (window.pageYOffset >= sticky) {
        nav.classList.add("sticky")

    } else {
        nav.classList.remove("sticky");
    }
}