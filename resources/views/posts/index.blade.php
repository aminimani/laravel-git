@extends('layouts.app')

@section('content')
    <ul dir="rtl">

        @foreach($posts as $post)
            <div class="image-container">
                <img src="{{$post->path}}" alt="post_image" class="img-responsive" height="100">
            </div>
        <li>
            <a href="{{route('posts.show',$post->id)}}">{{$post->title}}</a>
            <span> {{ $post->user->name }} </span>
        </li>

        @endforeach
    </ul>


@endsection
