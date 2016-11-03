@extends('layout.layouts')

@section('title','竞赛3')

@section('style')
    <!-- 日期选择 -->
    <link rel="stylesheet" href= {{ asset('datepicker/css/datepicker.css') }}>
@stop

@section('top-left-menu')
<ul class="nav mynav-top navbar-nav navbar-left">
    <li class="active" my-target="section-all-compete">
        <a href="#">
            所有竞赛
        </a>
    </li>
    <li my-target="section-my-compete">
        <a href="#">
            我的竞赛
        </a>
    </li>
    <li my-target="section-new-compete">
        <a href="#">
            新增竞赛
        </a>
    </li>
</ul>
@stop

@section('content')
    <!--我的竞赛列表-->
    <div class="container-fluid container-sharing">

        <section id="section-all-compete">

            <!--所有竞赛列表-->
            <h2>竞赛列表</h2>
            <div class="row">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <div class="row">
                                <div class="col-md-8">
                                    <h4 class="title">你的第一个半马</h4>
                                    <p class="category">目标:跑步距离达到20公里</p>
                                </div>
                                <div class="col-md-2">
                                    <button class="btn btn-info"
                                            onclick=window.location.href="compete-detail.html";>详情</button>
                                </div>
                                <div class="col-md-2">
                                    <button class="btn btn-success">加入</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-content table-responsive">
                            <table class="table">
                                <thead class="text-primary">
                                <th>人数</th>
                                <th>类型</th>
                                <th>奖励</th>
                                <th>距离开始时间</th>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>20/24</td>
                                    <td>个人赛</td>
                                    <td>3000金币</td>
                                    <td>3天 2小时</td>
                                </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <div class="row">
                                <div class="col-md-8">
                                    <h4 class="title">你的第一个半马</h4>
                                    <p class="category">目标:跑步距离达到20公里</p>
                                </div>
                                <div class="col-md-2">
                                    <button class="btn btn-info" onclick=window.location.href="compete-detail.html";>详情</button>
                                </div>
                                <div class="col-md-2">
                                    <button class="btn btn-success">加入</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-content table-responsive">
                            <table class="table">
                                <thead class="text-primary">
                                <th>人数</th>
                                <th>类型</th>
                                <th>奖励</th>
                                <th>距离开始时间</th>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>20/24</td>
                                    <td>个人赛</td>
                                    <td>3000金币</td>
                                    <td>3天 2小时</td>
                                </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <div class="row">
                                <div class="col-md-8">
                                    <h4 class="title">你的第一个半马</h4>
                                    <p class="category">目标:跑步距离达到20公里</p>
                                </div>
                                <div class="col-md-2">
                                    <button class="btn btn-info" onclick=window.location.href="compete-detail.html";>详情</button>
                                </div>
                                <div class="col-md-2">
                                    <button class="btn btn-success">加入</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-content table-responsive">
                            <table class="table">
                                <thead class="text-primary">
                                <th>人数</th>
                                <th>类型</th>
                                <th>奖励</th>
                                <th>距离开始时间</th>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>20/24</td>
                                    <td>个人赛</td>
                                    <td>3000金币</td>
                                    <td>3天 2小时</td>
                                </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section id="section-my-compete" class="init-hide">
            <h2>我发起的</h2>
            <div class="row">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <div class="row">
                                <div class="col-md-8">
                                    <h4 class="title">我发起的竞赛</h4>
                                    <p class="category">目标:跑步距离最快达到10公里</p>
                                </div>
                                <div class="col-md-2">
                                    <button class="btn btn-info">修改</button>
                                </div>
                                <div class="col-md-2">
                                    <button class="btn btn-warning">取消</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-content table-responsive">
                            <table class="table">
                                <thead class="text-primary">
                                <th>人数</th>
                                <th>类型</th>
                                <th>奖励</th>
                                <th>距离开始时间</th>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>20/24</td>
                                    <td>个人赛</td>
                                    <td>3000金币</td>
                                    <td>3天 2小时</td>
                                </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>

            <h2>我参与的</h2>
            <div class="row">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <div class="row">
                                <div class="col-md-8">
                                    <h4 class="title">一个竞赛</h4>
                                    <p class="category">目标:跑步距离最快达到10公里</p>
                                </div>
                                <div class="col-md-2">
                                    <button class="btn btn-info" onclick=window.location.href="compete-detail.html";>详情</button>
                                </div>
                                <div class="col-md-2">
                                    <button class="btn btn-warning">退出</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-content table-responsive">
                            <table class="table">
                                <thead class="text-primary">
                                <th>人数</th>
                                <th>类型</th>
                                <th>奖励</th>
                                <th>状态</th>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>20/24</td>
                                    <td>个人赛</td>
                                    <td>3000金币</td>
                                    <td>即将开始</td>
                                </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>

            <h2>历史竞赛</h2>
            <div class="row">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <div class="row">
                                <div class="col-md-8">
                                    <h4 class="title">一个竞赛</h4>
                                    <p class="category">目标:跑步距离最快达到10公里</p>
                                </div>
                                <div class="col-md-2 col-md-offset-2">
                                    <button class="btn btn-info" onclick=window.location.href="compete-detail.html";>详情</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-content table-responsive">
                            <table class="table">
                                <thead class="text-primary">
                                <th>人数</th>
                                <th>类型</th>
                                <th>时间</th>
                                <th>收获奖金</th>
                                <th>是否获胜</th>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>20/24</td>
                                    <td>个人赛</td>
                                    <td>2016-10-10至2016-10-13</td>
                                    <td>1000</td>
                                    <td>是</td>
                                </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <div class="row">
                                <div class="col-md-8">
                                    <h4 class="title">一个竞赛</h4>
                                    <p class="category">目标:跑步距离最快达到10公里</p>
                                </div>
                                <div class="col-md-2 col-md-offset-2">
                                    <button class="btn btn-info" onclick=window.location.href="compete-detail.html";>详情</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-content table-responsive">
                            <table class="table">
                                <thead class="text-primary">
                                <th>人数</th>
                                <th>类型</th>
                                <th>时间</th>
                                <th>收获奖金</th>
                                <th>是否获胜</th>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>20/24</td>
                                    <td>个人赛</td>
                                    <td>2016-10-10至2016-10-13</td>
                                    <td>1000</td>
                                    <td>是</td>
                                </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>

        </section>

        <section id="section-new-compete" class="init-hide">
            <!--新增竞赛-->
            <div class="row">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">发起竞赛</h4>
                            <p class="category">请输入竞赛信息</p>
                        </div>

                        <div class="card-content">
                            <form>

                                <!--类别-->
                                <div class="row">
                                    <label class="col-sm-1 control-label">类别</label>

                                    <div class="col-sm-2">
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="optionsRadios">
                                                个人赛
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-sm-2">
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="optionsRadios">
                                                团体赛
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <!--目标-->
                                <div class="row">
                                    <label class="col-sm-1 control-label">目标</label>
                                    <div class="col-sm-2">
                                        <input type="email">
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
                                            <input type="text" id="dpd1">
                                        </div>
                                    </div>

                                    <div class="col-sm-1 col-sm-offset-1">
                                        <div style="display: inline-block">
                                            <label class="control-label" for="dpd2">结束 </label>
                                        </div>
                                    </div>

                                    <div class="col-sm-2">
                                        <div style="display: inline-block">
                                            <input type="text" id="dpd2">
                                        </div>
                                    </div>

                                </div>

                                <!--竞赛介绍行-->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="form-group label-floating">
                                                <label class="control-label"> 竞赛介绍</label>
                                                <textarea class="form-control" rows="5"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

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

    <script>
        $(document).ready(function () {
            //上部导航栏点击li元素
            $('ul.mynav-top > li').click(function (event) {
                // 只有被点击的导航li被显示active
                $('ul.mynav-top > li').removeClass('active');
                $(this).addClass('active');

                // 显示对应部分的内容
                $('div.container-sharing > section').hide();
                var target = '#' + this.getAttribute('my-target');
                $(target).show();
            });
        });
    </script>

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

