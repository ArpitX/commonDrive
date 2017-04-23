<div class="navbar">

    <div class="name">
        <a href="/">COMMON DRIVE</a>
    </div>
    <div class="items">
        @if(Auth::check())
            <a href="/logout" class="">Log out</a>
            <a href="#" class="username">{{ Auth::user()->name }}</a>
        @else
        <a href="/register" class="signup">SIGN UP</a>
        <a href="/login" class="login">LOG IN</a>
        @endif
    </div>

</div>
