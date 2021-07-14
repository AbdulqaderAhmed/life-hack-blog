//$(".data-trigger").dropdown();

document.addEventListener("DOMContentLoaded", function(){
   var elem = document.querySelectorAll(".dropdown-trigger");
   var inst = M.Dropdown.init(elem, {alignment: "right"});
});

document.addEventListener("DOMContentLoaded", function(){
   var elem = document.querySelectorAll(".sidenav");
   var inst = M.Sidenav.init(elem, {edge: "right"});
});

document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.parallax');
    var instances = M.Parallax.init(elems, {});
});