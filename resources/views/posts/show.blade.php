@extends('layouts.app')
<div dir="rtl">
@section('content')
<h1><a href="{{route('posts.edit',$post->id)}}">{{$post->title}}</a></h1>

    <div>{{$post->content}}</div>
</div>
@endsection
