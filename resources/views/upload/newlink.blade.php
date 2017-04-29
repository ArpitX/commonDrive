@extends('layouts.master')

@section('content')

@include('layouts.navbar')
@include('layouts.drawer')

<div class="upload-success-page">
    <div class="header">
        Thank You Contributing to the commondrive :)
    </div>
    <a href="#" class="goback" onclick="history.go(-1)">Go back</a>
</div>

@include('layouts.footer')
@endsection
