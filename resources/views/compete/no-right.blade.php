@extends('layout.layouts')

@section('title','竞赛-没有权限!')

@section('style')
    <!-- 日期选择 -->
    <link rel="stylesheet" href= {{ asset('datepicker/css/datepicker.css') }}>
@stop

@section('left-menu')
    @include('menu.compete')
@stop

@section('top-left-menu')
    <ul class="nav mynav-top navbar-nav navbar-left">
        <li>
            <a  href="{{ url('/competition') }}">
                返回
            </a>
        </li>
    </ul>
@stop

@section('top-left-menu')
    <ul class="nav mynav-top navbar-nav navbar-left">
        <li my-target="section-all-compete">
            <a href="{{ url('/competition') }}">
                所有竞赛
            </a>
        </li>

        <li my-target="section-my-compete">
            <a href="{{ url('/my-competition') }}">
                我的竞赛
            </a>
        </li>

        <li my-target="section-new-compete" class="active">
            <a href="{{ url('/competition/create') }}">
                新增竞赛
            </a>
        </li>
    </ul>
@stop

@section('content')
    <div class="container-fluid container-sharing">
        <h2>
            抱歉,您的等级是1,
            <br>
            只有运动等级大于2的用户才有权限创建竞赛哟~
            <br>
            您可以选择加入其它的竞赛!
        </h2>
    </div>
@stop

