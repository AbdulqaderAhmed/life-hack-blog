<nav class="transparent text-black">
  <!-- dropdown -->
  <ul id="userdropdown" class="dropdown-content">
      <li>
          <a href="{{route('user.logout')}}">
            Logout <i class="material-icons prefix">logout</i>
          </a>
      </li>
  </ul>
   <div class="nav-wrapper">
      <a href="#" class="brand-logo left">LifeHacks</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger right hide-on-med-and-up">
      <i class="material-icons">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-small-and-down">
         <li><a href="#">Home</a></li>
         <li><a href="#">Stories</a></li>
         <li><a href="#">About us</a></li>
         <li><a href="#">Contact us</a></li>
         <li>
             <a class="dropdown-trigger" href="#!"
                 data-target="userdropdown" >
                 <i class="material-icons">arrow_drop_down</i>
             </a>
         </li>
      </ul>
   </div>
</nav>

<ul class="sidenav" id="mobile-demo">
    <li><a href="#">Home</a></li>
    <li><a href="#">Stories</a></li>
    <li><a href="#">About us</a></li>
    <li><a href="#">Contact us</a></li>
</ul>