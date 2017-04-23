@extends('layouts.master')

@section('content')

@include('layouts.navbar')
@include('layouts.drawer')

<div class="inst-index-page">
    <h1>Colleges</h1>
    @foreach ($institutes as $institute)
        <a href="/inst/{{$institute->id}}">{{$institute->name}}</a><br>
    @endforeach
</div>

@include('layouts.footer')
@endsection
