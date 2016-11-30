@extends('layout.layouts')

@section('title','create-compete')

@section('style')
    <!-- 日期选择 -->
    <link rel="stylesheet" href= {{ asset('datepicker/css/datepicker.css') }}>
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

        <section id="section-new-compete">
            <!--新增竞赛-->
            <div class="row">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">发起竞赛</h4>
                            <p class="category">请输入竞赛信息</p>
                        </div>

                        <div class="card-content">
                            <form action="{{ url('competition') }}" method="POST">
                            {!! csrf_field() !!}

                                <!--类别-->
                                <div class="row">
                                    <label class="col-sm-1 control-label">类别</label>

                                    <div class="col-sm-2">
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="type">
                                                个人赛
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-sm-2">
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="type">
                                                团体赛
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <!--目标-->
                                <div class="row">
                                    <label class="col-sm-1 control-label">目标</label>
                                    <div class="col-sm-2">
                                        <input type="text" name="target">
                                    </div>
                                </div>

                                <!-- 起止时间 -->
                                <div class="row">

                                    <div class="col-sm-1">
                                        <div style="display: inline-block">
                                            <label class="control-label" for="dpd1">开始 </label>
                                        </div>
                                    </div>

                                    <div class="col-sm-2">
                                        <div style="display: inline-block">
                                            <input type="text" id="dpd1" name="startAt">
                                        </div>
                                    </div>

                                    <div class="col-sm-1 col-sm-offset-1">
                                        <div style="display: inline-block">
                                            <label class="control-label" for="dpd2">结束 </label>
                                        </div>
                                    </div>

                                    <div class="col-sm-2">
                                        <div style="display: inline-block">
                                            <input type="text" id="dpd2" name="endAt">
                                        </div>
                                    </div>

                                </div>

                                {{--<!--竞赛介绍行-->--}}
                                {{--<div class="row">--}}
                                    {{--<div class="col-md-12">--}}
                                        {{--<div class="form-group">--}}
                                            {{--<div class="form-group label-floating">--}}
                                                {{--<label class="control-label"> 竞赛介绍</label>--}}
                                                {{--<textarea class="form-control" rows="5" name="target"></textarea>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}

                                <input type="text" name="name" class="form-control" required="required" placeholder="竞赛名称">

                                <input type="text" name="bonus" class="form-control" required="required" placeholder="奖励">

                                <input type="text" name="number" class="form-control" required="required" placeholder="总人数">

                                <input type="text" name="rule" class="form-control" required="required" placeholder="规则">

                                <input type="text" name="rulemore" class="form-control" required="required" placeholder="规则详情">


                                <button type="submit" class="btn btn-primary pull-left">
                                    新建竞赛</button>
                                <button type="submit" class="btn btn-default pull-left">
                                    取消</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop


@section('javascript')

    <!--  Plugin for the Datepicker-->
    <script src= {{ asset('datepicker/js/bootstrap-datepicker.js') }} type="text/javascript"></script>

    <script>
        var nowTemp = new Date();
        var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

        var checkin = $('#dpd1').datepicker({
            onRender: function(date) {
                return date.valueOf() < now.valueOf() ? 'disabled' : '';
            }
        }).on('changeDate', function(ev) {
            if (ev.date.valueOf() > checkout.date.valueOf()) {
                var newDate = new Date(ev.date)
                newDate.setDate(newDate.getDate() + 1);
                checkout.setValue(newDate);
            }
            checkin.hide();
            $('#dpd2')[0].focus();
        }).data('datepicker');
        var checkout = $('#dpd2').datepicker({
            onRender: function(date) {
                return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : '';
            }
        }).on('changeDate', function(ev) {
            checkout.hide();
        }).data('datepicker');
    </script>


@stop