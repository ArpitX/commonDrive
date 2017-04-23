@extends('layouts.master')

@section('content')

@include('layouts.navbar')

@include('layouts.drawer')

<div class="landing-page">
    <div class="name">
        Add your college
    </div>
    <div class="text">
        We would love to bring our service to your college. You just have to email details about your college to <a href="#">common@commondrive.xyz</a><br>
        We hope you enjoy common drive :)
    </div>

    @include('layouts.footer')
</div>

@include('layouts.landing_page_svg')


@endsection
