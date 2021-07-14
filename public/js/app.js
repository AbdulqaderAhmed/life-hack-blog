
document.addEventListener("DOMContentLoaded", function(){
   var elem = document.querySelectorAll(".dropdown-trigger");
   var inst = M.Dropdown.init(elem, {alignment: "right"});
});

document.addEventListener("DOMContentLoaded", function(){
   var elem = document.querySelectorAll(".sidenav");
   var inst = M.Sidenav.init(elem, {edge: "left"});
});

document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.parallax');
    var instances = M.Parallax.init(elems, {});
});

//back to top button
var mybutton = document.getElementById("mybtn");

window.onscroll = function(){
    scrollFunction()
  };
 
 function scrollFunction() {
 	if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
 		mybutton.style.display = "block";
 	} else {
 		mybutton.style.display = "none";
 	}
 }
 
 function toTop() {
 	document.body.scrollTop = 0; // For Safari
 	document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
 }