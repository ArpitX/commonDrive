@extends('layouts.master')

@section('content')

@include('layouts.navbar')
@include('layouts.drawer')

<div class="inst-page">
    <h1 class="name">
        {{$institute->name}}
    </h1>
    <div class="create-subject">
        <h2>Add new subject</h2>
        @if(!Auth::check())
        <small>You need to sign in to create a subject folder.</small>
        @endif
        <form class="" action="/institutes/{{$institute->id}}/subject" method="post" >
            {{ csrf_field() }}
            <input type="text" name="subject" placeholder="Enter Subject Name" required>
            <button class="btn-default" type="submit">Create</button>
        </form>
    </div>
    <div class="subjects">
        <h2>Subjects</h2>
        @foreach ($subjects as $subject)
            <a href="/institutes/{{$institute->id}}/subject/{{$subject->id}}">{{$subject->name}}</a>
        @endforeach
    </div>
</div>

@include('layouts.footer')

@endsection
