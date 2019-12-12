@extends('layouts.app')

@section('content')

{{--    <h1>{{__('message.welcome',['name'=>'امین'])}}</h1>--}}
{{--    <h1>{{trans('message.welcome',['name'=>'امین'])}}</h1>--}}
    <h1>@lang('message.welcome',['name'=>'امین'])</h1>
    <h1>{{trans_choice('message.cars',10,['value'=>10])}}</h1>
@endsection
