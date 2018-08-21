// JavaScript Document
$(document).ready(function() {
    $("body").css("display", "none");

    $("body").fadeIn(1000);

	$("a.change").click(function(event){
		event.preventDefault();
		linkLocation = this.href;
		$("body").fadeOut(800, redirectPage);		
	});
		
	function redirectPage() {
		window.location = linkLocation;
	}
});

$('.pics').cycle({ 
fx:     'fade', 
    speed:   800, 
    timeout: 6000,
	random: true,
    next:   '.pics', 
    pause:   1
});
$('.s6').cycle({ 
    fx:     'turnLeft', 
    timeout: 6000,
	next:   '.s6', 
    delay:  -2000,
	random: true,
	pause:   1 
});
$('.s7').cycle({ 
    fx:     'scrollUp', 
    timeout: 5000,
	next:   '.s7', 
    delay:  -2000,
	pause:   1 
});
$('.mc').cycle({ 
    fx:    'scrollRight',
	next:   'h2', 
    delay: -2000,
	pause:   1 
});
$('.head').cycle({ 
fx:     'fade', 
    speed:   6000, 
    timeout: 1000,
	random: true,
    next:   '.head', 
    pause:   1
});
//Initialize first demo:
ddaccordion.init({
	headerclass: "hdr", //Shared CSS class name of headers group
	contentclass: "cnt", //Shared CSS class name of contents group
	revealtype: "mouseover", //Reveal content when user clicks or onmouseover the header? Valid value: "click", "clickgo", or "mouseover"
	mouseoverdelay: 200, //if revealtype="mouseover", set delay in milliseconds before header expands onMouseover
	collapseprev: true, //Collapse previous content (so only one open at any time)? true/false 
	defaultexpanded: [0], //index of content(s) open by default [index1, index2, etc]. [] denotes no content.
	onemustopen: false, //Specify whether at least one header should be open always (so never all headers closed)
	animatedefault: false, //Should contents open by default be animated into view?
	scrolltoheader: true, //scroll to header each time after it's been expanded by the user?
	persiststate: true, //persist state of opened contents within browser session?
	toggleclass: ["", "openhrd"], //Two CSS classes to be applied to the header when it's collapsed and expanded, respectively ["class1", "class2"]
	togglehtml: ["none", "", ""], //Additional HTML added to the header when it's collapsed and expanded, respectively  ["position", "html1", "html2"] (see docs)
	animatespeed: "fast", //speed of animation: integer in milliseconds (ie: 200), or keywords "fast", "normal", or "slow"
	oninit:function(expandedindices){ //custom code to run when headers have initalized
		//do nothing
	},
	onopenclose:function(header, index, state, isuseractivated){ //custom code to run whenever a header is opened or closed
		//do nothing
	}
})