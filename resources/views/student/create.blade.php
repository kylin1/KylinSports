@extends('common.layouts')

@section('title','create')

@section('content')

    {{--包含错误提示信息--}}
    {{--@include('common.validate')--}}

    <!-- 自定义内容区域 -->
    <div class="panel panel-default">
        <div class="panel-heading">新增学生</div>
        @include('student.form')
    </div>

@stop