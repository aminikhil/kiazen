// JavaScript Document
window.onscroll = function() {scrollFunction()};
//navigation bar color change on scroll
function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("navbar").style.backgroundColor = "#000";
  } else {
    document.getElementById("navbar").style.backgroundColor = "rgb(255,255,255,0.3)";
  }
}
