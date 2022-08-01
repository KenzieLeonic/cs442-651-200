@extends('layouts.main')
@section('content')
    <h1 class="text-3xl">
        {{$post->title}}
    </h1>
    <div>
        {{$post->live_count}} live |
        {{$post->view_count}} views
    </div>
    <p class="p-2">
        {{$post->description}}
    </p>
    <div>
        <a href="{{route('posts.edit',['post'=>$post->id])}}">Edit this post</a>
    </div>
@endsection
