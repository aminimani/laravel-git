@extends('layouts.app')

@section('content')
<div dir="rtl">
{{--    @if(\Illuminate\Support\Facades\Auth::user()->can('update',$psot)) روش پالیسی با if --}}
      @can('update',$post)
    {!! Form::model($post,['method'=>'PATCH','action'=>['PostsController@update',$post->id]]) !!}
        <div class="form-group">
            {!! Form::label('title',':عنوان') !!}
            {!! Form::text('title',$post->title,['class'=>'form-control']) !!}
        </div>
    <div class="form-group">
        {!! Form::label('description','متن:') !!}
        {!! Form::textarea('description',$post->content,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('آپدیت',['class'=>'btn btn-warning']) !!}
    </div>
    {!! Form::close() !!}

    {!! Form::model($post,['method'=>'DELETE','action'=>['PostsController@destroy',$post->id]]) !!}
        <div class="form-group">
            {!! Form::submit('حذف',['class'=>'btn btn-danger']) !!}
        </div>
    {!! Form::close() !!}
          @endcan
{{--        @endif--}}
</div>









{{--    <form action="/posts/{{$post->id}}" method="post">--}}
{{--        <h3>ویرایش فرم</h3>--}}
{{--        @csrf--}}
{{--        <input type="hidden" name="_method" value="patch">--}}
{{--        <input type="text" placeholder="اطلاعات را وارد کنید" name="title" value="{{$post->title}}"><br>--}}
{{--        <textarea type="text" name="description" placeholder="متن">{{$post->content}}</textarea><br>--}}
{{--        <button type="submit" name="submit">بروز رسانی</button>--}}
{{--    </form>--}}

{{--    <form action="/posts/{{$post->id}}" method="post">--}}
{{--        <h3>ویرایش فرم</h3>--}}
{{--        @csrf--}}
{{--        <input type="hidden" name="_method" value="DELETE">--}}
{{--        <button type="submit" name="submit">حذف </button>--}}
{{--    </form>--}}

@endsection
