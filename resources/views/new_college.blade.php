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

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-98115690-1', 'auto');
  ga('send', 'pageview');

</script>

@endsection
