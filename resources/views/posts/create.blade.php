@extends('layouts.app')

@section('content')
<div dir="rtl">
    @if($errors->any())
        <ul>
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                {{$error}}<br>
            @endforeach

        </div>
        </ul>
    @endif

    {!! Form::open(['method'=>'POST','action'=>'PostsController@store','files'=>true]) !!}
        <div class="form-group" dir="rtl">
            {!! Form::label('title','عنوان:') !!}
            {!! Form::text('title',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('description','توضیحات:') !!}
            {!! Form::textarea('description',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! form::label('file','فایل:') !!}
            {!! form::file('file',['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('ذخیره',['class'=>'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}
</div>
{{--    <form action="/posts" method="post">--}}
{{--    @csrf--}}

{{--        <textarea type="text" name="description" placeholder="عنوان"></textarea><br>--}}
{{--        <button type="submit" name="submit">ذخیره</button>--}}
{{--    </form>--}}

@endsection
