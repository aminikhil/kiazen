// JavaScript Document
window.onscroll = function() {scrollFunction()};
//navigation bar color change on scroll
function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("navbar").style.backgroundColor = "#000";
  } else {
    document.getElementById("navbar").style.backgroundColor = "rgb(255,255,255,0.3)";
  }

 //  $(document).on('scroll', function() {
 //    if(($(this).scrollTop()>=$('#home').position().top-1) && 
 //    	($(this).scrollTop()<$('#services').position().top-1)){
 //        onClickNav('home');
 //    } else if(($(this).scrollTop()>=$('#services').position().top-1) && 
 //    	($(this).scrollTop()<$('#real_estate').position().top-1)){
 //        onClickNav('services');
 //    } else if(($(this).scrollTop()>=$('#real_estate').position().top-1) && 
 //    	($(this).scrollTop()<$('#our_clients').position().top-1)){
 //        onClickNav('real_estate');
 //    } else if(($(this).scrollTop()>=$('#our_clients').position().top-1) && 
 //    	($(this).scrollTop()<$('#about_us').position().top-1)){
 //        onClickNav('our_clients');
 //    } else if(($(this).scrollTop()>=$('#about_us').position().top-1) && 
 //    	($(this).scrollTop()<$('#contact_us').position().top-1)){
 //        onClickNav('about_us');
 //    } else if($(this).scrollTop()>=$('#contact_us').position().top-1){
 //        onClickNav('contact_us');
 //    }
	// });

	$(window).scroll(function() {
    clearTimeout($.data(this, 'scrollTimer'));
    $.data(this, 'scrollTimer', setTimeout(function() {
        // do something
        if(($(this).scrollTop()>=$('#home').position().top-1) && 
    	($(this).scrollTop()<$('#services').position().top-1)){
        onClickNav('home');
    } else if(($(this).scrollTop()>=$('#services').position().top-1) && 
    	($(this).scrollTop()<$('#real_estate').position().top-1)){
        onClickNav('services');
    } else if(($(this).scrollTop()>=$('#real_estate').position().top-1) && 
    	($(this).scrollTop()<$('#our_clients').position().top-1)){
        onClickNav('real_estate');
    } else if(($(this).scrollTop()>=$('#our_clients').position().top-1) && 
    	($(this).scrollTop()<$('#about_us').position().top-1)){
        onClickNav('our_clients');
    } else if(($(this).scrollTop()>=$('#about_us').position().top-1) && 
    	($(this).scrollTop()<$('#contact_us').position().top-1)){
        onClickNav('about_us');
    } else if($(this).scrollTop()>=$('#contact_us').position().top-1){
        onClickNav('contact_us');
    }
    }, 250));
});
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

function onClickNav(nav) {
	document.getElementById("nav_home").classList.remove("active-home");
	document.getElementById("nav_services").classList.remove("active-home");
	document.getElementById("nav_rstate").classList.remove("active-home");
	document.getElementById("nav_ourcli").classList.remove("active-home");
	document.getElementById("nav_aboutus").classList.remove("active-home");
	document.getElementById("nav_contactus").classList.remove("active-home");

	if(nav == "home"){
		document.getElementById("nav_home").classList.add("active-home");
	} else if(nav == "services"){
		document.getElementById("nav_services").classList.add("active-home");
	} else if(nav == "real_estate"){
		document.getElementById("nav_rstate").classList.add("active-home");
	} else if(nav == "our_clients"){
		document.getElementById("nav_ourcli").classList.add("active-home");
	} else if(nav == "about_us"){
		document.getElementById("nav_aboutus").classList.add("active-home");
	} else if(nav == "contact_us"){
		document.getElementById("nav_contactus").classList.add("active-home");
	}
}