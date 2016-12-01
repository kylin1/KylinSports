@extends('layout.layouts')

@section('title','运动统计')

@section('style')
@stop

@section('left-menu')
    @include('menu.sport')
@stop


@section('top-left-menu')

    <ul class="nav mynav-top navbar-nav navbar-left">

        <li class="active" my-target="section-sport">

            <a href="#" id="nav-sport-sport">
                运动
            </a>
        </li>

        <li my-target="section-sleep">
            <a href="#" id="nav-sport-sleep">
                睡眠
            </a>
        </li>
        <li my-target="section-health">
            <a href="#" id="nav-sport-health">
                健康数据
            </a>
        </li>
    </ul>

@stop


@section('content')
    <div class="container-fluid container-sharing">

        <section id="section-sport">

            <div class="row">
                <div class="col-md-8">
                    <h2>运动统计</h2>
                </div>
                <div class="col-md-4">
                    <h2>数据分析</h2>
                </div>
            </div>

            <!--步数统计-->
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header card-chart" data-background-color="orange">
                            <div class="ct-chart" id="stepsBarChart"></div>
                        </div>
                        <div class="card-content">
                            <div class="row">
                                <div class="col-sm-4">
                                    <h4 class="title">步数统计 (步数)</h4>
                                </div>

                            </div>

                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                日平均值:3000
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <!--对跑步次数进行分析-->
                    <div class="row">

                        <div class="card card-stats">
                            <div class="card-header" data-background-color="green">
                                <i class="material-icons">sentiment_satisfied</i>
                            </div>
                            <div class="card-content">
                                <p class="category">步数分析</p>
                                <p>
                                    最近几天您行走的步数持续增加,贯彻了健康的"少坐多动"原则,有利于保持身体健康!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--心率统计-->
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header card-chart" data-background-color="red">
                            <div class="ct-chart" id="heartRateChart"></div>
                        </div>
                        <div class="card-content">

                            <div class="row">
                                <div class="col-sm-4">
                                    <h4 class="title">心率统计 (次/分钟)</h4>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">

                        <div class="card card-stats">
                            <div class="card-header" data-background-color="orange">
                                <i class="material-icons">sentiment_neutral</i>
                            </div>
                            <div class="card-content">
                                <p class="category">心率分析</p>
                                <p>
                                    你在空闲时的平均心率为80,属于良好范围,但一周之内心率上下波动较大,
                                    也许是工作压力较大所致,请平时注意放松呦~
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--跑步历史-->
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header card-chart" data-background-color="blue">
                            <div class="ct-chart" id="runLineChart"></div>
                        </div>
                        <div class="card-content">
                            <h4 class="title">跑步历史</h4>
                            <p class="category"></p>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">access_time</i> campaign sent 2 days ago
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <!--对跑步次数进行分析-->
                    <div class="row">

                        <div class="card card-stats">
                            <div class="card-header" data-background-color="green">
                                <i class="material-icons">sentiment_satisfied</i>
                            </div>
                            <div class="card-content">
                                <p class="category">运动分析</p>
                                <p>
                                    最近一周,您跑步5次,平均每次跑步4公里,保持了很健康的锻炼习惯,请继续坚持!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </section>

        <section id="section-sleep" class="init-hide">
            <div class="row">
                <div class="col-md-8">
                    <h2>睡眠统计</h2>
                </div>
                <div class="col-md-4">
                    <h2>详细数据</h2>
                </div>
            </div>
            <div class="row">
                <!-- 睡眠时间柱状图 -->
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header card-chart" data-background-color="purple">
                            <div class="ct-chart" id="sleepBarChart"></div>
                        </div>
                        <div class="card-content">
                            <h4 class="title">睡眠时间</h4>
                        </div>
                    </div>
                </div>
                <!-- 详细睡眠数据列表 -->
                <div class="col-md-4">
                    <!-- 本周睡眠列表 -->
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">本周</h4>
                            <p class="category">平均时间：7小时25分</p>
                        </div>
                        <div class="card-content table-responsive table-full-width">
                            <table class="table">
                                <thead class="text-primary">
                                <th>日期</th>
                                <th>入睡时间</th>
                                <th>起床时间</th>
                                <th>时长</th>
                                </thead>
                                <tbody>

                                @foreach($sleepDetail as $oneDay)
                                <tr>
                                    <td>{{ $oneDay[0] }}</td>
                                    <td>{{ $oneDay[1] }}:00</td>
                                    <td>{{ $oneDay[2] }}:00</td>
                                    <td>{{ $oneDay[3] }}小时</td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="section-health" class="init-hide">
            <h2>健康数据</h2>
            <div class="row">
                <!--体重图表-->
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header card-chart" data-background-color="orange">
                            <div class="ct-chart" id="weightChart"></div>
                        </div>
                        <div class="card-content">
                            <h4 class="title">体重追踪</h4>
                            <p class="category"></p>
                        </div>
                    </div>
                </div>
                <!--目标与详情-->
                <div class="col-md-4">
                    <div class="row">
                        <div class="card card-stats">
                            <div class="card-header" data-background-color="red">
                                <i class="material-icons">my_location</i>
                            </div>
                            <div class="card-content">
                                <p class="category">体重目标</p>
                                <p>
                                    自从3月以来,您的体重有所上升,距离减肥目标还有3KG,需要继续努力!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!--体脂图表-->
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header card-chart" data-background-color="red">
                            <div class="ct-chart" id="fatChart"></div>
                        </div>
                        <div class="card-content">
                            <h4 class="title">体脂含量</h4>
                            <p class="category"></p>
                        </div>
                    </div>
                </div>
                <!--目标与详情-->
                <div class="col-md-4">
                    <div class="row">
                        <div class="card card-stats">
                            <div class="card-header" data-background-color="green">
                                <i class="material-icons">my_location</i>
                            </div>
                            <div class="card-content">
                                <p class="category">体脂目标</p>
                                <p>
                                    体脂比率保持在18-20%左右,达到目标,做得漂亮!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

    </div>

@stop


@section('javascript')
    <script>

        var DrawChart = (function() {

            var responsiveOptions = [
                ['screen and (max-width: 640px)', {
                    seriesBarDistance: 5,
                    axisX: {
                        labelInterpolationFnc: function (value) {
                            return value[0];
                        }
                    }
                }]
            ];

            return {
                createLineChart: function (id, data, high, low, yValue) {

                    var options = {
                        high:high,
                        low:low,
                        axisX: {
                            showGrid: false
                        },

                        axisY: {
                            labelInterpolationFnc: function(value) {
                                return value + yValue;
                            }
                        },

                        chartPadding: { top: 0, right: 15, bottom: 0, left: 20}
                    };

                    var runLineChart = Chartist.Bar(document.getElementById(id), data, options, responsiveOptions);
                    md.startAnimationForBarChart(runLineChart);
                },

                createBarChart: function (id, data,high, low, yValue) {

                    var options = {
                        high:high,
                        low:low,
                        axisX: {
                            showGrid: false
                        },

                        axisY: {
                            labelInterpolationFnc: function(value) {
                                return value + yValue;
                            }
                        },

                        chartPadding: { top: 0, right: 15, bottom: 0, left: 20}
                    };

                    var sleepBarChart = Chartist.Bar(document.getElementById(id), data, options, responsiveOptions);
                    md.startAnimationForBarChart(sleepBarChart);
                }
            }
        })();

    </script>

    <script>
        function drawChart() {
            var dataStepsBar ={!! $dataStepsBar !!};
            DrawChart.createBarChart('stepsBarChart',dataStepsBar,20000,0,'');
            var dataHeartChart ={!! $dataHeartChart !!};
            DrawChart.createBarChart('heartRateChart',dataHeartChart,100,60,'');

            var dataRunLineChart ={!! $dataRunLineChart !!};
            DrawChart.createLineChart('runLineChart',dataRunLineChart,10,0,'km');

            var dataSleepBar ={!! $dataSleepBar !!};
            DrawChart.createBarChart('sleepBarChart',dataSleepBar,10,5,'h');

            var dataWeightChart ={!! $dataWeightChart !!};
            DrawChart.createLineChart('weightChart',dataWeightChart,70,50,'kg');
            var dataFatChart ={!! $dataFatChart !!};
            DrawChart.createLineChart('fatChart',dataFatChart,30,10,'%');
        }
    </script>

    <!--导航栏控制-->
    <script>
        $(document).ready(function () {
            {{--首次加载,绘制图表--}}
             drawChart();
            //上部导航栏点击li元素
            $('ul.mynav-top > li').click(function (event) {
                // 只有被点击的导航li被显示active
                $('ul.mynav-top > li').removeClass('active');
                $(this).addClass('active');

                // 显示对应部分的内容
                $('div.container-sharing > section').hide();

                //更新图表信息
                drawChart();
                var target = '#' + this.getAttribute('my-target');
                $(target).show();
            });
        });
    </script>
@stop
