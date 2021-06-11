"use strict";

// sticky navbar=========================================

const nav = document.querySelector("#navigation");
const navTop = nav.offsetTop;



function stickyNavigation() {
  if (window.scrollY >= navTop) {
    // nav offsetHeight = height of nav
    document.body.style.paddingTop = nav.offsetHeight + "px";
    document.body.classList.add("fixed-nav");
  } else {
    document.body.style.paddingTop = 0;
    document.body.classList.remove("fixed-nav");
  }
}

window.addEventListener("scroll", stickyNavigation);

/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myHamburger() {
  let x = document.getElementById("nav-bar-container");
  if (x.className === "header-nav-container") {
    x.className += " responsive";
  } else {
    x.className = "header-nav-container";
  }
}

// GALERIJA==================================================
function myGalerija(imgs) {
  let expandImg = document.getElementById("expandedImg");
  expandImg.src = imgs.src;
  expandImg.parentElement.style.display = "block";
}



// AKORDIONAS==================================================
let acc = document.getElementsByClassName("accordion");
let i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function () {
    this.classList.toggle("active");
    let panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  });



}



// FOOTER YEAR======================================
// rodo dabartinius metus metus footeryje
let d = new Date();
let n = d.getFullYear();
document.getElementById("footerYear").innerHTML = n;