@extends('layout.layouts')

@section('title','user')

@section('style')
    <!-- 日期选择 -->
    <link rel="stylesheet" href= {{ asset('datepicker/css/datepicker.css') }}>
@stop

@section('left-menu')
    @include('menu.empty')
@stop

@section('top-right-menu')
    <div class="collapse navbar-collapse" id="example-navbar-primary">

        <ul class="nav navbar-nav navbar-right">

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="material-icons">notifications</i>
                    <span class="notification">3</span>
                    <p class="hidden-lg hidden-md">Notifications</p>
                    消息
                </a>
                <ul class="dropdown-menu">
                    <li><a href="#">一只麟请求加您为好友</a></li>
                    <li><a href="#">您的今日目标还未达到,要加油啦~</a></li>
                    <li><a href="#">竞赛:"7日100公里"即将结束,请抓紧时间上传数据</a></li>
                </ul>
            </li>

            <li class="active">
                <a href= {{ url('/user') }}>
                    <i class="material-icons">account_circle</i>
                    账户
                </a>
            </li>

            <li>
                <a href="{{ url('/logout') }}">
                    <i class="material-icons">arrow_back</i>
                    退出
                </a>
            </li>
        </ul>
    </div>
@stop

@section('content')
    <div class="container-fluid">

        <!--第一部分:个人信息的修改-->
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" data-background-color="purple">
                        <h4 class="title">个人资料</h4>
                        <p class="category"></p>
                    </div>
                    <div class="card-content">
                        <form>
                            <!--名称行-->
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group label-floating">
                                        <label class="control-label">姓名</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group label-floating">
                                        <label class="control-label">昵称</label>
                                        <input type="text" class="form-control" >
                                    </div>
                                </div>
                            </div>

                            <!--性别行-->
                            <div class="row">
                                <label class="col-sm-1 control-label">性别</label>

                                <div class="col-sm-1">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsRadios">
                                            男
                                        </label>
                                    </div>
                                </div>

                                <div class="col-sm-1">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsRadios">
                                            女
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row">

                                        <div class="col-sm-2">
                                            <div style="display: inline-block">
                                                <label class="control-label" for="date">生日</label>
                                            </div>
                                        </div>

                                        <div class="col-sm-2">
                                            <div style="display: inline-block">
                                                <input type="text" id="date">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-2 control-label">兴趣</label>
                                <div class="col-sm-2">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="optionsCheckboxes">
                                            跑步
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="optionsCheckboxes">
                                            游泳
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="optionsCheckboxes">
                                            骑行
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="optionsCheckboxes">
                                            登山
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="form-group label-floating">
                                            <label class="control-label">个人简介</label>
                                            <textarea class="form-control" rows="5"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary pull-left">
                                保存</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>



    </div>
@stop


@section('javascript')
    <!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
    <script src= {{ asset('datepicker/js/bootstrap-datepicker.js') }} ></script>

    <script>
        $('#date').datepicker();
    </script>
@stop