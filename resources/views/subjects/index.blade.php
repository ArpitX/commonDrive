@extends('layouts.master')

@section('content')

@include('layouts.navbar')
@include('layouts.drawer')

<div class="subject-page">
    <h3>{{$inst[0]->name}}</h3>
    <h1>{{ $subject[0]->name }}</h1>
    <div class="upload">
        <h2>Upload files</h2>
        @if(!Auth::check())
        <small>You need to sign in to upload any file.</small>
        @endif
        <form class="" action="/institutes/{{$inst[0]->id}}/subject/{{$subject[0]->id}}/upload" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="text" name="name" placeholder="Enter file name" required>
            <input type="file" name="newfile" required>
            <button class="btn-default" type="submit">Upload</button>
        </form>
    </div>
    <small>Max file size is 50M</small>
    <div class="files">
        <h2>Study Material</h2>
        @foreach ($files as $file)
            <div class="file">
                <p>{{$file->name}}</p>
                <a href="{{$file->location}}" role="button" download>Download</a>
                <small>Uploaded by <a href="">{{ $file->username }}</a></small>
            </div>
        @endforeach
    </div>

</div>

@include('layouts.footer')
@endsection
