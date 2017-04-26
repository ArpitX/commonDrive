@extends('layouts.master')

@section('content')

@include('layouts.navbar')
@include('layouts.drawer')

<div class="register-page">
    <div class="header">
        <h1>Register</h1>
    </div>
    <div class="form">
        <form class="" action="/register" method="POST">
            {{ csrf_field() }}
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <label for="email" class="control-label">Name</label>
                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                    @if ($errors->has('name'))
                        <div class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </div>
                    @endif
            </div>
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email" class="control-label">E-Mail Address</label>
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                    @if ($errors->has('email'))
                        <div class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </div>
                    @endif
            </div>
            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="password" class="control-label">Password</label>
                <input id="password" type="password" class="form-control" name="password" required>
                    @if ($errors->has('password'))
                        <div class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </div>
                    @endif
            </div>
            <div class="form-group">
                <label for="password-confirm" class="control-label">Confirm Password</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn-default">
                    Register
                </button>
            </div>
        </form>
    </div>
</div>

@include('layouts.footer')

@include('layouts.landing_page_svg')

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-98115690-1', 'auto');
  ga('send', 'pageview');

</script>

@endsection
