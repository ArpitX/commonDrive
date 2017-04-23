<div class="drawer">

  <div class="drawer-handle" onclick="openDrawer()">
    <span></span>
  </div>

  <div class="drawer-space">
    @if(Auth::check())
        <a href="#" class="item username">{{ Auth::user()->name }}</a>
        <a href="/logout" class="item login">Log out</a>
    @else
        <a class="item" href="/register">SIGN UP</a>
        <a class="item" href="/login">LOG IN</a>
    @endif
  </div>

</div>
