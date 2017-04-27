@extends('layouts.master')

@section('content')

@include('layouts.navbar')
@include('layouts.drawer')

<div class="all-institutes-page">
    <h1>Colleges Registered</h1>
    <div class="institutes">
    	@foreach ($institutes as $institute)
        <a href="/institutes/{{$institute->id}}">{{$institute->name}}</a><br>
    @endforeach
    </div>
    <a class="add-college" href="/new-institute">Add your college</a>
</div>

@include('layouts.footer')
@endsection
