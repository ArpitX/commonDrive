@extends('layouts.master')

@section('content')

@include('layouts.navbar')

@include('layouts.drawer')

<div class="landing-page">
    <div class="name">
        COMMON DRIVE
    </div>
    <div class="text">
        Common drive is a notes pooling platform where students can upload or download any type of study material.

    </div>
    <div class="select-inst">

        <div>SELECT YOUR COLLEGE</div>
        <select name="instlist" form="instform">
        @foreach ($institutes as $institute)
            <option value="{{$institute->id}}">{{$institute->name}}</option>
        @endforeach
        <option value="new-institute">Add your college</option>
        </select>
        <form class="" id="instform" action="/inst" method="post">
            {{ csrf_field() }}
            <button type="submit">GO</button>
        </form>

    </div>

    @include('layouts.footer')

</div>

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
