@extends('layouts.master')

@section('content')

@include('layouts.navbar')
@include('layouts.drawer')

<div class="login-page">
    <div class="header">
        <h1>Reset Password</h1>
    </div>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <div class="form">
        <form class="" action="/forgot-password" method="post">
            {{ csrf_field() }}
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email" class="control-label">E-Mail Address</label>
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                    @if ($errors->has('email'))
                        <div class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </div>
                    @endif
            </div>
            <div class="form-group">
                <button type="submit" class="btn-default">
                    Send Password Reset Link
                </button>
            </div>
        </form>
    </div>
</div>

@include('layouts.footer')

@include('layouts.landing_page_svg')

@endsection
