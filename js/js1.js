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

function expandCardView() {
	var style = document.getElementById("cardView1").style.display;
	// alert(style);
	if(style == ""){
		document.getElementById("cardView1").style.display="block";
		document.getElementById("cardView1on").style.display = "none";
		document.getElementById("cardView1off").style.display="block";
	} else {
		document.getElementById("cardView1").style.display="";
		document.getElementById("cardView1off").style.display="";
		document.getElementById("cardView1on").style.display="block";
	}	
}