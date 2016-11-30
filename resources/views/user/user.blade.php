@extends('layout.layouts')

@section('title','user')

@section('style')
    <!-- 日期选择 -->
    <link rel="stylesheet" href= {{ asset('datepicker/css/datepicker.css') }}>
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

                        <form action="{{ url('user') }}" method="POST">

                            {!! csrf_field() !!}
                            <!--名称行-->
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group label-floating">
                                        <label class="control-label">姓名</label>
                                        <input name="name" type="text" class="form-control" value="{{ $thisUser->name }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group label-floating">
                                        <label class="control-label">昵称</label>
                                        <input name="nickname" type="text" class="form-control" value="{{ $thisUser->nickname }}">
                                    </div>
                                </div>
                            </div>

                            <!--性别行-->
                            <div class="row">
                                <label class="col-sm-1 control-label">性别</label>

                                {{--从控制器返回的一个实例中获取SEX的键值对,以便显示--}}
                                @foreach($thisUser->sex() as $id=>$value)
                                <div class="col-sm-1">
                                    <label class="radio-inline">
                                        {{--赋值给一个数组,数值为性别--}}
                                        <input type="radio" name="sex"
                                               {{--如果性别已经有了,则标记为点击--}}
                                               {{ isset($thisUser->sex) && $thisUser->sex == $value ?
                                               'checked' : ''  }}
                                               value="{{ $value }}">
                                        {{ $value }}
                                    </label>
                                </div>
                                @endforeach

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
                                                <input name="birthday" type="text" id="date"
                                                       value="{{ $thisUser->birthday }}" >
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
                                            <textarea name="introduction" class="form-control" rows="5">{{ $thisUser->introduction }}</textarea>
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
        $('#date').datepicker({
            format: 'yyyy-mm-dd'
        });
    </script>
@stop