@extends('layouts.main')

@section('content')
    <h1 class = "text-3xl m-4 mt-6">
        All Posts
    </h1>
    @foreach($posts as $post)
        <div class="border-2 mx-4 my-1 px-8 py-2">
            <p>
                <a class="hover:text-blue-500" href="{{route('posts.show',['post'=>$post->id])}}">
                    {{$post->title}}
                </a>
            </p>
        </div>
    @endforeach
@endsection
