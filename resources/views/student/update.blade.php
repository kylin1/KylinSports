@extends('common.layouts')
@section('title','update')

@section('content')
<!-- 自定义内容区域 -->
<div class="panel panel-default">
    <div class="panel-heading">修改数据</div>
    @include('student.form')
</div>
@stop